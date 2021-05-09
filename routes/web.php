<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;



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
    // $document = YamlFrontMatter::parse(file_get_contents(resource_path('posts\my-first-post.html')));
    // ddd($document->excerpt);
    // ddd($posts);
    // $posts = Post::findAllPosts();
    return view("posts", ["posts" => Post::findAllPosts()]);

    // ddd($document);
    // return view('posts', ['posts'=> Post::findAll()]);
    // return view('posts', ['posts' => $document]);
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
