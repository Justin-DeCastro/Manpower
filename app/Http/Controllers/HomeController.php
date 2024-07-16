<?php

namespace App\Http\Controllers;
Use App\Models\Company;
Use App\Models\Job;
Use App\Models\Award;
Use App\Models\Jobfair;
Use App\Models\AdminJob;
Use App\Models\Feedback;
Use App\Models\Executives;
Use App\Models\Bulletin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){
    $executives = Executives::all();
    $awards = Award::all();
    $feedback = Feedback::all();
    return view('User.home',compact('feedback','awards','executives'));
  }
  public function hiring(){
    $joboffer = AdminJob::all();
    return view('User.hiring',compact('joboffer'));
  }
  public function about(){
    $Jobs = Jobfair::all();
    $companies = Company::all();
    return view('User.about', compact('companies','Jobs'));
  }
  public function service(){
    return view('User.services');
  }
  public function requisition(){
    return view('User.manpower');
  }
  public function bulletin(){
    $bulletins = Bulletin::all();
    return view('User.bulletin',compact('bulletins'));
  }
  public function profile(){
    return view('User.profile');
  }
  public function labor(){
    return view('User.labor');
  }
  public function contact(){
    return view('User.contact');
  }
  public function award(){
    $executives = Executives::all();
    $Jobs = Jobfair::all();
    $awards = Award::all();
    return view('User.award',compact('awards','Jobs','executives'));
  }
}
