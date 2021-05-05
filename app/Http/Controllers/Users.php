<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index()
    {
        $names = ['Anil', 'Rekha', 'Kiran', 'Shambhu'];
        return view("users", ['users' => $names]);
    }
    public function getUserById($input)
    {
        if (is_numeric($input)){
            return "Your user id: " . $input;
        } else return "Please enter user id";
    }
    public function login(Request $req){

        $req->validate([
            'username' => 'required',
            'password'  => 'required | min:6'
        ]);
        return view("login", ['request'=>$req->input()]);
    }
}


