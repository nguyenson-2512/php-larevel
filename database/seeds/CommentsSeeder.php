
<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\User;
use App\Post;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_1  = User::find(1);
        $user_2  = User::find(2);

        $post_1 = Post::find(1);
        $post_2 = Post::find(2);

        Comment::create([
            'user_id'  => $user_1->id,
            'post_id'  => $post_1->id,
            'content'  => 'demo 1'

        ]);

        Comment::create([
            'user_id'  => $user_1->id,
            'post_id'  => $post_2->id,
            'content'  => 'demo 2'

        ]);
        Comment::create([
            'user_id'  => $user_2->id,
            'post_id'  => $post_1->id,
            'content'  => 'demo 3'

        ]);
        Comment::create([
            'user_id'  => $user_2->id,
            'post_id'  => $post_2->id,
            'content'  => 'demo 4'

        ]);
        Comment::create([
            'user_id'  => $user_1->id,
            'post_id'  => $post_1->id,
            'content'  => 'demo 5'

        ]);
        Comment::create([
            'user_id'  => $user_1->id,
            'post_id'  => $post_1->id,
            'content'  => 'demo 6'

        ]);
    }
}