<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('pages.categories', [
            'title' => 'Categories',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('pages.posts', [
            'title' => "Posts Category",
            'title_halaman' => $category->name,
            'category' => $category->name,
            'posts' => $category->posts
        ]);
    }
}
