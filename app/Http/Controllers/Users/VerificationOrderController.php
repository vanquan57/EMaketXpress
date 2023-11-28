<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Admin\Promotions;
use App\Models\PurchaseOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class VerificationOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUser = Auth::user();
        $productsOfUser = $currentUser->shoppingCart->products;
        $countProducts = $currentUser->shoppingCart->products->count();
        $provincesJson = Http::get('https://provinces.open-api.vn/api/');
        $provinces = $provincesJson->json();

        return view('verificationorder', [
            'title' => 'Xác Thực Đơn Hàng',
            'provinces' => $provinces,
            'productsOfUser' => $productsOfUser,
            'countProducts' => $countProducts
        ]);
    }
    public function viewPaymentSuccess(Request $request)
    {
        if ($request->input() == null) {
            return view('paymentsuccessful', ['title' => 'Xác Thực Đơn Hàng Thành Công']);
        } else {
            if ($request->input('vnp_ResponseCode') == 00 && $request->input('vnp_TxnRef') && $request->input('vnp_TransactionNo')) {
                try {
                    PurchaseOrder::where('Purchase_order_ID', $request->input('vnp_TxnRef'))->update([
                        'PaymentStatus' => 1,
                        'VnPayCode' => $request->input('vnp_TransactionNo')
                    ]);
                    return view('paymentsuccessful', ['title' => 'Xác Thực Đơn Hàng Thành Công']);
                } catch (\Throwable $th) {
                    Log::info($th->getMessage());
                }
            }
        }
    }
    public function ViewAccountOrders(){
        return view('accountorders', ['title' => 'Trang Đơn Hàng']);
    }
    public function getDistrictOrWard(Request $request)
    {
        $urlApi = '';
        if ($request->input('type') == 'district') {
            $urlApi = 'https://provinces.open-api.vn/api/p/' . $request->input('cityCode') . '?depth=2';
            $districtsJson = Http::get($urlApi);
            $districts = $districtsJson->json();
            return response()->json([
                'success' => true,
                'districts' => $districts
            ]);
        }
        if ($request->input('type') == 'ward') {
            $urlApi = 'https://provinces.open-api.vn/api/d/' . $request->input('districtCode') . '?depth=2';
            $wardsJson = Http::get($urlApi);
            $wards = $wardsJson->json();
            return response()->json([
                'success' => true,
                'wards' => $wards
            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->input('payMethod') == 'paycod') {
            try {
                $promotion = Promotions::where('PromotionCode', $request->input('promotionCode'))->first();
                $TotalAmount = $this->calculateTotalAmount($request->input('totalProductOrder'), $promotion);
                $purchaseOrderCreate = $this->createPurchaseOrder($request, $TotalAmount, 'Thanh Toán Khi Nhận Hàng');
                if ($purchaseOrderCreate) {
                    $this->updateUserShoppingCartAndPurchaseOrder($request, $purchaseOrderCreate);
                    return redirect()->to('/payment-successful');
                }
            } catch (\Throwable $th) {
                return redirect()->back()->with('errorOrderProduct', 'Đang có vấn đề về kĩ thuật vui lòng thử lại sau và reload lại trang !');
                Log::info($th->getMessage());
            }
        }
        if ($request->input('payMethod') == 'vnpay') {
            try {
                $promotion = Promotions::where('PromotionCode', $request->input('promotionCode'))->first();
                $TotalAmount = $this->calculateTotalAmount($request->input('totalProductOrder'), $promotion);
                $purchaseOrderCreate = $this->createPurchaseOrder($request, $TotalAmount, 'Thanh Toán Bằng VNPay');
                if ($purchaseOrderCreate) {
                    $this->updateUserShoppingCartAndPurchaseOrder($request, $purchaseOrderCreate);
                    $urlNavigationVNPay = $this->vnpay_Payment($purchaseOrderCreate->Purchase_order_ID, $TotalAmount);
                    return redirect()->to($urlNavigationVNPay);
                }
            } catch (\Throwable $th) {
                return redirect()->back()->with('errorOrderProduct', 'Đang có vấn đề về kĩ thuật vui lòng thử lại sau và reload lại trang !');
                Log::info($th->getMessage());
            }
        }
    }
    protected function calculateTotalAmount($totalProductOrder, $promotion)
    {
        if ($promotion) {
            $promotionValue = $promotion->DiscountType == 1 ? $promotion->DiscountAmount : $promotion->DiscountAmount / 100;
            return $totalProductOrder - $promotionValue;
        } else {
            return $totalProductOrder;
        }
    }
    protected function createPurchaseOrder($request, $TotalAmount, $PaymentMethod)
    {
        $currentDateTime = Carbon::now();
        $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');
        return PurchaseOrder::create([
            'Name' => $request->input('nameCustomer'),
            'Address' => $request->input('city') . ',' . $request->input('district') . ',' . $request->input('ward') . ',' . $request->input('addressDetails'),
            'Time' => $formattedDateTime,
            'Phone_number' => $request->input('phoneCustomer'),
            'PromotionCode' => $request->input('promotionCode'),
            'OrderStatus' => 1,
            'PaymentStatus' => 0,
            'TotalAmount' => $TotalAmount,
            'PaymentMethod' => $PaymentMethod,
            'IdUser' => Auth::user()->id
        ]);
    }
    protected function updateUserShoppingCartAndPurchaseOrder($request, $purchaseOrderCreate)
    {
        Auth::user()->shoppingCart->products()->detach();
        $inforProducts = $request->input('inforProducts');
        foreach ($inforProducts as $inforProduct) {
            $arrinforProduct = explode(',', $inforProduct);
            $purchaseOrderCreate->products()->attach($arrinforProduct[0], ['ProductNumbers' => $arrinforProduct[1]]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    public function show()
    {
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
    protected function vnpay_Payment($Purchase_order_ID, $TotalAmount)
    {

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "/payment-successful";
        $vnp_TmnCode = "XM23TBBT"; //Mã website tại VNPAY 
        $vnp_HashSecret = "HETYMABOLHRWRFTEERNVJDCMPFPISEQU"; //Chuỗi bí mật

        $vnp_TxnRef = $Purchase_order_ID; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Hoàn Thành Thanh Toán Với Hóa Đơn Của EMAKETXPRESS";
        $vnp_OrderType = "EMAKETXPRESS SHOP";
        $vnp_Amount = $TotalAmount * 100;
        $vnp_Locale = "VN";
        $vnp_BankCode = "";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            return $vnp_Url;
        }
    }
    public function getValuePromotion(Request $request)
    {
        $promotion = Promotions::where('PromotionCode', $request->input('promotionCode'))->first();
        if ($promotion) {
            $valuePromotion = $promotion->DiscountType == 1 ? $promotion->DiscountAmount : ($promotion->DiscountAmount / 100) * $request->input('totalProductOrder');
            return response()->json([
                'success' => true,
                'valuePromotion' => $valuePromotion,

            ]);
        }
    }
}
