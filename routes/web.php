<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

// 1. Home page ka route
Route::get('/', function () {
    return view('welcome');
});

// 2. Patient page ka route jise hum check karenge
Route::get('/patient', [PatientController::class, 'getPatient']);
Route::get('/patient/{name}', [PatientController::class, 'getpatientName']);


