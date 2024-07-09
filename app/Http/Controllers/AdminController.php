<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Application;
Use App\Models\Company;
class AdminController extends Controller
{
 public function dashboard(){
    return view('admin.dashboard');
 }
 public function acreditedcompany(){
    $companies = Company::all();
    return view('admin.acredited', compact('companies'));
 }
 public function calendar(){
    $interviews = Application::all();
    return view('admin.calendar',compact('interviews'));
 }
}
