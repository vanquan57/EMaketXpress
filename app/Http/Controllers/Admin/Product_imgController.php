<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use App\Models\Admin\Product_img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Product_imgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $product_imgs = Product_img::where('ParentId', 0)
        ->where('ProductID', $id)
        ->get();
        $ProductID = (int)$id;
        return view('admin.product_img.product_img', [
            'title' => 'product',
            'ProductID'=>$ProductID,
            'product_imgs' => $product_imgs
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
        $request->validate([
            'ParentId' => 'required',
            'detailed_img.*'  => 'required'
        ], [
            'ParentId.required' => 'ParentId không được để trống',
            'detailed_img.required' => 'ảnh chi tiết không được để trống'
        ]); 
        $detailedImgArray = $request->detailed_img;
    
            try {
                foreach ($detailedImgArray as $imgUrl) {
                    Product_img::create([
                        'Img' => (string)$imgUrl,
                        'ParentId' => (int)$request->input('ParentId'),
                        'ProductID' => (int)$request->input('productID')
                    ]);
                }
                return redirect()->route('listproduct_img', ['product_img' => (int)$request->input('productID')]);

            } catch (\Throwable $th) {
                Log::info($th->getMessage());
                return redirect()->back()->with('errorInsertCategory', 'Thêm Ảnh thất bại vui lòng thử lại sau');
            }
       

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product_img = Product_img::where('Product_imgID', $id)->first();


        $product_imgs = Product_img::where('ParentId', 0)
        ->where('ProductID', $product_img->ProductID)
        ->get();

        return view('admin.product_img.editproduct_img', [
            'title' => 'Edit Product',
            'product_imgs' => $product_imgs,
            'product_img' => $product_img
        ]);
    }
    public function showViewListProduct_img(string $id)
    { 
        $listproduct_img = Product_img::where('ProductID', $id)->get();
       $ProductID = $id;
        return view('admin.product_img.listproduct_img', [
            'title'=> 'List Product_img', 
            'ProductID'=>$ProductID,
            'listproduct_img'=>$listproduct_img
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
    public function update(Request $request, string $id)
    {
        $request->validate([
            'ParentId' => 'required'
        ], [
            'ParentId.required' => 'ParentId không được để trống'
        ]); 
        $imagePath = $request->thumb;
        $pathInfo = pathinfo($imagePath);
        $filenameWithExtension = $pathInfo['filename'] . '.' . $pathInfo['extension'];
        echo$filenameWithExtension;


            try {
                Product_img::where('Product_imgID', $id)->update([
                    'Img' => (string)$filenameWithExtension,
                    'ParentId' => (int)$request->input('ParentId'),
                    'ProductID' => (int)$request->input('productID'),
                    'Color' => (string)$request->input('Color')
                ]);
                return redirect()->route('listproduct_img', ['product_img' => (int)$request->input('productID')]);

            } catch (\Throwable $th) {
                Log::info($th->getMessage());
                return redirect()->back()->with('errorInsertCategory', 'Thêm Ảnh thất bại vui lòng thử lại sau');
            }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = (int)$request->input('id');
        $result = Product_img::where('Product_imgID', $id)->first();
        $children = Product_img::where('ParentId', $id)->get();
        if ($result) {
            Product_img::where('Product_imgID', $id)->delete();
            if ($children->isNotEmpty()) {
                Product_img::where('ParentId', $id)->delete();
            }
            return response()->json([
                'error' => false
            ]);
        }
      
        return response()->json([
            'error' => true
        ]);
    }
}
