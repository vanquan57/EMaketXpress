@extends('admin.layouts.home')
@section('content')
    <div>
        <ul class="py-2 w-[100%] bg-[#F9FAFB] flex pl-2 border-b">
            <li>
                <a href="/admin/promotions"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-900 rounded-lg bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700  dark:hover:text-white">
                    <span class="w-full">Thêm Mã Khuyến Mãi</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="/admin/promotions/list"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Danh Sách Mã Khuyến Mãi</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="#"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Cập Nhật Mã Khuyến Mãi</span>
                </a>
            </li>
        </ul>
        <form action="" method="POST" class="p-4 ">
            @if (Session::has('errorInsertPromotion'))
                <div class="transition-all errors_username text-[13px] text-[#FF0000] bg-[#F7D4DC] p-1">
                    <i class="fa-solid fa-triangle-exclamation"></i> {{ Session::get('errorInsertPromotion') }}
                </div>
            @endif
            @if (Session::has('successInsertPromotion'))
                <div class="transition-all success_message text-[13px] text-[#00FF00] bg-[#D4F7DC] p-1">
                    <i class="fa-solid fa-check-circle"></i> {{ Session::get('successInsertPromotion') }}
                </div>
            @endif

            <div class="mb-4 flex flex-col">

                <label for="PromotionName" class="text-gray-700 font-medium">Tên Chương Trình Khuyến Mãi</label>
                <input type="text" id="PromotionName" name="PromotionName" placeholder="Nhập Tên Chương Trình Khuyến Mãi"
                    class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                @if (Session::has('errors'))
                    <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                        {{ Session::get('errors')->first('PromotionName') }}
                    </div>
                @endif
            </div>
            <div class="mb-4 flex flex-col">
                <label for="PromotionCode" class="text-gray-700 font-medium">Mã Khuyến Mãi</label>
                <div class="flex items-center">

                    <input type="text" id="PromotionCode" name="PromotionCode"
                        placeholder="Nhập mã khuyến mãi hoặc Click vào Random "
                        class="border flex-1 border-gray-400 p-2 rounded-md max-w-[350px] outline-none focus:border-blue-500">
                    <div onclick="generateRandomNumber()" class="button bg-[#D1D5DB]">Random</div>
                </div>
                @if (Session::has('errors'))
                    <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                        {{ Session::get('errors')->first('PromotionCode') }}
                    </div>
                @endif
            </div>
            <div class="mb-4 ">

                <div class="flex">
                    <div class="flex flex-col w-[50%] ">
                        <label for="DiscountAmount" class="text-gray-700 font-medium">Phần Trăm Giảm Giá Hoặc Số Tiền Được
                            Giảm</label>
                        <input type="number" id="DiscountAmount" name="DiscountAmount"
                            placeholder="Nhập phần trăm muốn giảm giá hoặc số tiền giảm giá"
                            class="border mt-2 text-gray-900 border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">

                    </div>

                    <div class="flex flex-col w-[50%] pl-2">
                        <label for="DiscountType" class="text-gray-700 font-medium">Hình Thức Giảm Giá</label>
                        <select name="DiscountType" id="DiscountType"
                            class="border mt-2 text-gray-900 border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                            <option value="0">Giảm Theo Phần Trăm</option>
                            <option value="1">Giảm Theo Số tiền cụ thể</option>
                        </select>
                    </div>
                </div>
                @if (Session::has('errors'))
                    <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                        {{ Session::get('errors')->first('DiscountAmount') }}
                    </div>
                @endif
            </div>

            <div class="mb-4 flex flex-col">
                <label for="CategoryID" class="text-gray-700 font-medium">Thuộc Loại Danh Mục</label>
                <select name="CategoryID" id="CategoryID"
                    class="border mt-2 text-gray-900 border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                    <option value="0">Áp Dụng Toàn Bộ Ngành Hàng</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->CategoryID }}">{{ $category->Name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4 flex justify-between">
                <div class="flex flex-col w-[50%] ">
                    <label for="StartDate" class="text-gray-700 font-medium">Ngày Bắt Đầu</label>
                    @if (Session::has('errors'))
                        <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                            {{ Session::get('errors')->first('StartDate') }}
                        </div>
                    @endif
                    <input type="date" id="StartDate" name="StartDate" placeholder="Nhập Tên Chương Trình Khuyến Mãi"
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">

                </div>
                <div class="flex flex-col w-[50%] pl-2">
                    <label for="EndDate" class="text-gray-700 font-medium">Ngày Kết Thúc</label>
                    @if (Session::has('errors'))
                        <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                            {{ Session::get('errors')->first('EndDate') }}
                        </div>
                    @endif
                    <input type="date" id="EndDate" name="EndDate" placeholder="Nhập Tên Chương Trình Khuyến Mãi"
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                </div>
            </div>
            <label class="text-gray-700 font-medium">Kích hoạt</label>
            <div class="flex items-center mb-4">
                <input checked id="ActivePromotion1" type="radio" value="1" name="Active"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="ActivePromotion1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Có</label>
            </div>
            <div class="flex items-center0">
                <input id="ActivePromotion0" type="radio" value="0" name="Active"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="ActivePromotion0"
                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Không</label>
            </div>

            <div class="mt-2">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Thêm
                    Mã Giảm Giá</button>
            </div>

            @csrf

        </form>

    </div>
    <script>
        function generateRandomNumber() {
            var randomNumber = Math.floor(100000 + Math.random() * 900000);
            document.getElementById("PromotionCode").value = 'EM' + randomNumber;
        }
    </script>
@endsection
