@extends('admin.layouts.home')
@section('content')
    <div>
        <!-- <ul class="py-2 w-[100%] bg-[#F9FAFB] flex pl-2 border-b">
            <li>
                <a href="/admin/category"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-900 rounded-lg bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700  dark:hover:text-white">
                    <span class="w-full">Thêm Danh Mục Sản Phẩm</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="/admin/category/list"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Danh Sách Danh Mục</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="/admin/category/edit"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Cập Nhật Danh Mục Sản Phẩm</span>
                </a>
            </li>
        </ul> -->
        <form action="" method="POST" class="p-4 ">
            <div class="mb-4 flex">
                <div class=" flex flex-col  flex-1">
                    <label for="slider_name" class="text-gray-700 font-medium">Tiêu Đề</label>
                    <input type="text" id="slider_name" name="slider_name" placeholder="Tiêu Đề" value="{{$slider->name}}"
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                        @if (Session::has('errors'))
                            <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                                {{ Session::get('errors')->first('slider_name') }}
                            </div>
                        @endif
                </div>
                <div class=" flex flex-col flex-1 ml-10"> 
                    <label for="slider_url" class="text-gray-700 font-medium">Đường dẫn</label>
                    <input type="text" id="slider_url " name="slider_url" placeholder="Đường dẫn" value="{{$slider->url}}"
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                        @if (Session::has('errors'))
                            <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                                {{ Session::get('errors')->first('slider_url') }}
                            </div>
                        @endif
                </div>
            </div>
          
            <div class="mb-4 flex flex-col ">
                <label for="slider_sort_by" class="text-gray-700 font-medium">Xắp xếp</label>
                <input type="text" id="slider_sort_by " name="slider_sort_by" placeholder="Xắp xếp" value="{{$slider->sort_by}}"
                    class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
            </div>
            <div  class="mb-4 flex flex-col ">
                        <input type="file"  name="avatar" id="avatarUpload" class="upload control  mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500" onchange="updateThumbInput()">
                        <img id="avatarUploadProfile" src="/storage/uploads/{{$slider->thumb}}" class=" w-64 h-32" > 
                        <input type="hidden" name="thumb" value="" id="thumbInput">
                        <script>
                            var img = document.getElementById('avatarUploadProfile');
                            var input = document.getElementById('thumbInput');
                            var srcValue = img.getAttribute('src');
                            input.value = srcValue;
                            function updateThumbInput() {                            
                                var fileInput = document.getElementById('avatarUpload');
                                var img = document.getElementById('avatarUploadProfile');
                                var input = document.getElementById('thumbInput');
                                if (fileInput && fileInput.files && fileInput.files.length > 0) {
                                    var newThumbValue = fileInput.files[0].name;
                                    input.value = newThumbValue;
                                } 
                            }

    
                            
                            
                        </script>
                  </div>

                  <label for="category_name" class="text-gray-700 font-medium">Kích hoạt</label>
            <div class="flex items-center mb-4">
                <input {{ $slider->active == 1 ? 'checked' : '' }} id="default-radio-1" type="radio" value="1"
                    name="active"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Có</label>
            </div>
            <div class="flex items-center">
                <input {{ $slider->active == 0 ? 'checked' : '' }} id="default-radio-2" type="radio" value="0"
                    name="active"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Không</label>
            </div>
            <div class="mt-2">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cập nhật
                    slider</button>
            </div>
            @csrf

        </form>


    </div>
@endsection
