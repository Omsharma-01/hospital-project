<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalPatients = Patient::count();
        $totalAmbulances = Ambulance::count();
        $totalServices = Service::count();
        $totalDoctors = Doctor::count();
        $upcomingAppointments = Appointment::whereDate('appointment_date', '>=', Carbon::today())
            ->whereIn('status', [Appointment::STATUS_PENDING, Appointment::STATUS_CONFIRMED])
            ->count();
        $doctors = Doctor::latest()->take(6)->get();

        return view('admin.dashboard', compact(
            'totalPatients',
            'totalAmbulances',
            'totalServices',
            'totalDoctors',
            'upcomingAppointments',
            'doctors'
        ));
    }
}
