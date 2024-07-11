<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ojt;
use Illuminate\Support\Facades\Mail;
use App\Mail\InterviewApproval;;
class OjtController extends Controller
{

    public function index()
    {
        $ojt = Ojt::all();
        // Typically used to show the form view
        return view('admin.ojt',compact('ojt'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'school' => 'required|string',
            'course' => 'required|string',
            'phone' => 'required|string',
            'ojt_hours' => 'required|string',
            'resume' => 'required|file', // Ensure 'file' validation for resume upload
            'message' => 'required|string',
        ]);

        // Handle file upload (resume)
        $resumeFile = $request->file('resume');
        $resumeFileName = $resumeFile->getClientOriginalName();
        $resumePath = 'public/resume/' . $resumeFileName;
        $resumeFile->move(public_path('public/resume'), $resumeFileName); // Move resume file to public/resume folder

        // Create a new Ojt record in the database
        $ojt = Ojt::create([
            'fullname' => $validatedData['fullname'],
            'email' => $validatedData['email'],
            'school' => $validatedData['school'],
            'course' => $validatedData['course'],
            'phone' => $validatedData['phone'],
            'ojt_hours' => $validatedData['ojt_hours'],
            'resume' => $resumePath, // Store the file path in the database, not the file itself
            'message' => $validatedData['message'],
        ]);

        // Optionally, you can send an email notification, etc.

        // Flash a success message to the session
        session()->flash('message', 'Your application was successfully submitted!');

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }


public function showForm(){
    return view('user.ojt');
}
}
