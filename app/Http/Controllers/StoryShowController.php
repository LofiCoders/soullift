<?php

namespace App\Http\Controllers;

use App\Models\Story;

class StoryShowController extends Controller
{
    public function __invoke(Story $story)
    {

        return view('stories.show', ['story' => $story]);

    }
}
