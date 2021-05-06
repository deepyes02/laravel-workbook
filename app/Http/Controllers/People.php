<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class People extends Controller
{
    public function index()
    {
        $people =  DB::select('select * from people where 1 = ?', [1]);
        return view("people", ["people"=>$people]);
    }

}


