@extends('layouts.home')
@section('content')
    <div class="bg-[#F8F8F8]">
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-6 lg:m-10 ">
            <div class="lg:col-span-8 col-span-1 bg-[#FFFFFF]   rounded-md mt-3">
                <div class="flex items-center m-2">
                    <h3 class="font-medium">GIỎ HÀNG</h3>
                    <p class=" ml-2 text-[#7a7a9d]">(2) Sản phẩm</p>
                </div>
                <div class="lg:hidden">
                    <div class="flex mt-2 borde px-1 ">
                        <div class="w-[90px] h-[120px] flex items-center rounded">
                            <a href="">
                                <img class="object-cover rounded"
                                    src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/smn6016-kdm-ao-so-mi-nu-3.jpg"
                                    alt="">
                            </a >
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
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex justify-center mt-3">
                                            <a href="">
                                                <img class="w-[90px] h-[110px] object-cover rounded-md"
                                                    src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/smn6016-kdm-ao-so-mi-nu-3.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <a class="inline-block hover:text-[#FCAF17]" href="">Áo Sơ Mi Nữ
                                            Dài Tay Cơ Bản Nano</a>
                                        <p class="mt-3 ">Kẻ xanh đậm / M</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div>
                                            <p class="font-medium text-[#CD151C]">249.500đ</p>
                                            <p><s class="text-[#8A8A8F]">499.000đ</s></p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex group_UpAndDown_Number justify-center">
                                            <button class="px-2 rounded-l-full border buttonReduced">-</button>
                                            <span class="border w-[40px] text-center  numberProduct">0</span>
                                            <button class="px-2 rounded-r-full border buttonIncrease">+</button>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <p class="text-center">249.500đ</p>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class ="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex justify-center mt-3">
                                            <a href="">
                                                <img class="w-[90px] h-[110px] object-cover rounded-md"
                                                    src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/smn6016-kdm-ao-so-mi-nu-3.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <a class="inline-block hover:text-[#FCAF17]" href="">Áo Sơ Mi Nữ
                                            Dài Tay Cơ Bản Nano</a>
                                        <p class="mt-3 ">Kẻ xanh đậm / M</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div>
                                            <p class="font-medium text-[#CD151C]">249.500đ</p>
                                            <p><s class="text-[#8A8A8F]">499.000đ</s></p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex group_UpAndDown_Number justify-center">
                                            <button class="px-2 rounded-l-full border buttonReduced">-</button>
                                            <span class="border w-[40px] text-center  numberProduct">0</span>
                                            <button class="px-2 rounded-r-full border buttonIncrease">+</button>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <p class="text-center">249.500đ</p>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class ="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="bg-[#FFFFFF] lg:col-span-4 col-span-1 rounded-md mt-3 ">bbbbbbbbbbbbbbbbbbbbbbbbbbbbb</div>
        </div>
    </div>
@endsection
