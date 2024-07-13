<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicantNotification;

use App\Mail\InterviewAssigned;
use App\Mail\FailedAssigned;
use App\Mail\NoShowAssigned;
use App\Mail\NotQualifiedAssigned;
use App\Mail\PoolingAssigned;
class HiringController extends Controller
{
    public function searchApplications(Request $request)
    {
        $query = $request->input('query');

        $applications = Application::query()
            ->where('id', 'like', "%$query%")
            ->orWhere('name', 'like', "%$query%")
            ->orWhere('email', 'like', "%$query%")
            ->orWhere('address', 'like', "%$query%")
            ->orWhere('status', 'like', "%$query%")
            ->orWhere('position', 'like', "%$query%")
            ->orWhere('message', 'like', "%$query%")
            ->orWhere('phone', 'like', "%$query%")
            ->get();

        return response()->json($applications);
    }

    public function applications()
    {
        $applications = Application::all();
        return view('admin.hiring', ['applications' => $applications]);
    }
    public function calendar()
    {
        $interviews = Application::whereNotNull('date')->get(['id', 'full_name', 'date']);
        return view('admin.calendar', ['interviews' => $interviews]);
    }

    public function submitApplication(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'address' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'position' => 'nullable|string|max:255',
        'message' => 'nullable|string',
        'resume' => 'required|file|mimes:pdf,doc,docx|max:2048', // Example mime types and max file size
    ]);

    // Handle file upload (resume)
    $resumeName = time() . '_' . $request->file('resume')->getClientOriginalName();
    $request->file('resume')->move(public_path('hiring'), $resumeName);

    // Save application data to database
    $application = new Application();
    $application->name = $request->name;
    $application->email = $request->email;
    $application->address = $request->address;
    $application->phone = $request->phone;
    $application->position = $request->position;
    $application->message = $request->message;
    $application->resume = 'hiring/' . $resumeName;
    $application->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Your application has been submitted successfully!');
}
public function sendEmail(Request $request)
    {
        // Validate request inputs
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
        ]);

        // Retrieve inputs from the validated request
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');

        // Prepare email content
        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
        ];

        // CC and BCC recipients
        $ccRecipients = ['inorganicdrake@gmail.com', 'inordrake@gmail.com']; // Update with actual CC emails


        try {
            // Send the email with CC and BCC
            Mail::to($email)
                ->cc($ccRecipients)  // CC recipients

                ->send(new ApplicantNotification($data));

            // Return success response
            return redirect()->back()->with('success', 'Form submitted successfully!');
        } catch (\Exception $e) {
            // Handle exception if email sending fails
            return response()->json(['message' => 'Failed to send email', 'error' => $e->getMessage()], 500);
        }
    }

public function assignDate(Request $request, $id)
{
    $request->validate([
        'date' => 'required|date'
    ]);

    $application = Application::findOrFail($id);
    $application->date = $request->date;
    $application->status = 'On Process'; // Initial status

    // Assume the applicant has not yet attended
    // $application->attended = false; // Set attended flag to false

    $application->save();

    return redirect()->back()->with('success', 'Interview date assigned successfully!');
}
// public function changeStatus(Request $request, $id)
// {
//     $application = Application::findOrFail($id);
//     $application->status = $request->status;
//     $application->save();

//     return redirect()->back()->with('success', 'Status assigned successfully!');
// }

public function changeStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:For Interview,For Pooling,Not Qualified,No Show,Failed'
    ]);

    $application = Application::findOrFail($id);
    $oldStatus = $application->status;
    $application->status = $request->status;
    $application->save();

    // Determine which Mailable to send based on the new status
    switch ($request->status) {
        case 'For Interview':
            Mail::to($application->email)->send(new InterviewAssigned($application));
            break;
        case 'For Pooling':
            Mail::to($application->email)->send(new PoolingAssigned($application));
            break;
        case 'Not Qualified':
            Mail::to($application->email)->send(new NotQualifiedAssigned($application));
            break;
        case 'No Show':
            Mail::to($application->email)->send(new NoShowAssigned($application));
            break;
        case 'Failed':
            Mail::to($application->email)->send(new FailedAssigned($application));
            break;
        // Add additional cases as needed

        default:
            // Handle unexpected status
            break;
    }

    return redirect()->back()->with('success', 'Status assigned successfully!');
}

public function attendInterview($id)
{
    $application = Application::findOrFail($id);
    $application->status = 'For Interview';
    $application->attended = true; // Applicant attended

    $application->save();

    return redirect()->back()->with('success', 'Applicant attended status updated to For Interview.');
}

// Example in your controller method
public function getInterviews()
{
    $interviews = Application::select('id', 'full_name', 'date', 'job_name', 'job_category')->get();
    return view('admin.calendar')->with('interviews', $interviews);
}

    public function schedule()
    {
        $interviews = Application::whereNotNull('date')->get(['id', 'full_name', 'date']);
        return view('admin.calendar', ['interviews' => $interviews]);
    }


}
