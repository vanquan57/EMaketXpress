@extends('layouts.home')
@section('content')
    <div class="w-screen  bg-[#F8F8F8] ">
        <div class="text-center w-[100%] py-10">
            <p class="font-normal text-xs">TÀI KHOẢN</p>
            <h1 class="font-medium text-xl text-[#FCAF17]">TÀI KHOẢN</h1>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-5 lg:mx-[30px]">
            <div class="col-span-1 bg-white rounded-sm">
                <div class="flex flex-col justify-center items-center border">
                    <img class="object-cover rounded-full inline-block my-2  w-[90px] h-[90px]"
                        src="{{ Auth::user()->avatar ? Auth::user()->avatar : 'https://bizweb.dktcdn.net/100/438/408/themes/931909/assets/account_ava.jpg?1701143626189' }}"
                        alt="">
                    <p class="text-center text-sm font-medium">{{ Auth::user()->username }}</p>
                    <a href="/logout" class="my-2 w-[80%] bg-[#FCAF17] rounded-lg inline-block text-center">Đăng Xuất</a>
                </div>
                <div class="mt-3">
                    <div class="flex  items-center p-2 bg-[#FEEEEA] text-[#FCAF17]">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/931909/assets/acc_user_2_hover.svg"
                            alt="">
                        <a href="/purchase-orders-detail" class="pl-2">Đơn Hàng Của Tôi</a>
                    </div>
                    <div class="flex  items-center p-2 ">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/931909/assets/acc_user_1.svg" alt="">
                        <a href="#" class="pl-2">Tài Khoản Của Tôi</a>
                    </div>
                    <div class="flex  items-center p-2 ">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/931909/assets/acc_user_4.svg" alt="">
                        <a href="" class="pl-2">Sổ Địa Chỉ</a>
                    </div>
                    <div class="flex  items-center p-2 ">
                        <img src="	https://bizweb.dktcdn.net/100/438/408/themes/931909/assets/acc_user_6.svg"
                            alt="">
                        <a href="" class="pl-2">Sản Phẩm Yêu Thích</a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-3 col-span-1  bg-white rounded-sm ">
                @if ($title == 'Trang Đơn Hàng')
                    <div>
                        <div class="p-3">
                            <span class="font-medium text-lg text-[#FCAF17]">Đơn hàng của tôi <span
                                    class="font-normal text-base text-[#7A8FAA]">
                                    @if ($totalProductOrders)
                                        ({{ $totalProductOrders }} đơn hàng)
                                    @endif
                                </span></span>

                        </div>
                        <div class="container p-2 mx-auto sm:p-4 dark:text-gray-100">
                            <h2 class="mb-4 text-2xl font-semibold leadi">Danh Sách Đơn Hàng</h2>
                            <div class="overflow-x-auto">
                                <table class="min-w-full text-xs max-lg:overflow-x-auto">
                                    <thead class="dark:bg-gray-700">
                                        <tr class="text-center">
                                            <th class="p-3">Mã Đơn Hàng #</th>
                                            <th class="p-3">Tên Khách Hàng</th>
                                            <th class="p-3">Ngày Mua</th>
                                            <th class="p-3">Địa Chỉ</th>
                                            <th class="p-3 text-right">Giá trị đơn hàng</th>
                                            <th class="p-3">Trạng Thái Đơn Hàng</th>
                                            <th class="p-3">Trạng thái thanh toán</th>
                                            <th class="p-3">Trạng thái giao hàng</th>
                                            <th class="p-3">&nbsp</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @if ($purchaseOrders)
                                            @foreach ($purchaseOrders as $purchaseOrder)
                                                <tr id="row_purchase_Order-{{ $purchaseOrder->Purchase_order_ID }}"
                                                    class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900 hover:bg-neutral-100">
                                                    <td class="p-3">
                                                        <a href="/account-orders-{{ $purchaseOrder->Purchase_order_ID }}"
                                                            class="hover:text-[#FCAF17] hover:underline">{{ $purchaseOrder->Purchase_order_ID }}</a>
                                                    </td>
                                                    <td class="p-3">
                                                        <p>{{ $purchaseOrder->Name }}</p>
                                                    </td>
                                                    <td class="p-3">
                                                        <p>{{ $purchaseOrder->Address }}</p>

                                                    </td>
                                                    <td class="p-3">
                                                        <p>{{ $purchaseOrder->Time }}</p>

                                                    </td>
                                                    <td class="p-3">
                                                        <p>{{ number_format($purchaseOrder->TotalAmount, 0, '.', '.') }} VNĐ
                                                        </p>
                                                    </td>
                                                    <td class="p-3">
                                                        <p>{{ $purchaseOrder->OrderStatus == 0 ? 'Chưa Xác Nhận' : 'Đã Xác Nhận' }}
                                                        </p>
                                                    </td>
                                                    <td class="p-3">
                                                        <p>
                                                            @if ($purchaseOrder->PaymentStatus == 0 && $purchaseOrder->PaymentMethod == 'Thanh Toán Bằng VNPay')
                                                                <form action="/payment-order" method="POST">
                                                                    @csrf
                                                                    <input hidden type="text" name="Purchase_order_ID"
                                                                        value="{{ $purchaseOrder->Purchase_order_ID }}">
                                                                    <input hidden type="text" name="TotalAmount"
                                                                        value="{{ $purchaseOrder->TotalAmount }}">
                                                                    <button type="submit"
                                                                        class="paymentBtn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg  px-2 py-1.5  focus:outline-none ">
                                                                        Thanh Toán Ngay
                                                                    </button>
                                                                </form>
                                                            @endif
                                                            @if ($purchaseOrder->PaymentStatus == 1 && $purchaseOrder->PaymentMethod == 'Thanh Toán Bằng VNPay')
                                                                {{ 'Đã Thanh Toán' }}
                                                            @endif
                                                            @if ($purchaseOrder->PaymentStatus == 0 && $purchaseOrder->PaymentMethod == 'Thanh Toán Khi Nhận Hàng')
                                                                {{ 'Chưa Thanh Toán' }}
                                                            @endif
                                                        </p>
                                                    </td>
                                                    <td class="p-3">
                                                        <p>{{ $purchaseOrder->DeliveryStatus == 0 ? 'Đang Giao Hàng' : 'Đã Giao Hàng' }}
                                                        </p>
                                                    </td>
                                                    <td class="p-3">
                                                        @if ($purchaseOrder->DeliveryStatus == 0)
                                                            <button
                                                            onclick="cancelPurchase({{$purchaseOrder->Purchase_order_ID}})"
                                                                class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg  px-2 py-1.5  focus:outline-none ">Hủy Bỏ
                                                                Đơn Hàng</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($title == 'Chi Tiết Đơn Hàng')
                    <div>
                        <div class="px-3 py-5 border">
                            <a href="/account-orders" class="font-medium hover:text-[#FCAF17]"><i
                                    class="fa-solid fa-arrow-left"></i>
                                Trang Đơn Hàng
                                #{{ $purchaseOrder->Purchase_order_ID }}</a>
                        </div>
                        <div class="p-2 text-sm">
                            <p>Trạng thái đơn hàng: <strong
                                    class="text-[#FCAF17]">{{ $purchaseOrder->OrderStatus == 0 ? 'Chưa Xác Nhận' : 'Đã Xác Nhận' }}</strong>
                            </p>
                            <p>Trạng thái thanh toán: <strong
                                    class="text-[#FCAF17]">{{ $purchaseOrder->PaymentStatus == 0 ? 'Chưa Thanh Toán' : 'Đã Thanh Toán' }}</strong>
                            </p>
                            <p>Trạng thái Giao Hàng: <strong
                                    class="text-[#FCAF17] Delivery-Status">{{ $purchaseOrder->DeliveryStatus == 0 ? 'Đang Giao Hàng' : 'Đã Giao Hàng' }}</strong>
                            </p>

                        </div>
                    </div>
                    <div class="text-sm flex overflow-y-hidden overflow-x-auto w-[100%] mr-5">
                        <div>
                            <span class="px-2">Địa Chỉ Giao Hàng</span>
                            <div class="border py-2 px-3 h-[100%] mt-2">
                                <p>Tên: <strong>{{ $purchaseOrder->Name }}</strong></p>
                                <p>Địa Chỉ: <strong>{{ $purchaseOrder->Address }}</strong></p>
                                <p>Số Điện Thoại: <strong>{{ $purchaseOrder->Phone_number }}</strong></p>
                            </div>
                        </div>
                        <div>
                            <span>Thanh Toán</span>
                            <div class="border py-2 px-3 h-[100%] mt-2">
                                <p>Phương Thức Thanh Toán: <strong>{{ $purchaseOrder->PaymentMethod }}</strong></p>
                            </div>
                        </div>
                        <div class="flex-1">
                            <span>Ghi Chú</span>
                            <div class="border py-2 px-3 h-[100%] mt-2">
                                Không có ghi Chú
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-xs max-lg:overflow-x-auto max-lg:mr-5">
                                <thead class="bg-[#f8f8f8]">
                                    <tr class="text-center">
                                        <th class="p-3">Sản phẩm</th>
                                        <th class="p-3">Đơn giá</th>
                                        <th class="p-3">Số lượng</th>
                                        <th class="p-3">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @if ($productOrders)
                                        @foreach ($productOrders as $productOrder)
                                            <tr
                                                class="border-b border-opacity-20 dark:border-gray-700 dark:bg-gray-900 hover:bg-neutral-100 font-medium">
                                                <td class="p-3 flex items-center max-lg:min-w-[450px]">
                                                    <img src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                                                        class="w-[100px] h-[130px] object-cover " alt="">
                                                    <div class="ml-7">
                                                        <strong>{{ $productOrder->Name }}</strong>
                                                        <p class="text-xs text-[#828282]">
                                                            {{ $productOrder->pivot->ProductColor }} /
                                                            {{ $productOrder->pivot->ProductSize }}</p>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    <p>{{ number_format($productOrder->Price_sale, 0, '.', '.') }} VNĐ
                                                    </p>
                                                    <p><s class="text-[#FDBF78]">{{ number_format($productOrder->Price, 0, '.', '.') }}
                                                            VNĐ</s></p>
                                                </td>
                                                <td class="p-3">
                                                    <p>{{ $productOrder->pivot->ProductNumbers }}</p>

                                                </td>
                                                <td class="p-3">
                                                    <p>{{ number_format($productOrder->Price_sale * $productOrder->pivot->ProductNumbers, 0, '.', '.') }}
                                                        VNĐ </p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>

                    @if ($promotion)
                        <div class="p-5 text-sm">
                            <span>
                                {{ $promotion->PromotionName }} Giảm -
                                {{ $promotion->DiscountType == 0 ? $promotion->DiscountAmount . ' %' : number_format($productOrder->Price_sale, 0, '.', '.') . ' VNĐ' }}
                            </span>
                            <span>Tổng Giảm:
                                <strong
                                    class="text-[#FCAF17]">{{ number_format($promotion->DiscountType == 0 ? ($promotion->DiscountAmount / 100) * $purchaseOrder->TotalAmount : $promotion->DiscountAmount, 0, '.', '.') }}
                                    VNĐ</strong> </span>
                        </div>
                        <div class="p-5">
                            <span>Tổng Tiền:</span>
                            <span class="px-2"><strong
                                    class="text-[#FCAF17]">{{ number_format($purchaseOrder->TotalAmount, 0, '.', '.') }}
                                    VNĐ</strong></span>

                        </div>
                    @endif
                    <div class="pb-5 px-3 flex justify-around">
                        <a href="/account-orders"
                            class="w-[170px] px-5 py-3 text-center rounded-lg bg-[#FCAF17] text-white hover:text-black font-medium"><i
                                class="fa-solid fa-arrow-left"></i> QUAY LẠI</a>
                        <button
                        onclick="updateDeliveryStatus({{$purchaseOrder->Purchase_order_ID}})" 
                            class="w-[170px] px-5 py-3 text-center rounded-lg bg-[#FCAF17] text-white hover:text-black font-medium"><i class="fa-solid fa-circle-check"></i> Đã Nhận Hàng</button>
                    </div>
            </div>
            @endif

        </div>
    </div>
    </div>
    <script src="/build/assets/js/users/verificationorder.js"></script>
@endsection
