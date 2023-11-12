@extends('layouts.home')
@section('content')
    <!-- Thêm một div màn phủ -->
    <div id="overlay"
        class="hidden z-20 fixed top-0 left-0 w-full h-full bg-[#909090] opacity-50 transition-all duration-200"></div>
    <header class="xl:w-full fixed mx-auto h-[100px] bg-[#fff] z-10  border-b bg-gradient-to-b from-[#D7F2FE] to-[#FEFEFC] ">
        <div class="xl:flex justify-end pt-1 hidden">
            <div class="flex items-center text-xs">
                <a href="#"><span class="px-2 hover:text-[#FCAF17]"><i class="p-1 fa-solid fa-location-dot"></i>Tìm 256
                        cửa hàng</span></a>
                <span class="px-2"> <i class="p-1 fa-solid fa-phone"></i>1800 2086</span>
                <span class=" px-2 rounded-full bg-[#FCAF17] ">FREE</span>
                <span class=" px-2">-</span>
                <span class="px-2">Đặt hàng gọi <i class="p-1 fa-solid fa-phone"></i> 02499986999</span>

            </div>
        </div>

        <div class="flex  justify-around  py-3">
            <div class="logo h-[50px] w-[80px]   flex items-center max-xl:hidden">
                <a href=""><img src="/images/logo-removebg-preview.png" alt="logo" class="object-cover"></a>
            </div>
            <div class="xl:hidden flex justify-between items-center w-screen">
                <button class="showNavMobile pl-3">
                    <i class="text-xl fa-solid fa-bars"></i>
                </button>
                <div class="logo h-[50px] w-[180px] flex justify-center">
                    <a href="./index.php"><img src="/images/logo-removebg-preview.png" alt="logo"
                            class="object-cover w-[55px]"></a>
                </div>
                <div>
                    <i class="text-xl inline-block px-[10px] fa-solid fa-cart-shopping"></i>
                </div>
            </div>


            <ul class="xl:flex items-center text-[#221f20] font-medium text-xs hidden">
                @foreach ($listCategories as $category)
                    <li class="mr-4 p-2 custom-transition">
                        <a href="{{ Str::slug($category['Description'], '-') }}"
                            class="transition-colors hover:text-[#FCAF17]">
                            {{ $category['Name'] }}
                        </a>
                        @if (!empty($category['children']))
                            @if (empty($category['children'][0]['children']))
                                <ul
                                    class="flex flex-wrap max-w-[150px] h-auto absolute rounded-sm z-10 border-slate-300 border bg-[#fff] custom-transition-active">
                                    @foreach ($category['children'] as $child)
                                        <li class="p-2 border-b w-[100%]">
                                            <a href="{{ Str::slug($child['Description'], '-') }}"
                                                class="hover:text-[#FCAF17]">
                                                {{ $child['Name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <ul
                                    class="p-2 flex flex-wrap max-w-[500px] h-auto absolute rounded-sm z-10 border-slate-300 border bg-[#fff] custom-transition-active">
                                    @foreach ($category['children'] as $child)
                                        <li class="mb-3 p-2">
                                            <a href="{{ Str::slug($child['Description'], '-') }}"
                                                class="hover:text-[#FCAF17]">
                                                {{ $child['Name'] }}
                                            </a>
                                            @if (!empty($child['children']))
                                                <ul class="text-sm pt-1">
                                                    @foreach ($child['children'] as $grandchild)
                                                        <li class="mb-3 font-light text-[#57585A] hover:text-[#FCAF17]">
                                                            <a href="{{ Str::slug($grandchild['Description'], '-') }}">
                                                                {{ $grandchild['Name'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @endif
                    </li>
                @endforeach
            </ul>




            <div class="right-header xl:flex  items-center hidden">
                <form action="" method="POST" class="flex mr-7">
                    <input type="text" placeholder="Tìm Kiếm Sản Phẩm ..."
                        class="text-sm border outline-none w-[160px] px-2 py-2 rounded-l-lg focus:border-sky-700">
                    <button type="submit"
                        class="border w-[50px] rounded-r-lg transition-colors bg-[#52C9F7] hover:bg-[#38BDF8] hover:text-[#AAAAAA]"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div>
                    <i class="inline-block px-[10px] hover:text-[#FCAF17] fa-solid fa-headphones"></i>
                    <i class="inline-block px-[10px] hover:text-[#FCAF17] fa-solid fa-user"></i>
                    <i class="inline-block px-[10px] hover:text-[#FCAF17] fa-solid fa-cart-shopping"></i>
                </div>
            </div>
        </div>
    </header>

    <div
        class="after:relative after:z-0 after:content-'' after:top-0 after:left-0 after:h-[100px] after:w-full after:block">
    </div>
    <nav
        class="nav_mobile  fixed top-0 left-0 z-30 w-[320px] h-full bg-gradient-to-b from-[#D7F2FE] to-[#FEFEFC] border overflow-y-auto">
        <div class="flex justify-between">
            <a href="/" class="w-[100%] flex justify-center"><img src="/images/logo-removebg-preview.png"
                    alt="" class="object-cover w-[55px]"></a>
            <button class="p-3 text-lg hiddenNavMobile"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <ul class="pl-2">
            @foreach ($listCategories as $category)
                <li class="mr-4 p-2">
                    <div class="flex justify-between items-center">
                        <a href="{{ Str::slug($category['Description'], '-') }}"
                            class=" flex-1 transition-colors hover:text-[#FCAF17]">
                            {{ $category['Name'] }}
                        </a>
                        <button class="dropDownBtn p-2"><i
                                class="transition-all duration-200 fa-solid fa-chevron-down"></i></button>
                    </div>
                    @if (!empty($category['children']))
                        <div class="hidden transition-all duration-200">
                            <ul class=" p-2 flex flex-wrap h-auto rounded-sm z-10 border-slate-300 border bg-[#fff] ">
                                @foreach ($category['children'] as $child)
                                    <li class="mb-3 p-2">
                                        <a href="{{ Str::slug($child['Description'], '-') }}" class="hover:text-[#FCAF17]">
                                            {{ $child['Name'] }}
                                        </a>
                                        @if (!empty($child['children']))
                                            <ul class="text-sm pt-1">
                                                @foreach ($child['children'] as $grandchild)
                                                    <li class="mb-3 font-light text-[#57585A] hover:text-[#FCAF17]">
                                                        <a href="{{ Str::slug($grandchild['Description'], '-') }}">
                                                            {{ $grandchild['Name'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
        <div>
            <ul class="px-2 py-1 border-t">
                <li class="text-left flex items-center py-1"><a href=""><i class="px-1 fa-regular fa-comments"></i>
                        Tư vấn qua zalo</a></li>
                <li class="text-left flex items-center py-1"><a href="/login"><i
                            class="px-1 fa-regular fa-circle-user"></i> Đăng nhập</a></li>
                <li class="text-left flex items-center py-1"><a href=""><i class="px-1 fa-solid fa-truck-fast"></i>
                        Đơn hàng của tôi</a></li>
                <li class="text-left flex items-center py-1"><a href=""><i class="px-1 fa-solid fa-location-dot"></i>
                        Hệ thống cửa hàng</a></li>
                <li class="text-left flex items-center py-1"><a href=""><i class="px-1 fa-solid fa-shield"></i>Chính
                        sách hỗ trợ khách hàng</a></li>
            </ul>
        </div>
    </nav>
    {{-- End navMobile --}}
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
    <div class="relative parent_category_item">
        <ul class="absolute top-0 left-0 w-[100%] flex flex-wrap  mt-5 justify-around items-center category_item_ category_item_girl">
            @if ($arrayCategoriesGirls)
                @foreach ($arrayCategoriesGirls as $arrayCategoriesGirl)
                <li class="w-[150px] h-[130px]  text-center group hover:mt-[-3px] box-border ">
                    <a href="{{ Str::slug($arrayCategoriesGirl->Description, '-')}}" class="flex flex-col justify-center items-center">
                        <img class="rounded-full object-cover w-[90px] h-[90px] transition-all group-hover:rounded-full group-hover:shadow-[0_10px_5px_-5px_rgba(0,0,0,0.3)]" src="{{$arrayCategoriesGirl->Image}}"
                            alt="">
                        <span class="font-medium mt-1 transition-colors group-hover:text-[#FCAF17] text-[#11007D]">{{$arrayCategoriesGirl->Name}}</span>
                    </a>
                </li>
                @endforeach
            @endif
            

        </ul>
        <ul class="invisible absolute  top-0 left-0 w-[100%] flex flex-wrap  mt-5 justify-around items-center category_item_ category_item_boy">
            @if ($arrayCategoriesBoys)
            @foreach ($arrayCategoriesBoys as $arrayCategoriesBoy)
            <li class=" w-[150px] h-[130px]  text-center group hover:mt-[-3px] box-border ">
                <a href="{{ Str::slug($arrayCategoriesBoy->Description, '-')}}" class="flex flex-col justify-center items-center">
                    <img class="rounded-full object-cover w-[90px] h-[90px] transition-all group-hover:rounded-full group-hover:shadow-[0_10px_5px_-5px_rgba(0,0,0,0.3)]" src="{{$arrayCategoriesBoy->Image}}"
                        alt="">
                    <span class="font-medium mt-1 transition-colors group-hover:text-[#FCAF17] text-[#11007D]">{{$arrayCategoriesBoy->Name}}</span>
                </a>
            </li>
            @endforeach
        @endif
        </ul>
        <ul class="invisible absolute top-0 left-0 w-[100%] flex flex-wrap mt-5 justify-around items-center category_item_ category_item_children">
            @if ($arrayCategoriesChildrens)
                @foreach ($arrayCategoriesChildrens as $arrayCategoriesChildren)
                <li class=" w-[150px] h-[130px]  text-center group hover:mt-[-3px] box-border ">
                    <a href="{{ Str::slug($arrayCategoriesChildren->Description, '-')}}" class="flex flex-col justify-center items-center">
                        <img class="rounded-full object-cover w-[90px] h-[90px] transition-all group-hover:rounded-full group-hover:shadow-[0_10px_5px_-5px_rgba(0,0,0,0.3)]" src="{{$arrayCategoriesChildren->Image}}"
                            alt="">
                        <span class="font-medium mt-1 transition-colors group-hover:text-[#FCAF17] text-[#11007D]">{{$arrayCategoriesChildren->Name}}</span>
                    </a>
                </li>
                @endforeach
            @endif
        </ul>
    </div>

@endsection
