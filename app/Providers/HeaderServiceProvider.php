<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.header', function ($view) {
            $productByCarts = $this->getProductByCart();
            $view->with('productByCarts', $productByCarts);
        });
    }
    private function getProductByCart()
    {
        
    
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 0) {
                $cartByUser = $user->shoppingCart;
                $productByCarts = $cartByUser->products;
                return $productByCarts;
            }
            return [];
        }
        return [];

        // $cartItems = DB::table('Shopping_cart')
        // ->join('Product_and_cart', 'Shopping_cart.Shopping_cartID', '=', 'Product_and_cart.Shopping_cartID')
        // ->join('Product', 'Product_and_cart.ProductID', '=', 'Product.ProductID')
        // ->join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        // ->where('Shopping_cart.Shopping_cartID', 1)
        // ->select('Product.*', DB::raw('MIN(Product_img.Img) as Img'), 'Product_and_cart.*')
        // ->groupBy(
        //     'Product.ProductID',
        //     'Product_and_cart.Shopping_cartID',
        //     'Product_and_cart.ProductID',
        //     'Product_and_cart.ProductNumbers',
        //     'Product_and_cart.ProductColor',
        //     'Product_and_cart.ProductSize',
        //     'Product_and_cart.Product_cartID' 
        // )
        // ->get();
    }
}
