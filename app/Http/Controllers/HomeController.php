<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Service;
use Illuminate\Http\Request;

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
        $doctors = Doctor::where('status', 1)->get();

        return view('doctor', compact('doctors'));
    }

    public function getService()
    {
        $services = Service::get();

        return view('service' , compact('services'));
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
        $doctor = Doctor::where('status', 1)->get();

        return view('contact', compact('doctor'));
    }

    public function getAppointment()
    {
        $doctor = Doctor::where('status', 1)->get();

        return view('appointment', compact('doctor'));
    }

    public function getambulance()
    {
        $ambulance = Ambulance::where('status', 1)->get();

        return view('ambulance', compact('ambulance'));
    }

    public function appointment_store(Request $request)
    {
        $patient = Patient::create([
            'patient_name' => $request->patient_name,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'boold_group' => $request->boold_group,
            'address' => $request->address,
            'assigned_doctor' => $request->doctor_id,
            'status' => 1,
        ]);

        Appointment::create([
            'patient_name' => $request->patient_name,
            'patient_id' => $patient->id,
            'doctor_id' => $request->doctor_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,
            'status' => 0,
        ]);

        return redirect()->back()
            ->with('success', 'Appointment submitted successfully');
    }
}
