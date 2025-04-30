<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $view->with('categories', Category::with('subcategories')->get());


            $dailyNewsSubcategory = Subcategory::where('slug', 'news')
            ->with('contents')
            ->first();

            $view->with('dailyNews', $dailyNewsSubcategory);
        });
    }
}
