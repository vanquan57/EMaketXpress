<!DOCTYPE html>
<html lang="en">

<head>
    @extends('layouts.head')
    <title>{{ $title }}</title>
</head>

<body>

    <div class="flex justify-center items-center">
        <div class="max-w-[500px]">
            <div>
                <img src="https://static.vecteezy.com/system/resources/previews/013/022/840/non_2x/payment-successful-template-art-vector.jpg"
                    alt="">
            </div>
            <div class="flex justify-around">

                <a href="/"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800  text-center">Quay
                    Về Trang Chủ</a>
                <a href="/account-orders"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800  text-center">Xem
                    Thông Tin Đơn Hàng</a>

            </div>
        </div>
    </div>

</body>

</html>
