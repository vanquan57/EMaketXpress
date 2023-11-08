<?php

namespace App\Providers;

use App\Models\Admin\Categories;
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
        $mainCategories = Categories::where('ParentId' , 0)->get();
        View::share(['mainCategories' , $mainCategories]);
    }
}
