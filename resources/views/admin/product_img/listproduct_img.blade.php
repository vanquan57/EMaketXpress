@extends('admin.layouts.home')
@section('content')
    <div>
        
        <!-- <ul class="py-2 w-[100%] bg-[#F9FAFB] flex pl-2 border-b">
            
            <li>
                <a href="/admin/category"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500   rounded-lg bg-gray-100  dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700  dark:hover:text-white">
                    <span class="w-full">Thêm Danh Mục Sản Phẩm</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="/admin/category/list"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium rounded-lg text-gray-900  bg-gray-300  dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Danh Sách Danh Mục</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="#"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Cập Nhật Danh Mục Sản Phẩm</span>
                </a>
            </li>
        </ul> -->
        <div class="card-content ">
        <a href="/admin/product_imgs/add/{{$ProductID}}" class="p-2  border-gray-300 bg-slate-800 text-white">Thêm sản phẩm</a>
            <table class="border-2 mt-2">
                <thead>
                    <tr>
                        <th>Product_imgID</th>
                        <th>Img</th>
                        <th>ParentId</th>
                        <th>ProductID</th>
                         <th>Color</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                {!! \App\Helpers\Helper::getProduct_img($listproduct_img) !!}
                </tbody>
            </table>

        </div>
    </div>
@endsection
