<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Users\AccountsController;
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

Route::get('/', function () {
    return view('index', ['title' => 'Trang chủ']);
})->name('index');



Route::group(['middleware' => 'auth'], function () {
    // Các route hoặc controller dành cho người dùng
    Route::get('/abc', [AccountsController::class, 'abc']);
});
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
        Route::get('/profile', [ProfileController::class, 'index']);
        Route::post('/profile', [ProfileController::class, 'update']);
        Route::post('/profile/upload', [UploadController::class, 'upload']);
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
    });
});
