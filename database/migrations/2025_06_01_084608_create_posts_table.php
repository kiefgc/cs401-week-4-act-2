<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('title');
            $table->text('content')->comment('content');
            $table->string('slug')->comment('url');
            $table->timestamp('publication_date')->nullable()->comment('publication date');
            $table->timestamp('last_modified_date')->nullable()->comment('last modified date');
            $table->string('status')->comment('d - draft, p - published, i - inactive');
            $table->string('featured_image_url')->comment('featured image url');
            $table->integer('views_count')->default(0)->comment('number of views');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
