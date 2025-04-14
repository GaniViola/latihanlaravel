<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function(){
    return "Halaman About";
});

Route::get('/blog', function() {
    return "Halaman Blog";
});
