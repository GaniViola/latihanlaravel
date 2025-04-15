<?php

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

Route::get('/blog', function() {
    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Gani Prasetyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quibusdam rem labore doloremque, fugit dolor voluptatem molestiae commodi saepe esse nostrum consectetur voluptas et sapiente, minima excepturi consequatur vero soluta, explicabo accusamus? Saepe, natus ut repudiandae culpa commodi sunt quia consequatur. Omnis iure dicta iusto, minus voluptate ut fugit eius saepe rerum, error molestiae, mollitia sunt exercitationem atque dolore ipsa! Possimus minima quas totam rerum ipsa, adipisci exercitationem laborum vel. Voluptatibus inventore assumenda quia dolor eos impedit nam ducimus animi!'
        ],

        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Elzan Prasetyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quibusdam rem labore doloremque, fugit dolor voluptatem molestiae commodi saepe esse nostrum consectetur voluptas et sapiente, minima excepturi consequatur vero soluta, explicabo accusamus? Saepe, natus ut repudiandae culpa commodi sunt quia consequatur. Omnis iure dicta iusto, minus voluptate ut fugit eius saepe rerum, error molestiae, mollitia sunt exercitationem atque dolore ipsa! Possimus minima quas totam rerum ipsa, adipisci exercitationem laborum vel. Voluptatibus inventore assumenda quia dolor eos impedit nam ducimus animi!'
        ]
    ];
    return view('pages.posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

route::get('/post/{slug}', function($slug) {
    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Gani Prasetyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quibusdam rem labore doloremque, fugit dolor voluptatem molestiae commodi saepe esse nostrum consectetur voluptas et sapiente, minima excepturi consequatur vero soluta, explicabo accusamus? Saepe, natus ut repudiandae culpa commodi sunt quia consequatur. Omnis iure dicta iusto, minus voluptate ut fugit eius saepe rerum, error molestiae, mollitia sunt exercitationem atque dolore ipsa! Possimus minima quas totam rerum ipsa, adipisci exercitationem laborum vel. Voluptatibus inventore assumenda quia dolor eos impedit nam ducimus animi!'
        ],

        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Elzan Prasetyo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quibusdam rem labore doloremque, fugit dolor voluptatem molestiae commodi saepe esse nostrum consectetur voluptas et sapiente, minima excepturi consequatur vero soluta, explicabo accusamus? Saepe, natus ut repudiandae culpa commodi sunt quia consequatur. Omnis iure dicta iusto, minus voluptate ut fugit eius saepe rerum, error molestiae, mollitia sunt exercitationem atque dolore ipsa! Possimus minima quas totam rerum ipsa, adipisci exercitationem laborum vel. Voluptatibus inventore assumenda quia dolor eos impedit nam ducimus animi!'
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug){
            $new_post = $post;
        }
    }
    return view('pages.post', [
        'title' => 'Post',
        'post' => $new_post
    ]);
});
