<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;
use App\Mail\InterviewApproval;;
class OjtController extends Controller
{

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
            'job_category' => 'required|string|max:255',
            'job_name' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'resume' => 'required',
            'phone' => 'required|string|max:255',
        ]);

        $resumeName = time() . '_' . $request->file('resume')->getClientOriginalName();
        $request->file('resume')->move(public_path('hiring'), $resumeName);

        $application = new Application();
        $application->job_category = $request->job_category;
        $application->job_name = $request->job_name;
        $application->full_name = $request->full_name;
        $application->email = $request->email;
        $application->address = $request->address;
        $application->resume = 'hiring/' . $resumeName;
        $application->phone = $request->phone;
        $application->save();

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }


    public function assignDate(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date'
        ]);

        $application = Application::findOrFail($id);
        $application->date = $request->date;
        $application->save();

        return redirect()->back()->with('success', 'Interview date assigned successfully!');
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

public function showForm(){
    return view('user.ojt');
}
}
