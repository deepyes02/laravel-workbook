<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Users extends Controller
{
    public function getData(){
       $people = User::all();
       return view ('people', ['people' => $people]);
    }

    public function getLogin(){
        if(session()->has('username'))
        {
            return redirect("/");
        } return view("login");
    }

    public function postLogin(Request $request){
        $data = $request->input();
        $request->session()->put('username', $data['username']);
        return redirect ('userprofile');
    }

    public function logout(){
        if(session()->has('username'))
        {
            session()->pull('username');
        }
        return view('login');
    }
}

