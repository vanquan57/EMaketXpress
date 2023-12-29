<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Promotions;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentDateTime = Carbon::now();
        $purchaseOrdersTodays = PurchaseOrder::whereDate('Time', $currentDateTime->toDateString())->get();
        $revenueToday = 0;
        foreach ($purchaseOrdersTodays as $purchaseOrdersToday) {
            $revenueToday += $purchaseOrdersToday->TotalAmount;
        }
        $numberOrdersActive = PurchaseOrder::where('OrderStatus', 1)->count();
        $purchaseOrders = PurchaseOrder::orderByDesc('Purchase_order_ID')->paginate(5);

        return view('admin.purchaseOrders.purchaseOrders', [
            'title' => 'Quản Lý Đơn Hàng',
            'purchaseOrders' => $purchaseOrders,
            'numberOrdersActive' => $numberOrdersActive,
            'revenueToday' => $revenueToday

        ]);
    }
    public function show($purchaseOrderId)
    {

        $purchaseOrder = PurchaseOrder::find($purchaseOrderId);

        $productOrders = $purchaseOrder->products;
        $promotion = Promotions::where('PromotionCode',  $purchaseOrder->PromotionCode)->first();
        return view('admin.purchaseOrders.purchaseOrders', [
            'title' => 'Chi Tiết Đơn Hàng',
            'purchaseOrder' => $purchaseOrder,
            'productOrders' => $productOrders,
            'promotion' => $promotion,

        ]);
    }
}
