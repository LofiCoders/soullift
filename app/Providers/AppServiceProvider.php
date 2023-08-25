<?php

namespace App\Providers;

use App\Models\Biography;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('biography', Biography::first());
        View::share('categories', Category::with('posts')->get());
        Schema::defaultStringLength(191);
    }
}
