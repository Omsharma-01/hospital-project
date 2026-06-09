<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function getabout_us()
    {
        return view('about_us');
    }

    public function getdoctor()
    {
        return view('doctor');
    }

    public function getService()
    {
        return view('service');
    }

    public function getviewprofile()
    {
        return view('viewprofile');
    }

    public function getPregnancyGuide()
    {
        return view('pregnancy_guide');
    }

    public function getcontact()
    {
        return view('contact');
    }

    public function getAppointment()
    {
        return view('appointment');
    }
}
