<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    //
    function getData(Request $req){
        // validate
        $req->validate([
            'trip_name' => 'required',
            'region'    => 'required',
            'difficulty'   => 'required',
            'description'   => 'required',
        ]);

        return $req->input();
    }
}
