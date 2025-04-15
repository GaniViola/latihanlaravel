<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function(){
    return view('pages.about', [
        'title' => 'About'
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

route::get('/post/{slug}', [PostController::class, 'show']);
