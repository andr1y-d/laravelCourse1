<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int published
 */

class Post extends Model
{
    use HasFactory;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $fillable = ['title', 'slug', 'content', 'category_id'];

    public function isPublished()
    {
        return $this->published ? 'Published' : 'Not Published';
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
