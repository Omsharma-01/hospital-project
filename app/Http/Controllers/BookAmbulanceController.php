<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookAmbulance;
use Illuminate\Http\Request;

class BookAmbulanceController extends Controller
{
    public function index()
    {
        $ambulances = BookAmbulance::latest()->get();

        return view('admin.book_ambulance.list', compact('ambulances'));
    }

    public function create()
    {
        return view('admin.book_ambulance.create');
    }

    public function store(Request $request)
    {
        BookAmbulance::create([
            'full_name' => $request->full_name,
            'mobile_no' => $request->mobile_no,
            'pickup_location' => $request->pickup_location,
            'drop_location' => $request->drop_location,
            'booking_date' => $request->booking_date,
            'last_update' => now(),
            'user_id' => auth()->id(),
            'status' => $request->status ?? 'pending'
        ]);

        return redirect('admin/bookambulance/list')
            ->with('success', 'Book Ambulance added successfully');
    }

    public function show($id)
    {
        $ambulance = BookAmbulance::findOrFail($id);

        return view('admin.book_ambulance.view', compact('ambulance'));
    }

    public function edit($id)
    {
        $data = BookAmbulance::findOrFail($id);

        return view('admin.book_ambulance.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $ambulance = BookAmbulance::findOrFail($id);

        $ambulance->update([
            'full_name' => $request->full_name,
            'mobile_no' => $request->mobile_no,
            'pickup_location' => $request->pickup_location,
            'drop_location' => $request->drop_location,
            'booking_date' => $request->booking_date,
            'last_update' => now(),
            'status' => $request->status
        ]);

        return redirect('admin/bookambulance/list')
            ->with('success', 'Book Ambulance updated successfully');
    }

    public function destroy($id)
    {
        $ambulance = BookAmbulance::findOrFail($id);

        $ambulance->delete();

        return redirect('admin/bookambulance/list')
            ->with('success', 'Book Ambulance deleted successfully');
    }
}