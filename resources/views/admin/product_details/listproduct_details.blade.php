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
                        <th>Quantity_sold</th>
                        <th>Available_quantity</th>
                        <th>Description</th>
                        <th>Color</th>
                        <th>Size</th>           
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listproduct_details as $key => $product_details)
                    
                        <tr  id="{{$product_details->Product_detailsID}}">
                            <td class="w-11" >{{$product_details->Product_detailsID}}</td>
                            <td>{{$product_details->Name}}</td>
                            <td>{{$product_details->Quantity_sold}}</td>
                            <td>{{$product_details->Available_quantity}}</td>
                            <td>{{$product_details->Description}}</td>
                            <td>{{$product_details->Color}}</td>
                            <td>{{$product_details->Size}}</td>                        
                            <td>                 
                                    <a href="/admin/product_details/edit/{{$product_details->Product_detailsID}}'" >
                                        <button class="button small blue --jb-modal" data-target="sample-modal-2" type="button">
                                            <span class="icon"><i class="fas fa-edit"></i></span>
                                        </button>
                                    </a>
                                    <a class="button small red --jb-modal" href="#" onclick="removeRow1({{$product_details->Product_detailsID}}, '/admin/product_details/destroy')">                                
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
