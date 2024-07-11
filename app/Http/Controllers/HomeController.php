<?php

namespace App\Http\Controllers;
Use App\Models\Company;
Use App\Models\Job;
Use App\Models\AdminJob;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){
    return view('User.home');
  }
  public function hiring(){
    $joboffer = AdminJob::all();
    return view('User.hiring',compact('joboffer'));
  }
  public function about(){
    $Jobs = Job::all();
    $companies = Company::all();
    return view('User.about', compact('companies','Jobs'));
  }
  public function service(){
    return view('User.services');
  }
  public function requisition(){
    return view('User.manpower');
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
    return view('User.award');
  }
}
