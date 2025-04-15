<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    private static $blog_posts = [
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

    public static function alldata(){
        return self::$blog_posts;
    }

    public static function singlepostdata($slug){
        $posts = self::$blog_posts;
        $new_post = [];
        foreach ($posts as $post) {
            if ($post['slug'] === $slug){
                $new_post = $post;
            }
        }
        return $new_post;
    }
}
