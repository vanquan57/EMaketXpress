<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Users\ProductDetailsController;
use App\Http\Controllers\Admin\Product_detailsController;
use App\Http\Controllers\Admin\Product_imgController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Users\AccountsController;
use App\Http\Controllers\Users\CartController;
use App\Http\Controllers\Users\ChildBoysController;
use App\Http\Controllers\Users\ChildChildrensController;
use App\Http\Controllers\Users\ChildGirlsController;
use App\Http\Controllers\Users\DirectionalViewController;
use App\Http\Controllers\Users\IndexController;
use App\Http\Controllers\Users\PaymentController;
use App\Http\Controllers\Users\VerificationOrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





// Route Login Socialite
Route::prefix('login')->group(function () {
    Route::get('/', function () {
        return view('accounts.login', ['title' => 'Login']);
    })->name('login');
    Route::post('/', [AccountsController::class, 'login']);
    Route::get('/{provider}', [AccountsController::class, 'redirectToProvider']);
    Route::get('/{provider]', [AccountsController::class, 'redirectToProvider']);
    Route::get('/{provider}', [AccountsController::class, 'redirectToProvider']);
});
Route::prefix('auth')->group(function () {
    Route::get('/{provider}/callback', [AccountsController::class, 'handleProviderCallback']);
    Route::get('/{provider]/callback', [AccountsController::class, 'handleProviderCallback']);
    Route::get('/{provider}/callback', [AccountsController::class, 'handleProviderCallback']);
});

// Route Reset Password
Route::prefix('forget-password')->group(function () {
    Route::get('/', [AccountsController::class, 'viewCheckEmailUser']);
    Route::post('/', [AccountsController::class, 'showResetPasswordForm']);
    Route::get('/verify2', [AccountsController::class, 'showVerifyCodeForm'])->name('verifyCodeResetPassword');
    Route::post('/verify2', [AccountsController::class, 'checkVerifyCodeForm']);
    Route::get('/verify3', [AccountsController::class, 'showNewPasswordForm'])->name('showNewPasswordForm');
    Route::post('/verify3', [AccountsController::class, 'updatePassword']);
});
Route::get('/chinh-sach-rieng-tu', function () {
    return '<h1>Chính sách riêng tư</h1>';
});

// Route Register
Route::prefix('register')->group(function () {
    Route::get('/', function () {
        return view('accounts.register', ['title' => 'Sign Up']);
    });
    Route::post('/', [AccountsController::class, 'create']);
    Route::get('/authentication', [AccountsController::class, 'viewAuthentication'])->name('authentication');
    Route::post('/authentication', [AccountsController::class, 'checkAuthentication']);
});



// Admin
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAccountController::class, 'index'])->name('loginAdmin');
    Route::post('/login', [AdminAccountController::class, 'loginAdmin']);
    Route::get('/logout', [AdminAccountController::class, 'logoutAdmin']);
});

