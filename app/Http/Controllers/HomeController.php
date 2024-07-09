<?php

namespace App\Http\Controllers;
Use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(){
    return view('User.home');
  }
  public function hiring(){
    return view('User.hiring');
  }
  public function about(){
    $companies = Company::all();
    return view('User.about', compact('companies'));
  }
  public function service(){
    return view('User.services');
  }
  public function contact(){
    return view('User.contact');
  }
  public function award(){
    return view('User.award');
  }
}
