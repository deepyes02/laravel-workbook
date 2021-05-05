<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class Places extends Controller
{
    public function index()
    {
        return view('places', ["body" => "I am a sentence passed a value in an array besides return view"]);
    }
}


