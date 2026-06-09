<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

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
            'age' => $request->age,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'boold_group' => $request->boold_group,
            'address' => $request->address,
            'assigned_doctor' =>$request->assigned_doctor,
            'status' => $request->status
        ]);

        return redirect('admin/patient/list')
                         ->with('success', 'Patient added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
        $patient = Patient::findorfail($id);
        
        return view('admin.patient.view', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $data = Patient::findorfail($id);
        
        return view('admin.patient.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patient = Patient::findorfail($id);

        $patient->update([
            'patient_name' => $request->patient_name,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'boold_group' => $request->boold_group,
            'address' => $request->address,
            'assigned_doctor' =>$request->assigned_doctor,
            'status' => $request->status
        ]);

        return redirect('admin/patient/list')
                         ->with('success', 'Patient added successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patient::findorfail($id);

        $patient->delete();
        //record deleted

             return redirect('admin/patient/list')
                         ->with('success', 'Patient added successfully');
        
    }
}
