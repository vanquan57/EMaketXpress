@extends('admin.layouts.home')
@section('content')
    <div>
        <ul class="py-2 w-[100%] bg-[#F9FAFB] flex pl-2 border-b">
            <li>
                <a href="/admin/category"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100  dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700  dark:hover:text-white">
                    <span class="w-full">Thêm Danh Mục Sản Phẩm</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="/admin/category/list"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium  text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Danh Sách Danh Mục</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="#"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-900 rounded-lg bg-gray-300  hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Cập Nhật Danh Mục Sản Phẩm</span>
                </a>
            </li>
        </ul>
        <form action="" method="POST" class="p-4 ">


            @if (Session::has('errorUpdateCategory'))
                <div class="transition-all errors_username text-[13px] text-[#FF0000] bg-[#F7D4DC] p-1">
                    <i class="fa-solid fa-triangle-exclamation"></i> {{ Session::get('errorUpdateCategory') }}
                </div>
            @endif
            <div class="mb-4 flex flex-col">

                <label for="category_name" class="text-gray-700 font-medium">Tên Danh Mục</label>
                <input type="text" id="category_name" name="category_name" placeholder="Nhập Tên Danh Mục"
                    class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500"
                    value="{{ $category->Name }}">
                @if (Session::has('errors'))
                    <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                        {{ Session::get('errors')->first('category_name') }}
                    </div>
                @endif
            </div>
            <div class="mb-4 flex flex-col">
                <label for="category_description " class="text-gray-700 font-medium">Mô Tả Danh Mục</label>
                <input type="text" id="category_description " name="category_description" placeholder="Mô Tả Danh Mục"
                    class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500"
                    value="{{ $category->Description }}">
            </div>
            <div class="mb-4 flex flex-col">
                <label for="parentId" class="text-gray-700 font-medium">Thuộc Loại Danh Mục</label>
                <select name="parentId" id="parentId"
                    class="border mt-2 text-gray-900 border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                    <option value="0">Danh Mục Cha</option>
                    @foreach ($categories as $categoryItem)
                        <option value="{{ $categoryItem->CategoryID }}"
                            {{ $categoryItem->CategoryID == $category->ParentId ? 'selected' : '' }}>
                            {{ $categoryItem->Name }}</option>
                    @endforeach
                </select>
            </div>
            <label for="category_name" class="text-gray-700 font-medium">Kích hoạt</label>
            <div class="flex items-center mb-4">
                <input {{ $category->Active == 1 ? 'checked' : '' }} id="default-radio-1" type="radio" value="1"
                    name="active"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Có</label>
            </div>
            <div class="flex items-center">
                <input {{ $category->Active == 0 ? 'checked' : '' }} id="default-radio-2" type="radio" value="0"
                    name="active"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Không</label>
            </div>
            <div class="field mt-2">
                <label class="label ">Hình Ảnh Mô Tả Danh Mục</label>
                <div class="field-body flex items-center">
                    <div class="field file">
                        <label class="upload control">
                            <a class="button blue h-10">
                                Upload
                            </a>
                            <input type="file" name="avatar" id="avatarUpload">
                        </label>
                        <input type="text" name="newAvatar" value="{{ $category->Image ? $category->Image : ''}}" id="newAvatar" hidden>
                    </div>
                    <div class="w-40 h-40 mx-auto">
                        <img id="avatarUploadProfile" src="{{ $category->Image ? $category->Image : 'https://avatars.dicebear.com/v2/initials/felicita-yundt.svg' }}"
                            class="rounded-full w-40 h-40 object-cover">
                    </div>
                </div>
            </div>
            <div class="field mt-2">
                <label class="label ">Hình Ảnh Đại diện cho sản phẩm danh mục</label>
                <div class="field-body flex items-center">
                    <div class="field file">
                        <label class="upload control">
                            <a class="button blue h-10">
                                Upload
                            </a>
                            <input type="file" name="categoryProductAvatar" id="categoryProductAvatar">
                        </label>
                        <input type="text" name="urlCategoryProductAvatar" value="{{ $category->Image ? $category->Image : ''}}" id="urlCategoryProductAvatar" hidden>
                        
                    </div>
                    <div class="w-[100%] h-[300px]">
                        
                        <img id="viewCategoryProductAvatar"
                        src="{{ $category->CategoryProductAvatar ? $category->CategoryProductAvatar : 'https://avatars.dicebear.com/v2/initials/felicita-yundt.svg' }}" class="object-contain w-[100%] h-[100%]">
                       
                    </div>
                    
                </div>
            </div>
            <div class="mt-2">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cập
                    nhật
                    Danh Mục</button>
            </div>
            @csrf

        </form>


    </div>
@endsection
