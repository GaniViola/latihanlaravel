<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/authors/{user:username}', [PostController::class, 'authors']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
