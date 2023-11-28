@extends('layouts.home')
@section('content')
    <div class="lg:mx-5 ">
    @if (session('errorOrderProduct'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Danger alert!</span>{{ session('errorOrderProduct')}}
      </div>
    @endif
        <form action="" method="POST">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-3 ">
                <div class="lg:col-span-2 bg-white mr-1">
                    <div class="w-[100%] flex justify-center items-center">
                        <a href="/"><img src="/images/logo-removebg-preview.png" alt=""
                                class="w-[100px] object-cover"></a>
                    </div>
                    <div class="grid lg:grid-cols-2 gap-5 ">
                        <div class="col-span-1">
                            <h1 class="font-medium text-lg">Thông tin giao hàng</h1>
                            <input type="text" name="nameCustomer" placeholder="Họ Và Tên ..."
                                class="w-[100%] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 mr-2"
                                required>
                            <input type="number" name="phoneCustomer" placeholder="Số Điện Thoại ..."
                                class="w-[100%]  my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 mr-2"
                                required>
                            <div class="group-address">
                                <select name="city"
                                    class="w-[100%] my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 mr-2"
                                    id="city" required>
                                    <option value="">Chọn tỉnh thành</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province['name'] }}" cityCode="{{ $province['code'] }}">
                                            {{ $province['name'] }}</option>
                                    @endforeach
                                </select>

                                <select name="district"
                                    class="w-[100%] my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 mr-2"
                                    id="district" required>
                                    <option value="" selected>Chọn quận huyện</option>
                                </select>

                                <select name="ward"
                                    class="w-[100%] my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 mr-2"
                                    id="ward" required>
                                    <option value="" selected>Chọn phường xã</option>
                                </select>
                            </div>
                            <input type="text" name="addressDetails" placeholder="Ghi Rõ Địa Chỉ (Thôn, Đội, Số nhà) ..."
                                class="w-[100%] my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 mr-2">

                        </div>
                        <div class="col-span-1 ">
                            <h1 class="font-medium text-lg">Phương Thức Thanh toán</h1>
                            <label for="vnpay"
                                class="w-[100%] flex items-center justify-between p-2 my-2  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                                <input type="radio" name="payMethod" id="vnpay" value="vnpay" class="px-2"
                                    required>
                                <span class="px-2 font-normal text-sm">Thanh toán qua thẻ thanh toán, ứng dụng ngân hàng
                                    VNPAY</span>
                                <img class="object-cover inline-block mr-2"
                                    src="https://bizweb.dktcdn.net/assets/themes_support/payment_icon_vnpay.png"
                                    alt="">

                            </label>
                            <label for="paycod"
                                class="w-[100%] flex items-center justify-between p-2 my-2 border bg-gray-50 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                                <input type="radio" name="payMethod" id="paycod" value="paycod" class="px-2"
                                    required>
                                <span class="px-2 font-normal text-sm"> Thanh toán khi nhận hàng (COD)</span>
                                <img class="object-cover inline-block mr-2 w-[50px]"
                                    src="data:image/png;base64,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"
                                    alt="">

                            </label>
                        </div>
                    </div>
                    <p class="font-normal text-sm">Sau khi hoàn tất đơn hàng khoảng 60-90 phút (trong giờ hành chính),
                        EMAKETXPESS sẽ nhanh chóng gọi điện xác nhận lại thời gian giao hàng với bạn. YODY xin cảm ơn!</p>
                </div>
                <div class="lg:col-span-1 bg-[#DAF3FE] pb-5">
                    <h1 class="font-medium text-lg px-2 py-5 border ">Đơn Hàng (2 Sản Phẩm)</h1>
                    <div class="h-[200px] overflow-y-auto overflow-hidden border bg-[#FFFFFF]">
                        @php
                            $totalProductsInCart = 0;
                        @endphp
                        @foreach ($productsOfUser as $productOfUser)
                            @php
                                $totalProductsInCart += $productOfUser->Price_sale * $productOfUser->pivot->ProductNumbers;
                            @endphp
                            <div class="flex mt-2 border p-2">
                                <div class="w-[90px] h-[120px] flex items-center rounded">
                                    <a href="{{ $productOfUser->Slug }}">
                                        <img class="object-cover rounded"
                                            src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/smn6016-kdm-ao-so-mi-nu-3.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="pl-2">
                                    <a class="py-1 hover:text-[#FCAF17]"
                                        href="{{ $productOfUser->Slug }}">{{ $productOfUser->Name }}</a>
                                    <p class="font-medium text-[#FF5500] py-1">
                                        {{ number_format($productOfUser->Price_sale, 0, '.', '.') }} VNĐ<s
                                            class="text-[#8A8A8F] px-2">{{ number_format($productOfUser->Price, 0, '.', '.') }}</s>
                                    </p>
                                    <span class="rounded-full py-1 bg-[#F8F8F8] px-2 mt-1">Kẻ xanh đậm / M</span>
                                    <p class="py-2">Số Lượng {{ $productOfUser->pivot->ProductNumbers }}</p>
                                    <input type="text" name="inforProducts[]" hidden
                                        value="{{ $productOfUser->pivot->ProductID }},{{ $productOfUser->pivot->ProductNumbers}}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="py-2 px-5">
                        <div class="py-1 text-right flex items-center justify-between font-normal text-sm">
                            <input type="text" name="promotionCode" id="promotionCode"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block flex-1 p-2.5 mr-2"
                                placeholder="Nhập mã giảm giá...">
                            <span onclick="getPromotion()"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center hover:cursor-pointer">Áp
                                Dụng</span>
                        </div>
                        <div class="group_overall_costs">
                            <div class="py-1 text-right flex items-center justify-between font-normal text-sm">
                                <span> Tạm Tính:</span>
                                <span class="">{{ number_format($totalProductsInCart, 0, '.', '.') }} VNĐ</span>
                            </div>
                            <div class="py-1 text-right flex items-center justify-between font-normal text-sm">
                                <span>Phí Vận Chuyển:</span>
                                <span>Miễn Phí</span>
                            </div>
                        </div>
                        <div class="py-3 text-right flex items-center justify-between font-normal border-t ">
                            <span class="font-medium">Tổng Cộng:</span>
                            <span class="text-[#FF5500] font-medium "
                                id="totalAmountAfter">{{ number_format($totalProductsInCart, 0, '.', '.') }}
                                VNĐ</span>
                            <input type="text" name="totalProductOrder" id="totalProductOrder" hidden
                                value="{{ $totalProductsInCart }}">
                        </div>
                    </div>
                    <div class="w-[100%] flex justify-center">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-10 py-2.5 text-center hover:cursor-pointer">Đặt
                            Hàng</button>
                    </div>
                    <a href="/cart" class="pl-2 hover:text-orange-300 mt-2 inline-block">
                        < Quay lại giỏ hàng</a>
                </div>
            </div>
        </form>

    </div>
    <script src="/build/assets/js/users/verificationorder.js"></script>
@endsection
