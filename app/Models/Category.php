<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = ['id'];

    public function getRouteKeyName(){
        return 'slug';
    }
    
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
