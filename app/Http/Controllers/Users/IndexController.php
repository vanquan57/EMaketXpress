<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Slider;
use App\Models\Admin\Product_img;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $arrayCategoriesGirls =$this->getCategoryItems(10, 6)->concat($this->getCategoryItems(26, 2));
    //     $arrayCategoriesBoys =$this->getCategoryItems(18, 3)->concat( $this->getCategoryItems(59, 4))->concat( $this->getCategoryItems(4, 1));
    //     $arrayCategoriesChildrens =$this->getCategoryItems(90, 6)->concat( $this->getCategoryItems(97, 2));

    //     return view('index', 
    //     [
    //         'title'=> 'Trang Chủ',
    //          'arrayCategoriesGirls' => $arrayCategoriesGirls,
    //          'arrayCategoriesBoys' => $arrayCategoriesBoys,
    //          'arrayCategoriesChildrens' => $arrayCategoriesChildrens,
    //     ]);
        
      
    // }
    
    // private function getCategoryItems($parentId, $number){
    //     return Categories::where('ParentId', $parentId);
    // }


    // private function getCategoryItems($parentId, $number){
    //     return Categories::where('ParentId', $parentId)->take($number)->get();
    // }
    
    public function index()
    {
        $arrayCategoriesGirls = $this->getCategoryItems(10, 6)->merge($this->getCategoryItems(26, 2))->all();
        $arrayCategoriesBoys = $this->getCategoryItems(18, 3)->merge($this->getCategoryItems(59, 4))->merge($this->getCategoryItems(4, 1))->all();
        $arrayCategoriesChildrens = $this->getCategoryItems(90, 6)->merge($this->getCategoryItems(97, 2))->all();
    
        $listProductSale = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Product.Sale', 1)
        ->groupBy('Product.ProductID')
        ->get();
        $imagesSale =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Product.Sale', 1)
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        $listsliders = Slider::where('url','http://127.0.0.1:8000/')->get();
        $listProductGioDong = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Product.Sale', 1)
        ->where(function ($query) {
            $query->where('Slug', 'LIKE', '%ao-khoac%');
            $query->orWhere('Slug', 'LIKE', '%ao-phao%');
        })
        ->groupBy('Product.ProductID')
        ->get();
        $imagesGioDong =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Product.Sale', 1)
        ->where(function ($query) {
            $query->where('Slug', 'LIKE', '%ao-khoac%');
            $query->orWhere('Slug', 'LIKE', '%ao-phao%');
        })
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        $listProductHangmoive= Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Product.Sale', 1)
        ->groupBy('Product.ProductID')
        ->orderBy('Product.ProductID', 'desc')
        ->get();
        $imagesHangmoive =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Product.Sale', 1)
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        $listProductAopolo = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Slug', 'LIKE', '%ao-polo%')
        ->groupBy('Product.ProductID')
        ->get();
        $imagesAopolo =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Slug', 'LIKE', '%ao-polo%')
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        $listProductDocongso = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where(function ($query) {
            $query->where('Slug', 'LIKE', '%quan-au%');
            $query->orWhere('Slug', 'LIKE', '%vay%');
            $query->orWhere('Slug', 'LIKE', '%ao-so-mi%');
        })
        ->groupBy('Product.ProductID')
        ->get();
        $imagesDocongso =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where(function ($query) {
            $query->where('Slug', 'LIKE', '%quan-au%');
            $query->orWhere('Slug', 'LIKE', '%vay%');
            $query->orWhere('Slug', 'LIKE', '%ao-so-mi%');
        })
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        $listProductJeans = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Slug', 'LIKE', '%jeans%')
        ->groupBy('Product.ProductID')
        ->get();
        $imagesJeans =Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
        ->select('Product.ProductID', 'Product_img.Img')
        ->where('Product.Delete_product', 1)
        ->where('Product_img.ParentId', 0)
        ->where('Slug', 'LIKE', '%jeans%')
        ->groupBy('Product.ProductID','Product_img.Img')
        ->orderBy('Product_img.Img', 'asc')
        ->get();
        return view('index', [
            'title'=> 'Trang Chủ',
            'arrayCategoriesGirls' => $arrayCategoriesGirls,
            'arrayCategoriesBoys' => $arrayCategoriesBoys,
            'arrayCategoriesChildrens' => $arrayCategoriesChildrens,
            'listProductSale' => $listProductSale,
            'imagesSale' => $imagesSale,
            'listsliders' => $listsliders,
            'listProductGioDong'=>$listProductGioDong,
             'imagesGioDong'=>$imagesGioDong,
             'listProductHangmoive'=>$listProductHangmoive,
             'imagesHangmoive'=>$imagesHangmoive,
             'listProductAopolo'=>$listProductAopolo,
             'imagesAopolo'=>$imagesAopolo,
             'listProductDocongso'=>$listProductDocongso,
             'imagesDocongso'=>$imagesDocongso,
             'listProductJeans'=>$listProductJeans,
             'imagesJeans'=>$imagesJeans,
        ]);
    }
    
    private function getCategoryItems($parentId, $number){
        return Categories::where('ParentId', $parentId)->take($number)->get();
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
