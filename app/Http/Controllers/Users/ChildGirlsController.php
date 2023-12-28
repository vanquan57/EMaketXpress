<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Product_img;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ChildGirlsController extends Controller
{
    public function index(Request $request){
      $categoryCurrent = Categories::where('Slug',$request->path())->first();
      $categoryParent = Categories::where('CategoryID',$categoryCurrent->ParentId)->first();
      $categoryBigParent = Categories::where('CategoryID',$categoryParent->ParentId)->first();

      
      $keywords = explode("-", $categoryCurrent->Slug); 


      $listProductSlug = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
      ->select('Product.*', DB::raw('MIN(Product_img.Img) as Img'))
      ->where('Product.Delete_product', 1)
      ->where(function ($query) use ($keywords) {
          foreach ($keywords as $keyword) {
              $query->where('Slug', 'like', '%' . $keyword . '%');
          }
      })
      ->groupBy('Product.ProductID')
      ->paginate(4);
      // echo$listProductSlug;
  
  
        $imagesSlug =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where(function ($query) use ($keywords) {
          foreach ($keywords as $keyword) {
              $query->where('Slug', 'like', '%' . $keyword . '%');
          }
      })
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();


      return view('productbycategorieschild', [ 
        'title' => $categoryCurrent->Name,
        'categoryParent' => $categoryParent,
        'categoryCurrent'=>$categoryCurrent,
        'categoryBigParent'=>$categoryBigParent,

        'listProductSlug'=>$listProductSlug,
        'imagesSlug'=>$imagesSlug,
      ]);
    }
    public function getProduct(Request $request){
      $listProducts = Categories::where('Slug', 'LIKE', '%'.$request->path().'%')->get();
    }
}
