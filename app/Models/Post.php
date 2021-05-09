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

        // return cache()->rememberForever('posts.all', function () {
        //     return collect(File::files(resource_path() . "\posts"))
        //     ->map(fn($file) => YamlFrontMatter::parseFile($file))
        //     ->map(fn($document) => new Post(
        //             $document->title,
        //             $document->date,
        //             $document->excerpt,
        //             $document->body(),
        //             $document->slug
        //     ))
        //     ->sortByDesc('date');
        // });
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
    }

    public static function findOnePost($slug)
    {
        if (!file_exists(resource_path() . "/posts/{$slug}.html")) {
            throw new ModelNotFoundException();
        }
 
        return static::findAllPosts()->firstWhere('slug', $slug);
    }
}