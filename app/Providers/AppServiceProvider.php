<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\Category;
use App\Models\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        foreach($categories as $category){
            $category->subcategories = $category->subcategories;
        }
        $cartCount = Cart::all()->count();
        View::share('categories', $categories);
                View::share('cartCount', $cartCount);
    }
}
