@extends('layouts.home')
@section('content')
    <div class="bg-[#F8F8F8]">
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-6 lg:m-10 ">
            <div class="lg:col-span-8 col-span-1 bg-[#FFFFFF]   rounded-md mt-3">
                <div class="flex items-center m-2">
                    <h3 class="font-medium">GIỎ HÀNG</h3>
                    <p class=" ml-2 text-[#7a7a9d]">({{ $countProducts }}) Sản phẩm</p>
                </div>
                <div class="lg:hidden">
                    <div class="flex mt-2 borde px-1 ">
                        <div class="w-[90px] h-[120px] flex items-center rounded">
                            <a href="">
                                <img class="object-cover rounded"
                                    src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/smn6016-kdm-ao-so-mi-nu-3.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="flex-1 pl-2 group_UpAndDown_Number">
                            <a class="py-1 hover:text-[#FCAF17]" href="">Áo Sơ Mi Nữ Dài Tay Cơ Bản Nano</a>
                            <p class="font-medium text-[#FF5500] py-1">249.500đ<s class="text-[#8A8A8F]">499.000đ</s></p>
                            <span class="rounded-full py-1 bg-[#F8F8F8] w-auto mt-1">Kẻ xanh đậm / M</span>
                            <div class="flex justify-between mt-2">
                                <div class="flex">
                                    <button class="px-2 rounded-l-full border buttonReduced">-</button>
                                    <span
                                        class="border w-[40px] text-center  numberProduct flex items-center justify-center">0</span>
                                    <button class="px-2 rounded-r-full border buttonIncrease">+</button>
                                </div>
                                <button
                                    class ="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                        class="fa-solid fa-trash-can"></i></button>
                            </div>
                            <div class="pr-2">
                                Tổng cộng: <span class="font-medium text-[#FF5500]">249.500đ</span>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="max-lg:hidden">
                    <div class="shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Sản phẩm</th>
                                    <th scope="col" class="px-6 py-3">Thông tin sản phẩm</th>
                                    <th scope="col" class="px-6 py-3">Đơn giá</th>
                                    <th scope="col" class="px-6 py-3">Số lượng</th>
                                    <th scope="col" class="px-6 py-3">Tổng tiền</th>
                                    <th scope="col" class="px-6 py-3">&nbsp</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalProductsInCart = 0;
                                @endphp
                                @foreach ($productsOfUser as $productOfUser)
                                    @php
                                        $totalProductsInCart += $productOfUser->Price_sale * $productOfUser->pivot->ProductNumbers;
                                    @endphp
                                    <tr id="product_cartID_{{ $productOfUser->pivot->Product_cartID }}"
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <div class="flex justify-center mt-3">
                                                <a href="{{ $productOfUser->Slug }}">
                                                    <img class="w-[90px] h-[110px] object-cover rounded-md"
                                                        src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/smn6016-kdm-ao-so-mi-nu-3.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                        </th>
                                        <td class="px-6 py-4">
                                            <a class="inline-block hover:text-[#FCAF17]"
                                                href="{{ $productOfUser->Slug }}">{{ $productOfUser->Name }}</a>
                                            <p class="mt-3 ">{{ $productOfUser->pivot->ProductColor }} /
                                                {{ $productOfUser->pivot->ProductSize }} </p>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex">
                                                <p class="font-medium text-[#CD151C]">
                                                    {{ number_format($productOfUser->Price_sale, 0, '.', '.') }} VNĐ</p>
                                                <p><s class="text-[#8A8A8F]">{{ number_format($productOfUser->Price, 0, '.', '.') }}
                                                        VNĐ</s></p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex group_UpAndDown_Number justify-center">
                                                <button class="px-2 rounded-l-full border buttonReduced">-</button>
                                                <span
                                                    class="border w-[40px] text-center  numberProduct" onclick="updateNumberProductInCart(this, {{$productOfUser->pivot->ProductID}})">{{ $productOfUser->pivot->ProductNumbers }}</span>
                                                <button class="px-2 rounded-r-full border buttonIncrease">+</button>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <p class="text-center">
                                                {{ number_format($productOfUser->Price_sale * $productOfUser->pivot->ProductNumbers, 0, '.', '.') }}
                                                VNĐ
                                            </p>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button id="btnRemoveProductInCart"
                                                onclick="removeRowProductInCart({{$productOfUser->pivot->ProductID}})"
                                                class ="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                <i class="fa-solid fa-trash-can"></i></button>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="bg-[#FFFFFF] lg:col-span-4 col-span-1 rounded-md mt-3 ">
                <div class="bg-[#EAEAF4] max-h-[300px] overflow-y-auto rounded-lg">
                    <div class="px-3 py-2 text-center group_Code_Promotion border ">
                        <h3 class="font-medium text-[#11006F] py-2">{{$promotion->PromotionName}}</h3>
                        <p class="font-light my-2">*Áp dụng cho sản phẩm toàn ngành hàng @if ($promotion->DiscountAmount == 1)
                            {{number_format($promotion->DiscountAmount, 0, '.', '.')}} VNĐ
                        @else
                            {{$promotion->DiscountAmount}} 
                        @endif</p>
                        <div class="flex justify-center items-center py-2 relative">
                            <span
                                class="invisible transition-all absolute top-[-20px] w-[80px] h-[25px] bg-[#F9F9F9] outline-none px-2 inline-block text-[#878687] font-normal  text-center rounded-md alert_copied">Copied</span>
                            <input type="text"
                                class=" h-[25px] bg-[#F9F9F9] outline-none px-2 inline-block text-[#878687] font-normal code_Promotion_value text-center rounded-md "
                                value="{{$promotion->PromotionCode}}">
                            <button
                                class="mx-2 copy_Code_Promotion bg-[#11006F] text-white font-medium rounded-md px-2">COPY
                                MÃ</button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between px-2 text-base font-normal my-3">
                    <span>Tổng đơn hàng (tạm tính):</span>
                    <span><strong class="text-[#C81E1E]">{{ number_format($totalProductsInCart, 0, '.', '.') }}
                            VNĐ</strong></span>
                </div>
                <form action="">
                    <input type="number" name=" totalProductsInCart" value="{{ $totalProductsInCart }}" hidden>
                    <button type="submit"
                        class="w-[100%] h-[50px] text-center bg-[#FDC75D] flex justify-center items-center text-white font-medium rounded-md hover:bg-[#FCAF17]"><img
                            src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/shield-security.svg?1700819753133"
                            alt="">Thanh Toán Ngay</button>
                </form>
                <div class="mt-3">
                    <p class="flex pl-3 py-1 items-center text-[15px] font-light"><img class="pr-2"
                            src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/tag.svg?1700819753133"
                            alt="">Sử dụng mã giảm giá ở bước thanh toán</p>
                    <p class="flex pl-3 py-1 items-center text-[15px] font-light"><img class="pr-2"
                            src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/shield-tick.svg?1700819753133"
                            alt="">Thông tin bảo mật và mã hóa</p>
                </div>
                <p class="flex pl-3 py-1 items-center text-[15px] font-light"><img class="pr-2"
                        src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/truck-fast-pdp.svg?1700819753133"
                        alt=""><strong>Miễn phí vận chuyển: </strong>đơn hàng 200k</p>
                <p class="flex pl-3 py-1 items-center text-[15px] font-light"><img class="pr-2"
                        src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/timer.svg?1700819753133"
                        alt=""><strong>Giao hàng:</strong>Từ 1 - 3 ngày</p>
                <p class="flex pl-3 py-1 items-center text-[15px] font-light"><img class="pr-2"
                        src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/arrow-swap-horizontal.svg?1700819753133"
                        alt=""><strong>Miễn phí đổi trả: </strong>tại 250+ cửa hàng trong 15 ngày</p>
            </div>
        </div>
    </div>
    <script src="/build/assets/js/users/cart.js"></script>
@endsection
