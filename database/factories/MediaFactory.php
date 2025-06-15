<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_name' => $this->faker->word() . '.jpg',
            'file_type' => 'image/jpeg',
            'file_size' => $this->faker->numberBetween(10000, 500000),
            'url' => $this->faker->imageUrl(),
            'upload_date' => Carbon::now(),
            'description' => $this->faker->sentence(),
        ];
    }
}
