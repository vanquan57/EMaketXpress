<div id="overlay"
    class="hidden z-40 fixed top-0 left-0 w-full h-full bg-[#909090] opacity-50 transition-all duration-200">
</div>
<div class="w-[300px] fixed z-50 right-0 top-3 alert_ alert_susses">
    <div class="  bg-teal-50 border-t-2 border-teal-500 rounded-lg p-4 dark:bg-teal-800/30 " role="alert">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Icon -->
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                </span>
                <!-- End Icon -->
            </div>
            <div class="ms-3">
                <h3 class="text-gray-800 font-semibold dark:text-white">
                    Thành Công
                </h3>
                <p class="text-sm text-gray-700 dark:text-gray-400">
                    Thêm Sản Phẩm vào giỏ hàng thành công
                </p>
            </div>
        </div>
    </div>
</div>
<div class="w-[300px] fixed z-50 right-0 top-3 alert_ alert_error">
    <div class="bg-red-50 border-s-4 border-red-500 p-4 dark:bg-red-800/30" role="alert">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Icon -->
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </span>
                <!-- End Icon -->
            </div>
            <div class="ms-3">
                <h3 class="text-gray-800 font-semibold dark:text-white">
                    Error!
                </h3>
                <p class="text-sm text-gray-700 dark:text-gray-400">
                    Your purchase has been declined.
                </p>
            </div>
        </div>
    </div>
