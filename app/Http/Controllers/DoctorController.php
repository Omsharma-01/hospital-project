<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Doctor::orderBy('id', 'desc')->get();

        return view('admin.doctor.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctor.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = null;

        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $filename = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('uploads/doctors'), $filename);
        }

        Doctor::create([
            'doctor_name' => $request->doctor_name,
            'specialization' => $request->specialization,
            'phone' => $request->phone,
            'email' => $request->email,
            'experience' => $request->experience,
            'fees' => $request->fees,
            'about_us' => $request->about_us,
            'file_upload' => $filename,
            'status' => $request->status,
        ]);

        return redirect('admin/doctor/list')
            ->with('success', 'Doctor added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $doctor = Doctor::findorfail($id);

        return view('admin.doctor.view', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Doctor::findorfail($id);

        // dump($data);
        return view('admin.doctor.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $doctor = Doctor::findOrFail($id);

        $filename = $doctor->file_upload;

        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/doctors'), $filename);
        }

        $doctor->update([
            'doctor_name' => $request->doctor_name,
            'specialization' => $request->specialization,
            'phone' => $request->phone,
            'email' => $request->email,
            'experience' => $request->experience,
            'fees' => $request->fees,
            'about_us' => $request->about_us,
            'file_upload' => $filename,
            'status' => $request->status,
        ]);

        return redirect('admin/doctor/list')
            ->with('success', 'Doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::findOrFail($id);

        // Image delete
        // if ($doctor->file_upload && file_exists(public_path('uploads/doctors/' . $doctor->file_upload))) {
        //     unlink(public_path('uploads/doctors/' . $doctor->file_upload));
        // }

        // Record delete
        $doctor->delete();

        return redirect('admin/doctor/list')
            ->with('success', 'Doctor deleted successfully');
    }
}
