@extends('layouts.home')
@section('content')
    <div class="lg:max-w-[1200px] mx-auto">
        <div class="mt-[50px]">
            @for ($i = 0; $i < $listsliders_coupon->count(); $i++) 
                @if ($listsliders_coupon[$i]->sort_by == 1 )
                    <img src="/storage/uploads/{{$listsliders_coupon[$i]->thumb}}" alt="">
                    @break
                @endif
            @endfor
        </div>
        <div class="mt-[50px]">
            @for ($i = 0; $i < $listsliders_coupon->count(); $i++) 
                @if ($listsliders_coupon[$i]->sort_by == 2 )
                    <img src="/storage/uploads/{{$listsliders_coupon[$i]->thumb}}" alt="">
                    @break
                @endif
            @endfor
        <div>
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                @for($i = 0; $i < $listProductSale->count(); $i++) 
                            @if($i==16) 
                                @break
                            @endif 
                            <div class="col-span-1 my-5 group_Product ">
                                <a href="{{$listProductSale[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                    <img src="/storage/uploads/{{$listProductSale[$i]->Img}}"
                                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                    <span
                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                        307</span>
                                </a>
                                <div>
                                    <div class="h-10">
                                        <a href="" class="text-sm font-normal">{{$listProductSale[$i]->Name}}</a>
                                    </div>
                                    <div class="py-1">
                                        <span class="font-medium text-[#CD151C]">{{  number_format($listProductSale[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                        <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductSale[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                    </div>
                                </div>
                                <ul class="flex item_image">
                                    @for ($j = 0; $j < $imagesSale->count(); $j++)
                                        @if($listProductSale[$i]->ProductID == $imagesSale[$j]->ProductID ) 
                                            <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                                <img class="h-[100%] w-[100%] object-cover rounded-full"
                                                    src=" /storage/uploads/{{$imagesSale[$j]->Img}}"
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
        <div class="mt-[50px]">
            <div class="mt-[50px]">
                @for ($i = 0; $i < $listsliders_coupon->count(); $i++) 
                    @if ($listsliders_coupon[$i]->sort_by == 3)
                        <img src="/storage/uploads/{{$listsliders_coupon[$i]->thumb}}" alt="">
                        @break
                    @endif
                @endfor
            </div>
        </div>
        <div>
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                @for($i = 0; $i < $listProductAopolo->count(); $i++) 
                    <div class="col-span-1 my-5 group_Product ">
                        <a href="{{$listProductAopolo[$i]->Img}}" class="inline-block overflow-hidden relative rounded">
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
        <div class="mt-[50px]">
            @for ($i = 0; $i < $listsliders_coupon->count(); $i++) 
                @if ($listsliders_coupon[$i]->sort_by == 4)
                    <img src="/storage/uploads/{{$listsliders_coupon[$i]->thumb}}" alt="">
                    @break
                @endif
            @endfor
        </div>
        <div>
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                @for($i = 0; $i < $listProductGioDong->count(); $i++) 
                    <div class="col-span-1 my-5 group_Product ">
                        <a href="{{$listProductGioDong[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                            <img src="/storage/uploads/{{$listProductGioDong[$i]->Img}}"
                                alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                            <span
                                class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                    class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                307</span>
                        </a>
                        <div>
                            <div class="h-10">
                                <a href="" class="text-sm font-normal">{{$listProductGioDong[$i]->Name}}</a>
                            </div>
                            <div class="py-1">
                                <span class="font-medium text-[#CD151C]">{{  number_format($listProductGioDong[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductGioDong[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                            </div>
                        </div>
                        <ul class="flex item_image">
                            @for ($j = 0; $j < $imagesGioDong->count(); $j++)
                            @if($listProductGioDong[$i]->ProductID == $imagesGioDong[$j]->ProductID ) 
                                <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                        class="h-[100%] w-[100%] object-cover rounded-full"
                                        src=" /storage/uploads/{{$imagesGioDong[$j]->Img}}"
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
        <div class="mt-[50px]">
            @for ($i = 0; $i < $listsliders_coupon->count(); $i++) 
                @if ($listsliders_coupon[$i]->sort_by == 5)
                    <img src="/storage/uploads/{{$listsliders_coupon[$i]->thumb}}" alt="">
                    @break
                @endif
            @endfor
        </div>
    </div>
@endsection
