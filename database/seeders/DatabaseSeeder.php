<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//import required models
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //empty the tables beforehand
        // Post::truncate();
        // User::truncate();
        // Category::truncate();

        Post::factory()->create();
    }
}
