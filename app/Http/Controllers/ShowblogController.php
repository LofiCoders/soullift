<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ShowblogController extends Controller
{
    public function __invoke(Post $post)
    {

        return view('blog.show', ['post' => $post]);
    }
}
