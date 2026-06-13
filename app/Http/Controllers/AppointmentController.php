<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
// use App\Models\Patient;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Appointment::orderBy('id', 'desc')->get();
      return view('admin.appointment.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctor = Doctor::get();
        // $patient = Patient::get();
      return view('admin.appointment.create' , compact('doctor' , ));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {




      

        
        Appointment::create([
            'patient_name' => $request->patient_name,
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,
            'status' => $request->status
        ]);

        return redirect('admin/appointment/list')
                         ->with('success', 'Appointment added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
             $appointment = Appointment::findorfail($id);
        return view('admin.appointment.view',compact('appointment') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Appointment::findorfail($id);
        $doctor = Doctor::get();
        return view('admin.appointment.edit',compact('data' , 'doctor') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findorfail($id);

        $appointment->update([
            'patient_name' => $request->patient_name,
            'doctor_id' => $request->doctor_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,
            'status' => $request->status
        ]);
        return redirect('admin/appointment/list')
                ->with('success','Appointment updated successfully');
                
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ambulance = Appointment::findorfail($id);

        //Record delete
        $appointment->delete();

        return redirect('admin/appointment/list')
                ->with('success','Appointment updated successfully');
    }
}
