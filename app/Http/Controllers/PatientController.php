<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Patient::orderBy('id', 'desc')->get();
      return view('admin.patient.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('admin.patient.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Patient::create([
            'patient_name' => $request->patient_name,
            'Appointment' => $request->Appointment,
            'Doctor' => $request->Doctor,
            'Prescription' => $request->Prescription,
            'Lab_Test' => $request->Lab_Test,
            'Heath_records' => $request->Heath_records,
            'Notification' => $request->Notification,
            'status' => $request->status,
        ]);

        return redirect('admin/patient/list')
                         ->with('success', 'Patient added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
