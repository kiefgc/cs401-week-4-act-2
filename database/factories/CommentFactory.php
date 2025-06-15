<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $post = Post::inRandomOrder()->first();

        return [
            'comment_content' => $this->faker->sentence(),
            'comment_date' => Carbon::now(),
            'reviewer_name' => $user->name ?? $this->faker->name(),
            'reviewer_email' => $user->email ?? $this->faker->safeEmail(),
            'is_hidden' => false,
        ];
    }
}
