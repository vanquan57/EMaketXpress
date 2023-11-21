@extends('layouts.home')
@section('content')


    <div class="xl:max-w-[1200px] mx-auto">
        {{-- Thằng slider nằm đây nhé  --}}
        <div class="slider overflow-hidden relative flex flex-col items-center ">
            <div class="aspect-ratio-169 w-[100%] relative max-md:min-h-[140px] max-xl:min-h-[300px] lg:min-h-[435px] ">
                @for ($i = 0; $i < $listsliders->count(); $i++) 
                    <img class=" absolute w-[100%] aspect-auto  top-0 left-0 block"
                        src="/storage/uploads/{{$listsliders[$i]->thumb}}"
                        alt="slideshow">
                @endfor
            </div>
            <div class=" absolute bottom-2 text-center hidden xl:block">
                <span class="dot active w-4 h-4 mr-2 inline-block rounded-full"></span>
                <span class="dot  w-4 h-4 mr-2 inline-block rounded-full"></span>
                <span class="dot  w-4 h-4 mr-2 inline-block rounded-full"></span>

            </div>
        </div>


        <div class="w-[100%]">
            <div class="flex justify-center category_list">
                <div data ="girl"
                    class="active max-w-[220px] min-w-[70px] border-b-2 font-medium text-[#97A0AD] border-[#97A0AD] mx-4 py-4 text-center hover:text-[#FCAF17] hover:border-[#FCAF17]">
                    NỮ</div>
                <div data ="boy"
                    class="max-w-[220px] min-w-[70px] border-b-2 font-medium text-[#97A0AD] border-[#97A0AD] mx-4 py-4 text-center hover:text-[#FCAF17] hover:border-[#FCAF17]">
                    NAM</div>
                <div data ="children"
                    class="max-w-[220px] min-w-[70px] border-b-2 font-medium text-[#97A0AD] border-[#97A0AD] mx-4 py-4 text-center hover:text-[#FCAF17] hover:border-[#FCAF17]">
                    TRẺ EM</div>
            </div>
        </div>
        <div class="parent_category_item  ">
            <ul class="block w-[100%]  mt-5  items-center category_item_ category_item_girl">
                <div class="flex flex-wrap justify-around">
                    @if ($arrayCategoriesGirls)
                        @foreach ($arrayCategoriesGirls as $arrayCategoriesGirl)
                            <li class="w-[150px] h-[130px]  text-center group hover:mt-[-3px] box-border ">
                                <a href="{{ Str::slug($arrayCategoriesGirl->Description, '-') }}"
                                    class="flex flex-col justify-center items-center">
                                    <img class="rounded-full object-cover w-[90px] h-[90px] transition-all group-hover:rounded-full group-hover:shadow-[0_10px_5px_-5px_rgba(0,0,0,0.3)]"
                                        src="{{ $arrayCategoriesGirl->Image }}" alt="">
                                    <span
                                        class="font-medium mt-1 transition-colors group-hover:text-[#FCAF17] text-[#11007D]">{{ $arrayCategoriesGirl->Name }}</span>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </div>
            </ul>
            <ul class="hidden  w-[100%]  mt-5  items-center category_item_ category_item_boy">
                <div class="flex flex-wrap justify-around">
                    @if ($arrayCategoriesBoys)
                        @foreach ($arrayCategoriesBoys as $arrayCategoriesBoy)
                            <li class=" w-[150px] h-[130px]  text-center group hover:mt-[-3px] box-border ">
                                <a href="{{ Str::slug($arrayCategoriesBoy->Description, '-') }}"
                                    class="flex flex-col justify-center items-center">
                                    <img class="rounded-full object-cover w-[90px] h-[90px] transition-all group-hover:rounded-full group-hover:shadow-[0_10px_5px_-5px_rgba(0,0,0,0.3)]"
                                        src="{{ $arrayCategoriesBoy->Image }}" alt="">
                                    <span
                                        class="font-medium mt-1 transition-colors group-hover:text-[#FCAF17] text-[#11007D]">{{ $arrayCategoriesBoy->Name }}</span>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </div>
            </ul>
            <ul class="hidden  w-[100%]  mt-5  items-center category_item_ category_item_children">
                <div class="flex flex-wrap justify-around">
                    @if ($arrayCategoriesChildrens)
                        @foreach ($arrayCategoriesChildrens as $arrayCategoriesChildren)
                            <li class=" w-[150px] h-[130px]  text-center group hover:mt-[-3px] box-border ">
                                <a href="{{ Str::slug($arrayCategoriesChildren->Description, '-') }}"
                                    class="flex flex-col justify-center items-center">
                                    <img class="rounded-full object-cover w-[90px] h-[90px] transition-all group-hover:rounded-full group-hover:shadow-[0_10px_5px_-5px_rgba(0,0,0,0.3)]"
                                        src="{{ $arrayCategoriesChildren->Image }}" alt="">
                                    <span
                                        class="font-medium mt-1 transition-colors group-hover:text-[#FCAF17] text-[#11007D]">{{ $arrayCategoriesChildren->Name }}</span>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </div>
            </ul>
        </div>
        {{-- Product --}}
        <div class="flex font-semibold text-lg">
            <span><img class="w-[32px] h-[32px] object-cover"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnute9EAZRD1bJA0l9XqP5r9W3q9d9eQBLIQ&usqp=CAU"
                    alt=""></span>
            <span class="pl-2  flex items-center text-[#F56300]">Flash sale</span>
            <div class="group-time-sale flex items-center pl-2 text-white">
                <span class="hours-sale p-1 rounded bg-[#F56300]">00</span>
                <span class="text-[#F56300] px-1">:</span>
                <span class="minutes-sale p-1 rounded bg-[#F56300]">00</span>
                <span class="text-[#F56300] px-1">:</span>
                <span class="second-sale p-1 rounded bg-[#F56300]">00</span>
            </div>

        </div>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
            <div class="lg:col-span-2 grid lg:grid-cols-1 max-lg:hidden">
                <div class="col-span-1 p-2 group_Product">
                    <a href="" class="inline-block overflow-hidden relative rounded h-[100%]">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_preivew_sanpham_1_image_desktop.jpg?1700144535708"
                            alt="" class="main_image object-cover transition-all  w-[100%] h-[100%] hover:scale-105 ">
                        <span
                            class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                            307</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-10 grid grid-cols-1">
                <div id="controls-carousel" class="col-span-1 relative w-full p-2 z-0" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative lg:min-h-[450px] max-md:min-h-screen overflow-hidden  rounded-lg ">
                        <!-- Item 1 -->
                        @for($i = 1; $i <= $listProductSale->count(); $i += 4) 
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                    @for ($j = $i; $j <= $i + 3; $j++)
                                        @if(isset($listProductSale[$j-1])) 
                                            <div class="col-span-1 group_Product">
                                                <a href="" class="inline-block overflow-hidden relative rounded">
                                                    {{-- <img src=" /storage/uploads/ao-khoac-nu-phn6014-xbi-6.webp" --}}
                                                    <img src=" /storage/uploads/{{$listProductSale[$j-1]->Img}}"
                                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                                    <span
                                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                                        307</span>
                                                </a>
                                                <div>
                                                    <div class="h-10">
                                                        <a href="" class="text-sm font-normal">{{$listProductSale[$j-1]->Name}}</a>
                                                    </div>
                                                    
                                                    <div class="py-1">                                                    
                                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductSale[$j-1]->Price_sale, 0, ',', '.')."đ"}}</span>
                                                        <span class="font-medium text-[#8A8A8F]"><s>{{ number_format($listProductSale[$j-1]->Price, 0, ',', '.')."đ"}}</s></span>
                                                    </div>
                                                </div>
                                                <ul class="flex item_image">
                                                        @for ($k = 0; $k < $imagesSale->count(); $k++)
                                                            @if($listProductSale[$j-1]->ProductID == $imagesSale[$k]->ProductID ) 
                                                                <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                                        class="h-[100%] w-[100%] object-cover rounded-full"
                                                                        src=" /storage/uploads/{{$imagesSale[$k]->Img}}"
                                                                        alt="">
                                                                </li>
                                                                @endif 
                                                        @endfor
                                                </ul>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        @endfor

                    </div>
                    
                    
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
















        <span class="font-medium text-base text-[#11006F] inline-block mt-[50px] mb-[15px] pl-1">Áo Khoác Tiện Lợi</span>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
            <div class="lg:col-span-2 grid lg:grid-cols-1 max-lg:hidden">
                <div class="col-span-1 p-2 group_Product">
                    <a href="" class="inline-block overflow-hidden relative rounded h-[100%]">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_preivew_sanpham_8_image_desktop.jpg?1700146121701"
                            alt="" class="main_image object-cover transition-all  w-[100%] h-[100%] hover:scale-105 ">
                        <span
                            class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                            307</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-10 grid grid-cols-1">
                <div id="controls-carousel" class="col-span-1 relative w-full p-2 z-0" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative lg:min-h-[450px] max-md:min-h-screen overflow-hidden  rounded-lg ">
                        <!-- Item 1 -->
                        @for($i = 1; $i <= $listProductGioDong->count(); $i += 4) 
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                @for ($j = $i; $j <= $i + 3; $j++)
                                    @if(isset($listProductGioDong[$j-1])) 
                                        <div class="col-span-1 group_Product">
                                            <a href="" class="inline-block overflow-hidden relative rounded">
                                                {{-- <img src=" /storage/uploads/ao-khoac-nu-phn6014-xbi-6.webp" --}}
                                                <img src=" /storage/uploads/{{$listProductGioDong[$j-1]->Img}}"
                                                    alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                                <span
                                                    class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                                        class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                                    307</span>
                                            </a>
                                            <div>
                                                <div class="h-10">
                                                    <a href="" class="text-sm font-normal">{{$listProductGioDong[$j-1]->Name}}</a>
                                                </div>
                                                
                                                <div class="py-1">                                                    
                                                    <span class="font-medium text-[#CD151C]">{{  number_format($listProductGioDong[$j-1]->Price_sale, 0, ',', '.')."đ"}}</span>
                                                    <span class="font-medium text-[#8A8A8F]"><s>{{ number_format($listProductGioDong[$j-1]->Price, 0, ',', '.')."đ"}}</s></span>
                                                </div>
                                            </div>
                                            <ul class="flex item_image">
                                                    @for ($k = 0; $k < $imagesGioDong->count(); $k++)
                                                        @if($listProductGioDong[$j-1]->ProductID == $imagesGioDong[$k]->ProductID ) 
                                                            <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                                    class="h-[100%] w-[100%] object-cover rounded-full"
                                                                    src=" /storage/uploads/{{$imagesGioDong[$k]->Img}}"
                                                                    alt="">
                                                            </li>
                                                            @endif 
                                                    @endfor
                                            </ul>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    @endfor 
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <span class="font-medium text-base text-[#11006F] inline-block mt-[50px] mb-[15px] pl-1">Bộ Sưu Tập</span>
        <div class="flex">
            <div><a href="#"><img class="w-[100%]" src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_bst_1_image.jpg?1700146121701" alt=""></a></div>
            <div><a href="#"><img class="w-[100%]" src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_bst_2_image.jpg?1700146121701" alt=""></a></div>
            <div><a href="#"><img class="w-[100%]" src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_bst_3_image.jpg?1700146121701" alt=""></a></div>
        </div>
        <span class="font-medium text-base text-[#11006F] inline-block mt-[50px] mb-[15px] pl-1">Hàng Mới về</span>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
            <div class="lg:col-span-2 grid lg:grid-cols-1 max-lg:hidden">
                <div class="col-span-1 p-2 group_Product">
                    <a href="" class="inline-block overflow-hidden relative rounded h-[100%]">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_preivew_sanpham_8_image_desktop.jpg?1700146121701"
                            alt="" class="main_image object-cover transition-all  w-[100%] h-[100%] hover:scale-105 ">
                        <span
                            class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                            307</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-10 grid grid-cols-1">
                <div id="controls-carousel" class="col-span-1 relative w-full p-2 z-0" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative lg:min-h-[450px] max-md:min-h-screen overflow-hidden  rounded-lg ">
                        <!-- Item 1 -->
                        @for($i = 1; $i <= $listProductHangmoive->count(); $i += 4) 
                            @if($i==30)
                                @break
                            @endif
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                    @for ($j = $i; $j <= $i + 3; $j++)
                                        @if(isset($listProductHangmoive[$j-1])) 
                                            <div class="col-span-1 group_Product">
                                                <a href="" class="inline-block overflow-hidden relative rounded">
                                                    {{-- <img src=" /storage/uploads/ao-khoac-nu-phn6014-xbi-6.webp" --}}
                                                    <img src=" /storage/uploads/{{$listProductHangmoive[$j-1]->Img}}"
                                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                                    <span
                                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                                        307</span>
                                                </a>
                                                <div>
                                                    <div class="h-10">
                                                        <a href="" class="text-sm font-normal">{{$listProductHangmoive[$j-1]->Name}}</a>
                                                    </div>
                                                    
                                                    <div class="py-1">                                                    
                                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductHangmoive[$j-1]->Price_sale, 0, ',', '.')."đ"}}</span>
                                                        <span class="font-medium text-[#8A8A8F]"><s>{{ number_format($listProductHangmoive[$j-1]->Price, 0, ',', '.')."đ"}}</s></span>
                                                    </div>
                                                </div>
                                                <ul class="flex item_image">
                                                        @for ($k = 0; $k < $imagesHangmoive->count(); $k++)
                                                            @if($listProductHangmoive[$j-1]->ProductID == $imagesHangmoive[$k]->ProductID ) 
                                                                <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                                        class="h-[100%] w-[100%] object-cover rounded-full"
                                                                        src=" /storage/uploads/{{$imagesHangmoive[$k]->Img}}"
                                                                        alt="">
                                                                </li>
                                                                @endif 
                                                        @endfor
                                                </ul>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        @endfor 
                        
                        
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <span class="font-medium text-base text-[#11006F] inline-block mt-[50px] mb-[15px] pl-1">Bán Chạy Nhất Tuần Vừa Qua</span>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
            <div class="lg:col-span-2 grid lg:grid-cols-1 max-lg:hidden">
                <div class="col-span-1 p-2 group_Product">
                    <a href="" class="inline-block overflow-hidden relative rounded h-[100%]">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_preivew_sanpham_8_image_desktop.jpg?1700146121701"
                            alt="" class="main_image object-cover transition-all  w-[100%] h-[100%] hover:scale-105 ">
                        <span
                            class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                            307</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-10 grid grid-cols-1">
                <div id="controls-carousel" class="col-span-1 relative w-full p-2 z-0" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative lg:min-h-[450px] max-md:min-h-screen overflow-hidden  rounded-lg ">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                {{-- <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                </div> --}}
                            </div>
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                {{-- <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                </div> --}}
                            </div>
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                {{-- <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                </div> --}}
                            </div>
                        </div>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                {{-- <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                <div class="col-span-1 group_Product">
                                    <a href="" class="inline-block overflow-hidden relative rounded">
                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
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
                                </div> --}}
                            </div>
                        </div>
                        
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <span class="font-medium text-base text-[#11006F] inline-block mt-[50px] mb-[15px] pl-1">Áo Polo Thoải Mái Mỗi Ngày</span>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
            <div class="lg:col-span-2 grid lg:grid-cols-1 max-lg:hidden">
                <div class="col-span-1 p-2 group_Product">
                    <a href="" class="inline-block overflow-hidden relative rounded h-[100%]">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_preivew_sanpham_8_image_desktop.jpg?1700146121701"
                            alt="" class="main_image object-cover transition-all  w-[100%] h-[100%] hover:scale-105 ">
                        <span
                            class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                            307</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-10 grid grid-cols-1">
                <div id="controls-carousel" class="col-span-1 relative w-full p-2 z-0" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative lg:min-h-[450px] max-md:min-h-screen overflow-hidden  rounded-lg ">
                        <!-- Item 1 -->
                        @for($i = 1; $i <= $listProductHangmoive->count(); $i += 4) 
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                    @for ($j = $i; $j <= $i + 3; $j++)
                                        @if(isset($listProductAopolo[$j-1])) 
                                            <div class="col-span-1 group_Product">
                                                <a href="" class="inline-block overflow-hidden relative rounded">
                                                    {{-- <img src=" /storage/uploads/ao-khoac-nu-phn6014-xbi-6.webp" --}}
                                                    <img src=" /storage/uploads/{{$listProductAopolo[$j-1]->Img}}"
                                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                                    <span
                                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                                        307</span>
                                                </a>
                                                <div>
                                                    <div class="h-10">
                                                        <a href="" class="text-sm font-normal">{{$listProductAopolo[$j-1]->Name}}</a>
                                                    </div>
                                                    
                                                    <div class="py-1">                                                    
                                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductAopolo[$j-1]->Price_sale, 0, ',', '.')."đ"}}</span>
                                                        <span class="font-medium text-[#8A8A8F]"><s>{{ number_format($listProductAopolo[$j-1]->Price, 0, ',', '.')."đ"}}</s></span>
                                                    </div>
                                                </div>
                                                <ul class="flex item_image">
                                                        @for ($k = 0; $k < $imagesAopolo->count(); $k++)
                                                            @if($listProductAopolo[$j-1]->ProductID == $imagesAopolo[$k]->ProductID ) 
                                                                <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                                        class="h-[100%] w-[100%] object-cover rounded-full"
                                                                        src=" /storage/uploads/{{$imagesAopolo[$k]->Img}}"
                                                                        alt="">
                                                                </li>
                                                                @endif 
                                                        @endfor
                                                </ul>
                                            </div>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        @endfor 
                        
                        
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <span class="font-medium text-base text-[#11006F] inline-block mt-[50px] mb-[15px] pl-1">Đồ Công Sở</span>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
            <div class="lg:col-span-2 grid lg:grid-cols-1 max-lg:hidden">
                <div class="col-span-1 p-2 group_Product">
                    <a href="" class="inline-block overflow-hidden relative rounded h-[100%]">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_preivew_sanpham_8_image_desktop.jpg?1700146121701"
                            alt="" class="main_image object-cover transition-all  w-[100%] h-[100%] hover:scale-105 ">
                        <span
                            class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                            307</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-10 grid grid-cols-1">
                <div id="controls-carousel" class="col-span-1 relative w-full p-2 z-0" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative lg:min-h-[450px] max-md:min-h-screen overflow-hidden  rounded-lg ">
                        <!-- Item 1 -->
                        @for($i = 1; $i <= $listProductDocongso->count(); $i += 4) 
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                @for ($j = $i; $j <= $i + 3; $j++)
                                    @if(isset($listProductDocongso[$j-1])) 
                                        <div class="col-span-1 group_Product">
                                            <a href="" class="inline-block overflow-hidden relative rounded">
                                                {{-- <img src=" /storage/uploads/ao-khoac-nu-phn6014-xbi-6.webp" --}}
                                                <img src=" /storage/uploads/{{$listProductDocongso[$j-1]->Img}}"
                                                    alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                                <span
                                                    class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                                        class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                                    307</span>
                                            </a>
                                            <div>
                                                <div class="h-10">
                                                    <a href="" class="text-sm font-normal">{{$listProductDocongso[$j-1]->Name}}</a>
                                                </div>
                                                
                                                <div class="py-1">                                                    
                                                    <span class="font-medium text-[#CD151C]">{{  number_format($listProductDocongso[$j-1]->Price_sale, 0, ',', '.')."đ"}}</span>
                                                    <span class="font-medium text-[#8A8A8F]"><s>{{ number_format($listProductDocongso[$j-1]->Price, 0, ',', '.')."đ"}}</s></span>
                                                </div>
                                            </div>
                                            <ul class="flex item_image">
                                                    @for ($k = 0; $k < $imagesDocongso->count(); $k++)
                                                        @if($listProductDocongso[$j-1]->ProductID == $imagesDocongso[$k]->ProductID ) 
                                                            <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                                    class="h-[100%] w-[100%] object-cover rounded-full"
                                                                    src=" /storage/uploads/{{$imagesDocongso[$k]->Img}}"
                                                                    alt="">
                                                            </li>
                                                            @endif 
                                                    @endfor
                                            </ul>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    @endfor 
                        
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <span class="font-medium text-base text-[#11006F] inline-block mt-[50px] mb-[15px] pl-1">YODY Jeans</span>
        <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
            <div class="lg:col-span-2 grid lg:grid-cols-1 max-lg:hidden">
                <div class="col-span-1 p-2 group_Product">
                    <a href="" class="inline-block overflow-hidden relative rounded h-[100%]">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/home_preivew_sanpham_8_image_desktop.jpg?1700146121701"
                            alt="" class="main_image object-cover transition-all  w-[100%] h-[100%] hover:scale-105 ">
                        <span
                            class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                            307</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-10 grid grid-cols-1">
                <div id="controls-carousel" class="col-span-1 relative w-full p-2 z-0" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative lg:min-h-[450px] max-md:min-h-screen overflow-hidden  rounded-lg ">
                        <!-- Item 1 -->
                        @for($i = 1; $i <= $listProductJeans->count(); $i += 4) 
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="grid grid-cols-4 max-lg:grid-cols-3 max-md:grid-cols-2 gap-3 ">
                                @for ($j = $i; $j <= $i + 3; $j++)
                                    @if(isset($listProductJeans[$j-1])) 
                                        <div class="col-span-1 group_Product">
                                            <a href="" class="inline-block overflow-hidden relative rounded">
                                                {{-- <img src=" /storage/uploads/ao-khoac-nu-phn6014-xbi-6.webp" --}}
                                                <img src=" /storage/uploads/{{$listProductJeans[$j-1]->Img}}"
                                                    alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                                <span
                                                    class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                                        class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                                    307</span>
                                            </a>
                                            <div>
                                                <div class="h-10">
                                                    <a href="" class="text-sm font-normal">{{$listProductJeans[$j-1]->Name}}</a>
                                                </div>
                                                
                                                <div class="py-1">                                                    
                                                    <span class="font-medium text-[#CD151C]">{{  number_format($listProductJeans[$j-1]->Price_sale, 0, ',', '.')."đ"}}</span>
                                                    <span class="font-medium text-[#8A8A8F]"><s>{{ number_format($listProductJeans[$j-1]->Price, 0, ',', '.')."đ"}}</s></span>
                                                </div>
                                            </div>
                                            <ul class="flex item_image">
                                                    @for ($k = 0; $k < $imagesJeans->count(); $k++)
                                                        @if($listProductJeans[$j-1]->ProductID == $imagesJeans[$k]->ProductID ) 
                                                            <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                                    class="h-[100%] w-[100%] object-cover rounded-full"
                                                                    src=" /storage/uploads/{{$imagesJeans[$k]->Img}}"
                                                                    alt="">
                                                            </li>
                                                            @endif 
                                                    @endfor
                                            </ul>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    @endfor 
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
