<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        // Typically used to show the form view
        return view('admin.profile',compact('profile'));
    }
    public function store(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'website' => 'required|url',
            'person'=> 'required',
            'phone' => 'required|string|regex:/[0-9]{11}/',
            'position' => 'required|string|max:255',
            'email' => 'required|email',
            'sec_certificate' => 'required|file',
            'business_permit' => 'required|file',
        ]);

        // Handle file uploads (SEC/DTI Certificate and Business Permit)
        $secCertificatePath = $request->file('sec_certificate')->store('certificates');
        $businessPermitPath = $request->file('business_permit')->store('permits');

        // Store form data in database
        $contactForm = new Profile();
        $contactForm->name = $validatedData['name'];
        $contactForm->website = $validatedData['website'];
        $contactForm->person = $validatedData['person'];
        $contactForm->phone = $validatedData['phone'];
        $contactForm->position = $validatedData['position'];
        $contactForm->email = $validatedData['email'];
        $contactForm->sec_certificate = $secCertificatePath;
        $contactForm->business_permit = $businessPermitPath;
        $contactForm->save();
        session()->flash('message', 'Your application successfuly submitted!');
        // Redirect or respond as needed after successful submission
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

}
