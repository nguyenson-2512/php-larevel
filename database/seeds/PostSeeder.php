<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        Post::create([
            'user_id' => $user->id,
            'title' => 'reactjs',
            'slug' => 'reactjs',
            'content' => 'content 1'
        ]);

        Post::create([
            'user_id' => $user->id,
            'title' => 'hoc php',
            'slug' => 'hoc-php',
            'content' => 'content 2'
        ]);
    }
}
