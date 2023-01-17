<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $users = \App\Models\User::factory(10)->create();
        $users->each(function ($user){
            $user->posts()->createMany(Post::factory(5)->make()->toArray());
        });
    }
}
