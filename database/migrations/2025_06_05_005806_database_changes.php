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
        Schema::table("users", function(Blueprint $table) {
            $table->string('name', 30)->comment('user name.')->change();
        });
        Schema::table("roles", function(Blueprint $table) {
            $table->string('role_name')->comment('A - Admin, C - Contributor, S - Subscriber')->change();
        });
        Schema::table('posts', function(Blueprint $table) {
            $table->text('content')->comment('Post content.')->change();
            $table->string('status')->comment('D - Draft, P - Published, I - Inactive')->change();
            $table->text('featured_image_url')->comment('url of featured image.')->change();
        });
        Schema::table('categories', function(Blueprint $table) {
            $table->string('category_name')->comment("News, Review, Podcast, Opinion, Lifestyle, etc")->change();
        });
        Schema::table('tags', function(Blueprint $table) {
            $table->string('tag_name')->comment("Tags name.")->change();
        });
        Schema::table('comments', function(Blueprint $table) {
            $table->text('comment_content')->comment("Comment content.")->change();
            $table->timestamp('comment_date')->comment("Comment date.")->change();
            $table->string('reviewer_name')->comment("reviewer name.")->change();
            $table->string('reviewer_email')->comment("reviewer email.")->change();
            $table->boolean('is_hidden')->comment("Hidden from public.")->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
