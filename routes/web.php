<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
    return view("posts", ["posts" => Post::latest()->with('category', 'user')->get()]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
        ]);
});

Route::get('category/', function()
{
    return view('categories', ['categories' => Category::with('posts')->get()]);
});

Route::get('category/{category:slug}', function (Category $category) {
    return view('category', [
        'category' => $category
    ]);
});

Route::get('users/', function(){
    return view('users', ['users'=> User::with('posts')->get()]);
    // return "Hello";
});

Route::get('users/{user:slug}', function(User $user){
    return view('user', [
        'user' => $user,
    ]);
});