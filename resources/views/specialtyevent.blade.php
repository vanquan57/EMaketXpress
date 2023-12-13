@extends('layouts.home')
@section('content')
    <div class="lg:max-w-[1200px] mx-auto">
        <div>
            @for ($i = 0; $i < $listsliders_emaketxpress->count(); $i++) 
                @if ($listsliders_emaketxpress[$i]->sort_by == 1)
                    <img src="/storage/uploads/{{$listsliders_emaketxpress[$i]->thumb}}" alt="">
                @endif
            @endfor
        </div>
        <span class="inline-block mt-[50px] w-[100%] text-center text-3xl font-medium">EmaketXpress CÔNG SỞ LÀ CHUẨN THOẢI MÁI!</span>
        <span class="inline-block mt-[50px] w-[100%] text-left text-3xl font-medium">ÁO POLO</span>
        
        <div>
            @for ($i = 0; $i < $listsliders_emaketxpress->count(); $i++) 
            @if ($listsliders_emaketxpress[$i]->sort_by == 2)
                <img src="/storage/uploads/{{$listsliders_emaketxpress[$i]->thumb}}" alt="">
            @endif
        @endfor
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
                        @for($i = 0; $i < $listProductAopolo->count(); $i++) 
                            <div class="col-span-1 my-5 group_Product ">
                                <a href="{{$listProductAopolo[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                    <img src="/storage/uploads/{{$listProductAopolo[$i]->Img}}"
                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                    <span
                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                        307</span>
                                </a>
                                <div>
                                    <div class="h-10">
                                        <a href="" class="text-sm font-normal">{{$listProductAopolo[$i]->Name}}</a>
                                    </div>
                                    <div class="py-1">
                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductAopolo[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                        <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductAopolo[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                    </div>
                                </div>
                                <ul class="flex item_image">
                                    @for ($j = 0; $j < $imagesAopolo->count(); $j++)
                                    @if($listProductAopolo[$i]->ProductID == $imagesAopolo[$j]->ProductID ) 
                                        <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                class="h-[100%] w-[100%] object-cover rounded-full"
                                                src=" /storage/uploads/{{$imagesAopolo[$j]->Img}}"
                                                alt="">
                                        </li>
                                        @endif 
                                @endfor
                                </ul>
                            </div>
                        @endfor
                    </div>
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
                {{-- Nam Thôi --}}
                <div class="specialtyevent_ specialtyevent_boys  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                        @for($i = 0; $i < $listProductAopolo->count(); $i++) 
                            @if($listProductAopolo[$i]->CategoryID == 4) 
                            <div class="col-span-1 my-5 group_Product ">
                                <a href="{{$listProductAopolo[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                    <img src="/storage/uploads/{{$listProductAopolo[$i]->Img}}"
                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                    <span
                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                        307</span>
                                </a>
                                <div>
                                    <div class="h-10">
                                        <a href="" class="text-sm font-normal">{{$listProductAopolo[$i]->Name}}</a>
                                    </div>
                                    <div class="py-1">
                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductAopolo[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                        <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductAopolo[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                    </div>
                                </div>
                                    <ul class="flex item_image">
                                        @for ($j = 0; $j < $imagesAopolo->count(); $j++)
                                            @if($listProductAopolo[$i]->ProductID == $imagesAopolo[$j]->ProductID ) 
                                                <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                        class="h-[100%] w-[100%] object-cover rounded-full"
                                                        src=" /storage/uploads/{{$imagesAopolo[$j]->Img}}"
                                                        alt="">
                                                </li>
                                                @endif 
                                        @endfor
                                    </ul>
                                </div>
                                @endif   
                            @endfor
                    </div>
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
                {{-- Nữ Thôi --}}
                <div class="specialtyevent_ specialtyevent_girls  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                        @for($i = 0; $i < $listProductAopolo->count(); $i++) 
                            @if($listProductAopolo[$i]->CategoryID == 3) 
                            <div class="col-span-1 my-5 group_Product ">
                                <a href="{{$listProductAopolo[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                    <img src="/storage/uploads/{{$listProductAopolo[$i]->Img}}"
                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                    <span
                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                        307</span>
                                </a>
                                <div>
                                    <div class="h-10">
                                        <a href="" class="text-sm font-normal">{{$listProductAopolo[$i]->Name}}</a>
                                    </div>
                                    <div class="py-1">
                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductAopolo[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                        <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductAopolo[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                    </div>
                                </div>
                                <ul class="flex item_image">
                                    @for ($j = 0; $j < $imagesAopolo->count(); $j++)
                                        @if($listProductAopolo[$i]->ProductID == $imagesAopolo[$j]->ProductID ) 
                                            <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                    class="h-[100%] w-[100%] object-cover rounded-full"
                                                    src=" /storage/uploads/{{$imagesAopolo[$j]->Img}}"
                                                    alt="">
                                            </li>
                                            @endif 
                                    @endfor
                                </ul>
                            </div>
                            @endif   
                        @endfor
                    </div>
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- ========================================================================================================= --}}
        <span class="inline-block mt-[50px] w-[100%] text-left text-3xl font-medium">ÁO SƠ MI</span>
        <div>
            @for ($i = 0; $i < $listsliders_emaketxpress->count(); $i++) 
            @if ($listsliders_emaketxpress[$i]->sort_by == 3)
                <img src="/storage/uploads/{{$listsliders_emaketxpress[$i]->thumb}}" alt="">
            @endif
        @endfor
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
                        @for($i = 0; $i < $listProductAosomi->count(); $i++) 
                        <div class="col-span-1 my-5 group_Product ">
                            <a href="{{$listProductAosomi[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                <img src="/storage/uploads/{{$listProductAosomi[$i]->Img}}"
                                    alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                <span
                                    class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                        class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                    307</span>
                            </a>
                            <div>
                                <div class="h-10">
                                    <a href="" class="text-sm font-normal">{{$listProductAosomi[$i]->Name}}</a>
                                </div>
                                <div class="py-1">
                                    <span class="font-medium text-[#CD151C]">{{  number_format($listProductAosomi[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                    <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductAosomi[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                </div>
                            </div>
                            <ul class="flex item_image">
                                @for ($j = 0; $j < $imagesAosomi->count(); $j++)
                                    @if($listProductAosomi[$i]->ProductID == $imagesAosomi[$j]->ProductID ) 
                                        <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                            <img class="h-[100%] w-[100%] object-cover rounded-full"
                                                src=" /storage/uploads/{{$imagesAosomi[$j]->Img}}"
                                                alt="">                                                   
                                        </li>
                                    @endif 
                                @endfor
                            </ul>
                        </div>
                    @endfor
                    </div>
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
                {{-- Nam Thôi --}}
                <div class="specialtyevent_ specialtyevent_boys  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                        @for($i = 0; $i < $listProductAosomi->count(); $i++) 
                            @if($listProductAosomi[$i]->CategoryID == 4) 
                            <div class="col-span-1 my-5 group_Product ">
                                <a href="{{$listProductAosomi[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                    <img src="/storage/uploads/{{$listProductAosomi[$i]->Img}}"
                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                    <span
                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                        307</span>
                                </a>
                                <div>
                                    <div class="h-10">
                                        <a href="" class="text-sm font-normal">{{$listProductAosomi[$i]->Name}}</a>
                                    </div>
                                    <div class="py-1">
                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductAosomi[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                        <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductAosomi[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                    </div>
                                </div>
                                <ul class="flex item_image">
                                    @for ($j = 0; $j < $imagesAosomi->count(); $j++)
                                        @if($listProductAosomi[$i]->ProductID == $imagesAosomi[$j]->ProductID ) 
                                            <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                                <img class="h-[100%] w-[100%] object-cover rounded-full"
                                                    src=" /storage/uploads/{{$imagesAosomi[$j]->Img}}"
                                                    alt="">                                                   
                                            </li>
                                        @endif 
                                    @endfor
                                </ul>
                            </div>
                            @endif   
                        @endfor
                       
                    </div>
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
                {{-- Nữ Thôi --}}
                <div class="specialtyevent_ specialtyevent_girls  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                        @for($i = 0; $i < $listProductAosomi->count(); $i++) 
                            @if($listProductAosomi[$i]->CategoryID == 3) 
                            <div class="col-span-1 my-5 group_Product ">
                                <a href="{{$listProductAosomi[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                    <img src="/storage/uploads/{{$listProductAosomi[$i]->Img}}"
                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                    <span
                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                        307</span>
                                </a>
                                <div>
                                    <div class="h-10">
                                        <a href="" class="text-sm font-normal">{{$listProductAosomi[$i]->Name}}</a>
                                    </div>
                                    <div class="py-1">
                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductAosomi[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                        <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductAosomi[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                    </div>
                                </div>
                                <ul class="flex item_image">
                                    @for ($j = 0; $j < $imagesAosomi->count(); $j++)
                                        @if($listProductAosomi[$i]->ProductID == $imagesAosomi[$j]->ProductID ) 
                                            <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                                <img class="h-[100%] w-[100%] object-cover rounded-full"
                                                    src=" /storage/uploads/{{$imagesAosomi[$j]->Img}}"
                                                    alt="">                                                   
                                            </li>
                                        @endif 
                                    @endfor
                                </ul>
                            </div>
                            @endif   
                        @endfor
                        
                    </div>
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- ========================================================================================================= --}}
        <span class="inline-block mt-[50px] w-[100%] text-left text-3xl font-medium">VÁY ĐẦM THANH LỊCH</span>
        <div>
            @for ($i = 0; $i < $listsliders_emaketxpress->count(); $i++) 
                @if ($listsliders_emaketxpress[$i]->sort_by == 4)
                    <img src="/storage/uploads/{{$listsliders_emaketxpress[$i]->thumb}}" alt="">
                @endif
            @endfor
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
                        @for($i = 0; $i < $listProductVay->count(); $i++) 
                            <div class="col-span-1 my-5 group_Product ">
                                <a href="{{$listProductVay[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                    <img src="/storage/uploads/{{$listProductVay[$i]->Img}}"
                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                    <span
                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                        307</span>
                                </a>
                                <div>
                                    <div class="h-10">
                                        <a href="" class="text-sm font-normal">{{$listProductVay[$i]->Name}}</a>
                                    </div>
                                    <div class="py-1">
                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductVay[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                        <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductVay[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                    </div>
                                </div>
                                <ul class="flex item_image">
                                    @for ($j = 0; $j < $imagesVay->count(); $j++)
                                        @if($listProductVay[$i]->ProductID == $imagesVay[$j]->ProductID ) 
                                            <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                                <img class="h-[100%] w-[100%] object-cover rounded-full"
                                                    src=" /storage/uploads/{{$imagesVay[$j]->Img}}"
                                                    alt="">                                                   
                                            </li>
                                        @endif 
                                    @endfor
                                </ul>
                            </div>
                        @endfor
                        
                    </div>
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
                {{-- Nam Thôi --}}
                <div class="specialtyevent_ specialtyevent_boys  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                        
                    </div>
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
                {{-- Nữ Thôi --}}
                <div class="specialtyevent_ specialtyevent_girls  hidden">
                    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                        @for($i = 0; $i < $listProductVay->count(); $i++) 
                            @if($listProductVay[$i]->CategoryID == 3) 
                            <div class="col-span-1 my-5 group_Product ">
                                <a href="{{$listProductVay[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                    <img src="/storage/uploads/{{$listProductVay[$i]->Img}}"
                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                    <span
                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                        307</span>
                                </a>
                                <div>
                                    <div class="h-10">
                                        <a href="" class="text-sm font-normal">{{$listProductVay[$i]->Name}}</a>
                                    </div>
                                    <div class="py-1">
                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductVay[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                        <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductVay[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                    </div>
                                </div>
                                <ul class="flex item_image">
                                    @for ($j = 0; $j < $imagesVay->count(); $j++)
                                        @if($listProductVay[$i]->ProductID == $imagesVay[$j]->ProductID ) 
                                            <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                                <img class="h-[100%] w-[100%] object-cover rounded-full"
                                                    src=" /storage/uploads/{{$imagesVay[$j]->Img}}"
                                                    alt="">                                                   
                                            </li>
                                        @endif 
                                    @endfor
                                </ul>
                            </div>
                            @endif   
                        @endfor                              
                    </div>
                    <div class="flex w-[100%]">
                        <button class="text-sm mx-auto hover:text-[#FCAF17] w-[200px] py-3 font-medium outline-[#1C2430] outline">Xem Thêm</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
