<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Promotions;
use App\Models\InfoUser;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OrderConfirmedController extends Controller
{
    // function by Pucharse_Order
    public function index()
    {
        $purchaseOrders = Auth::user()->purchaseOrders->where('OrderStatus', 1);

        $totalProductOrders = Auth::user()->purchaseOrders->count();
        return view(
            'accountorders',
            [
                'title' => 'Trang Đơn Hàng',
                'purchaseOrders' => $purchaseOrders,
                'totalProductOrders' => $totalProductOrders
            ]
        );
    }


    // function by Pucharse_Order details
    public function show($Purchase_order_ID)
    {

        $productOrders = PurchaseOrder::find($Purchase_order_ID)->products;
        $promotion = Promotions::where('PromotionCode',  PurchaseOrder::find($Purchase_order_ID)->PromotionCode)->first();
        return view(
            'accountorders',
            [
                'title' => 'Chi Tiết Đơn Hàng',
                'purchaseOrder' => PurchaseOrder::find($Purchase_order_ID),
                'productOrders' => $productOrders,
                'promotion' => $promotion
            ]
        );
    }
    public function update(Request $request)
    {
        try {
            if ($request->input('method') == 'Cancel') {
                Auth::user()->purchaseOrders->where('Purchase_order_ID', $request->input('Purchase_order_ID'))->first()->update(['OrderStatus' => 0]);
                return response()->json(['success' => true]);
            }
            if ($request->input('method') == 'Update Delivery Status') {
                Auth::user()->purchaseOrders->where('Purchase_order_ID', $request->input('Purchase_order_ID'))->first()->update(['DeliveryStatus' => 1]);
                return response()->json(['success' => true]);
            }
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
        }
    }
    // function address Account
    public function showAddresses()
    {
        $provincesJson = Http::get('https://provinces.open-api.vn/api/');
        $provinces = $provincesJson->json();
        return view(
            'accountorders',
            [
                'title' => 'Sổ Địa Chỉ',
                'infoUserAddressUsers' => Auth::user()->InfoUsers,
                'provinces' => $provinces,
            ]
        );
    }

    public function createNewAddress(Request $request)
    {
        try {
            $accountController = new AccountsController();
            $accountController->createInforUser($request, 0);
            return redirect()->back();
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
        }
    }
    public function updateAddressDefault(Request $request)
    {
        $accountController = new AccountsController();
        if( $accountController->updateAddressDefault($request)){
            return response()->json(['success' => true]);
        }else{
            return response()->json(['success' => false]);
        }
    }
    public function removeAddress(Request $request){
        try {
            InfoUser::find($request->input('infoUserAddressId'))->delete();
            return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            Log::info($th->getMessage());

            return response()->json(['success' => false]);

        }
    }
}
