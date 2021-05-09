<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("posts", ["posts" => Post::findAllPosts()]);
});

Route::get('posts/{post}', function ($slug) {
    return view('post', ['post' => Post::findOnePostOrFail($slug)]);
});
