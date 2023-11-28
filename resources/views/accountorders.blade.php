@extends('layouts.home')
@section('content')
    <div class="w-screen h-screen bg-[#F8F8F8] ">
        <div class="text-center w-[100%] py-10">
            <p class="font-normal text-xs">TÀI KHOẢN</p>
            <h1 class="font-medium text-xl text-[#FCAF17]">TÀI KHOẢN</h1>
        </div>
        <div class="grid grid-cols-3 gap-5 mx-[30px]">
            <div class="col-span-1 bg-white rounded-sm">
                <div class="flex flex-col justify-center items-center border">
                    <img class="object-cover rounded-full inline-block my-2  w-[90px] h-[90px]"
                        src="{{ Auth::user()->avatar ? Auth::user()->avatar : 'https://bizweb.dktcdn.net/100/438/408/themes/931909/assets/account_ava.jpg?1701143626189' }}"
                        alt="">
                    <p class="text-center text-sm font-medium">{{ Auth::user()->username }}</p>
                    <a href="/logout" class="my-2 w-[80%] bg-[#FCAF17] rounded-lg inline-block text-center">Đăng Xuất</a>
                </div>
                <div>
                    <div class="flex  items-center p-2 bg-[#FEEEEA] text-[#FCAF17]">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/931909/assets/acc_user_2_hover.svg" alt="">
                        <a href="" class="pl-2">Đơn Hàng Của Tôi</a>
                    </div>
                </div>
            </div>
            <div class="col-span-2  bg-white rounded-sm">
                <div class="p-3">
                    <span class="font-medium text-lg text-[#FCAF17]">Đơn hàng của tôi <span class="font-normal text-base text-[#7A8FAA]">(3 đơn hàng)</span></span>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
