<?php

namespace App\Models;

// use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class Trip extends Model
{
    use HasFactory;
    public function __construct ($request){
        $this->request = $request;
    }

    public function store(Request $request){
        $this->trip_name = $request->trip_name;
        $this->region = $request->region;
        $this->difficulty = $request->difficulty;
        $this->body = $request->trip_description;

        //upload and save
        $this->save();
    }
}
