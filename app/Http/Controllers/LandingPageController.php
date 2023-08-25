<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

class LandingPageController extends Controller
{
    public function __invoke()
    {

        SEOTools::setTitle('Home');
        SEOTools::setDescription('Welcome to '.config('app.name').'where you can get the real testimonial about healing and spiritual growth.');
        SEOTools::opengraph()->setUrl('https://soullift.info');
        SEOTools::setCanonical('https://soullift.info');
        SEOTools::opengraph()->addProperty('type', 'WebPage');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage('https://soullift.info/img/logo.jpg');

        return view('welcome');
    }
}
