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

    function getpatientName(Request $request, $name='nik' ,$id=1){

        // dump($request->get('q'));
        $fullname = $request->get('q');
        $roll = $request->get('roll_no');
        // return " hello this is patient name " . $name;
        return view('getpatient',['data'=>$name , 'id'=>$id  , 'full_name' =>$fullname  , 'roll_no' => $roll ]);
    }
    
    // function getpatientName($name){
    //     // return " hello this is patient name " . $name;
    //     return view('pregnancy_guide',['name'=>$pregnancy_guide]);
    // }

}