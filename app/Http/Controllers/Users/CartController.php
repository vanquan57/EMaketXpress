<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\Promotions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUser = Auth::user();
        $promotions  = Promotions::get();
        
        if ($currentUser) {
            $productsOfUser = $currentUser->shoppingCart->products;
            $countProducts = $currentUser->shoppingCart->products->count();
        }
        return view('cart', [
            'title' => 'Giỏ Hàng',
            'productsOfUser' => $productsOfUser,
            'countProducts' => $countProducts,
            'promotions' => $promotions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            $colorProduct = (string)$request->input('colorProduct');
            try {
                $productAddToCart = Product::where('Slug', $request->input('slugProductCurrent'))->first();
                $cartByUser = $user->shoppingCart;
                if ($cartByUser->products->contains($productAddToCart->ProductID)) {
                    $cartByUser->products()->updateExistingPivot(
                        $productAddToCart->ProductID,
                        ['ProductNumbers' => $cartByUser->products->find($productAddToCart->ProductID)->pivot->ProductNumbers + (int)$request->input('numberProduct')]
                    );
                } else {
                    
                    $cartByUser->products()->attach($productAddToCart->ProductID, [
                        'ProductNumbers' => (int)$request->input('numberProduct'),
                        'ProductColor' => $colorProduct,
                        'ProductSize' => (string)$request->input('sizeProduct'),
                        'ProductImg' => $colorProduct
                    ]);
                }
                return response()->json([
                    'success' => true,
                    'productByCarts' => $cartByUser->load('products')->products
                ]);
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['notLogged' => true]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            Auth::user()->shoppingCart->products()->updateExistingPivot($request->input('ProductID'), ['ProductNumbers' => $request->input('numberProductUpdate')]);
            return response()->json(['success' => true]);
 
         } catch (\Throwable $th) {
             Log::info($th->getMessage());
             return response()->json(['success' => false]);
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            Auth::user()->shoppingCart->products()->wherePivot('Product_cartID',$request->input('Product_cartID') )->detach();
           return response()->json(['success' => true]);

        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return response()->json(['success' => false]);
        }
    }
}
