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
                        <input type="number" id="productID " name="productID"  value="{{$product_details->ProductID}}"
                                class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500"readonly>
                    </div>
                   <div class=" flex flex-col flex-1 ml-10"> 
                    <label for="" class="text-gray-700 font-medium">Chọn size</label>
                        <input type="text" name="product_size" id="" value="{{$product_details->Size}}"  
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                </div>
            </div>

                
                <div class="mb-4 flex flex-col "> 
                    <label for="product_available_quantity" class="text-gray-700 font-medium">Số lượng sẳn có</label>
                    <input type="number" id="product_available_quantity" name="product_available_quantity" placeholder="Số lượng sẳn có" value="{{$product_details->Available_quantity}}"  
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                </div>
    
            <div class="form-group">
                        <label for="product_Description">Mô Tả Chi Tiết</label>
                        <textarea name="product_Description" id="product_Description" class="form-control"> {{$product_details->Description}} </textarea>
                  </div>           
                    <script>
                        CKEDITOR.replace('product_Description');
                    </script>
           

                
            <div class="mt-2 mb-20">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">
                    upadate chi tiết sản phẩm</button>
            </div>
            @csrf
        </form>


    </div>
@endsection
