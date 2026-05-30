<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        return view('admin.dashboard');
    }
    public function list(){
        return view(admin.layout.hospitallist);
    }

       public function create(){
        return view(admin.layout.hospitalcreate);
    }
    
}
