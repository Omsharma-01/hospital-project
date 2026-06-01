<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HospitalController;

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
Route::get('/patient/{name}/{id}', [PatientController::class, 'getpatientName']);
Route::get('/pregnancy-guide', [PregnancyController::class, 'getPregnancyGuide']);
// Route::get('/pregnancy-guide', [PregnancyController::class, 'getPregnancyGuide']);

// Route::get('/admin/patient/medican', [getPatientController::class, 'index']);
// Route::get('/admin/patient/name', [getPatientController::class, 'create']);
// Route::post('/admin/patient/store', [getPatientController::class, 'store'])
//     ->name('patient.store');

