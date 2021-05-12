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
        Post::truncate();
        User::truncate();
        Category::truncate();


        $user_1 = User::factory()->create();
        $user_2 = User::factory()->create();
        $user_3 = User::factory()->create();

        $travel = Category::create([
            'name' => 'travel',
            'slug' => 'travel'
        ]);
        $work = Category::create([
            'name' => 'work',
            'slug' => 'work'
        ]);
        $life = Category::create([
            'name' => 'life',
            'slug' => 'life'
        ]);

        Post::create([
            'user_id' => $user_1->id, //id of the one user
            'category_id' => $travel->id, //id of category travel row
            'title' => 'Hello world, this is my first post',
            'slug'  => 'my-first-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nostrum.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sunt nostrum nesciunt exercitationem aliquid totam perspiciatis natus omnis officiis! Velit voluptatem labore dignissimos quia magni inventore adipisci eum atque eveniet quis quae amet, possimus fugiat.</p>',
        ]);
        Post::create([
            'category_id' => $work->id,
            'user_id' => $user_2->id,
            'title' => 'Writing Another Post Here',
            'slug'  => 'my-second-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nostrum.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sunt nostrum nesciunt exercitationem aliquid totam perspiciatis natus omnis officiis! Velit voluptatem labore dignissimos quia magni inventore adipisci eum atque eveniet quis quae amet, possimus fugiat.</p>',
        ]);
        Post::create([
            'category_id' => $life->id,
            'user_id' => $user_3->id,
            'title' => 'My third Post',
            'slug'  => 'my-third-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nostrum.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sunt nostrum nesciunt exercitationem aliquid totam perspiciatis natus omnis officiis! Velit voluptatem labore dignissimos quia magni inventore adipisci eum atque eveniet quis quae amet, possimus fugiat.</p>',
        ]);
        Post::create([
            'category_id' => $life->id,
            'user_id' => $user_3->id,
            'title' => 'My fourth Post',
            'slug'  => 'my-fourth-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, nostrum.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sunt nostrum nesciunt exercitationem aliquid totam perspiciatis natus omnis officiis! Velit voluptatem labore dignissimos quia magni inventore adipisci eum atque eveniet quis quae amet, possimus fugiat.</p>',
        ]);
    }
}
