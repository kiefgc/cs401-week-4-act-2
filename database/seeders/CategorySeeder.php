<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_name' => 'Technology',
            'slug' => 'technology',
            'description' => 'about technology',
        ]);

        Category::create([
            'category_name' => 'Lifestyle',
            'slug' => 'lifestyle',
            'description' => 'about lifestyle',
        ]);

        Category::create([
            'category_name' => 'Education',
            'slug' => 'education',
            'description' => 'about education',
        ]);
    }
}
