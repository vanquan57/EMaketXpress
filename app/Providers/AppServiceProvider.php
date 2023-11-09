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
        $listCategories = $this->getCategories();
        View::share('listCategories', $listCategories);
    }
    private function getCategories($parentId = 0)
    {
        $categories = Categories::where('ParentId', $parentId)->get();

        $result = [];

        foreach ($categories as $category) {
            $children = $this->getCategories($category->CategoryID);

            $result[] = [
                'CategoryID' => $category->CategoryID,
                'Name' => $category->Name,
                'children' => $children,
            ];
        }

        return $result;
    }
}
