<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class CreatePostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            [
                'id' => 1,
                'title' => "Repo Patterns",
                'url' =>  "https://github.com/smitakanva/laravel-repositories"
                
            ],
            [
                'id' => 2,
                'title' => "Multi Auth ",
                'url' =>  "https://github.com/smitakanva/laravel-multi-auth"
                
            ],
            [
                'id' => 3,
                'title' => "Concept of Route Middleware in Laravel ",
                'url' =>  "https://github.com/smitakanva/laravel-faker-data.git"
                
            ]
            ];
            foreach ($post as $key => $value) {
                Post::create($value);
            }
    }
}
