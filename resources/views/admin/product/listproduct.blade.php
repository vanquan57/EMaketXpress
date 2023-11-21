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
            <table class="border-2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Sale</th>
                        <th>Price_sale</th>
                        <th>CategoryID</th>
                        <th>Img category</th>
                        <th>Add details</th>                  
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listproduct as $key => $product)
                        <tr  id="{{$product->ProductID}}">
                            <td class="w-11" >{{$product->ProductID}}</td>
                            <td>{{$product->Name}}</td>
                            <td>{{$product->Price}}</td>
                            <td >{!! \App\Helpers\Helper::active($product->Sale) !!}</td>
                            <td>{{$product->Price_sale}}</td>
                            <td>{{$product->CategoryID}}</td>
                            <td>                 
                                    <a href="/admin/product_imgs/list/{{$product->ProductID}}'" >
                                        <button class="button small blue --jb-modal" data-target="sample-modal-2" type="button">
                                            <span class="icon"> <i class="fa-regular fa-image"></i></span>                                         
                                        </button>

                            </td>
                            
                            <td>                 
                                    <a href="/admin/product_details/add/{{$product->ProductID}}'" >
                                        <button class="button small blue --jb-modal" data-target="sample-modal-2" type="button">
                                            <span class="icon"> <i class="fa-solid fa-plus"></i></span>
                                           
                                        </button>

                            </td>
                            <td>                 
                                    <a href="/admin/products/edit/{{$product->ProductID}}'" >
                                        <button class="button small blue --jb-modal" data-target="sample-modal-2" type="button">
                                            <span class="icon"><i class="fas fa-edit"></i></span>
                                        </button>
                                    </a>
                                    <a class="button small red --jb-modal" href="#" onclick="removeRow1({{$product->ProductID}}, '/admin/products/destroy')">                                
                                        <span class="icon"><i class="fas fa-trash"></i></span>                              
                                    </a>


                            </td>
                        </tr>
                @endforeach
                        

                </tbody>
            </table>

        </div>
    </div>
@endsection
