@extends('admin.layouts.home')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>
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
                <a href="#"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Cập Nhật Danh Mục Sản Phẩm</span>
                </a>
            </li>
        </ul> -->
        <form action="" method="POST" class="p-4 ">
                <div class="mb-4 flex ">
                        <div class=" flex flex-col flex-1">
                        <div class="mb-4 flex flex-col">
                            <label for="productID " class="text-gray-700 font-medium">ID sản phẩm</label>
                            <input type="text" id="productID " name="productID"  value="{{$ProductID}}"
                                class=" mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500"readonly>
                                
                        </div>

                        <div  class="mb-4 flex flex-col ">
                            <label for="detailed_img" class="text-gray-700 font-medium">Ảnh chi tiết</label>
                            <input type="file" name="detailed_img[]" id="avatarUpload1" class="upload control  mt-2 border border-gray-400 p-2 rounded-md outline-none focus:border-blue-500" multiple="multiple">       
                            <div id="yourImageContainer" class="flex flex-wrap">                        
                        </div>
                        @if (Session::has('errors'))
                                    <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                                        {{ Session::get('errors')->first('detailed_img*') }}
                                    </div>
                            @endif
                </div>
                        </div>
                        <div class="flex flex-col flex-1 ml-10">
                            <div class="overflow-auto   h-96"> 
                                <div class="flex  flex-wrap border border-gray-300 p-4">
                                    @foreach ($product_imgs as $product_img)
                                        <div class="flex ml-10 mb-5"> 
                                            <label for="product_img_{{$product_img->Product_imgID}}">
                                                <input type="radio" name="ParentId" id="product_img_{{$product_img->Product_imgID}}" value="{{$product_img->Product_imgID}}" hidden>
                                                <img src="/storage/uploads/{{$product_img->Img}}" alt="" class="w-32 h-40 img_parent" >
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <script>
                                    const imgParent = [...document.querySelectorAll('.img_parent')];
                                    imgParent.forEach((imgParentItem)=> {
                                     imgParentItem.onclick = () =>{
                                         imgParent.forEach((imgParentItem1)=> {
                                             imgParentItem1.style.outline = 'none';
                                         });
                                         imgParentItem.style.outline = '2px solid rgb(82,201,247)';

                                     }
                                    });
                                    
                             </script>
                            </div>
                            @if (Session::has('errors'))
                                    <div class="transition-all errors_Email text-[12px] text-[#FF0000]">
                                        {{ Session::get('errors')->first('ParentId') }}
                                    </div>
                            @endif
                        </div>
                </div>
                <div class="mt-2">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Thêm
                        Danh Mục</button>
                </div>
            </div>
          
            @csrf

        </form>


    </div>
@endsection
