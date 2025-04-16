<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('pages.category', [
            'title' => 'Category',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('pages.coba', [
            'title' => 'Coba',
            'posts' => $category
        ]);
    }
}
