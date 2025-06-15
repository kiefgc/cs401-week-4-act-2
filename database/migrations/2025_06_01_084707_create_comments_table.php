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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_content')->comment('comment content');
            $table->timestamp('comment_date')->comment('comment date');
            $table->string('reviewer_name')->comment('reviewer name');
            $table->string('reviewer_email')->comment('reviewer email');
            $table->boolean('is_hidden')->default(false)->comment('bool for hiding');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
