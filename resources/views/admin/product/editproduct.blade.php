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
                    
                </div>
                    <div class="flex flex-col flex-1 ml-10">
                        <div class="flex flex-col flex-1">
                                <label for="product_name" class="text-gray-700 font-medium">Tên sản phẩm</label>
                                <input type="text" id="product_name" name="product_name" placeholder="Tiêu Đề" value="{{$product->Name}}"
                                    class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                                    @if (Session::has('errors'))
                                        <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                                            {{ Session::get('errors')->first('product_name') }}
                                        </div>
                                    @endif
                    </div>
                    <div class=" flex flex-col flex-1"> 
                    <label for="slider_url" class="text-gray-700 font-medium">Giá</label>
                    <input type="number" id="product_price " name="product_price" placeholder="Giá"value="{{$product->Price}}"
                        class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                    </div>
                    <div class=" flex flex-col flex-1 "> 
                            <label for="Sale" class="text-gray-700 font-medium">Sale</label>
                            <div class="flex items-center mb-4">
                                <input {{ $product->Sale == 1 ? 'checked' : '' }} id="default-radio-1" type="radio" value="1"
                                    name="Sale"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Có</label>
                            </div>
                            <div class="flex items-center">
                                <input {{ $product->Sale == 0 ? 'checked' : '' }} id="default-radio-2" type="radio" value="0"
                                    name="Sale"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Không</label>
                            </div>
                    </div>
                    <div class=" flex flex-col flex-1 "> 
                        <label for="product_price_sale" class="text-gray-700 font-medium">Giá sale</label>
                        <input type="number" id="product_price_sale" name="product_price_sale" placeholder="Giá sale"value="{{$product->Price_sale}}"
                            class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                    </div>
                    <div class="flex flex-col flex-1 ">
                        <label for="categoryid" class="text-gray-700 font-medium">Thuộc Loại Danh Mục</label>
                        <select name="categoryid" id="parentId"
                            class="border mt-2 text-gray-900 border-gray-400 p-2 rounded-md outline-none focus:border-blue-500">
                            @foreach ($categories as $categoryItem)
                                <option value="{{ $categoryItem->CategoryID }}"
                                    {{ $product->CategoryID == $categoryItem->CategoryID ? 'selected' : '' }}>
                                    {{ $categoryItem->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-2 mb-20">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">
                            update sản phẩm</button>
                    </div>
                    @csrf
                 </div>
             </form>


    </div>
@endsection
