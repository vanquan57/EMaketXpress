@extends('layouts.home')
@section('content')
    <div class="px-3">
        <span class="font-normal text-sm inline-block py-[20px]">Landing 15/11 <strong>/ Áo Thun Thể Thao Nam
                Training</strong></span>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
            <div class="lg:col-span-8 col-span-1">
                <div class=" lg:grid lg:grid-cols-2 gap-5 hidden">
                    <img class="col-span-1 w-[100%] rounded-md object-cover"
                        src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-xng-ao-polo-nu-mat-chim-yody-5.jpg?v=1684810222207"
                        alt="">
                    <img class="col-span-1 w-[100%] rounded-md object-cover"
                        src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-xng-ao-polo-nu-mat-chim-yody-6.jpg?v=1684810222207"
                        alt="">
                    <img class="col-span-1 w-[100%] rounded-md object-cover"
                        src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-xng-ao-polo-nu-mat-chim-yody-3.jpg?v=1684810222207"
                        alt="">
                    <img class="col-span-1 w-[100%] rounded-md object-cover"
                        src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-xng-ao-polo-nu-mat-chim-yody-4.jpg?v=1684810222207"
                        alt="">
                </div>
                <div class="lg:hidden">
                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-vag-ao-polo-nu-mat-chim-yody-6.jpg?v=1684810224677"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-vag-ao-polo-nu-mat-chim-yody-1.jpg?v=1684810224677"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-vag-ao-polo-nu-mat-chim-yody-2.jpg?v=1684810224677"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-vag-ao-polo-nu-mat-chim-yody-7.jpg?v=1684810211833"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>

                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                </div>
                {{-- Thằng này mô tả chi tiết của pc --}}
                <div class="mt-3 max-lg:hidden">
                    Dưới này mô tả chi tiết sản phẩm load trực tiếp lên luôn
                </div>
            </div>
            <div class="lg:col-span-4 col-span-1">
                <h1 class="text-xl font-medium">Áo Thun Thể Thao Nam Training</h1>
                <div class="mt-2">
                    <span class="text-sm font-normal pr-1 border-r border-black">Mã Sản Phẩm</span>
                    <span class="text-sm font-normal pr-1 border-r border-black">Đã bán 1.0K</span>
                    <span class="text-[#D1D3D3]">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                </div>
                <div class="mt-2">
                    <span class="font-semibold text-2xl text-[#CD151C]">149.500đ</span>
                    <span class="text-lg font-medium text-[#D1D3D3]"><s>299.000đ</s></span>
                </div>
                <div class="mt-2">
                    <span class="text-sm font-normal pr-1 ">Tiết kiệm :149.500đ</span>
                    <span class="font-medium text-base py-1 px-2 bg-[#FCAF17] rounded-md">-50%</span>
                </div>
                <div class="flex items-center mt-2">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/degree_of_heat_1.svg?1700449743787"
                        alt="">
                    <span class="text-sm font-normal">
                        Nhanh tay!! Giá khuyến mãi chỉ còn</span>
                </div>
                <div class="group-time-sale flex items-center  mt-2 text-white">
                    <span class="hours-sale p-1 rounded bg-[#F56300]">00</span>
                    <span class="text-[#F56300] px-1">:</span>
                    <span class="minutes-sale p-1 rounded bg-[#F56300]">00</span>
                    <span class="text-[#F56300] px-1">:</span>
                    <span class="second-sale p-1 rounded bg-[#F56300]">00</span>
                </div>
                <span class="text-sm font-normal mt-2 inline-block">Màu sắc: <span class="font-medium">Navy</span></span>
                <div class="flex flex-wrap">

                    <img class="w-[50px] h-[50px] inline-block object-cover rounded-lg m-1"
                        src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-5.jpg?v=1684810222207"
                        alt="">
                    <img class="w-[50px] h-[50px] inline-block object-cover rounded-lg m-1"
                        src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-hog-ao-polo-nu-yody-5.jpg?v=1684810222207"
                        alt="">
                    <img class="w-[50px] h-[50px] inline-block object-cover rounded-lg m-1"
                        src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-5.jpg?v=1684810222207"
                        alt="">
                    <img class="w-[50px] h-[50px] inline-block object-cover rounded-lg m-1"
                        src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-xng-ao-polo-nu-mat-chim-yody-6.jpg?v=1684810222207"
                        alt="">

                </div>
                <p class="text-sm font-normal mt-2">Kích thước:<span>M</span></p>

                <div>
                    <label for="size-xs"
                        class="active size_btn w-[80px] py-2 text-black rounded-md font-medium hover:border-black border hover:text-[#FCAF17] hover:bg-white transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        <input type="checkbox" id="size-xs" class="hidden">
                        XS
                    </label>
                    <label for="size-s"
                        class="size_btn w-[80px] py-2 text-black rounded-md font-medium  border  transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        <input type="checkbox" id="size-s" class="hidden">
                        S
                    </label>
                    <label for="size-m"
                        class="size_btn w-[80px] py-2 text-black rounded-md font-medium  border  transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        <input type="checkbox" id="size-m" class="hidden">
                        M
                    </label>
                    <label for="size-l"
                        class="size_btn w-[80px] py-2 text-black rounded-md font-medium  border  transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        <input type="checkbox" id="size-l" class="hidden">
                        L
                    </label>
                    <label for="size-xl"
                        class="size_btn w-[80px] py-2 text-black rounded-md font-medium  border  transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        <input type="checkbox" id="size-xl" class="hidden">
                        XL
                    </label>
                    <label for="size-2xl"
                        class="size_btn w-[80px] py-2 text-black rounded-md font-medium  border  transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        <input type="checkbox" id="size-2xl" class="hidden">
                        2XL
                    </label>
                    <label for="size-3xl"
                        class="size_btn w-[80px] py-2 text-black rounded-md font-medium  border  transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        <input type="checkbox" id="size-3xl" class="hidden">
                        3XL
                    </label>
                    <label for="size-4xl"
                        class="size_btn w-[80px] py-2 text-black rounded-md font-medium  border  transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        <input type="checkbox" id="size-4xl" class="hidden">
                        4XL
                    </label>
                </div>
                <div>
                    <div class="my-5 py-2 border bg-slate-50 rounded px-1">
                        <div class="flex justify-between items-center">
                            <span class=" flex-1 transition-colors hover:text-[#FCAF17]">
                                Giúp bạn chọn size
                            </span>
                            <button class="dropDownBtn p-2"><i
                                    class="transition-all duration-200 fa-solid fa-chevron-down"
                                    style="transform: rotate(0deg);"></i></button>
                        </div>
                        <div class="hidden transition-all duration-200 " style="display: none;">

                            <div>
                                <div class="flex justify-between">
                                    <span>Chiều Cao</span>
                                    <span>
                                        <span class="value_height">120</span>cm
                                    </span>
                                </div>
                                <input type="range" class="w-[100%] block" id="height" name="height"
                                    value ="155" min="150" max="200" />
                            </div>
                            <div class="mt-3">
                                <div class="flex justify-between">
                                    <span>Cân Năng</span>
                                    <span>
                                        <span class="value_weight">120</span>kg
                                    </span>
                                </div>
                                <input type="range" class="w-[100%] block" id="weight" name="weight"
                                    value ="20" min="10" max="100" />

                            </div>
                            <p class="suggested_size cl text-center p-3 font-normal text-sm "></p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center my-2 group_UpAndDown_Number">
                    <p class="text-sm font-normal mr-2">Số Lượng</p>
                    <button class="px-3 py-2 rounded-l-full border buttonReduced">
                        -
                    </button>
                    <span class="border w-12 text-center py-2 numberProduct">0</span>
                    <button class="px-3 py-2 rounded-r-full border buttonIncrease">
                        +
                    </button>
                </div>

                <button
                    class="block w-[100%] rounded-lg py-3 text-white font-medium bg-[#FCAF17] hover:text-gray-400 transition-colors "><i
                        class="fa-solid fa-cart-shopping inline-block px-1"></i>Thêm Vào Giỏ Hàng</button>
                <button class="block w-[100%] border-2 rounded-lg py-3 my-5 hover:text-[#FCAF17]  transition-colors ">Mua
                    Ngay</button>

            </div>
            {{-- Thằng này mô tả chi tiết của mobile --}}
            <div class="mt-3 col-span-1 lg:hidden">
                Dưới này mô tả chi tiết sản phẩm load trực tiếp lên luôn
            </div>
        </div>
        <span class="inline-block w-[100%] text-center font-medium text-[#FDAF17] py-[30px] bg-[#F2F2F2]">ĐỀ XUẤT CHO
            BẠN</span>
        <div class="grid gap-5 grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="/build/assets/js/users/productbycategorieschild.js"></script>
@endsection
