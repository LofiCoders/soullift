<?php

namespace App\Http\Controllers;

use App\Models\Story;

class StoryFeedController extends Controller
{
    public function __invoke()
    {
        $stories = Story::latest()->get();

        return view('stories.index', ['stories' => $stories]);
    }
}
