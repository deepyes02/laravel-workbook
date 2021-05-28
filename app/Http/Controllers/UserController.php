<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name'  => $fields['name'],
            'email' => $fields['email'],
            'password'  => bcrypt($fields['password']),
        ]);

        $token = $user->createToken('authenticationToken')->plainTextToken;

        $response = [
            'status'=>'logged in',
            'user'  => $user,
            'token' => $token,
        ];

        return $response;

        
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|string'
        ]);

        

        //check email
        $user = User::where('email', $fields['email'])->first();

        //check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
           return [
               'message' => 'bad credentials'
           ];
        } else {
        $token = $user->createToken('authenticationToken')->plainTextToken;

            $response = [
                'status'=>'logged in',
                'user'  => $user,
                'token' => $token,
            ];
    
            return $response;
        }

    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return [
            "status"    => "logged out"
        ];
    }
   
}
