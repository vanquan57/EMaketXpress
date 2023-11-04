@extends('admin.layouts.home')
@section('content')
    <div>
        <ul class="py-2 w-[100%] bg-[#F9FAFB] flex pl-2 border-b">
            <li>
                <a href="#"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-900 rounded-lg bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700  dark:hover:text-white">
                    <span class="w-full">Thêm Danh Mục Sản Phẩm</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="#"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Danh Sách Danh Mục</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="#"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Cập Nhật Danh Mục Sản Phẩm</span>
                </a>
            </li>
        </ul>
        <form action="" method="POST" class="p-4">
            <div class="mb-4 flex flex-col">
                <label for="category_name" class="text-gray-700 font-medium">Tên Danh Mục</label>
                <input type="text" id="category_name" name="category_name" placeholder="Nhập Tên Danh Mục" class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
            </div>
            <div class="mb-4 flex flex-col">
                <label for="parent_category" class="text-gray-700 font-medium">Thuộc Loại Danh Mục</label>
                <select name="parent_category" id="parent_category" class="border mt-2 text-gray-900 border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                    <option value="0">Danh Mục Cha</option>
                    <option value="">aa</option>
                    <option value="">aaaa</option>
                    <option value="">aaaaaa</option>
                    <option value=""></option>
                </select>
            </div>
            <label for="category_name" class="text-gray-700 font-medium">Kích hoạt</label>
            <div class="flex items-center mb-4">
                <input id="default-radio-1" type="radio" value="1" name="active" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" checked>
                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Có</label>
            </div>
            <div class="flex items-center">
                <input checked id="default-radio-2" type="radio" value="0" name="active" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Không</label>
            </div>
            <div class="mt-2">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Thêm Danh Mục</button>
            </div>
            @csrf

        </form>
        

    </div>
@endsection
