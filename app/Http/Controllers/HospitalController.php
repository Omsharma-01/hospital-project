<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = Hospital::all();

        return view('admin.hospital.list', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hospital.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hospital::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'pin_code' => $request->pin_code,
            'email' => $request->email,
            'status' => $request->status,
        ]);

        return redirect('admin/hospital/list')
            ->with('success', 'Hospital added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $hospital = Hospital::findorfail($id);

        return view('admin.hospital.view', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data = Hospital::findorfail($id);

        return view('admin.hospital.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hospital = Hospital::findorfail($id);

        $hospital->update([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'pin_code' => $request->pin_code,
            'email' => $request->email,
            'status' => $request->status,
        ]);

        return redirect('admin/hospital/list')
            ->with('success', 'Hospital added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hospital = Hospital::findorfail($id);

        $hospital->delete();
        // record deleted

        return redirect('admin/hospital/list')
            ->with('success', 'Hospital added successfully');
    }
}
