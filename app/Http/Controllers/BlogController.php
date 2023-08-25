<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOTools;

class BlogController extends Controller
{
    public function __invoke()
    {

        SEOTools::setTitle('Blog');
        SEOTools::setDescription('List of all blog posts about healing and spiritual growth.');
        SEOTools::opengraph()->setUrl('https://soullift.info/blog');
        SEOTools::setCanonical('https://soullift.info/blog');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage('https://soullift.info/img/logo.jpg');
        $posts = Post::query()->latest()->orderByDesc('created_at')->paginate(10);

        return view('blog.index', ['posts' => $posts]);
    }
}
