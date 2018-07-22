<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function contact()
    {
        return view('landing.contact');
    }

    public function memberRegistration()
    {
        return view('landing.memberregistration');
    }
}
