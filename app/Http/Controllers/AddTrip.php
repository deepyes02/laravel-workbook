<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddTrip extends Controller
{
    //
    function getAddTrip(){
        return view("flash");
    }

    function postAddTrip(Request $request){
        $data= $request->input('trip_title');
        //flash session appears once and deletes itself when the page refreshes again
        $request->session()->flash('trip_title', $data);
        return redirect('flash');
    }
}
