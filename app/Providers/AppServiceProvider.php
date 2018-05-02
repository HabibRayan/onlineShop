<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.include.header',function ($view){
            $view->with('publishedCategories',Category::where('publication_status',1)->get());
        });
        View::composer('front.include.footer',function ($view){
            $view->with('publishedCategories',Category::where('publication_status',1)->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
