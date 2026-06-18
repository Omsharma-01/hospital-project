<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BookAmbulanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

// 1. Home page ka route
Route::get('/', [HomeController::class, 'home']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [HomeController::class, 'getRegister'])->name('register');
Route::post('/register', [HomeController::class, 'postRegister'])->name('register.post');

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/patient', [PatientController::class, 'getPatient']);
    Route::get('/patient/{name}/{id}', [PatientController::class, 'getpatientName']);

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/admin/hospital/list', [HospitalController::class, 'index']);
        Route::get('/admin/hospital/create', [HospitalController::class, 'create']);
        Route::get('/admin/hospital/edit/{id}', [HospitalController::class, 'edit']);
        Route::get('/admin/hospital/view/{id}', [HospitalController::class, 'show']);
        Route::post('/admin/hospital/store', [HospitalController::class, 'store'])
            ->name('hospital.store');
        Route::post('/admin/hospital/update/{id}', [HospitalController::class, 'update'])
            ->name('hospital.update');
        Route::delete('/admin/hospital/delete/{id}', [HospitalController::class, 'destroy'])
            ->name('hospital.delete');

        Route::get('/admin/ambulance/list', [AmbulanceController::class, 'index']);
        Route::get('/admin/ambulance/create', [AmbulanceController::class, 'create']);
        Route::get('/admin/ambulance/edit/{id}', [AmbulanceController::class, 'edit']);
        Route::get('/admin/ambulance/view/{id}', [AmbulanceController::class, 'show']);
        Route::post('/admin/ambulance/store', [AmbulanceController::class, 'store'])
            ->name('ambulance.store');
        Route::post('/admin/ambulance/update/{id}', [AmbulanceController::class, 'update'])
            ->name('ambulance.update');
        Route::delete('/admin/ambulance/delete/{id}', [AmbulanceController::class, 'destroy'])
            ->name('ambulance.delete');

        Route::get('/admin/doctor/list', [DoctorController::class, 'index']);
        Route::get('/admin/doctor/create', [DoctorController::class, 'create']);
        Route::get('/admin/doctor/edit/{id}', [DoctorController::class, 'edit']);
        Route::get('/admin/doctor/view/{id}', [DoctorController::class, 'show']);
        Route::post('/admin/doctor/store', [DoctorController::class, 'store'])
            ->name('doctor.store');
        Route::post('/admin/doctor/update/{id}', [DoctorController::class, 'update'])
            ->name('doctor.update');
        Route::delete('/admin/doctor/delete/{id}', [DoctorController::class, 'destroy'])
            ->name('doctor.delete');

        Route::get('/admin/patient/list', [PatientController::class, 'index']);
        Route::get('/admin/patient/create', [PatientController::class, 'create']);
        Route::get('/admin/patient/edit/{id}', [PatientController::class, 'edit']);
        Route::get('/admin/patient/view/{id}', [PatientController::class, 'show']);
        Route::post('/admin/patient/store', [PatientController::class, 'store'])
            ->name('patient.store');
        Route::post('/admin/patient/update/{id}', [PatientController::class, 'update'])
            ->name('patient.update');
        Route::delete('/admin/patient/delete/{id}', [PatientController::class, 'destroy'])
            ->name('patient.delete');

        Route::get('/admin/service/list', [ServiceController::class, 'index']);
        Route::get('/admin/service/create', [ServiceController::class, 'create']);
        Route::get('/admin/service/edit/{id}', [ServiceController::class, 'edit']);
        Route::get('/admin/service/view/{id}', [ServiceController::class, 'show']);
        Route::post('/admin/service/store', [ServiceController::class, 'store'])
            ->name('service.store');
        Route::post('/admin/service/update/{id}', [ServiceController::class, 'update'])
            ->name('service.update');
        Route::delete('/admin/service/delete/{id}', [ServiceController::class, 'destroy'])
            ->name('service.delete');

        Route::get('/admin/appointment/list', [AppointmentController::class, 'index']);
        Route::get('/admin/appointment/create', [AppointmentController::class, 'create']);
        Route::get('/admin/appointment/edit/{id}', [AppointmentController::class, 'edit']);
        Route::get('/admin/appointment/view/{id}', [AppointmentController::class, 'show']);
        Route::post('/admin/appointment/store', [AppointmentController::class, 'store'])
            ->name('appointment.store');
        Route::post('/admin/appointment/update/{id}', [AppointmentController::class, 'update'])
            ->name('appointment.update');
        Route::delete('/admin/appointment/delete/{id}', [AppointmentController::class, 'destroy'])
            ->name('appointment.delete');
    });

    Route::get('/book/ambulance/list', [BookAmbulanceController::class, 'index'])->name('bookambulance.list');
    Route::get('/book/ambulance/view/{id}', [BookAmbulanceController::class, 'show'])->name('bookambulance.view');

});

Route::get('/pregnancy-guide', [HomeController::class, 'getPregnancyGuide']);

Route::get('/about-us', [HomeController::class, 'getabout_us']);
Route::get('/doctor', [HomeController::class, 'getdoctor']);
Route::get('/service', [HomeController::class, 'getService']);
Route::get('/viewprofile/{id}', [HomeController::class, 'getviewprofile']);
Route::get('/contact', [HomeController::class, 'getcontact']);
Route::get('/appointment', [HomeController::class, 'getAppointment']);
Route::get('/ambulance', [HomeController::class, 'getambulance']);

Route::post('/appointment/store', [HomeController::class, 'appointment_store'])
    ->name('appointment.store1');





Route::prefix('patient')->middleware(['auth', 'role:patient'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('patient.dashboard');
    
    // Profile
    Route::get('/profile', [DashboardController::class, 'profile'])->name('patient.profile');
    Route::post('/profile/update', [DashboardController::class, 'updateProfile'])->name('patient.profile.update');
    Route::post('/profile/change-password', [DashboardController::class, 'changePassword'])->name('patient.profile.password');
    
    // Appointments
    Route::get('/appointments', [DashboardController::class, 'appointments'])->name('patient.appointments');
    Route::post('/appointments', [DashboardController::class, 'storeAppointment'])->name('patient.appointments.store');
    Route::delete('/appointments/{id}', [DashboardController::class, 'cancelAppointment'])->name('patient.appointments.cancel');
    
    // Ambulance (using BookAmbulance table)
    Route::get('/ambulance', [DashboardController::class, 'ambulances'])->name('patient.ambulance');
    Route::post('/ambulance', [DashboardController::class, 'storeAmbulance'])->name('patient.ambulance.store');
    Route::delete('/ambulance/{id}', [DashboardController::class, 'cancelAmbulance'])->name('patient.ambulance.cancel');
    
    // AJAX Routes
    Route::get('/doctors-by-department', [DashboardController::class, 'getDoctorsByDepartment'])->name('patient.doctors.by.department');
    Route::get('/available-slots', [DashboardController::class, 'getAvailableSlots'])->name('patient.available.slots');
});