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
        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'school' => 'required|string',
            'course' => 'required|string',
            'phone' => 'required|string',
            'ojt_hours' => 'required|string',
            'resume' => 'required|file',
            'message' => 'required|string',
        ]);

        // Handle file upload (resume)
        $resumePath = $request->file('resume')->store('resumes');

        // Create a new Ojt record in the database
        $ojt = Ojt::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'school' => $request->school,
            'course' => $request->course,
            'phone' => $request->phone,
            'ojt_hours' => $request->ojt_hours,
            'resume' => $resumePath,
            'message' => $request->message,
        ]);

        // Optionally, you can send an email notification, etc.
        session()->flash('message', 'Your application was successfully submitted!');
        
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }


public function showForm(){
    return view('user.ojt');
}
}
