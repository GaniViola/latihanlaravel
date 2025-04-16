<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('pages.posts', [
            'title' => 'posts',
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post) {
        return view('pages.post', [
            'title' => 'post',
            'post' => $post
        ]);
    }
}
