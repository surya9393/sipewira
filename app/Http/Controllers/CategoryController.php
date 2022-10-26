<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('pages.blog',[
            'title' => "Post by Category : $category->name",
            'posts' => $category->posts->load('category','author')
        ]);
    }

    public function show()
    {
        return view('pages.categories',[
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }
}
