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
                @for($i = 0; $i < $listProduct->count(); $i++) 

                                <div class="col-span-1 my-5 group_Product ">
                                    <a href="{{$listProduct[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                                        <img src="/storage/uploads/{{$listProduct[$i]->Img}}"
                                            alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                        <span
                                            class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                                class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                            307</span>
                                    </a>
                                    <div>
                                        <div class="h-10">
                                            <a href="" class="text-sm font-normal">{{$listProduct[$i]->Name}}</a>
                                        </div>
                                        <div class="py-1">
                                            <span class="font-medium text-[#CD151C]">{{  number_format($listProduct[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                            <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProduct[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                                        </div>
                                    </div>
                                    <ul class="flex item_image">
                                        @for ($j = 0; $j < $images->count(); $j++)
                                            @if($listProduct[$i]->ProductID == $images[$j]->ProductID ) 
                                                <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                                    class="h-[100%] w-[100%] object-cover rounded-full"
                                                    src=" /storage/uploads/{{$images[$j]->Img}}"
                                                    alt="">
                                            </li>
                                            @endif 
                                    @endfor
                                    </ul>
                               </div>

                        
                @endfor
            </div>
            <div class="flex justify-center items-center">
               {{-- phân trang --}}
               @if(isset($listProduct))
                    <div class="flex items-center justify-between">
                        @isset($listProduct)
                            {{ $listProduct->links() }}
                        @endisset
                        <small>Page {{ request()->query('page') }} of @isset($listProduct)
                                {{ $listProduct->lastPage() }}
                            @endisset
                        </small>
                    </div>
                @endif

        </div>
    </div>
@endsection
