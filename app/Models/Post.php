<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public $title;
    public $date;
    public $excerpt;
    public $body;
    public $href;

    public function __construct($title, $date, $excerpt, $body, $href)
    {
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->body = $body;
        $this->href = $href;
    }

    public static function findAllPosts()
    {
        //
        $files = File::files(resource_path() . "\posts");

        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function findOnePost($slug)
    {
        if (!file_exists($path = resource_path() . "/posts/{$slug}.html")) {
            //
            throw new ModelNotFoundException();
        }
        return cache()->remember("posts.{$slug}", 3000, fn () => file_get_contents($path));
    }


}
