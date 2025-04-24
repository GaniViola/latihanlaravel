<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $result = '';
        if (request('category')){
            $titleHalaman = Category::firstWhere('slug', request('category'))->name;
            $result = 'in '. $titleHalaman;
        }elseif (request('user')) {
            $titleHalaman = User::firstWhere('username', request('user'))->name;
            $result = 'by '. $titleHalaman;
        }
        return view('pages.posts', [
            'title' => 'Posts '.$result,
            'title_halaman' => 'All posts '. $result,
            'posts' => Post::latest()->Filter(request(['search', 'category', 'user']))->get()
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
