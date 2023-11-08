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
            <div class="logo h-[50px] w-[180px] flex items-center max-md:hidden">
                <a href=""><img src="/images/logo-removebg-preview.png" alt="logo"
                        class="object-cover w-[100px]"></a>
            </div>
            <div class="nav-mobile xl:hidden flex justify-between items-center w-screen">
                <div class="pl-3">
                    <i class="text-xl fa-solid fa-bars"></i>
                </div>
                <div class="logo h-[50px] w-[180px flex justify-center">
                    <a href="./index.php"><img src="/images/logo-removebg-preview.png" alt="logo"
                            class="object-cover w-[48px]"></a>
                </div>
                <div>
                    <i class="text-xl inline-block px-[10px] fa-solid fa-cart-shopping"></i>
                </div>
            </div>

            <ul class="xl:flex items-center  text-[#221f20] font-medium text-xs hidden">
                <li class="mr-4 p-2 custom-transition">
                    <a href="" class="transition-colors hover:text-[#FCAF17]">abc</a>
                    <ul
                        class="w-[1200px] h-[400px] absolute top-[60px] left-0 rounded-sm z-10 border-slate-300 border bg-[#fff]  custom-transition-active">
                        <div class="p-4 grid grid-cols-6 w-[100%] h-[100%]">
                            <div class="text-sm">
                                <li class="mb-3 "><a href="./category.php">NEW ARRIVAL</a></li>
                                <li class="mb-3 text-[#FF0000]"><a href="">Sale 70% toàn bộ SP</a></li>
                                <li class="mb-3 text-[#FF0000]"><a href="">Mua 3 giảm 70%</a></li>
                                <li class="mb-3 "><a href="">IVY YOU</a></li>
                                <li class="mb-3 "><a href="">TENCEL PRODUCTS</a></li>
                                <li class="mb-3 "><a href="">SOFT & SUBTLE</a></li>
                            </div>
                            <div class="text-sm">
                                <li class="mb-3"><a href="">ÁO</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo sơ
                                        mi</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        thun</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        kiểu</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        croptop</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        peplum</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        vest/blazer</a></li>
                                <li class="mb-3"><a href="">PHỤ KIỆN</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Túi/ví</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Giày/dép &
                                        Sandals</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Phụ
                                        kiện</a></li>
                            </div>
                            <div class="text-sm">
                                <li class="mb-3"><a href="">QUẦN & JUMPSUIT</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần
                                        jeans</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần
                                        dài</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần lửng/
                                        short</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần
                                        baggy</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a
                                        href="">Jumpsuit</a></li>
                            </div>
                            <div class="text-sm">
                                <li class="mb-3"><a href="">CHÂN VÁY</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Chân
                                        váy</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Chân váy
                                        xếp
                                        ly</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Chân váy
                                        chữ
                                        A</a></li>
                            </div>
                            <div class="text-sm">
                                <li class="mb-3"><a href="">ĐẦM</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Đầm</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Đầm maxi/
                                        voan</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Đầm
                                        thun</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Senora -
                                        Đầm dạ
                                        hội</a></li>
                            </div>
                            <div class="text-sm">
                                <li class="mb-3"><a href="">ĐỒ LÓT</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        bra</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần
                                        lót</a></li>
                            </div>
                        </div>

                    </ul>
                </li>

                <li class="mr-4 p-2 custom-transition">
                    <a href="" class="transition-colors hover:text-[#FCAF17]">NAM</a>
                    <ul
                        class="w-[1200px] h-[400px] absolute top-[60px] left-0 rounded-sm z-10 border-slate-300 border bg-[#fff]  custom-transition-active">
                        <div class="p-4 grid grid-cols-6 w-[100%] h-[100%]">
                            <div class="text-sm">
                                <li class="mb-3 "><a href="">NEW ARRIVAL</a></li>
                                <li class="mb-3 text-[#FF0000]"><a href="">Sale 70% toàn bộ SP</a></li>
                            </div>
                            <div class="text-sm">
                                <li class="mb-3"><a href="">ÁO</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        thun</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo khoác
                                        Nam</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        polo</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo sơ
                                        mi</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        phao</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        len</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo
                                        vest</a></li>
                            </div>
                            <div class="text-sm">
                                <li class="mb-3"><a href="">QUẦN NAM</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần
                                        jeans</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần
                                        lửng/
                                        short</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần
                                        dài</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần
                                        khaki</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần
                                        tây</a></li>
                            </div>
                            <div class="text-sm">
                                <li class="mb-3"><a href="">GIÀY & DÉP</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a
                                        href="">Giày/dép</a></li>
                            </div>
                            <div class="text-sm col-span-2">
                                <li class="mb-3"><a href="">PHỤ KIỆN</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Phụ
                                        kiện</a></li>
                            </div>

                        </div>

                    </ul>
                </li>
                <li class="mr-4 p-2 custom-transition">
                    <a href="" class="transition-colors hover:text-[#FCAF17]">TRẺ EM</a>
                    <ul
                        class="w-[1200px] h-[400px] absolute top-[60px] left-0 rounded-sm z-10 border-slate-300 border bg-[#fff]  custom-transition-active">
                        <div class="p-4 grid grid-cols-6 w-[100%] h-[100%]">
                            <div class="text-sm">
                                <li class="mb-3 "><a href="">NEW ARRIVAL</a></li>
                            </div>
                            <div class="text-sm">
                                <li class="mb-3"><a href="">BÉ GÁI</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo bé
                                        gái</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần bé
                                        gái</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Váy bé
                                        gái</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Chân váy
                                        bé
                                        gái</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Phụ kiện
                                        bé
                                        gái</a></li>
                            </div>
                            <div class="text-sm col-span-4">
                                <li class="mb-3"><a href="">BÉ TRAI</a></li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Áo bé
                                        trai</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Quần bé
                                        trai</a>
                                </li>
                                <li class="mb-3 font-light text-[#57585A] hover:text-[#221F20]"><a href="">Phụ kiện
                                        bé
                                        trai</a></li>
                            </div>
                        </div>

                    </ul>
                </li>
                <li class="mr-4 p-2 "><a href="" class="transition-colors hover:text-[#FCAF17]">LIFESTYLE</a></li>
                <li class="mr-4 p-2 relative custom-transition">
                    <a href="" class="transition-colors hover:text-[#FCAF17]">VỀ CHÚNG TÔI</a>
                    <ul
                        class="w-[180px] h-[100px] absolute top-[30px] text-sm left-0 p-3 rounded-sm z-10 border-slate-300 border bg-[#fff] custom-transition-active">
                        <li class="mb-2"><a href="">Về IVY moda</a></li>
                        <li class="mb-2"><a href="">Fashion Show</a></li>
                        <li class="mb-2"><a href="">Hoạt động cộng đồng</a></li>
                    </ul>
                </li>
            </ul>

            <div class="right-header xl:flex  items-center hidden">
                <form action="" method="POST" class="flex mr-7">
                    <input type="text" placeholder="Tìm Kiếm Sản Phẩm ..."
                        class="border outline-none w-[230px] px-2 py-2 rounded-l-lg focus:border-sky-700">
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
