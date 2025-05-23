<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['title', 'slug', 'author', 'excerpt', 'body'];
    protected $with = ['user', 'category'];

    public function scopeFilter($query, array $filters){
        // $query->when($filters['search'] ?? false, function($query, $search){
        //     return $query->where('title', 'like', '%'. $search .'%')
        //                 //  ->orWhere('excerpt', 'like', '%'. $search .'%')
        //                  ->orWhere('body', 'like', '%'. $search .'%');
        // });

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where(function($query) use ($search) {
                $query->where('title', 'like', '%'. $search .'%')
                      ->orWhere('excerpt', 'like', '%'. $search .'%')
                      ->orWhere('body', 'like', '%'. $search .'%');
            });
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, fn($query, $user) =>
            $query->whereHas('user', fn($query) => 
                $query->where('username', $user)
            )
        );
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
