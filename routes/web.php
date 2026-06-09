<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

// 1. Home page ka route
Route::get('/', function () {
    return view('welcome');
});

// 2. Patient page ka route jise hum check karenge
Route::get('/patient', [PatientController::class, 'getPatient']);
Route::get('/patient/{name}', [PatientController::class, 'getpatientName']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/hospital/list', [HospitalController::class, 'index']);
Route::get('/admin/hospital/create', [HospitalController::class, 'create']);
Route::post('/admin/hospital/store', [HospitalController::class, 'store'])
    ->name('hospital.store');
Route::get('/admin/ambulance/list', [AmbulanceController::class, 'index']);
Route::get('/admin/ambulance/create', [AmbulanceController::class, 'create']);
Route::post('/admin/ambulance/store', [AmbulanceController::class, 'store'])
    ->name('ambulance.store');
Route::get('/patient/{name}/{id}', [PatientController::class, 'getpatientName']);

Route::get('/pregnancy-guide', [HomeController::class, 'getPregnancyGuide']);

// Route::get('/admin/patient/medican', [getPatientController::class, 'index']);
// Route::get('/admin/patient/name', [getPatientController::class, 'create']);
// Route::post('/admin/patient/store', [getPatientController::class, 'store'])
//     ->name('patient.store');

Route::get('/about-us', [HomeController::class, 'getabout_us']);
Route::get('/doctor', [HomeController::class, 'getdoctor']);
Route::get('/service', [HomeController::class, 'getService']);
Route::get('/viewprofile', [HomeController::class, 'getviewprofile']);
Route::get('/contact', [HomeController::class, 'getcontact']);
Route::get('/Appointment', [HomeController::class, 'getAppointment']);
