<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class StatisticalController extends Controller
{
    public function index()
    {
        return view('admin.statistical.statistical', ['title' => 'Thống Kê']);
    }
    public function getDataStatistical(Request $request)
    {
        $dataPurchaseOrderByDays = PurchaseOrder::selectRaw('DATE(Time) as order_date, SUM(TotalAmount) as total_revenue')
            ->whereBetween('Time', [$request->input('startDay'), $request->input('endDay')])
            ->groupBy('order_date')
            ->orderBy('order_date')
            ->get();
    
        if ($dataPurchaseOrderByDays->isEmpty()) {
            return response()->json([
                'success' => false
            ]);
        }
    
        $arrDays = [];
        $arrTotalInDay = [];
        
        foreach ($dataPurchaseOrderByDays as $dataPurchaseOrderByDay) {
            $arrDays[] = $dataPurchaseOrderByDay->order_date;
            $arrTotalInDay[] = $dataPurchaseOrderByDay->total_revenue;
        }
    
        return response()->json([
            'success' => true,
            'arrDays' => $arrDays,
            'arrTotalInDay' => $arrTotalInDay
        ]);
    }
    
}
