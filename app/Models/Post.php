<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    public $title;
    public $date;
    public $excerpt;
    public $body;
    public $slug;

    public function __construct($title, $date, $excerpt, $body, $slug)
    {
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function findAllPosts()
    {
        // $files = File::files(resource_path() . "\posts");

        //laravel's collect method
        return collect(File::files(resource_path() . "\posts"))
        ->map(fn($file) => YamlFrontMatter::parseFile($file))
        ->map(fn($document) => new Post(
                $document->title,
                $document->date,
                $document->excerpt,
                $document->body(),
                $document->slug
        ))
        ->sortByDesc('date');

        // return $posts;

        // core php array map function
        // $posts = array_map(function($file){
        //     $document = YamlFrontMatter::parse(file_get_contents($file));
        //     return new Post(
        //         $document->title,
        //         $document->date,
        //         $document->excerpt,
        //         $document->body(),
        //         $document->href
        //     );
        // }, $files);
        // return $posts;
    }

    public static function findOnePost($slug)
    {
        // if (!file_exists($path = resource_path() . "/posts/{$slug}.html")) {
        //     //
        //     throw new ModelNotFoundException();
        // }
        // // return cache()->remember("posts.{$slug}", 3000, fn () => file_get_contents($path));
        // $file = resource_path('posts\\' . $slug . '.html');
        // $document = YamlFrontMatter::parseFile($file);
        // $collection = collect(File::files($file));
        // ddd($collection);
        // return new Post(
        //     $document->title,
        //     $document->date,
        //     $document->excerpt,
        //     $document->body(),
        //     $document->href
        // );

        return static::findAllPosts()->firstWhere('slug', $slug);
    }
} // class ends here

// return collect(File::files(resource_path() . "\posts"))
//         ->map(fn($file) => YamlFrontMatter::parseFile($file))
//         ->map(fn($document) => new Post(
//                 $document->title,
//                 $document->date,
//                 $document->excerpt,
//                 $document->body(),
//                 $document->href
//         ));
