<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/authors/{user:username}', [PostController::class, 'authors']);
// Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

// coba route name
// Route::get('/inipercobaan', function(){
//     dd(request('search'));
// })->name('coba.compor');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('create');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');