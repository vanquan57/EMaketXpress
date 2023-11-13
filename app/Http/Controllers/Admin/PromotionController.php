<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PromotionsRequest;
use App\Models\Admin\Categories;
use App\Models\Admin\Promotions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::whereBetween('CategoryID', [1, 7])->get();
        return view('admin.promotion.promotion', ['title' => 'Quản lý mã khuyến mãi', 'categories' => $categories]);
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
    public function store(PromotionsRequest $request)
    {
        if (Promotions::where('PromotionCode', $request->input('PromotionCode'))->exists()) {
            return redirect()->back()->with('PromotionCode', 'Mã khuyến mãi đã tồn tại vui lòng update hoặc đổi mã khác.');
        } else {
            try {
                $categoryID = (int)$request->input('CategoryID');

                if ($categoryID == 0) {
                    // Nếu CategoryID là 0, thêm dữ liệu với các CategoryID từ 1 đến 7
                    for ($i = 1; $i <= 7; $i++) {
                        Promotions::create([
                            'PromotionName' => (string)$request->input('PromotionName'),
                            'PromotionCode' => (string)$request->input('PromotionCode'),
                            'DiscountAmount' => (float)$request->input('DiscountAmount'),
                            'DiscountType' => (int)$request->input('DiscountType'),
                            'StartDate' => $request->input('StartDate'),
                            'EndDate' => $request->input('EndDate'),
                            'Active' => (int)$request->input('Active'),
                            'CategoryID' => $i,
                        ]);
                    }
                    return redirect()->back()->with('successInsertPromotion', 'Tạo mã giảm giá thành công.');
                } else {
                    // Nếu CategoryID khác 0, thêm dữ liệu với CategoryID chỉ định
                    Promotions::create([
                        'PromotionName' => (string)$request->input('PromotionName'),
                        'PromotionCode' => (string)$request->input('PromotionCode'),
                        'DiscountAmount' => (float)$request->input('DiscountAmount'),
                        'DiscountType' => (int)$request->input('DiscountType'),
                        'StartDate' => $request->input('StartDate'),
                        'EndDate' => $request->input('EndDate'),
                        'Active' => (int)$request->input('Active'),
                        'CategoryID' => $categoryID,
                    ]);
                    return redirect()->back()->with('successInsertPromotion', 'Tạo mã giảm giá thành công.');
                }
            } catch (\Throwable $th) {
                Log::info($th->getMessage());
                return redirect()->back()->with('errorInsertPromotion', 'Đã có lỗi xảy ra vui lòng thử lại sau.');
            }
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $promotion = Promotions::find($id);
        if ($promotion) {
            $categories = Categories::whereBetween('CategoryID', [1, 7])->get();

            return view('admin.promotion.editpromotion', ['title' => 'Edit Promotion', 'promotion' => $promotion, 'categories' => $categories]);
        }
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
    public function update(PromotionsRequest $request, $id)
    {

        try {
            Promotions::find($id)->update([
                'PromotionName' => (string)$request->input('PromotionName'),
                'PromotionCode' => (string)$request->input('PromotionCode'),
                'DiscountAmount' => (float)$request->input('DiscountAmount'),
                'DiscountType' => (int)$request->input('DiscountType'),
                'StartDate' => $request->input('StartDate'),
                'EndDate' => $request->input('EndDate'),
                'Active' => (int)$request->input('Active'),
               
            ]);

            return redirect()->route('showListPromotions');
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorUpdatePromotion', 'Đã có lỗi xảy ra vui lòng thử lại sau.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {

        try {
        Promotions::find($request->input('id'))->delete();
        return response()->json(['success' => true]);
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return response()->json(['success' => false]);
        }
    }

    public function showListPromotions()
    {
        $listPromotions = Promotions::get();

        return view('admin.promotion.listpromotions', [
            'title' => 'List Promotions', 'listPromotions' => $listPromotions,
        ]);
    }
}
