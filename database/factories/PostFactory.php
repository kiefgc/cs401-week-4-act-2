<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => fake()->paragraphs(3, true),
            'status' => fake()->randomElement(['d', 'p']),
            'featured_image_url' => fake()->imageUrl(640, 480, 'blog', true),
            'user_id' => User::factory(),
            'publication_date' => now(),
            'last_modified_date' => now(),
            'views_count' => fake()->numberBetween(0, 500),
        ];
    }
}
