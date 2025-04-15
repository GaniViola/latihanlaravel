<?php

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

Route::get('/blog', function() {
    return view('pages.posts', [
        'title' => 'Posts',
        'posts' => Post::alldata()
    ]);
});

route::get('/post/{slug}', function($slug) {
    return view('pages.post', [
        'title' => 'Post',
        'post' => Post::singlepostdata($slug)
    ]);
});
