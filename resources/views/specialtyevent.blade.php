@extends('layouts.home')
@section('content')
    <div class="lg:max-w-[1200px] mx-auto">
        <div>
            <img src="/images/specialtyevent_1.webp" alt="">
        </div>
        <span class="inline-block mt-[50px] w-[100%] text-center text-3xl font-medium">EmaketXpress CÔNG SỞ LÀ CHUẨN THOẢI MÁI!</span>
        <span class="inline-block mt-[50px] w-[100%] text-left text-3xl font-medium">ÁO POLO</span>
        
        <div>
            <img src="/images/specialtyevent_2.webp" alt="">
        </div>
        <div class="group_product_specialtyevent">
            <div class="w-[300px] mx-auto flex justify-center mt-[50px] wrap_product">
                <span name_wrapProduct = "all" class="px-2 hover:cursor-pointer font-extrabold">Tất Cả</span>
                <span name_wrapProduct = "boys" class="px-2 hover:cursor-pointer ">Nam</span>
                <span name_wrapProduct = "girls" class="px-2 hover:cursor-pointer ">Nữ</span>
            </div>
            <div>
                {{-- Nam nữ xen kẽ --}}
                <div class="specialtyevent_ specialtyevent_all"> 
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
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
                {{-- Nam Thôi --}}
                <div class="specialtyevent_ specialtyevent_boys  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
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
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
                {{-- Nữ Thôi --}}
                <div class="specialtyevent_ specialtyevent_girls  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
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
        </div>
        <span class="inline-block mt-[50px] w-[100%] text-left text-3xl font-medium">ÁO SƠ MI</span>
        <div>
            <img src="/images/specialtyevent_3.webp" alt="">
        </div>
        <div class="group_product_specialtyevent">
            <div class="w-[300px] mx-auto flex justify-center mt-[50px] wrap_product">
                <span name_wrapProduct = "all" class="px-2 hover:cursor-pointer font-extrabold">Tất Cả</span>
                <span name_wrapProduct = "boys" class="px-2 hover:cursor-pointer ">Nam</span>
                <span name_wrapProduct = "girls" class="px-2 hover:cursor-pointer ">Nữ</span>
            </div>
            <div>
                {{-- Nam nữ xen kẽ --}}
                <div class="specialtyevent_ specialtyevent_all"> 
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
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
                {{-- Nam Thôi --}}
                <div class="specialtyevent_ specialtyevent_boys  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
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
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
                {{-- Nữ Thôi --}}
                <div class="specialtyevent_ specialtyevent_girls  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
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
        </div>
        <span class="inline-block mt-[50px] w-[100%] text-left text-3xl font-medium">VÁY ĐẦM THANH LỊCH</span>
        <div>
            <img src="/images/specialtyevent_4.webp" alt="">
        </div>
        <div class="group_product_specialtyevent pb-3">
            <div class="w-[300px] mx-auto flex justify-center mt-[50px] wrap_product">
                <span name_wrapProduct = "all" class="px-2 hover:cursor-pointer font-extrabold">Tất Cả</span>
                <span name_wrapProduct = "boys" class="px-2 hover:cursor-pointer ">Nam</span>
                <span name_wrapProduct = "girls" class="px-2 hover:cursor-pointer ">Nữ</span>
            </div>
            <div>
                {{-- Nam nữ xen kẽ --}}
                <div class="specialtyevent_ specialtyevent_all"> 
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
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
                {{-- Nam Thôi --}}
                <div class="specialtyevent_ specialtyevent_boys  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
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
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
                {{-- Nữ Thôi --}}
                <div class="specialtyevent_ specialtyevent_girls  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
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
        </div>
        
    </div>
@endsection
