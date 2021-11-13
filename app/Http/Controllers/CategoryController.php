<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
//    public function posts(Category $category)
//    {
//        $posts = Post::query()
//            ->where('category_id', $category->id)
//            ->get();
//
//        $categories = Category::all();
//        $currentCategory = $category;
//
//        return view('index', compact('posts', 'categories', 'currentCategory'));
//    }
}
