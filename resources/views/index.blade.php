@extends('layouts.home')
@section('content')
    <header class="xl:w-full fixed mx-auto bg-[#fff] z-20  border-b bg-gradient-to-b from-[#D7F2FE] to-[#FEFEFC]">
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
            <div class="logo h-[50px] w-[80px]   flex items-center max-md:hidden">
                <a href=""><img src="/images/logo-removebg-preview.png" alt="logo" class="object-cover"></a>
            </div>
            <div class="nav-mobile xl:hidden flex justify-between items-center w-screen">
                <div class="pl-3">
                    <i class="text-xl fa-solid fa-bars"></i>
                </div>
                <div class="logo h-[50px] w-[180px] flex justify-center">
                    <a href="./index.php"><img src="/images/logo-removebg-preview.png" alt="logo"
                            class="object-cover w-[48px]"></a>
                </div>
                <div>
                    <i class="text-xl inline-block px-[10px] fa-solid fa-cart-shopping"></i>
                </div>
            </div>


            <ul class="xl:flex items-center text-[#221f20] font-medium text-xs hidden">
                @foreach ($listCategories as $category)
                    <li class="mr-4 p-2 custom-transition">
                        <a href="{{ Str::slug($category['Name'], '-') }}" class="transition-colors hover:text-[#FCAF17]">
                            {{ $category['Name'] }}
                        </a>
                        @if (!empty($category['children']))
                            @if (empty($category['children'][0]['children']))
                                <ul class="flex flex-wrap max-w-[150px] h-auto absolute rounded-sm z-10 border-slate-300 border bg-[#fff] custom-transition-active">
                                    @foreach ($category['children'] as $child)
                                        <li class="p-2 border-b w-[100%]">
                                            <a href="{{ Str::slug($child['Name'], '-') }}" class="hover:text-[#FCAF17]">
                                                {{ $child['Name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <ul class="p-2 flex flex-wrap max-w-[500px] h-auto absolute rounded-sm z-10 border-slate-300 border bg-[#fff] custom-transition-active">
                                    @foreach ($category['children'] as $child)
                                        <li class="mb-3 p-2">
                                            <a href="{{ Str::slug($child['Name'], '-') }}" class="hover:text-[#FCAF17]">
                                                {{ $child['Name'] }}
                                            </a>
                                            @if (!empty($child['children']))
                                                <ul class="text-sm pt-1">
                                                    @foreach ($child['children'] as $grandchild)
                                                        <li class="mb-3 font-light text-[#57585A] hover:text-[#FCAF17]">
                                                            <a href="{{ Str::slug($grandchild['Name'], '-') }}">
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
@endsection
