<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'slug', 'status', 'featured_image_url'];

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function categories(): BelongsToMany {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }
}
