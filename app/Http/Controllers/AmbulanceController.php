<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambulance;

class AmbulanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ambulance::orderBy('id', 'desc')->get();
      return view('admin.ambulance.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('admin.ambulance.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ambulance::create([
            'ambulance_name' => $request->ambulance_name,
            'ambulance_no' => $request->ambulance_no,
            'driver_name' => $request->driver_name,
            'address' => $request->address,
            'status' => $request->status
        ]);

        return redirect('admin/ambulance/list')
                         ->with('success', 'ambulance added successfully');
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