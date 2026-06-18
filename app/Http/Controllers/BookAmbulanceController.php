<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookAmbulance;

class BookAmbulanceController extends Controller
{
    public function index()
    {
        $ambulances = BookAmbulance::latest()->get();

        return view('admin.book_ambulance.list', compact('ambulances'));
    }

    public function show($id)
    {
        $ambulance = BookAmbulance::findOrFail($id);

        return view('admin.book_ambulance.view', compact('ambulance'));
    }
}