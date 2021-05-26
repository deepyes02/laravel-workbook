<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;


class CrudController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('home')->with(compact('todos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => 'required|max:255',
            'description'   => 'required'
        ]);
        $todo = Todo::create($data);
        return json_encode($todo);
    }
}