</div>
<header
    class="xl:w-full fixed mx-auto h-[100px] bg-[#fff] z-10  border-b bg-gradient-to-b from-[#D7F2FE] shadow-2xl to-[#FEFEFC] ">
    <div class="xl:flex justify-end pt-1 hidden">
        <div class="flex items-center text-xs">
            <a href="#"><span class="px-2 hover:text-[#FCAF17]"><i class="p-1 fa-solid fa-location-dot"></i>Tìm
                    256
                    cửa hàng</span></a>
            <span class="px-2"> <i class="p-1 fa-solid fa-phone"></i>1800 2086</span>
            <span class=" px-2 rounded-full bg-[#FCAF17] ">FREE</span>
            <span class=" px-2">-</span>
            <span class="px-2">Đặt hàng gọi <i class="p-1 fa-solid fa-phone"></i> 02499986999</span>

        </div>
    </div>

    <div class="flex  justify-around  py-3">
        <div class="logo h-[50px] w-[80px]   flex items-center max-xl:hidden">
            <a href="/"><img src="/images/logo-removebg-preview.png" alt="logo" class="object-cover"></a>
        </div>
        <div class="xl:hidden flex justify-between items-center w-screen">
            <button class="showNavMobile pl-3">
                <i class="text-xl fa-solid fa-bars"></i>
            </button>
            <div class="logo h-[50px] w-[180px] flex justify-center">
                <a href="/"><img src="/images/logo-removebg-preview.png" alt="logo"
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
            <form id="searchForm" action="/search" method="GET" class="flex mr-7">
                <input name="query" type="text" placeholder="Tìm Kiếm Sản Phẩm ..."
                    class="text-sm border outline-none w-[160px] px-2 py-2 rounded-l-lg focus:border-sky-700">
                <button type="submit"
                    class="border w-[50px] rounded-r-lg transition-colors bg-[#52C9F7] hover:bg-[#38BDF8] hover:text-[#AAAAAA]"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <div>

                <span class="group relative">
                    <a href="/cart">
                        <i class="inline-block px-[10px] hover:text-[#FCAF17] fa-solid fa-cart-shopping"></i>
                    </a>
                    <div
                        class="absolute rounded-md right-0 top-[35px] w-[400px]   invisible group-hover:visible bg-white before:bg-transparent before:absolute before:top-[-17px] before:w-[100%] before:py-3 before:content-['']">
                        @if (!Auth::check())
                            <div class="bg-gradient-to-b from-[#D7F2FE] to-[#FEFEFC]">
                                <a href="/login" class="flex items-center">
                                    <span
                                        class="py-4 px-1 min-w-[90px] inline-block border-r  text-sm font-medium">ĐĂNG
                                        NHÂP</span>
                                    <span class="py-4 px-2 text-xs"> Đăng nhập và đồng bộ sản phẩm đến giỏ hàng của
                                        bạn</span>
                                </a>
                            </div>
                        @endif

                        <div class="py-1 border-y  max-h-[360px] overflow-y-auto group_Products_in_Cart">
                            @if ($productByCarts)
                                @php
                                    $totalProductsInCart = 0;
                                @endphp
                                @foreach ($productByCarts as $productByCart)
                                    @php
                                        $totalProductsInCart += $productByCart->Price_sale * $productByCart->pivot->ProductNumbers;
                                    @endphp
                                    <div class="flex mt-2 borde px-1 products_Item_in_Cart">
                                        <div class="w-[90px] h-[120px] flex items-center rounded">
                                            <img class="object-cover rounded"
                                                src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/smn6016-kdm-ao-so-mi-nu-3.jpg"
                                                alt="">
                                        </div>
                                        <div class="flex-1 pl-2">
                                            <a class="py-1" href="">{{ $productByCart->Name }}</a>
                                            <p class="font-medium text-[#FCAF17] py-1">
                                                {{ number_format($productByCart->Price_sale, 0, '.', '.') }}VNĐ
                                                <s class="font-normal text-sm pl-1 inline-block text-[#DBDADA]">{{ number_format($productByCart->Price, 0, '.', '.') }}
                                                    VNĐ</s>
                                            </p>
                                            <span
                                                class="rounded-full py-1 px-2 bg-[#F8F8F8] w-auto mt-1">{{ $productByCart->pivot->ProductColor }}
                                                / {{ $productByCart->pivot->ProductSize }}</span>
                                            <div class="flex justify-between mt-2">

                                                <div class="pr-2">
                                                    Tổng cộng: <span
                                                        class="font-medium text-[#FF5500]">{{ number_format($productByCart->Price_sale * $productByCart->pivot->ProductNumbers, 0, '.', '.') }}
                                                        VNĐ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div
                                    class="mt-2 bg-gradient-to-b from-[#D7F2FE] to-[#FEFEFC] h-[40px] flex items-center w-[100%] justify-end pr-2">
                                    Tổng cộng: <span
                                        class="font-medium text-[#FF5500]">{{ number_format($totalProductsInCart, 0, '.', '.') }}
                                        VNĐ</span>
                                </div>
                                <a href="/cart"
                                    class="block text-center  transition-colors py-3 font-medium w-[100%]  hover:text-[#816a38] hover:bg-[#52C9F7] bg-[#aadff6] ">XEM
                                    GIỎ HÀNG</a>
                            @endif




                        </div>

                    </div>
                </span>
                <span class="group relative">
                    <i class="inline-block px-[10px] hover:text-[#FCAF17] fa-solid fa-user  "></i>
                    <div
                        class="group-hover:visible transition-all w-[200px] absolute top-0 right-0 mt-[30px] z-10 invisible bg-white  rounded-lg shadow dark:bg-gray-700   before:bg-transparent before:absolute before:top-[-17px] before:w-[100%] before:py-3 before:content-['']">
                        <ul>
                            @if (Auth::check())
                                <li class="border py-1 rounded-lg flex items-center px-1">

                                    <img src="@if (Auth::check()) {{ Auth::user()->avatar ? Auth::user()->avatar : 'https://api-private.atlassian.com/users/0cce1b66ea5b0f118a553ac58068ac76/avatar' }} @endif"
                                        alt="@if (Auth::check()) {{ Auth::user()->username }} @endif "
                                        class="rounded-full w-[48px] h-[48px]">
                                    <span class="pl-2">
                                        @if (Auth::check())
                                            {{ Auth::user()->username }}
                                        @endif
                                    </span>

                                </li>
                            @else
                                <li
                                    class="border py-1 rounded-lg flex items-center px-1  hover:text-[#FCAF17] hover:cursor-pointer">
                                    <img class="w-[24px] h-[24px] rounded-full"
                                        src="https://cdn-icons-png.flaticon.com/512/4034/4034219.png" alt="Đăng Nhập">
                                    <a href="/login" class="pl-2 flex-1">Đăng Nhập</a>
                                </li>
                            @endif

                            <li
                                class="border py-1 rounded-lg flex items-center px-1  hover:text-[#FCAF17] hover:cursor-pointer">
                                <img class="w-[24px] h-[24px] rounded-full"
                                    src="https://static.chotot.com/storage/chotot-icons/svg/escrow_buy_orders.svg"
                                    alt="Đơn hàng của tôi">
                                <a href="/account-orders" class="pl-2 flex-1 ">Đơn hàng của tôi</a>
                            </li>
                            <li
                                class="border py-1 rounded-lg flex items-center px-1  hover:text-[#FCAF17] hover:cursor-pointer">
                                <img class="w-[24px] h-[24px] rounded-full"
                                    src="https://static.chotot.com/storage/icons/svg/help.svg" alt="Trợ giúp">
                                <a href="#" class="pl-2 flex-1">Trợ giúp</a>
                            </li>
                            <li
                                class="border py-1 rounded-lg flex items-center px-1  hover:text-[#FCAF17] hover:cursor-pointer">
                                <img class="w-[24px] h-[24px] rounded-full"
                                    src="	https://static.chotot.com/storage/chotot-icons/svg/rate-review.svg"
                                    alt="Đóng góp ý kiến">
                                <a href="#" class="pl-2 flex-1">Đóng góp ý kiến</a>
                            </li>
                            @if (Auth::check())
                                <li
                                    class="border py-1 rounded-lg flex items-center px-1  hover:text-[#FCAF17] hover:cursor-pointer">
                                    <img class="w-[24px] h-[24px] rounded-full"
                                        src="https://www.svgrepo.com/download/199922/logout.svg" alt="Đăng Xuất">
                                    <a href="/logout" class="pl-2 flex-1">Đăng Xuất</a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </span>
                <i class="inline-block px-[10px] hover:text-[#FCAF17] fa-solid fa-headphones"></i>
            </div>
        </div>
    </div>
