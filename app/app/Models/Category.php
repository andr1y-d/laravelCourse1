<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    use HasFactory;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    public function latestPosts(): HasOne
    {
        return $this->hasOne(Post::class)->latestOfMany();
    }

    public function oldestPosts(): HasOne
    {
        return $this->hasOne(Post::class)->oldestOfMany();
    }
}
