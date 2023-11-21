<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\Admin\Categories;
use App\Models\Admin\Product;
use App\Models\Admin\Product_img;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $categories = Categories::where('ParentId', 0)->get();
        return view( 'admin.product.product',[
            'title' => 'product',
            'categories' => $categories
    ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required'
        ], [
            'product_name.required' => 'Tên tiêu đề không được để trống'

        ]);   
        
        try { 
            $product = Product::create([
                'Name' => (string)$request->input('product_name'),
                'Price' => (string)$request->input('product_price'),
                'Delete_product' => 1,
                'Slug' =>  Str::slug( (string)$request->input('product_name'), '-') ,
                'CategoryID' => (integer)$request->input('categoryid')
            ]);
            $detailedImgArray = $request->detailed_img;
            foreach ($detailedImgArray as $imgUrl) {
                Product_img::create([
                    'ProductID' => $product->id,
                    'ParentId' => 0,
                    'Img' => (string)$imgUrl,
                ]);
            }
            return redirect()->back();

        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back()->with('errorInsertSlider', 'Thêm slider thất bại vui lòng thử lại sau');
        }
    }
       /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Categories::where('ParentId', 0)->get();
        $product_img =Product_img::where('ProductID', $id)->get();
        $product = Product::where('ProductID', $id)->first();
        return view('admin.product.editproduct', [
            'title' => 'Edit Product',
            'product' => $product, 
            'product_img' => $product_img, 
            'categories' => $categories
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required'
        ], [
            'product_name.required' => 'Tên tiêu đề không được để trống'

        ]);   
        try { 
            Product::where('ProductID', (int)$id)->update([
                'Name' => (string)$request->input('product_name'),
                'Price' => (string)$request->input('product_price'),
                'Sale' => (integer)$request->input('Sale'),
                'Price_sale' => (string)$request->input('product_price_sale'),
                'Slug' =>  Str::slug( (string)$request->input('product_name'), '-') ,
                'CategoryID' => (integer)$request->input('categoryid')
            ]);
            
            return redirect()->route('listproduct');

        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back()->with('errorUpdateProductID', 'update sản phẩm thất bại vui lòng thử lại sau');
        }
    }
    public function showViewListProduct(){
        $listproduct = Product::where('Delete_product', 1)->get();
        return view('admin.product.listproduct', [
            'title'=> 'List Product', 
            'listproduct'=>$listproduct
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = (int)$request->input('id');
        try { 
            Product::where('ProductID', $id)->update([
                'Delete_product' => 0,
            ]);
            return response()->json([
                'error' => false
            ]);

        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return redirect()->back()->with('errorUpdateProductID', 'xóa sản phẩm thất bại vui lòng thử lại sau');
        }
    }
}
