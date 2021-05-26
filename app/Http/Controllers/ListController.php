<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class ListController extends Controller
{
    //
    public function index()
    {
            $links = Link::all();
            return view('laracrud')->with('links', $links);
    }

    public function store(Request $req)
    {
        $data = $req->validate([
            'url' => 'required|max:255',
            'description'   => 'required'
        ]);
        $link = Link::create($data);
        return json_encode($link);
    }
}
