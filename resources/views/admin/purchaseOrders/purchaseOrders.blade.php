@extends('admin.layouts.home')
@section('content')
    @if ($title == 'Quản Lý Đơn Hàng')
        <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">

            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Số Lượng Đơn Hàng
                            </h3>
                            <h2 class="text-xl font-medium">
                                {{ $numberOrdersActive }}
                            </h2>
                        </div>
                        <span class="icon widget-icon text-blue-500"><i class="mdi mdi-cart-outline mdi-48px"></i></span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Tổng Doanh Thu Hôm Nay
                            </h3>
                            <h2 class="text-xl font-medium">
                                {{ number_format($revenueToday, 0, '.', '.') }}
                                VNĐ
                            </h2>
                        </div>
                        <span class="icon widget-icon text-red-500"><i
                                class="fa-solid fa-money-bill-trend-up text-[48px]"></i></span>
                    </div>
                </div>
            </div>

        </div>
    @endif

    <ul class="py-2 w-[100%] bg-[#F9FAFB] flex pl-2 border-b">
        <li>
            <a href="/admin/purchase-order"
                class="inline-flex border items-center justify-center p-2 text-base font-medium
                @if ($title == 'Quản Lý Đơn Hàng') {{ 'text-gray-900 rounded-lg bg-gray-300' }}
                @else
                    {{ 'text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 ' }} @endif">
                <span class="w-full">Danh Sách Đơn Hàng</span>
            </a>
        </li>
        <li class="ml-2">
            <a href="#"
                class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 
                @if ($title == 'Chi Tiết Đơn Hàng') {{ 'text-gray-900 rounded-lg bg-gray-300' }}
                @else
                    {{ 'text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 ' }} @endif">
                <span class="w-full">Chi Tiết Đơn Hàng</span>
            </a>
        </li>

    </ul>
    <div>
        @if ($title == 'Quản Lý Đơn Hàng')
            <div>
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
                                    <th class="p-3 text-right">Thông tin Giao Dịch</th>
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
                                                <a href="/admin/purchase-order/details-{{ $purchaseOrder->Purchase_order_ID }}"
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
                                                <p>{{ number_format($purchaseOrder->TotalAmount, 0, '.', '.') }}
                                                    VNĐ
                                                </p>
                                            </td>
                                            <td class="p-3">
                                                <a href="https://sandbox.vnpayment.vn/merchantv2/Transaction/PaymentDetail/@if ($purchaseOrder->PaymentStatus == 1 && $purchaseOrder->PaymentMethod == 'Thanh Toán Bằng VNPay')
                                                    {{ $purchaseOrder->VnPayCode }}
                                                @endif.htm" class="hover:text-[#FCAF17]" target="_blank">
                                                    @if ($purchaseOrder->PaymentStatus == 1 && $purchaseOrder->PaymentMethod == 'Thanh Toán Bằng VNPay')
                                                        #{{ $purchaseOrder->VnPayCode }}
                                                    @endif
                                                    &nbsp
                                                </a>
                                            </td>
                                            <td class="p-3 @if ($purchaseOrder->OrderStatus == 0) {{ 'font-medium' }} @endif">
                                                <p>{{ $purchaseOrder->OrderStatus == 0 ? 'Chưa Xác Nhận' : 'Đã Xác Nhận' }}
                                                </p>
                                            </td>
                                            <td class="p-3 @if ($purchaseOrder->PaymentStatus == 0 && $purchaseOrder->PaymentMethod == 'Thanh Toán Khi Nhận Hàng') {{ 'font-medium' }} @endif">
                                                <p>
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
                                                        onclick="cancelPurchase({{ $purchaseOrder->Purchase_order_ID }})"
                                                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg  px-2 py-1.5  focus:outline-none ">Hủy
                                                        Bỏ
                                                        Đơn Hàng</button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="mt-3 flex justify-center">
                            {{ $purchaseOrders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($title == 'Chi Tiết Đơn Hàng')
            <div>
                <div class="px-3 py-5 border">
                    <a href="/admin/purchase-order" class="font-medium hover:text-[#FCAF17]"><i
                            class="fa-solid fa-arrow-left"></i>
                        Chi Tiết Đơn Hàng
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

    </div>
    @endif
    </div>
    <script src="/build/assets/js/users/handleinfoAccount.js"></script>
@endsection
