@extends('layouts.home')
@section('content')
    
    <div class="xl:max-w-[1200px] mx-auto">
        {{-- Thằng slider nằm đây nhé  --}}
            <div
                class="slider overflow-hidden relative flex flex-col items-center ">
                <div
                    class="aspect-ratio-169 w-[100%] relative max-md:min-h-[140px] max-xl:min-h-[300px] lg:min-h-[435px] ">
                    <img class=" absolute w-[100%] aspect-auto  top-0 left-0 block" src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/slider_2.jpg?1700129814736"
                        alt="slideshow">
                    <img class=" absolute w-[100%] aspect-auto  top-0 left-0 block" src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/slider_3.jpg?1700129814736"
                        alt="slideshow">
                    <img class=" absolute w-[100%] aspect-auto  top-0 left-0 block" src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/slider_1.jpg?1700129814736"
                        alt="slideshow">
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
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-5">
            <div class="col-span-1 p-2 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán 307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820" alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840" alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 p-2 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán 307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820" alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840" alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 p-2 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán 307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820" alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840" alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 p-2 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán 307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820" alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840" alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 p-2 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán 307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820" alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840" alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 p-2 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán 307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820" alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840" alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 p-2 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán 307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820" alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img class="h-[100%] w-[100%] object-cover rounded-full" src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840" alt=""></li>
                </ul>
            </div>
            
        </div>
    </div>

@endsection
