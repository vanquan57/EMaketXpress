@extends('layouts.home')
@section('content')
    <div id="overlayProduct"
        class=" hidden z-50 fixed top-0 left-0 w-full h-full bg-[#909090] opacity-50 transition-all duration-200"></div>

    <div class="px-2 mx-auto">
        <div>
            @isset($categoryCurrent->CategoryProductAvatar)
                <img src="{{ $categoryCurrent->CategoryProductAvatar }}" alt="" class="w-[100%] object-cover">
            @endisset

        </div>
        @isset($categoryBigParent)
            <div class="mt-4 text-center">
                <span class="font-medium text-sm px-1">{{ $categoryBigParent->Name }}</span>
                <span class="font-medium text-sm ">/</span>
                <span class="font-medium text-sm px-1">{{ $categoryParent->Name }}</span>
                <span
                    class="inline-block w-[100%] text-center font-medium text-[#FDAF17] mt-2  uppercase">{{ $categoryCurrent->Description }}</span>
            </div>
        @endisset

        <div class="flex justify-center py-[25px] bg-[#F8F8F8]">
            <button
                class="border mx-2 w-[90px]  py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors bg-[#FCAF17] text-white">NỮ</button>
            <button
                class="border mx-2 w-[90px]  py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors">NAM</button>
            <button class="border mx-2 w-[90px]  py-2 rounded-md hover:bg-[#FDAF17] hover:text-white transition-colors">TRẺ
                EM</button>
        </div>
        <nav
            class="navMobileProduct fixed top-0 right-0 z-50 w-[320px] h-screen  bg-gradient-to-b from-[#D7F2FE] to-[#FEFEFC] border overflow-y-auto">
            <div class="flex justify-between">
                <button class="p-3 text-lg hiddenNavMobileProduct"><i class="fa-solid fa-xmark"></i></button>
                <a href="/" class="w-[100%] flex justify-center"><img src="/images/logo-removebg-preview.png"
                        alt="" class="object-cover w-[55px]"></a>

            </div>
            <ul class="mt-[70px] px-2">
                <li class="my-5 py-2 border bg-slate-50 rounded px-1">
                    <div class="flex justify-between items-center">
                        <span class=" flex-1 transition-colors hover:text-[#FCAF17]">
                            Kích thước
                        </span>
                        <button class="dropDownBtn p-2"><i class="transition-all duration-200 fa-solid fa-chevron-down"
                                style="transform: rotate(0deg);"></i></button>
                    </div>
                    <div class="hidden transition-all duration-200" style="display: none;">
                        <div class="flex flex-wrap">
                            <label for="size-xs"
                                class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="size-xs" class="hidden">
                                <span>XS</span>
                            </label>
                            <label for="size-s"
                                class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="size-s" class="hidden">
                                <span>S</span>
                            </label>
                            <label for="size-m"
                                class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="size-m" class="hidden">
                                <span>M</span>
                            </label>
                            <label for="size-l"
                                class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="size-l" class="hidden">
                                <span>L</span>
                            </label>
                            <label for="size-xl"
                                class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="size-xl" class="hidden">
                                <span>XL</span>
                            </label>
                            <label for="size-2XL"
                                class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="size-2XL" class="hidden">
                                <span>2XL</span>
                            </label>
                            <label for="size-3xl"
                                class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="size-3xl" class="hidden">
                                <span>3XL</span>
                            </label>
                            <label for="size-4xl"
                                class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="size-4xl" class="hidden">
                                <span>4XL</span>
                            </label>
                        </div>
                    </div>
                </li>
                <li class="my-5 py-2 border bg-slate-50 rounded px-1">
                    <div class="flex justify-between items-center">
                        <span class=" flex-1 transition-colors hover:text-[#FCAF17]">
                            Màu sắc
                        </span>
                        <button class="dropDownBtn p-2"><i class="transition-all duration-200 fa-solid fa-chevron-down"
                                style="transform: rotate(0deg);"></i></button>
                    </div>
                    <div class="hidden transition-all duration-200" style="display: none;">
                        <div class="flex flex-wrap">
                            <label for="color-black"
                                class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="color-black" class="hidden">
                                <span class="flex items-center font-normal text-sm"><i
                                        class="inline-block p-2 rounded-full bg-[#000000] mr-1 border"></i>Đen</span>
                            </label>
                            <label for="color-white"
                                class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="color-white" class="hidden">
                                <span class="flex items-center font-normal text-sm"><i
                                        class="inline-block p-2 rounded-full bg-[#FFFFFF] mr-1 border"></i>Trắng</span>
                            </label>
                            <label for="color-navy"
                                class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="color-navy" class="hidden">
                                <span class="flex items-center font-normal text-sm"><i
                                        class="inline-block p-2 rounded-full bg-[#03204C] mr-1 border"></i>Xanh
                                    Navy</span>
                            </label>
                            <label for="color-green"
                                class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="color-green" class="hidden">
                                <span class="flex items-center font-normal text-sm"><i
                                        class="inline-block p-2 rounded-full bg-[#62BF5E] mr-1 border"></i>Xanh
                                    Lá</span>
                            </label>
                            <label for="color-brown"
                                class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="color-brown" class="hidden">
                                <span class="flex items-center font-normal text-sm"><i
                                        class="inline-block p-2 rounded-full bg-[#613B0D] mr-1 border"></i>Nâu</span>
                            </label>
                            <label for="color-green-mint"
                                class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="color-green-mint" class="hidden">
                                <span class="flex items-center font-normal text-sm"><i
                                        class="inline-block p-2 rounded-full bg-[#8CD6C4] mr-1 border"></i>Xanh
                                    Mint</span>
                            </label>
                            <label for="color-gray"
                                class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="color-gray" class="hidden">
                                <span class="flex items-center font-normal text-sm"><i
                                        class="inline-block p-2 rounded-full bg-[#C1C5C0] mr-1 border"></i>Xám</span>
                            </label>
                        </div>
                    </div>
                </li>
                <li class="my-5 py-2 border bg-slate-50 rounded px-1">
                    <div class="flex justify-between items-center">
                        <span class=" flex-1 transition-colors hover:text-[#FCAF17]">
                            Khoảng giá (VNĐ)
                        </span>
                        <button class="dropDownBtn p-2"><i class="transition-all duration-200 fa-solid fa-chevron-down"
                                style="transform: rotate(0deg);"></i></button>
                    </div>
                    <div class="hidden transition-all duration-200" style="display: none;">
                        <div class="flex flex-wrap">
                            <label for="price-less100000"
                                class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" id="price-less100000" class="mx-1">
                                <span class="flex items-center font-normal text-sm">Nhỏ hơn 100.000đ</span>
                            </label>
                            <label for="price-between100000-200000"
                                class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                    id="price-between100000-200000">
                                <span class="flex items-center font-normal text-sm">Từ 100.000đ - 200.000đ</span>
                            </label>
                            <label for="price-between200000-350000"
                                class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                    id="price-between200000-350000">
                                <span class="flex items-center font-normal text-sm">Từ 200.000đ - 350.000đ</span>
                            </label>
                            <label for="price-between350000-500000"
                                class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                    id="price-between350000-500000">
                                <span class="flex items-center font-normal text-sm">Từ 350.000đ - 500.000đ</span>
                            </label>
                            <label for="price-between500000-700000"
                                class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                    id="price-between500000-700000">
                                <span class="flex items-center font-normal text-sm">Từ 500.000đ - 700.000đ</span>
                            </label>
                            <label for="price-greater700000"
                                class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                    id="price-greater700000">
                                <span class="flex items-center font-normal text-sm">Lớn hơn 700.000đ</span>
                            </label>

                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="grid lg:grid-cols-12 max-lg:grid-cols-1 gap-10 my-5">
            <div class="col-span-3 max-lg:hidden">
                <ul class="mt-[70px]">
                    <li class="my-5 py-2 border bg-slate-50 rounded px-1">
                        <div class="flex justify-between items-center">
                            <span class=" flex-1 transition-colors hover:text-[#FCAF17]">
                                Kích thước
                            </span>
                            <button class="dropDownBtn p-2"><i
                                    class="transition-all duration-200 fa-solid fa-chevron-down"
                                    style="transform: rotate(0deg);"></i></button>
                        </div>
                        <div class="hidden transition-all duration-200" style="display: none;">
                            <div class="flex flex-wrap">
                                <label for="size-xs"
                                    class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="size-xs" class="hidden">
                                    <span>XS</span>
                                </label>
                                <label for="size-s"
                                    class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="size-s" class="hidden">
                                    <span>S</span>
                                </label>
                                <label for="size-m"
                                    class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="size-m" class="hidden">
                                    <span>M</span>
                                </label>
                                <label for="size-l"
                                    class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="size-l" class="hidden">
                                    <span>L</span>
                                </label>
                                <label for="size-xl"
                                    class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="size-xl" class="hidden">
                                    <span>XL</span>
                                </label>
                                <label for="size-2XL"
                                    class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="size-2XL" class="hidden">
                                    <span>2XL</span>
                                </label>
                                <label for="size-3xl"
                                    class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="size-3xl" class="hidden">
                                    <span>3XL</span>
                                </label>
                                <label for="size-4xl"
                                    class="m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="size-4xl" class="hidden">
                                    <span>4XL</span>
                                </label>
                            </div>
                        </div>
                    </li>
                    <li class="my-5 py-2 border bg-slate-50 rounded px-1">
                        <div class="flex justify-between items-center">
                            <span class=" flex-1 transition-colors hover:text-[#FCAF17]">
                                Màu sắc
                            </span>
                            <button class="dropDownBtn p-2"><i
                                    class="transition-all duration-200 fa-solid fa-chevron-down"
                                    style="transform: rotate(0deg);"></i></button>
                        </div>
                        <div class="hidden transition-all duration-200" style="display: none;">
                            <div class="flex flex-wrap">
                                <label for="color-black"
                                    class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="color-black" class="hidden">
                                    <span class="flex items-center font-normal text-sm"><i
                                            class="inline-block p-2 rounded-full bg-[#000000] mr-1 border"></i>Đen</span>
                                </label>
                                <label for="color-white"
                                    class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="color-white" class="hidden">
                                    <span class="flex items-center font-normal text-sm"><i
                                            class="inline-block p-2 rounded-full bg-[#FFFFFF] mr-1 border"></i>Trắng</span>
                                </label>
                                <label for="color-navy"
                                    class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="color-navy" class="hidden">
                                    <span class="flex items-center font-normal text-sm"><i
                                            class="inline-block p-2 rounded-full bg-[#03204C] mr-1 border"></i>Xanh
                                        Navy</span>
                                </label>
                                <label for="color-green"
                                    class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="color-green" class="hidden">
                                    <span class="flex items-center font-normal text-sm"><i
                                            class="inline-block p-2 rounded-full bg-[#62BF5E] mr-1 border"></i>Xanh
                                        Lá</span>
                                </label>
                                <label for="color-brown"
                                    class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="color-brown" class="hidden">
                                    <span class="flex items-center font-normal text-sm"><i
                                            class="inline-block p-2 rounded-full bg-[#613B0D] mr-1 border"></i>Nâu</span>
                                </label>
                                <label for="color-green-mint"
                                    class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="color-green-mint" class="hidden">
                                    <span class="flex items-center font-normal text-sm"><i
                                            class="inline-block p-2 rounded-full bg-[#8CD6C4] mr-1 border"></i>Xanh
                                        Mint</span>
                                </label>
                                <label for="color-gray"
                                    class=" m-1 border-current px-2 min-w-[40px] text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="color-gray" class="hidden">
                                    <span class="flex items-center font-normal text-sm"><i
                                            class="inline-block p-2 rounded-full bg-[#C1C5C0] mr-1 border"></i>Xám</span>
                                </label>
                            </div>
                        </div>
                    </li>
                    <li class="my-5 py-2 border bg-slate-50 rounded px-1">
                        <div class="flex justify-between items-center">
                            <span class=" flex-1 transition-colors hover:text-[#FCAF17]">
                                Khoảng giá (VNĐ)
                            </span>
                            <button class="dropDownBtn p-2"><i
                                    class="transition-all duration-200 fa-solid fa-chevron-down"
                                    style="transform: rotate(0deg);"></i></button>
                        </div>
                        <div class="hidden transition-all duration-200" style="display: none;">
                            <div class="flex flex-wrap">
                                <label for="price-less100000"
                                    class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" id="price-less100000" class="mx-1">
                                    <span class="flex items-center font-normal text-sm">Nhỏ hơn 100.000đ</span>
                                </label>
                                <label for="price-between100000-200000"
                                    class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                        id="price-between100000-200000">
                                    <span class="flex items-center font-normal text-sm">Từ 100.000đ - 200.000đ</span>
                                </label>
                                <label for="price-between200000-350000"
                                    class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                        id="price-between200000-350000">
                                    <span class="flex items-center font-normal text-sm">Từ 200.000đ - 350.000đ</span>
                                </label>
                                <label for="price-between350000-500000"
                                    class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                        id="price-between350000-500000">
                                    <span class="flex items-center font-normal text-sm">Từ 350.000đ - 500.000đ</span>
                                </label>
                                <label for="price-between500000-700000"
                                    class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                        id="price-between500000-700000">
                                    <span class="flex items-center font-normal text-sm">Từ 500.000đ - 700.000đ</span>
                                </label>
                                <label for="price-greater700000"
                                    class=" flex items-center w-[100%] m-1  px-2  text-center py-2 bg-[#F8F8F8] rounded hover:text-[#FCAF17] hover:border-[#FCAF17] border hover:bg-white">
                                    <input type="checkbox" name="" class="mx-1 checked:outline-none"
                                        id="price-greater700000">
                                    <span class="flex items-center font-normal text-sm">Lớn hơn 700.000đ</span>
                                </label>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-span-9 max-lg:col-span-1">
                <div class="hidden max-lg:block ">
                    <div class="shownavMobileProduct w-[100%] flex items-center justify-center py-5 hover:cursor-pointer">
                        <span>Bộ Lọc <i class="px-1 fa-solid fa-filter"></i></span>
                    </div>
                </div>
                <div class="w-[100%] flex justify-between items-center">
                    <span class="flex items-end">100 Sản phẩm</span>
                    <div class="flex items-center">
                        <span class="px-2">Sắp xếp theo</span>
                        <select name="" id=""
                            class="py-3 w-[200px] focus:outline-none focus:border-none rounded-md">
                            <option value="">Mặc định</option>
                            <option value="">Từ A-Z</option>
                            <option value="">Từ Z-A</option>
                            <option value="">Rẻ nhất</option>
                            <option value="">Giá giảm dần</option>
                            <option value="">Giá Tăng dần</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:col-span-3 lg:grid-cols-4 gap-5 mt-5">
                    @isset($productsResults)
                        @foreach ($productsResults as $productsResult)
                            <div class="col-span-1 group_Product">
                                <a href="/{{$productsResult->Slug}}" class="inline-block overflow-hidden relative rounded">
                                    <img src="/storage/uploads/{{ $productsResult->product_img[0]->Img }}" alt=""
                                        class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                    <span
                                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span>
                                        Đã
                                        bán
                                        307</span>
                                </a>
                                <div>
                                    <a href="" class="text-sm font-normal">{{ $productsResult->Name }}</a>
                                    <div class="py-1">
                                        <span
                                            class="font-medium text-[#CD151C]">{{ number_format($productsResult->Price_sale, 0, '.', '.') }}
                                            VNĐ</span>
                                        <span class="font-medium text-[#8A8A8F]"><s>{{ number_format($productsResult->Price, 0, '.', '.') }}
                                                VNĐ</s></span>
                                    </div>
                                </div>
                                <ul class="flex item_image">
                                    @foreach ($productsResult->product_img as $product_img)
                                        <li
                                            class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                            <img class="h-[100%] w-[100%] object-cover rounded-full"
                                                src="/storage/uploads/{{ $product_img->Img }}" alt="">
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        @endforeach
                    @else
                        <div class="col-span-1 group_Product">
                            <a href="" class="inline-block overflow-hidden relative rounded">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                                    alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                <span
                                    class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                        class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span>
                                    Đã
                                    bán
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
                                <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                    <img class="h-[100%] w-[100%] object-cover rounded-full"
                                        src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                                        alt="">
                                </li>
                                <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                        class="h-[100%] w-[100%] object-cover rounded-full"
                                        src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                                        alt=""></li>
                            </ul>
                        </div>
                        <div class="col-span-1 group_Product">
                            <a href="" class="inline-block overflow-hidden relative rounded">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                                    alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                <span
                                    class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                        class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span>
                                    Đã
                                    bán
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
                                <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                    <img class="h-[100%] w-[100%] object-cover rounded-full"
                                        src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                                        alt="">
                                </li>
                                <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                        class="h-[100%] w-[100%] object-cover rounded-full"
                                        src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                                        alt=""></li>
                            </ul>
                        </div>
                        <div class="col-span-1 group_Product">
                            <a href="" class="inline-block overflow-hidden relative rounded">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                                    alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                                <span
                                    class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                        class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span>
                                    Đã
                                    bán
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
                                <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md">
                                    <img class="h-[100%] w-[100%] object-cover rounded-full"
                                        src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                                        alt="">
                                </li>
                                <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                        class="h-[100%] w-[100%] object-cover rounded-full"
                                        src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                                        alt=""></li>
                            </ul>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
    <script src="/build/assets/js/users/productbycategorieschild.js"></script>
@endsection
