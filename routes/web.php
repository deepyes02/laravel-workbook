<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;



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

    // ddd($post);
    return view('post', ['post' => Post::findOnePost($slug)]);

    // ddd($document[0]);
    // return view('post', ['post' => $document[0]]);

    //    find a post by id and return the view
    // $post = Post::findBySlug($slug);

    // return view('post', [ 'post'=> $post ]);
    // })->where('post', '[A-z_\-]+');

});
