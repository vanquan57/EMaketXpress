<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Slider;
use App\Models\Admin\Product_img;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class DirectionalViewController extends Controller
{
    
    public function directionalView(Request $request, $slug) {

        $categoryName = Categories::where('Slug',$request->path())->first();
        $mapping = [
            'coupon-xin' => ['view' => 'discountevent', 'title' =>$categoryName->Name],
            'dong-phuc' => ['view' => 'uniform', 'title' =>$categoryName->Name],
            'emaketxpress-yeu' => ['view' => 'specialtyevent', 'title' => $categoryName->Name],
            'nu' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(10, 6)->concat($this->getCategoryItems(26, 2))],
            'nam' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(18, 3)->concat($this->getCategoryItems(59, 4))->concat($this->getCategoryItems(4, 1))],
            'tre-em' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(90, 6)->concat($this->getCategoryItems(97, 2))], 
        ];
        // emaketxpress-yeu
        $listProductAopolo = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Slug', 'LIKE', '%ao-polo%')
        ->groupBy('Product.ProductID')
        ->get();
        $imagesAopolo =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Slug', 'LIKE', '%ao-polo%')
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        $listProductVay = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Slug', 'LIKE', '%vay%')    
        ->groupBy('Product.ProductID')
        ->get();
        $imagesVay =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Slug', 'LIKE', '%vay%')
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        $listProductAosomi = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Slug', 'LIKE', '%ao-so-mi%')
        ->groupBy('Product.ProductID')
        ->get();
        $imagesAosomi =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Slug', 'LIKE', '%ao-so-mi%')
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        $listsliders_emaketxpress = Slider::where('url','http://127.0.0.1:8000/emaketxpress-yeu')->get();
        // coupon-xin
        $listsliders_coupon = Slider::where('url','http://127.0.0.1:8000/coupon-xin')->get();
        $listProductSale = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Product.Sale', 1)
        ->groupBy('Product.ProductID')
        ->get();
        $imagesSale =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Product.Sale', 1)
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        $listProductGioDong = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where(function ($query) {
            $query->where('Slug', 'LIKE', '%ao-khoac%');
            $query->orWhere('Slug', 'LIKE', '%ao-phao%');
        })
        ->groupBy('Product.ProductID')
        ->get();
        $imagesGioDong =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where(function ($query) {
            $query->where('Slug', 'LIKE', '%ao-khoac%');
            $query->orWhere('Slug', 'LIKE', '%ao-phao%');
        })
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        // nu nam tre em
        $TongSp = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Slug', 'LIKE', "%{$request->path()}%")
        ->groupBy('Product.ProductID')
        ->get();


        $sosanpham = 2;
        $result= ceil( $TongSp->count() / $sosanpham);      
        if(isset($_GET['page'])){
            $sotrang = $_GET['page'];
        } else {
            $sotrang = 1;
        }
        $star = ($sotrang -1) * $sosanpham;

        // nu nam tre em
        $listProduct = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Slug', 'LIKE', "%{$request->path()}%")
        ->offset($star)
        ->limit($sosanpham)
        ->groupBy('Product.ProductID')
        ->get();
        $images =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Slug', 'LIKE', "%{$request->path()}%")
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();

        if (isset($mapping[$slug])) {
            $data = $mapping[$slug];
            
            return view($data['view'],
             ['title' => $data['title'],
             'categoryName'=>$categoryName,
             'listProductAopolo'=>$listProductAopolo,
             'listProductAosomi'=>$listProductAosomi,
             'listProductVay'=>$listProductVay,
             'imagesAopolo'=>$imagesAopolo,
             'imagesAosomi'=>$imagesAosomi,
             'imagesVay'=>$imagesVay,
             'listsliders_emaketxpress'=>$listsliders_emaketxpress,

             'listsliders_coupon'=>$listsliders_coupon,
             'listProductSale'=>$listProductSale,
             'imagesSale'=>$imagesSale,
             'listProductGioDong'=>$listProductGioDong,
             'imagesGioDong'=>$imagesGioDong,
             
             'listProduct'=>$listProduct,
             'images'=>$images,
             'result'=>$result,
             'sotrang'=>$sotrang,




             'arrayCategories' => isset($data['categories']) ? $data['categories'] : null]);
        }
        if($categoryName){
            $mapping = [
                'coupon-xin' => ['view' => 'discountevent', 'title' =>$categoryName->Name],
                'dong-phuc' => ['view' => 'uniform', 'title' =>$categoryName->Name],
                'emaketxpress-yeu' => ['view' => 'specialtyevent', 'title' => $categoryName->Name],
                'nu' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(10, 6)->concat($this->getCategoryItems(26, 2))],
                'nam' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(18, 3)->concat($this->getCategoryItems(59, 4))->concat($this->getCategoryItems(4, 1))],
                'tre-em' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(90, 6)->concat($this->getCategoryItems(97, 2))], 
            ];
            // emaketxpress-yeu
            $listProductAopolo = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
            ->where('Product.Delete_product', 1)
            ->where('Slug', 'LIKE', '%ao-polo%')
            ->groupBy('Product.ProductID')
            ->get();
            $imagesAopolo =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product_img.Img')
            ->where('Product.Delete_product', 1)
            ->where('Slug', 'LIKE', '%ao-polo%')
            ->groupBy('Product.ProductID','Product_img.Img')
            ->orderBy('Product_img.Img', 'asc')
            ->get();
            
            $listProductVay = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
            ->where('Product.Delete_product', 1)
            ->where('Slug', 'LIKE', '%vay%')    
            ->groupBy('Product.ProductID')
            ->get();
            $imagesVay =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product_img.Img')
            ->where('Product.Delete_product', 1)
            ->where('Slug', 'LIKE', '%vay%')
            ->groupBy('Product.ProductID','Product_img.Img')
            ->orderBy('Product_img.Img', 'asc')
            ->get();
            $listProductAosomi = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
            ->where('Product.Delete_product', 1)
            ->where('Slug', 'LIKE', '%ao-so-mi%')
            ->groupBy('Product.ProductID')
            ->get();
            $imagesAosomi =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product_img.Img')
            ->where('Product.Delete_product', 1)
            ->where('Slug', 'LIKE', '%ao-so-mi%')
            ->groupBy('Product.ProductID','Product_img.Img')
            ->orderBy('Product_img.Img', 'asc')
            ->get();
            $listsliders_emaketxpress = Slider::where('url','http://127.0.0.1:8000/emaketxpress-yeu')->get();
            // coupon-xin
            $listsliders_coupon = Slider::where('url','http://127.0.0.1:8000/coupon-xin')->get();
            $listProductSale = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
            ->where('Product.Delete_product', 1)
            ->where('Product.Sale', 1)
            ->groupBy('Product.ProductID')
            ->get();
            
            $imagesSale =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product_img.Img')
            ->where('Product.Delete_product', 1)
            ->where('Product.Sale', 1)
            ->groupBy('Product.ProductID','Product_img.Img')
            ->orderBy('Product_img.Img', 'asc')
            ->get();
            $listProductGioDong = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
            ->where('Product.Delete_product', 1)
            ->where(function ($query) {
                $query->where('Slug', 'LIKE', '%ao-khoac%');
                $query->orWhere('Slug', 'LIKE', '%ao-phao%');
            })
            ->groupBy('Product.ProductID')
            ->get();
            $imagesGioDong =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
            ->select('Product.ProductID', 'Product_img.Img')
            ->where('Product.Delete_product', 1)
            ->where(function ($query) {
                $query->where('Slug', 'LIKE', '%ao-khoac%');
                $query->orWhere('Slug', 'LIKE', '%ao-phao%');
            })
            ->groupBy('Product.ProductID','Product_img.Img')
            ->orderBy('Product_img.Img', 'asc')
            ->get();
    
            if (isset($mapping[$slug])) {
                $data = $mapping[$slug];
                
                return view($data['view'],
                 ['title' => $data['title'],
                 'listProductAopolo'=>$listProductAopolo,
                 'listProductAosomi'=>$listProductAosomi,
                 'listProductVay'=>$listProductVay,
                 'imagesAopolo'=>$imagesAopolo,
                 'imagesAosomi'=>$imagesAosomi,
                 'imagesVay'=>$imagesVay,
                 'listsliders_emaketxpress'=>$listsliders_emaketxpress,
    
                 'listsliders_coupon'=>$listsliders_coupon,
                 'listProductSale'=>$listProductSale,
                 'imagesSale'=>$imagesSale,
                 'listProductGioDong'=>$listProductGioDong,
                 'imagesGioDong'=>$imagesGioDong,
    
                 'arrayCategories' => isset($data['categories']) ? $data['categories'] : null]);
            }
        }else{
            $productDetail = Product::where('Slug', $request->path())->first();
            return view('productdetails', [
                'title' => 'Tên Sản Phẩm',
                'productDetail' => $productDetail,
            ]);
        }
        
    }
    private function getCategoryItems($parentId, $number)
    {
        $categories = Categories::where('ParentId', $parentId)
            ->whereNotNull('Image')
            ->take($number)
            ->get();

        return $categories->isNotEmpty() ? $categories : collect();
    }


    // 

}
