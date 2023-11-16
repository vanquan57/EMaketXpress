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
                        <th>Url</th>
                        <th>Thumb</th>
                        <th>Sort_by</th>
                        <th>Active</th>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listsliders as $key => $slider)
                        <tr id="{{$slider->id}}">
                            <td class="w-11" >{{$slider->id}}</td>
                            <td>{{$slider->name}}</td>
                            <td>{{$slider->url}}</td>
                            <td><img class="w-45 h-32" src="/storage/uploads/{{$slider->thumb}}" alt=""></td>
                            <td>{{$slider->sort_by}}</td>
                            <td >{!! \App\Helpers\Helper::active($slider->active) !!}</td>
                            
                            <td>                 
                                    <a href="/admin/sliders/edit/{{$slider->id}}'" >
                                        <button class="button small blue --jb-modal" data-target="sample-modal-2" type="button">
                                            <span class="icon"><i class="fas fa-edit"></i></span>
                                        </button>
                                    </a>
                                    <a class="button small red --jb-modal" href="#" onclick="removeRow1({{$slider->id}}, '/admin/sliders/destroy')">                                
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
