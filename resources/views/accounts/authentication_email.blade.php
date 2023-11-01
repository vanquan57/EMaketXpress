<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="w-screen h-screen bg-no-repeat bg-center bg-cover flex items-center"
        style="background-image: url('/images/login-background.webp')">
        <div
            class="w-[100%] md:m-auto  md:h-auto md:w-[440px] md:py-5 md:px-8 md:shadow-[0_0_8px_rgba(30,40,60,.1)] md:rounded-lg">
            <div class="flex justify-center w-[100%]">
                <img src="/images/logo.png" alt="logo" class="w-[100px] h-[100px] object-cover">
            </div>
            <form action="" method="POST" class="flex flex-col justify-center">
                @if (Session::has('errorResetPassword'))
                    <div class="transition-all errors_username text-[13px] text-[#FF0000] bg-[#F7D4DC] p-1">
                        <i class="fa-solid fa-triangle-exclamation"></i>{{ Session::get('errorResetPassword') }}
                    </div>
                @endif
                <h3 class="text-[26px] text-[#222] font-medium">Đặt lại mật khẩu</h3>
                <p class="text-[15px] text-[#59595E] ">Nhập Email để đặt lại mật khẩu của bạn</p>
                <div class="login_input-element mt-5">
                    <input type="email" id="email" name="email">
                </div>
                <button type="submit"
                    class="w-[100%] text-white text-[16px] font-bold rounded bg-[#f80] border-[#f80] mt-5 py-2 px-5">TIẾP
                    TỤC</button>
                @csrf
            </form>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
