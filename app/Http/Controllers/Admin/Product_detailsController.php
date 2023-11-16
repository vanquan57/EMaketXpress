<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\Product_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Product_detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {   $ProductID = $id;   
        return view( 'admin.product_details.product_details',[
            'title' => 'product',
            'ProductID'=>$ProductID
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $selectedSizes = $_POST['product_size'] ?? [];
        $selectedSizesString = implode(', ', $selectedSizes);
        echo $selectedSizesString;  
        try { 
            Product_details::create([
                'Available_quantity' => (int)$request->input('product_available_quantity'),
                'Description' => (string)$request->input('product_Description'),
                'Color' => (string)$request->input('product_color'),
                'Size' => (string)$selectedSizesString,
                'ProductID' => (int)$request->input('productID'),
            ]);
 
            return redirect()->route('listproduct_details');

        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back()->with('errorInsertSlider', 'Thêm slider thất bại vui lòng thử lại sau');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product_details =Product_details::where('Product_detailsID', $id)->first();
        return view( 'admin.product_details.editproduct_details',[
            'title' => 'Edit Product',
            'product_details' => $product_details
        ]);
    }
    public function showViewListProduct_details()
    {
        $listproduct_details =  Product::join('Product_details', 'Product.ProductID', '=', 'Product_details.ProductID')
        ->select('Product.*','Product_details.Product_detailsID','Product_details.Quantity_sold', 'Product_details.Available_quantity', 'Product_details.Description', 'Product_details.Color', 'Product_details.Size')
        ->get();
    
        // $listproduct_details = Product::with('Product_details')->get();
        return view( 'admin.product_details.listproduct_details',[
             'title'=> 'List Product_details', 
             'listproduct_details'=>$listproduct_details
         ]);
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
    public function update(Request $request,  $id)
    {
        try {
            Product_details::where('Product_detailsID', (int)$id)->update([
                'Available_quantity' => (int)$request->input('product_available_quantity'),
                'Description' => (string)$request->input('product_Description'),
                'Color' =>(string)$request->input('product_color'),
                'Size' => (string)$request->input('product_size'),
                'ProductID' => (int)$request->input('productID')
            ]);
            return redirect()->route('listproduct_details');
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back()->with('errorUpdateproduct_details', 'Sử Update product_details thất bại vui lòng thử lại sau');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = (int)$request->input('id');
        $result = Product_details::where('Product_detailsID', $id)->first();
        if ($result) {
            Product_details::where('Product_detailsID', $id)->delete();
            return response()->json([
                'error' => false
            ]);
        }
    
        return response()->json([
            'error' => true
        ]);
    }
    
}
