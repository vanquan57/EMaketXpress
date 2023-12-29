<?php

namespace App\Http\Controllers\Users;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Admin\Categories;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Slider;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\PurchaseOrder;
use App\Models\Admin\Product_img;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class DirectionalViewController extends Controller
{

    public function directionalView(Request $request, $slug)
    {

        $categoryName = Categories::where('Slug', $request->path())->first();

        if ($categoryName) {
            $mapping = [
                'coupon-xin' => ['view' => 'discountevent', 'title' => $categoryName->Name],
                'dong-phuc' => ['view' => 'uniform', 'title' => $categoryName->Name],
                'emaketxpress-yeu' => ['view' => 'specialtyevent', 'title' => $categoryName->Name],
                'nu' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(10, 6)->concat($this->getCategoryItems(26, 2))],
                'nam' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(18, 3)->concat($this->getCategoryItems(59, 4))->concat($this->getCategoryItems(4, 1))],
                'tre-em' => ['view' => 'productbycategoriesparent', 'title' => $categoryName->Name, 'categories' => $this->getCategoryItems(90, 6)->concat($this->getCategoryItems(97, 2))],
            ];
            // emaketxpress-yeu
            $listProductAopolo = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Slug', 'LIKE', '%ao-polo%')
                ->groupBy('Product.ProductID')
                ->get();
            $imagesAopolo = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product_img.Img')
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Slug', 'LIKE', '%ao-polo%')
                ->groupBy('Product.ProductID', 'Product_img.Img')
                ->orderBy('Product_img.Img', 'asc')
                ->get();
            $listProductVay = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Slug', 'LIKE', '%vay%')
                ->groupBy('Product.ProductID')
                ->get();
            $imagesVay = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product_img.Img')
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Slug', 'LIKE', '%vay%')
                ->groupBy('Product.ProductID', 'Product_img.Img')
                ->orderBy('Product_img.Img', 'asc')
                ->get();
            $listProductAosomi = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Slug', 'LIKE', '%ao-so-mi%')
                ->groupBy('Product.ProductID')
                ->get();
            $imagesAosomi = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product_img.Img')
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Slug', 'LIKE', '%ao-so-mi%')
                ->groupBy('Product.ProductID', 'Product_img.Img')
                ->orderBy('Product_img.Img', 'asc')
                ->get();
            $listsliders_emaketxpress = Slider::where('url', 'http://127.0.0.1:8000/emaketxpress-yeu')->get();
            // coupon-xin
            $listsliders_coupon = Slider::where('url', 'http://127.0.0.1:8000/coupon-xin')->get();
            $listProductSale = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Product.Sale', 1)
                ->groupBy('Product.ProductID')
                ->get();
            $imagesSale = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product_img.Img')
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Product.Sale', 1)
                ->groupBy('Product.ProductID', 'Product_img.Img')
                ->orderBy('Product_img.Img', 'asc')
                ->get();
            $listProductGioDong = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where(function ($query) {
                    $query->where('Slug', 'LIKE', '%ao-khoac%');
                    $query->orWhere('Slug', 'LIKE', '%ao-phao%');
                })
                ->groupBy('Product.ProductID')
                ->get();
            $imagesGioDong = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product_img.Img')
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where(function ($query) {
                    $query->where('Slug', 'LIKE', '%ao-khoac%');
                    $query->orWhere('Slug', 'LIKE', '%ao-phao%');
                })
                ->groupBy('Product.ProductID', 'Product_img.Img')
                ->orderBy('Product_img.Img', 'asc')
                ->get();

            // nu nam tre em
            $listProduct= Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.*', DB::raw('MIN(Product_img.Img) as Img'))
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Slug', 'LIKE', "%{$request->path()}%")
                ->groupBy('Product.ProductID')
                ->paginate(10);
            $images = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product_img.Img')
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Slug', 'LIKE', "%{$request->path()}%")
                ->groupBy('Product.ProductID', 'Product_img.Img')
                ->orderBy('Product_img.Img', 'asc')
                ->get();
                $listProductSale5 = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
                ->where('Product.Delete_product', 1)
                ->where('Product_img.ParentId', 0)
                ->where('Product.Sale', 1)
                ->groupBy('Product.ProductID')
                ->inRandomOrder() // Lấy ngẫu nhiên
                ->take(5)
                ->get();


            $productIDs = $listProductSale5->pluck('ProductID')->toArray();

            $imagesSale5 = Product_img::whereIn('ProductID', $productIDs)
                ->where('ParentId', 0)
                ->orderBy('Img', 'asc')
                ->get();


            if (isset($mapping[$slug])) {
                $data = $mapping[$slug];
                return view(
                    $data['view'],
                    [
                        'title' => $data['title'],
                        'categoryName' => $categoryName,
                        'listProductAopolo' => $listProductAopolo,
                        'listProductAosomi' => $listProductAosomi,
                        'listProductVay' => $listProductVay,
                        'imagesAopolo' => $imagesAopolo,
                        'imagesAosomi' => $imagesAosomi,
                        'imagesVay' => $imagesVay,
                        'listsliders_emaketxpress' => $listsliders_emaketxpress,
                        'listsliders_coupon' => $listsliders_coupon,
                        'listProductSale' => $listProductSale,
                        'imagesSale' => $imagesSale,
                        'listProductSale5' => $listProductSale5,
                        'imagesSale5' => $imagesSale5,
                        'listProductGioDong' => $listProductGioDong,
                        'imagesGioDong' => $imagesGioDong,
                        'listProduct' => $listProduct,
                        'images' => $images,
                        'arrayCategories' => isset($data['categories']) ? $data['categories'] : null
                    ]
                );
            }
        } else {
            // $productDetail = Product::where('Slug', $request->path())->first();
            $productDetail = Product::join('Product_details', 'Product.ProductID', '=', 'Product_details.ProductID')
                ->where('Product.Slug', $request->path())
                ->first();

            $productSlug = Product::where('Slug', $request->path())->first();
            if ($productSlug != null) {
                if ($productDetail === null) {
                    $jsonString = json_encode([
                                "ProductID" =>$productSlug->ProductID,
                                "Size" => '',                 
                                "Name" => $productSlug->Name,
                                "Price" => $productSlug->Price,
                                "Price_sale" => $productSlug->Price_sale,
                                "Slug" => $productSlug->Slug,
                                "CategoryID" => $productSlug->CategoryID
                            ]);
                    $productDetail = json_decode($jsonString);
                    // dd($productDetail);
                }
                $ParentId_img = Product_img::where('ProductID', $productDetail->ProductID)
                    ->where('ParentId', 0)
                    ->get();
    
                $product_img = Product_img::where('ProductID', $productDetail->ProductID)
                    ->where('ParentId', '!=', 0)
                    ->get();
    
                $currentUser = Auth::user();
                if ($currentUser) {
                    $checkPurchaseOrder = PurchaseOrder::join('order_details', 'Purchase_order.Purchase_order_ID', '=', 'order_details.Purchase_order_ID')
                    ->where('Purchase_order.IdUser', $currentUser->id)
                    ->where('order_details.ProductID', $productDetail->ProductID)
                    ->exists() ? 1 : 0;
                    $checkAdmin = User::where('id',  $currentUser->id)
                        ->select('role')->first();
                    $checkAvatar = User::where('id',  $currentUser->id)
                        ->whereNotNull('avatar')
                        ->exists() ? 1 : 0;
                    $UserAvatarNow = User::where('id', $currentUser->id)->select('avatar')->first();
                } else {
                    $checkPurchaseOrder = 0;
                    $checkAdmin = User::where('id',  0)->select('role')->first();
                    $checkAvatar = 0;
                    $UserAvatarNow = null;
                }
                $comment = Comment::join('users', 'comments.ID_account', '=', 'users.id')
                    ->select('users.username', 'users.avatar', 'comments.*')
                    ->where('ProductID', $productDetail->ProductID)
                    ->orderBy('comments.Time', 'desc')
                    ->get();
    
                $star5CountsByAccount = Comment::select('ID_account', DB::raw('COUNT(Star) as star_count'))
                    ->where('Star', 5)
                    ->groupBy('ID_account')
                    ->get();
                $star4CountsByAccount = Comment::select('ID_account', DB::raw('COUNT(Star) as star_count'))
                    ->where('Star', 4)
                    ->groupBy('ID_account')
                    ->get();
    
                $star3CountsByAccount = Comment::select('ID_account', DB::raw('COUNT(Star) as star_count'))
                    ->where('Star', 3)
                    ->groupBy('ID_account')
                    ->get();
    
                $star2CountsByAccount = Comment::select('ID_account', DB::raw('COUNT(Star) as star_count'))
                    ->where('Star', 2)
                    ->groupBy('ID_account')
                    ->get();
    
                $star1CountsByAccount = Comment::select('ID_account', DB::raw('COUNT(Star) as star_count'))
                    ->where('Star', 1)
                    ->groupBy('ID_account')
                    ->get();
    
    
                
                $totalSum = $star1CountsByAccount->count() + $star2CountsByAccount->count() +
                    $star3CountsByAccount->count() + $star4CountsByAccount->count() +
                    $star5CountsByAccount->count();
    
                $sizeArray = Str::of($productDetail->Size)->explode(', ');
    
                $listProductSale = Product::join('Product_img', 'Product.ProductID', '=', 'Product_img.ProductID')
                    ->select('Product.ProductID', 'Product.*', DB::raw('MIN(Product_img.Img) as Img'))
                    ->where('Product.Delete_product', 1)
                    ->where('Product_img.ParentId', 0)
                    ->where('Product.Sale', 1)
                    ->groupBy('Product.ProductID')
                    ->inRandomOrder() // Lấy ngẫu nhiên
                    ->take(5)
                    ->get();
    
    
                $productIDs = $listProductSale->pluck('ProductID')->toArray();
    
                $imagesSale = Product_img::whereIn('ProductID', $productIDs)
                    ->where('ParentId', 0)
                    ->orderBy('Img', 'asc')
                    ->get();
                return view('productdetails', [
                    'title' => $productSlug->Name,
                    'productDetail' => $productDetail,
                    'listProductSale' => $listProductSale,
                    'productSlug' => $productSlug,
                    'imagesSale' => $imagesSale,
                    'ParentId_img' => $ParentId_img,
                    'product_img' => $product_img,
                    'checkPurchaseOrder' => $checkPurchaseOrder,
                    'checkAvatar' => $checkAvatar,
                    'UserAvatarNow' => $UserAvatarNow,
                    'checkAdmin' => $checkAdmin,
                    'comment' => $comment,
                    'sizeArray' => $sizeArray,
                    'totalSum' => $totalSum,
                    'star1CountsByAccount' => $star1CountsByAccount,
                    'star2CountsByAccount' => $star2CountsByAccount,
                    'star3CountsByAccount' => $star3CountsByAccount,
                    'star4CountsByAccount' => $star4CountsByAccount,
                    'star5CountsByAccount' => $star5CountsByAccount,
                ]);
            }else{
                return view('productdetails', [
                    'title' => 'Tên Sản Phẩm',
                    'productSlug' => $productSlug,
                ]);
            }

            // $productSlug = null;
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


    public function searchProducts(Request $request)
{
    $slugProduct = Str::of($request->input('query'))->slug('-');
    $keywords = explode('-', $slugProduct);

    $queryProductByKeyWords = Product::with(['Product_img' => function ($query) {
            $query->where('ParentId', 0);
        }])
        ->where(function ($query) use ($keywords) {
            foreach ($keywords as $keyword) {
                $query->where('Slug', 'like', '%' . $keyword . '%');
            }
        })
        ->has('Product_img')
        ->get();

    return view(
        'productbycategorieschild',
        [
            'title' => 'Tìm Kiếm',
            'productsResults' => $queryProductByKeyWords
        ]
    );
}

}
