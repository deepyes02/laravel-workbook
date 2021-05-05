<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class Users extends Controller
{
    public function index()
    {
        return view("users", ['title'=>"Page title passed from controller"]);
    }
    public function getUserById($input)
    {
        if (is_numeric($input)){
            return "Your user id: " . $input;
        } else return "Please enter user id";
    }
}


