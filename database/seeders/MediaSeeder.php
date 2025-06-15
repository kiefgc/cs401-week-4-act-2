<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;
use Carbon\Carbon;

class MediaSeeder extends Seeder
{
    public function run(): void
    {
        Media::create([
            'file_name' => 'example-image.jpg',
            'file_type' => 'image/jpeg',
            'file_size' => 204800,
            'url' => 'https://example.com/media/example-image.jpg',
            'upload_date' => Carbon::now(),
            'description' => 'A sample image for demonstration.',
        ]);

        Media::create([
            'file_name' => 'guide-pdf.pdf',
            'file_type' => 'application/pdf',
            'file_size' => 1048576,
            'url' => 'https://example.com/media/guide-pdf.pdf',
            'upload_date' => Carbon::now(),
            'description' => 'PDF user guide.',
        ]);
    }
}
