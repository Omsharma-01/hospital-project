<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    function getPatient(){
        //return "My new Hospital";
        return view('patient');
    }

    function aboutpatient(){
        return " hello this is patient ";
    }

    function getpatientName($name){
        // return " hello this is patient name " . $name;
        return view('getpatient',['name'=>$name]);
    }
}