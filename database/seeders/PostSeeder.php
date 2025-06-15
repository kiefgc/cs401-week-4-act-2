<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        $post1 = Post::create([
            'title' => 'This is a blog, apparently.',
            'content' => 'This is a post?',
            'slug' => 'this-is-a-post',
            'status' => 'd',
            'featured_image_url' => 'a blog.',
            'user_id' => $user->id,
        ]);

        $post2 = Post::create([
            'title' => 'Laravel?',
            'content' => 'A framework for web dev.',
            'slug' => 'laravel-framework',
            'status' => 'p',
            'featured_image_url' => 'a photo of laravels own icon or something',
            'user_id' => $user->id,
        ]);

        $category = Category::first();

        if ($category) {
            $post1->categories()->attach($category->id);
            $post2->categories()->attach($category->id);
        }
    }
}
