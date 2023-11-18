@extends('layouts.home')
@section('content')
    <div class="lg:px-5">
        <span class="inline-block w-[100%] text-center font-medium text-[#FDAF17] py-[15px]">DANH MỤC NỔI BẬT</span>
        <div class="grid grid-cols-4 max-md:grid-cols-2 gap-3">
            @foreach ($arrayCategories as $arrayCategoriesItem)
                <div class="col-span-1 border">
                    <a href="{{ Str::slug($arrayCategoriesItem->Description, '-') }}">
                        <div class="flex items-center w-[100%] py-[15px] lg:pl-[40px] max-md:pl-3">
                            <div>
                                <img class="rounded-full object-cover w-[68px] h-[68px] transition-all group-hover:rounded-full group-hover:shadow-[0_10px_5px_-5px_rgba(0,0,0,0.3)]"
                                    src="{{$arrayCategoriesItem->Image}}"
                                    alt="">
                            </div>
                            <span class="flex-1 inline-block pl-3 font-normal">{{$arrayCategoriesItem->Name}}</span>
                        </div>
                    </a n>
                </div>
            @endforeach
        </div>
        <span class="inline-block w-[100%] text-center font-medium text-[#FDAF17] py-[30px]">ĐỀ XUẤT CHO BẠN</span>
        <div class="flex justify-center">
            <button class="border mx-2 px-3 py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors bg-[#FCAF17] text-white">Bán Chạy Nhất</button>
            <button class="border mx-2 px-3 py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors">Hàng Mới Về</button>
            <button class="border mx-2 px-3 py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors">Áo</button>
            <button class="border mx-2 px-3 py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors">Quần</button>
            <button class="border mx-2 px-3 py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors">Váy Đầm</button>
            <button class="border mx-2 px-3 py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors">Dồ Mặc Trong</button>
            <button class="border mx-2 px-3 py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors">Phụ Kiện</button>
        </div>
        <div class="specialtyevent_ specialtyevent_all"> 
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-7 mt-[30px]">
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
                <div class="col-span-1 my-5 group_Product">
                    <a href="" class="inline-block overflow-hidden relative rounded">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apm6325-tra-21.jpg?v=1699328650210"
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
                <div class="col-span-1 my-5 group_Product">
                    <a href="" class="inline-block overflow-hidden relative rounded">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apm6325-tra-21.jpg?v=1699328650210"
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
            <div class="flex w-[100%]">
                <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
            </div>
        </div>
    </div>
@endsection
