<?php

namespace App\Http\Controllers;

use App\Models\Ambulance;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function home()
    {
        $doctors = Doctor::where('status', 1)->get();
        // dump($doctors);

        return view('welcome', compact('doctors'));
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'nullable|string|max:20',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string|in:male,female,other',
            'boold_group' => 'nullable|string|max:5',
            'address' => 'nullable|string|max:500',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'patient',
        ]);

        Patient::create([
            'user_id' => $user->id,
            'patient_name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'blood_group' => $request->blood_group,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'status' => 1,
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
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

        return view('service', compact('services'));
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
        $hospital = Hospital::where('status', 1)->get();

        return view('appointment', compact('doctor', 'hospital'));
    }

    public function getambulance()
    {
        $ambulance = Ambulance::where('status', 1)->get();

        return view('ambulance', compact('ambulance'));
    }

    public function gethospital()
    {
        $tieups = Hospital::where('status', 1)->get();

        return view('hospital', compact('tieups'));
    }

    public function appointment_store(Request $request)
    {

     if (!auth()->check()) {
        return redirect()->route('login')
            ->with('error', 'Please login first to book an appointment.');
    }
        $patient = Patient::create([
            'patient_name' => $request->patient_name,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'boold_group' => $request->boold_group,
            'address' => $request->address,
            'assigned_doctor' => $request->doctor_id,
            'status' => 1,
            'user_id' => auth()->id(),
        ]);

        Appointment::create([
            'patient_name' => $request->patient_name,
            'patient_id' => $patient->id,
            'doctor_id' => $request->doctor_id,
            'hospital_id' => $request->hospital_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,
            'status' => 0,
        ]);

        return redirect()->back()
            ->with('success', 'Appointment submitted successfully');
    }
}
