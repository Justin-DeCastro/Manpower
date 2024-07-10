<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HiringController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactMessageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('User.home');
});
// Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::get('/careers', [HomeController::class, 'hiring'])->name('careers');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/award', [HomeController::class, 'award'])->name('award');

//admin dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//application hiring
Route::get('/apply', [HiringController::class, 'showForm'])->name('apply.form');
Route::post('/apply-submit', [HiringController::class, 'submitApplication'])->name('apply.submit');
Route::get('/applications', [HiringController::class, 'applications'])->name('applications');

//contact message
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

//calendar
Route::get('/calendars', [AdminController::class, 'calendar'])->name('calendars');
Route::get('/schedule', [HiringController::class, 'schedule'])->name('schedule');
Route::post('assign-date/{id}', [HiringController::class, 'assignDate']);

Route::get('applications', [HiringController::class, 'applications'])->name('applications');
Route::post('submit-application', [HiringController::class, 'submitApplication']);
Route::post('assign-date/{id}', [HiringController::class, 'assignDate']);
Route::get('calendar', [HiringController::class, 'calendar']);

//send email
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
//admin acredited company
Route::get('/acredited-company', [AdminController::class, 'acreditedcompany'])->name('acredited-company');

Route::post('/companies/store', [CompanyController::class, 'store'])->name('companies.store');
Route::post('/job/store', [JobController::class, 'store'])->name('job.store');
Route::get('/job-fair', [AdminController::class, 'jobfair'])->name('job-fair');
Route::get('/requisition', [HomeController::class, 'requisition'])->name('requisition');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/labor', [HomeController::class, 'labor'])->name('labor');
// Route::post('/send-approval-email', [AppointmentController::class, 'sendApprovalEmail'])->name('send-approval-email');

//botman
Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);
