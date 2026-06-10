<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function home()
    {
        $doctors = Doctor::where('status', 1)->get();
        // dump($doctors);

        return view('welcome', compact('doctors'));
    }

    public function getabout_us()
    {
        return view('about_us');
    }

    public function getdoctor()
    {
        return view('doctor');
    }

    public function getService()
    {
        return view('service');
    }

    public function getviewprofile($id)
    {
        // dump($id);
        $doctor = Doctor::findorfail($id);

        return view('viewprofile', compact('doctor'));
    }

    public function getPregnancyGuide()
    {
        return view('pregnancy_guide');
    }

    public function getcontact()
    {
        return view('contact');
    }

    public function getAppointment()
    {
        return view('appointment');
    }

    public function appointment_store(Request $request)
    {
        Appointment::create([
            'patient_name' => $request->patient_name,
            'doctor_id' => $request->doctor_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,

        ]);

        return redirect('/appointment')
            ->with('success', 'Appointment submitted successfully');
    }
}
