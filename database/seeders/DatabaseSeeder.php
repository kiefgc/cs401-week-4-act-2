<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Tag;
use App\Models\Media;
use App\Models\Category;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Post::factory(10)->create();
        Comment::factory(10)->create();
        Tag::factory(10)->create();
        Media::factory(10)->create();
        Category::factory(5)->create();
        Role::factory(5)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            TagSeeder::class,
            MediaSeeder::class,
        ]);
    }
}