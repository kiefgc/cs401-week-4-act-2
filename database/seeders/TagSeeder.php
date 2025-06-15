<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = ['Laravel', 'PHP', 'Web Dev', 'Tutorial', 'Blog'];

        foreach ($tags as $tagName) {
            Tag::create([
                'tag_name' => $tagName,
                'slug' => Str::slug($tagName),
            ]);
        }

        // Optional: attach the first tag to the first post
        $post = \App\Models\Post::first();
        $tag = Tag::first();

        if ($post && $tag) {
            $post->tags()->attach($tag->id);
        }
    }
}
