<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Promotions;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderConfirmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchaseOrders = Auth::user()->purchaseOrders->where('OrderStatus', 1);
        
        $totalProductOrders = Auth::user()->purchaseOrders->count();
        return view(
            'accountorders',
            [
                'title' => 'Trang Đơn Hàng',
                'purchaseOrders'=> $purchaseOrders,
                'totalProductOrders'=> $totalProductOrders
            ]
        );
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
       
    }

    /**
     * Display the specified resource.
     */
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
    public function update(Request $request)
    {
        try {
            if($request->input('method')== 'Cancel'){
                Auth::user()->purchaseOrders->where('Purchase_order_ID', $request->input('Purchase_order_ID'))->first()->update(['OrderStatus' => 0]);
            return response()->json(['success' => true]);
            }
            if($request->input('method')== 'Update Delivery Status'){
                Auth::user()->purchaseOrders->where('Purchase_order_ID', $request->input('Purchase_order_ID'))->first()->update(['DeliveryStatus' => 1]);
            return response()->json(['success' => true]);
            }
        } catch (\Throwable $th) {
           Log::info($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
