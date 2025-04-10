<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
