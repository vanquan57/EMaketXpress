<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Product_img;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ChildBoysController extends Controller
{
    public function index(Request $request){
        $categoryCurrent = Categories::where('Slug',$request->path())->first();
        $categoryParent = Categories::where('CategoryID',$categoryCurrent->ParentId)->first();
      $categoryBigParent = Categories::where('CategoryID',$categoryParent->ParentId)->first();

      $TongSp = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
      ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
      ->where('Product.Delete_product', 1)
      ->where('Slug', 'LIKE', '%'.$categoryCurrent->Slug.'%')
      ->groupBy('Product.ProductID')
      ->get();
      $sosanpham = 1;
        $result= ceil( $TongSp->count() / $sosanpham);      
        if(isset($_GET['page'])){
            $sotrang = $_GET['page'];
        } else {
            $sotrang = 1;
        }
        $star = ($sotrang -1) * $sosanpham;
        // ->offset($star)
        // ->limit($sosanpham)
        $listProductSlug = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Slug', 'LIKE', '%'.$categoryCurrent->Slug.'%')
        ->offset($star)
        ->limit($sosanpham)
        ->groupBy('Product.ProductID')
        ->get();
      $imagesSlug =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
      ->select('Product.ProductID', 'Product_img.Img')
      ->where('Product.Delete_product', 1)
      ->where('Slug', 'LIKE', '%'.$categoryCurrent->Slug.'%')
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
           'result'=>$result,
           'sotrang'=>$sotrang,
        ]);
      }
}
