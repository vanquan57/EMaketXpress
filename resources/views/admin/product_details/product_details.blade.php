@extends('admin.layouts.home')
@section('content')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
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
                <div class="flex flex-col flex-1">
                    <label for="productID " class="text-gray-700 font-medium">ID sản phẩm</label>
                    <input type="text" id="productID " name="productID"  value="{{$ProductID}}"
                            class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500"readonly>
                   </div>
                   <div class=" flex flex-col flex-1 ml-10"> 
                   <label for="" class="text-gray-700 font-medium">Chọn size</label>
                    <div class="flex mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                        <div class="w-20 ">
                            <input type="checkbox" onchange="toggleSelection()" id="selectAll">
                            <label for="xl"> All</label>
                        </div>
                        <div class="w-20 ">
                            <input type="checkbox" name="product_size[]" value="XS" class="">
                            <label for="xl"  >XS</label>
                        </div>
                        <div class="w-20">
                            <input type="checkbox" name="product_size[]" value="S" class="">
                            <label for="S"  >S</label>
                        </div>
                        <div class="w-20">
                            <input type="checkbox" name="product_size[]" value="M" class="">
                            <label for="M"  >M</label>
                        </div>
                        <div class="w-20">
                            <input type="checkbox" name="product_size[]" value="L" class="">
                            <label for="L"  >L</label>
                        </div>
                        <div class="w-20">
                            <input type="checkbox" name="product_size[]" value="XL" class="">
                            <label for="XL"  >XL</label>
                        </div>
                        <div>
                            <input type="checkbox" name="product_size[]" value="XXL" class="">
                            <label for="XXL" >XXL</label>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function toggleSelection() {
                    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
                    var selectAllCheckbox = document.getElementById('selectAll');

                    checkboxes.forEach(function(checkbox) {
                        checkbox.checked = selectAllCheckbox.checked;
                    });
                }
            </script>
            <div class="mb-4 flex">
                <div class=" flex flex-col flex-1 "> 
                <label for="product_color" class="text-gray-700 font-medium">Màu sắc</label>
                        <input type="text" id="product_color" name="product_color" placeholder="Màu sắc"
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                </div>
                <div class=" flex flex-col flex-1 ml-10"> 
                    <label for="product_available_quantity" class="text-gray-700 font-medium">Số lượng sẳn có</label>
                    <input type="number" id="product_available_quantity" name="product_available_quantity" placeholder="Số lượng sẳn có"
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                </div>
            </div>
            <div class="form-group">
                        <label for="product_Description">Mô Tả Chi Tiết</label>
                        <textarea name="product_Description" id="product_Description" class="form-control"></textarea>
                  </div>           
                    <script>
                        CKEDITOR.replace('product_Description');
                    </script>
           

                
            <div class="mt-2 mb-20">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">
                    Thêm chi tiết sản phẩm</button>
            </div>
            @csrf
        </form>


    </div>
@endsection