Route::group(['middleware' => 'admin'], function () {
    // Các route hoặc controller dành cho admin
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('admin.index', ['title' => 'Admin']);
        })->name('admin');
        Route::post('/upload', [UploadController::class, 'upload']);
        Route::get('/profile', [ProfileController::class, 'index']);
        Route::post('/profile', [ProfileController::class, 'update']);
        Route::get('/tables', function () {
            return view('admin.tables', ['title' => 'Table']);
        });
        Route::get('/forms', function () {
            return view('admin.forms', ['title' => 'Forms']);
        });
        Route::prefix('category')->group(function () {
            Route::get('/', [CategoriesController::class, 'index']);
            Route::post('/', [CategoriesController::class, 'store']);
            Route::get('/list', [CategoriesController::class, 'showViewListCategories'])->name('listCategories');
            Route::get('/edit-{id}', [CategoriesController::class, 'show']);
            Route::post('/edit-{id}', [CategoriesController::class, 'update']);
            Route::delete('/destroy', [CategoriesController::class, 'destroy']);
        });
        Route::prefix('promotions')->group(function () {
            Route::get('/', [PromotionController::class, 'index']);
            Route::post('/', [PromotionController::class, 'store']);
            Route::get('/list', [PromotionController::class, 'showListPromotions'])->name('showListPromotions');
            Route::get('/edit-{id}', [PromotionController::class, 'show']);
            Route::post('/edit-{id}', [PromotionController::class, 'update']);
            Route::delete('/destroy', [PromotionController::class, 'destroy']);
        });

        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'index']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'showViewListSlider'])->name('listsliders');;
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::delete('destroy', [SliderController::class, 'destroy']);
        });

        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'index']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'showViewListProduct'])->name('listproduct');;
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::delete('destroy', [ProductController::class, 'destroy']);
        });
        Route::prefix('product_imgs')->group(function () {
            Route::get('add/{product_img}', [Product_imgController::class, 'index']);
            Route::post('add/{product_img}', [Product_imgController::class, 'store']);
            Route::get('list/{product_img}', [Product_imgController::class, 'showViewListProduct_img'])->name('listproduct_img');;
            Route::get('edit/{product_img}', [Product_imgController::class, 'show']);
            Route::post('edit/{product_img}', [Product_imgController::class, 'update']);
            Route::delete('destroy', [Product_imgController::class, 'destroy']);
        });
        Route::prefix('product_details')->group(function () {
            Route::get('add/{product_details}', [Product_detailsController::class, 'index']);
            Route::post('add/{product_details}', [Product_detailsController::class, 'store']);
            Route::get('list', [Product_detailsController::class, 'showViewListProduct_details'])->name('listproduct_details');;
            Route::get('edit/{product}', [Product_detailsController::class, 'show']);
            Route::post('edit/{product}', [Product_detailsController::class, 'update']);
            Route::delete('destroy', [Product_detailsController::class, 'destroy']);
        });
        Route::prefix('blogs')->group(function(){
            Route::get('add', [BlogController::class, 'index']);
            Route::post('add',[BlogController::class,'store']);
            Route::get('list',[BlogController::class,'showViewListBlog'])->name('listblog');
            Route::get('edit/{slider}',[BlogController::class,'show']);
            Route::post('edit/{slider}',[BlogController::class,'update']);
            Route::delete('destroy',[BlogController::class,'destroy']);   
        });
        Route::prefix('accounts')->group(function(){
            Route::get('list',[AccountsController::class,'showViewListaccount'])->name('listaccount');
            Route::delete('destroy',[AccountsController::class,'destroy']);  
        });
        
        

    });
});
Route::group(['middleware' => 'auth'], function () {
    // Các route hoặc controller dành cho người dùng phải đăng nhập
    Route::get('/logout', [AccountsController::class, 'logout']);
    Route::get('/account-orders', [VerificationOrderController::class, 'ViewAccountOrders']);

    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/cart/verification-order', [VerificationOrderController::class, 'index']);
    Route::post('/get-value-promotion', [VerificationOrderController::class, 'getValuePromotion']);
    Route::post('/cart/verification-order', [VerificationOrderController::class, 'create']);
    Route::get('/payment-successful', [VerificationOrderController::class, 'viewPaymentSuccess'])->where('any', '.*');;

   
});

Route::prefix('comments')->group(function () {
    Route::post('add', [ProductDetailsController::class, 'store']);
});



// Lấy thông tin về thành phố và phường
Route::get('/get-district-or-ward', [VerificationOrderController::class, 'getDistrictOrWard']);

// Thêm sản phẩm vào giỏ hàng
Route::post('/add-product-to-cart', [CartController::class, 'store']);
Route::delete('/remove-product-in-cart', [CartController::class, 'destroy']);
Route::post('/update-product-in-cart', [CartController::class, 'update']);


Route::get('/', [IndexController::class, 'index'])->name('index');

// Trong này xử lý trả về giao diện của các thằng con của 3 thằng Nam , Nữ , Trẻ Em
Route::get('/{slug}-nu', [ChildGirlsController::class, 'index'])
    ->where('slug', '.*');
Route::get('/{slug}-nam', [ChildBoysController::class, 'index'])->where('slug', '.*');
Route::get('/{slug}-tre-em', [ChildChildrensController::class, 'index'])->where('slug', '.*');

// các thằng sản phẩm hắn sẽ nằm ở đây
Route::get('/{slug}', [DirectionalViewController::class, 'directionalView'])->where('slug', '.*');




