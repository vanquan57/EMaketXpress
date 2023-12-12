
@extends('layouts.home')
@section('content')
<style>
    .anh2{
        display: none;
    }
    .anh3{
        display: none;
    }
</style>
    <div class="px-3">
        <span class="font-normal text-sm inline-block py-[20px]">Landing 15/11 <strong>/
                {{ $productDetail->Name }}</strong></span>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
            <div class="lg:col-span-8 col-span-1">

                {{-- src=" /storage/uploads/{{$ParentId_img[$i]->Img}}" --}}
          

                <div class=" lg:grid lg:grid-cols-2 gap-5 hidden ">
                    @for($i =0;$i<$product_img->count();$i++)
                        @if($ParentId_img[0]->Product_imgID==$product_img[$i]->ParentId)
                            <img class="col-span-1 w-[100%] rounded-md object-cover anh1"
                            src="/storage/uploads/{{$product_img[$i]->Img}}"
                            alt="">
                        @endif

                    @endfor
                 
                </div>
                <div class=" lg:grid lg:grid-cols-2 gap-5 hidden ">
                            @for($i =0;$i<$product_img->count();$i++)
                                @if($ParentId_img[1]->Product_imgID==$product_img[$i]->ParentId)
                                    <img class="col-span-1 w-[100%] rounded-md object-cover anh2"
                                    src="/storage/uploads/{{$product_img[$i]->Img}}"
                                    alt="">
                                @endif
                            @endfor
                </div>
                <div class=" lg:grid lg:grid-cols-2 gap-5 hidden ">
                        @for($i =0;$i<$product_img->count();$i++)
                            @if($ParentId_img[2]->Product_imgID==$product_img[$i]->ParentId)
                                <img class="col-span-1 w-[100%] rounded-md object-cover anh3"
                                src="/storage/uploads/{{$product_img[$i]->Img}}"
                                alt="">
                            @endif
                        @endfor                 
                </div>
                    
             
       
                <div class="lg:hidden">
                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-vag-ao-polo-nu-mat-chim-yody-6.jpg?v=1684810224677"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-vag-ao-polo-nu-mat-chim-yody-1.jpg?v=1684810224677"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-vag-ao-polo-nu-mat-chim-yody-2.jpg?v=1684810224677"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://bizweb.dktcdn.net/100/438/408/products/apn5390-vag-ao-polo-nu-mat-chim-yody-7.jpg?v=1684810211833"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                </div>
                {{-- Thằng này mô tả chi tiết của pc --}}
                <div class="mt-3 max-lg:hidden">
                    Dưới này mô tả chi tiết sản phẩm load trực tiếp lên luôn
                </div>
            </div>
            <div class="lg:col-span-4 col-span-1">
                <h1 class="text-xl font-medium">{{ $productDetail->Name }}</h1>
                <div class="mt-2">
                    <span class="text-sm font-normal pr-1 border-r border-black">Mã Sản Phẩm</span>
                    <span class="text-sm font-normal pr-1 border-r border-black">Đã bán 1.0K</span>
                    <span class="text-[#D1D3D3]">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                </div>
                <div class="mt-2">
                    {{-- productDetail --}}
                    <span class="font-semibold text-2xl text-[#CD151C]">{{  number_format($productDetail->Price, 0, ',', '.')."đ"}}</span>
                    <span class="text-lg font-medium text-[#D1D3D3]"><s>{{  number_format($productDetail->Price_sale, 0, ',', '.')."đ"}}</s></span>
                </div>
                <div class="mt-2">
                    {{-- (($productDetail->Price - $productDetail->Price_sale)/$productDetail->Price)*100; --}}
                    <span class="text-sm font-normal pr-1 ">Tiết kiệm:  {{  number_format( $productDetail->Price - $productDetail->Price_sale, 0, ',', '.')."đ"}}</span>
                    <span class="font-medium text-base py-1 px-2 bg-[#FCAF17] rounded-md">{{ number_format((($productDetail->Price - $productDetail->Price_sale)/$productDetail->Price)*100) }}%</span>
                </div>
                <div class="flex items-center mt-2">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/930060/assets/degree_of_heat_1.svg?1700449743787"
                        alt="">
                    <span class="text-sm font-normal">
                        Nhanh tay!! Giá khuyến mãi chỉ còn</span>
                </div>
                <div class="group-time-sale flex items-center  mt-2 text-white">
                    <span class="hours-sale p-1 rounded bg-[#F56300]">00</span>
                    <span class="text-[#F56300] px-1">:</span>
                    <span class="minutes-sale p-1 rounded bg-[#F56300]">00</span>
                    <span class="text-[#F56300] px-1">:</span>
                    <span class="second-sale p-1 rounded bg-[#F56300]">00</span>
                </div>


                <span class="text-sm font-normal mt-2 inline-block">Màu sắc: <span
                    class="font-medium color_product">{{$ParentId_img[0]->Color}}</span></span>
                <div class="flex flex-wrap group_type_color">
                    @for( $i = 0 ;$i<$ParentId_img->count();$i++)
                    <img type-color ="{{$ParentId_img[$i]->Color}}" class="w-[50px] h-[70px] inline-block object-cover rounded-lg m-1"
                    src=" /storage/uploads/{{$ParentId_img[$i]->Img}}"
                    alt="" >      
                    @endfor

                </div>
                <p class="text-sm font-normal mt-2">Kích thước:<span class="size_product">   {{ $sizeArray[0]}}</span></p>
                <div>
                    
                    <label for="size-{{ $sizeArray[0]}}"
                        class="active size_btn w-[80px] py-2 text-black rounded-md font-medium hover:border-black border hover:text-[#FCAF17] hover:bg-white transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        {{ $sizeArray[0]}}
                    </label>
                    @for($i = 1; $i<$sizeArray->count();$i++)
                    <label for="size-{{ $sizeArray[$i]}}"
                        class="size_btn w-[80px] py-2 text-black rounded-md font-medium  border  transition-colors inline-block bg-[#F6F6F6] text-center m-1">
                        {{ $sizeArray[$i]}}
                    </label>
                    @endfor
    
                </div>
                
                <div>
                    <div class="my-5 py-2 border bg-slate-50 rounded px-1">
                        <div class="flex justify-between items-center">
                            <span class=" flex-1 transition-colors hover:text-[#FCAF17]">
                                Giúp bạn chọn size
                            </span>
                            <button class="dropDownBtn p-2"><i
                                    class="transition-all duration-200 fa-solid fa-chevron-down"
                                    style="transform: rotate(0deg);"></i></button>
                        </div>
                        <div class="hidden transition-all duration-200 " style="display: none;">

                            <div>
                                <div class="flex justify-between">
                                    <span>Chiều Cao</span>
                                    <span>
                                        <span class="value_height">120</span>cm
                                    </span>
                                </div>
                                <input type="range" class="w-[100%] block" id="height" name="height"
                                    value ="155" min="150" max="200" />
                            </div>
                            <div class="mt-3">
                                <div class="flex justify-between">
                                    <span>Cân Nặng</span>
                                    <span>
                                        <span class="value_weight">120</span>kg
                                    </span>
                                </div>
                                <input type="range" class="w-[100%] block" id="weight" name="weight"
                                    value ="20" min="10" max="100" />

                            </div>
                            <p class="suggested_size cl text-center p-3 font-normal text-sm "></p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center my-2 group_UpAndDown_Number">
                    <p class="text-sm font-normal mr-2">Số Lượng</p>
                    <button class="px-3 py-2 rounded-l-full border buttonReduced">
                        -
                    </button>
                    <span class="border w-12 text-center py-2 numberProduct">1</span>
                    <button class="px-3 py-2 rounded-r-full border buttonIncrease">
                        +
                    </button>
                </div>

                <button onclick="addProductToCart()"
                    class="block w-[100%] rounded-lg py-3 text-white font-medium bg-[#FCAF17] hover:text-gray-400 transition-colors "><i
                        class="fa-solid fa-cart-shopping inline-block px-1"></i>Thêm Vào Giỏ Hàng</button>
                <button class="block w-[100%] border-2 rounded-lg py-3 my-5 hover:text-[#FCAF17]  transition-colors ">Mua
                    Ngay</button>

            </div>
            
            {{-- Thằng này mô tả chi tiết của mobile --}}
        {{-- ========================================================================================================?- --}}

            <div class="mt-3 col-span-1 lg:hidden">
                Dưới này mô tả chi tiết sản phẩm load trực tiếp lên luôn
               
            </div>      
        </div>
        <div>
            <hr>
                    <p class="m-5 font-bold text-center text-xl">Đánh giá về sản phẩm  {{ $productDetail->Name }}</p>
            <hr>
            <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
                <div class="lg:col-span-3 grid lg:grid-cols-1   lg:block ">
                        <div class="col-span-1 p-2 flex justify-center">
                            <div class="mr-20">
                                <p class="text-4xl">4.4<span class="text-2xl">/5<i class="fa-solid fa-star text-yellow-200"></i></span></p>
                                <p class="text-zinc-300">{{$totalSum}} bài đánh giá </p>
                            </div>
                        </div>
                </div>
                <div class="lg:col-span-3 grid lg:grid-cols-1 lg:block ">
                    <div class="col-span-1 p-2 ">
                        <div class="flex mb-3  text-yellow-200" >
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star mr-3"></i>
                            <div class="w-64 h-4 bg-gray-200 rounded overflow-hidden">
                                <div class="bg-green-500 h-full" style="width: {{($star5CountsByAccount->count() / $totalSum) * 100}}%;"></div>
                            </div>
                            <p class="-mt-1 ml-5 text-zinc-300">{{$star5CountsByAccount->count()}}</p>
                        </div>
                        <div class="flex mb-3 text-yellow-200">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star mr-3"style="color:rgb(202, 202, 191"></i>
                            <div class="w-64 h-4 bg-gray-200 rounded overflow-hidden">
                                <div class="bg-green-500 h-full" style="width: {{($star4CountsByAccount->count() / $totalSum) * 100}}%;"> ;</div>
                            </div>
                            <p class="-mt-1 ml-5 text-zinc-300">{{$star4CountsByAccount->count()}}</p>
                        </div>
                        <div class="flex mb-3 text-yellow-200">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"style="color:rgb(202, 202, 191"></i>
                            <i class="fa-solid fa-star mr-3"style="color:rgb(202, 202, 191"></i>
                            <div class="w-64 h-4 bg-gray-200 rounded overflow-hidden">
                                <div class="bg-green-500 h-full" style="width: {{($star3CountsByAccount->count() / $totalSum) * 100}}%;"></div>
                            </div>
                            <p class="-mt-1 ml-5 text-zinc-300">{{$star3CountsByAccount->count()}}</p>
                        </div>
                        <div class="flex mb-3"style="color:rgb(202, 202, 191">
                            <i class="fa-solid fa-star text-yellow-200"></i>
                            <i class="fa-solid fa-star text-yellow-200"></i>
                            <i class="fa-solid fa-star "></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star mr-3"></i>
                            <div class="w-64 h-4 bg-gray-200 rounded overflow-hidden">
                                <div class="bg-green-500 h-full" style="width: {{($star2CountsByAccount->count() / $totalSum) * 100}}%"></div>
                            </div>
                            <p class="-mt-1 ml-5 text-zinc-300">{{$star2CountsByAccount->count()}}</p>
                        </div>
                        <div class="flex mb-3"style="color:rgb(202, 202, 191">
                            <i class="fa-solid fa-star text-yellow-200"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star mr-3"></i>
                            <div class="w-64 h-4 bg-gray-200 rounded overflow-hidden ">
                                <div class="bg-green-500 h-full" style="width: {{($star1CountsByAccount->count() / $totalSum) * 100}}%"></div>
                            </div>
                            <p class="-mt-1 ml-5 text-zinc-300">{{$star1CountsByAccount->count()}}</p>
                        </div>
                    </div>
                 </div>
                 {{-- max-lg:hidden --}}
                <div class="lg:col-span-6 grid lg:grid-cols-1  lg:block">
                    @if($checkPurchaseOrder == 1 || $checkAdmin?->role==1)
                    <div >
                        <h1>Đánh giá chất lượng sản phẩm</h1>                                
                        <div class="flex">
                            <button id="1" style="border:none;background-color:white;color:rgb(202, 202, 191)" onclick="Star(1)"><i class="fa-solid fa-star"></i></button>
                                <button id="2"style="border:none;background-color:white;color:rgb(202, 202, 191)" onclick="Star(2)"><i class="fa-solid fa-star"></i></button>
                                <button id="3"style="border:none;background-color:white;color:rgb(202, 202, 191)" onclick="Star(3)"><i class="fa-solid fa-star"></i></button>
                                <button id="4"style="border:none;background-color:white;color:rgb(202, 202, 191)" onclick="Star(4)"><i class="fa-solid fa-star"></i></button>
                                <button id="5"style="border:none;background-color:white;color:rgb(202, 202, 191)" onclick="Star(5)"><i class="fa-solid fa-star"></i></button>
                            </div>
                            <textarea name="" id="text" cols="50" rows="2" ></textarea><br>
                            <button style="" class="border p-2" onclick="create()">Comment</button>
                    </div>
                    @else
                        <div >
                            <h1>Đánh giá chất lượng sản phẩm</h1>                                
                            <div class="flex">
                                <button id="1" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                    <button id="2"style="border:none;background-color:white;color:rgb(202, 202, 191)" ><i class="fa-solid fa-star"></i></button>
                                    <button id="3"style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                    <button id="4"style="border:none;background-color:white;color:rgb(202, 202, 191)" ><i class="fa-solid fa-star"></i></button>
                                    <button id="5"style="border:none;background-color:white;color:rgb(202, 202, 191)" ><i class="fa-solid fa-star"></i></button>
                                </div>
                                <p>Do chưa mua hàng nên không thể comment</p><br>
                                <button style="" class="border p-2">Comment</button>
                        </div>
                    @endif

                </div>
             </div> 
            <hr>
        </div>

            <div>
                <hr>
                <div class="flex  justify-between ">
                    <div class="text-xl mt-3 mb-3">
                        <p>Nhận xét về sản phẩm</p>
                    </div>
                    <div class="">
                        <p></p>
                    </div>
                </div>
                
                <hr>
            </div>
                <div id="div1">
                </div>
                        @for($i = 0;$i<$comment->count();$i++ )

                                    <div id="{{$i}}">
                                        <hr>
                                        <div class="flex  justify-between ">
                                            <div class="">
                                                <div  class="flex text-xs">
                                                    <button  id="reviews_{{$comment[$i]->ID_comment."1"}}" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                                    <button  id="reviews_{{$comment[$i]->ID_comment."2"}}" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                                    <button  id="reviews_{{$comment[$i]->ID_comment."3"}}" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                                    <button  id="reviews_{{$comment[$i]->ID_comment."4"}}" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                                    <button  id="reviews_{{$comment[$i]->ID_comment."5"}}" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p>{{$comment[$i]->Time}} </p>
                                            </div>
                                        </div>
                                        <div class="flex ">
                                            
                                            @if($comment[$i]->avatar!==null)
                                                <img class="h-10 w-10 rounded-3xl" src="{{$comment[$i]->avatar}}" alt="">
                                            @else
                                                 <img class="h-10 w-10" src="https://bizweb.dktcdn.net/100/438/408/themes/931909/assets/account_ava.jpg?1701143626189" alt="">
                                            @endif
                                           
                                            <p class="text-zinc-500 text-xs pt-3 pl-1">  {{$comment[$i]->username}} </p><br> 
                                        </div>
                                        <p class="mt-2 mb-5"> {{$comment[$i]->Content}}</p>                          
                                         <hr>
                                    </div>
                    @endfor
              
                        <script>

                            document.addEventListener("DOMContentLoaded", function() {
                                var comments = {!! json_encode($comment->toArray()) !!};
                                changeStarColor(comments);
                            });
                            function changeStarColor(comment) {
                                    for (var i = 0; i < comment.length; i++) {
                                        var starCount = comment[i].Star;
                                       for (var j = 1; j <= 5; j++) {
                                           var idsao = document.getElementById("reviews_"+comment[i].ID_comment+j);
                                           if (idsao !== null) {
                                               if (j <= starCount) {
                                                   idsao.style.color = 'yellow';
                                               }else{
                                                    idsao.style.color = 'rgb(202, 202, 191)';
                                               }
                                           }
                                        }
                                 }
                            }
                            function Star(id) {
                                for (var i = 1; i <= 5; i++) {
                                    var idsao = document.getElementById(i);
                                    if (idsao !== null) {
                                        if (i <= id) {
                                            idsao.style.color = 'yellow';
                                        } else {
                                            idsao.style.color = 'rgb(202, 202, 191)';
                                        }
                                    }
                                }
                               
                            }
                            function create(){
                                var text = document.getElementById('text');
                                var max = 0;
                                var IDproduct = {{ $productDetail->ProductID }};
                                
                                for (var i = 1; i <= 5; i++) {
                                    var idsao = document.getElementById(i);                                 
                                    if (idsao.style.color === 'yellow') {
                                            max = i;
                                    } 
                               }
                               var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                                fetch('comments/add', {
                                    method: 'POST',
                                    body: JSON.stringify({
                                        _token: csrfToken,
                                        text: text.value,
                                        max: max,
                                        IDproduct:IDproduct,
                                    }),
                                    headers: {
                                        'Content-Type': 'application/json'
                                    }
                                }) 
                                .then(response => response.json())
                                .then(data => {
                                    // console.log(data);
                                    // data.Comment[0].ID_comment
                                    var div1 = document.getElementById('div1');                              
                                        const commentDiv = document.createElement('div');
                                        commentDiv.innerHTML = `
                                            <div>
                                                <hr>
                                                <div class="flex justify-between">
                                                <div class="">
                                                    <div class="flex text-xs">
                                                        <button id="reviews_`+data.Comment[0].ID_comment+`1" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                                        <button id="reviews_`+data.Comment[0].ID_comment+`2" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                                        <button id="reviews_`+data.Comment[0].ID_comment+`3" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                                        <button id="reviews_`+data.Comment[0].ID_comment+`4" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>
                                                        <button id="reviews_`+data.Comment[0].ID_comment+`5" style="border:none;background-color:white;color:rgb(202, 202, 191)"><i class="fa-solid fa-star"></i></button>

                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p>`+data.currentTime+`</p>
                                                </div>
                                            </div>
                                            <div class="flex ">
                                                @if($checkAvatar==1)
                                                    <img class="h-10 w-10 rounded-3xl" src="{{$UserAvatarNow->avatar}}" alt="">
                                            @else
                                                <img class="h-10 w-10" src="https://bizweb.dktcdn.net/100/438/408/themes/931909/assets/account_ava.jpg?1701143626189" alt="">
                                            @endif
                                            <p class="text-zinc-500 text-xs pt-3 pl-1"> `+data.currentUser+`</p><br> 
                                        </div>
                                            <br>
                                            <p class="-mt-5 mb-5">`+data.text+`</p>
                                            <hr>
                                        </div>
                                    `;   
                                    div1.appendChild(commentDiv); 
                                    console.log(data.Comment);
                                    changeStarColor(data.Comment) 
                                                                
                                })
                                .catch(error => {
                                    // Xử lý lỗi nếu xảy ra
                                    console.error('Lỗi:', error);
                                });
                               
                            }
                        </script>




































        {{-- ========================================================================================================?- --}}
        <span class="inline-block w-[100%] text-center font-medium text-[#FDAF17] py-[30px] bg-[#F2F2F2]">ĐỀ XUẤT CHO
            BẠN</span>
        <div class="grid gap-5 grid-cols-2 md:grid-cols-3 lg:grid-cols-5">

            @for($i = 0; $i < $listProductSale->count(); $i++) 
                    <div class="col-span-1 my-5 group_Product ">
                        <a href="{{$listProductSale[$i]->Slug}}" class="inline-block overflow-hidden relative rounded">
                            <img src="/storage/uploads/{{$listProductSale[$i]->Img}}"
                                alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                            <span
                                class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                                    class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                                307</span>
                        </a>
                        <div>
                            <div class="h-10">
                                <a href="" class="text-sm font-normal">{{$listProductSale[$i]->Name}}</a>
                            </div>
                            <div class="py-1">
                                <span class="font-medium text-[#CD151C]">{{  number_format($listProductSale[$i]->Price_sale, 0, ',', '.')."đ"}}</span>
                                <span class="font-medium text-[#8A8A8F]"><s>{{  number_format($listProductSale[$i]->Price_sale, 0, ',', '.')."đ"}}</s></span>
                            </div>
                        </div>
                        <ul class="flex item_image">
                            @for ($j = 0; $j < $imagesSale->count(); $j++)
                                @if($listProductSale[$i]->ProductID == $imagesSale[$j]->ProductID ) 
                                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                                        class="h-[100%] w-[100%] object-cover rounded-full"
                                        src=" /storage/uploads/{{$imagesSale[$j]->Img}}"
                                        alt="">
                                </li>
                                @endif 
                        @endfor
                        </ul>
                </div>

            
        @endfor
     


        
    </div>
    <script src="/build/assets/js/users/productbycategorieschild.js"></script>
    <script src="/build/assets/js/users/cart.js"></script>
@endsection
