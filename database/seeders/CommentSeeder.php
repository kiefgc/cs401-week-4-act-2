<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        $post = Post::first();
        $user = User::first();

        if ($post && $user) {
            Comment::create([
                'comment_content' => 'This is a comment on the first post.',
                'comment_date' => Carbon::now(),
                'reviewer_name' => $user->name,
                'reviewer_email' => $user->email,
                'is_hidden' => false,
            ]);

            Comment::create([
                'comment_content' => 'Another insightful comment!',
                'comment_date' => Carbon::now(),
                'reviewer_name' => $user->name,
                'reviewer_email' => $user->email,
                'is_hidden' => false,
            ]);
        }
    }
}