</header>

<div
    class="after:relative after:z-0 after:content-'' after:top-0 after:left-0 after:h-[100px] after:w-full after:block">
</div>
<nav
    class="nav_mobile  fixed top-0 left-0 z-50 w-[320px] h-full bg-gradient-to-b from-[#D7F2FE] to-[#FEFEFC] border overflow-y-auto">
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
                    </div>
                @endif
            </li>
        @endforeach
    </ul>
    <div>
        <ul class="px-2 py-1 border-t">
            @if (Auth::check())
                <li class="flex items-center px-1">

                    <img src="@if (Auth::check()) {{ Auth::user()->avatar ? Auth::user()->avatar : 'https://avatars.dicebear.com/v2/initials/felicita-yundt.svg' }} @endif"
                        alt="@if (Auth::check()) {{ Auth::user()->username }} @endif "
                        class="rounded-full w-[48px] h-[48px]">
                    <span class="pl-2">
                        @if (Auth::check())
                            {{ Auth::user()->username }}
                        @endif
                    </span>


                </li>
            @else
                <li class="flex items-center px-1  hover:text-[#FCAF17] hover:cursor-pointer">
                    <img class="w-[24px] h-[24px] rounded-full"
                        src="https://cdn-icons-png.flaticon.com/512/4034/4034219.png" alt="Đăng Nhập">
                    <a href="/login" class="pl-2 flex-1">Đăng Nhập</a>
                </li>
            @endif
            <li class="text-left flex items-center py-1"><a href=""><i
                        class="px-1 fa-regular fa-comments"></i>
                    Tư vấn qua zalo</a></li>


            <li class="text-left flex items-center py-1"><a href=""><i
                        class="px-1 fa-solid fa-truck-fast"></i>
                    Đơn hàng của tôi</a></li>
            <li class="text-left flex items-center py-1"><a href=""><i
                        class="px-1 fa-solid fa-location-dot"></i>
                    Hệ thống cửa hàng</a></li>
            <li class="text-left flex items-center py-1"><a href=""><i
                        class="px-1 fa-solid fa-shield"></i>Chính
                    sách hỗ trợ khách hàng</a></li>
            @if (Auth::check())
                <li class="py-1 flex items-center px-1  hover:text-[#FCAF17] hover:cursor-pointer">
                    <img class="w-[24px] h-[24px] rounded-full"
                        src="https://www.svgrepo.com/download/199922/logout.svg" alt="Đăng Xuất">
                    <a href="/logout" class="pl-2 flex-1">Đăng Xuất</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
