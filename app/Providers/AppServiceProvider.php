<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Category;


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
        View::composer('website.includes.header',function ($view){
            $view->with('categories', Category::all());
        });
    }
}
