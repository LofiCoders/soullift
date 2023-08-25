<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = $category->posts()->paginate(12);

        return view('category.index', ['posts' => $posts, 'category' => $category]);
    }
}
