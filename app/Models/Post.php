<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'author', 'excerpt', 'body'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
