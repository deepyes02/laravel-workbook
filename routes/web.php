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
    $files = File::files(resource_path() . "\posts");
    // ddd($files);
    $posts = [];


    foreach ($files as $file) {
        $document = YamlFrontMatter::parse(file_get_contents($file));
        $posts[] = new Post(
            $document->title, $document->date, $document->excerpt, $document->body(), $document->href
        );
    }
    // ddd($posts);

    return view("posts", ["posts" => $posts]);


    // ddd($document);
    // return view('posts', ['posts'=> Post::findAll()]);
    // return view('posts', ['posts' => $document]);
});

Route::get('posts/{post}', function ($slug) {
    $file = resource_path('posts\\' . $slug . '.html');
    $document = YamlFrontMatter::parse(file_get_contents($file));
    $post = new Post (
        $document->title, $document->date, $document->excerpt, $document->body(), $document->href
    );
    // ddd($post);
    return view('post', ['post' => $post]);



    // ddd($document[0]);
    // return view('post', ['post' => $document[0]]);

    //    find a post by id and return the view
    // $post = Post::findBySlug($slug);

    // return view('post', [ 'post'=> $post ]);
    // })->where('post', '[A-z_\-]+');

});
