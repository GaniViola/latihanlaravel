<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('pages.posts', [
            'title' => 'Posts',
            'title_halaman' => 'all data',
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Post $post) {
        return view('pages.post', [
            'title' => 'post',
            'post' => $post
        ]);
    }

    public function authors(User $user){
        return view('pages.posts',[
            'title' => "Posts Author",
            'title_halaman' => $user->name, 
            'posts' => $user->posts->load('user', 'category')
        ]);
    }
}
