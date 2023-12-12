@extends('layouts.home')
@section('content')
    <div>
        <img src="/storage/uploads/banner_dp.webp" alt="">
    </div>

    <div class="lg:max-w-[1200px] mx-auto">
        <div>
            <div class="specialtyevent_ specialtyevent_all"> 
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 mt-[50px]">
                    <div class="col-span-1 my-5 group_Product border border-blue-900 border-2 rounded-2xl" >
                        <div class="flex justify-center mt-5 mb-5">
                           <img src="//bizweb.dktcdn.net/100/438/408/themes/933808/assets/magicpen.svg?1702142037304" alt"">
                        </div>
                        <div class="h-48  text-blue-700 text-center" >
                            <p class="text-xl mb-5">Thiết kế miễn phí</p>
                            <p>Thiết kế logo, hình in miễn phí</p>
                        </div>        
                    </div>  
                    <div class="col-span-1 my-5 group_Product border border-blue-900 border-2 rounded-2xl" >
                        <div class="flex justify-center mt-5 mb-5">
                            <img src="//bizweb.dktcdn.net/100/438/408/themes/933808/assets/repeat.svg?1702142037304" alt="icon_repeat">
                        </div>
                        <div class="h-48  text-blue-700 text-center" >
                            <p class="text-xl mb-5">Đổi trả trong 15 ngày</p>
                            <p>Khách hàng được quyền đổi trả sản phẩm (còn nguyên tem mác) miễn phí trong vòng 15 ngày nếu có bất kỳ lỗi nào từ nhà sản xuất kể từ khi khách nhận hàng.</p>
                        </div>        
                    </div>  
                    <div class="col-span-1 my-5 group_Product border border-blue-900 border-2 rounded-2xl" >
                        <div class="flex justify-center mt-5 mb-5">
                            <img src="//bizweb.dktcdn.net/100/438/408/themes/933808/assets/calendar.svg?1702142037304" alt="icon_cleandar">
                        </div>
                        <div class="h-48  text-blue-700 text-center" >
                            <p class="text-xl mb-5">Bảo hành 6 tháng</p>
                            <p>Bảo hành chất lượng hình in/ thêu trong vòng 6 tháng kể từ khi khách nhận hàng.</p>
                        </div>        
                    </div>  
                    <div class="col-span-1 my-5 group_Product border border-blue-900 border-2 rounded-2xl" >
                        <div class="flex justify-center mt-5 mb-5">
                            <img src="//bizweb.dktcdn.net/100/438/408/themes/933808/assets/truck-fast.svg?1702142037304" alt="icon_truck_fast">
                        </div>
                        <div class="h-48  text-blue-700 text-center" >
                            <p class="text-xl mb-5">Miễn phí giao hàng</p>
                            <p>Miễn phí giao hàng toàn bộ đơn hàng đồng phục trên toàn quốc</p>
                        </div>        
                    </div>  
                </div>
            </div>
        </div>  
        <span class="inline-block w-[100%] text-center font-medium text-[#FDAF17] py-[30px] bg-[#F2F2F2] text-2xl">Các sản phẩm mẫu nổi bật</span>
        <div class="grid gap-5 grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
            <div class="col-span-1 my-5 group_Product">
                <a href="" class="inline-block overflow-hidden relative rounded">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nam-apm3519-dod-5-yodyvn.jpg?v=1690163862263"
                        alt="" class="main_image object-cover transition-all  w-[100%] hover:scale-105 ">
                    <span
                        class=" absolute top-0 left-0 rounded-tl px-2 rounded-br bg-[#5E5E5E] text-white font-medium text-sm"><span
                            class="border-r pr-1"><i class="text-[#FFC016] pr-1 fa-solid fa-star"></i>5</span> Đã bán
                        307</span>
                </a>
                <div>
                    <a href="" class="text-sm font-normal">Áo Polo Nữ Mắt Chim Phối Bo (Form Rộng)</a>
                    <div class="py-1">
                        <span class="font-medium text-[#CD151C]">164.500đ</span>
                        <span class="font-medium text-[#8A8A8F]"><s>329.000đ</s></span>
                    </div>
                </div>
                <ul class="flex item_image">
                    <li class="mr-2 inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-xxm-ao-polo-nu-mat-chim-yody-3.jpg?v=1699328545820"
                            alt=""></li>
                    <li class="inline-block cursor-pointer w-[48px] h-[48px] rounded-full hover:shadow-md"><img
                            class="h-[100%] w-[100%] object-cover rounded-full"
                            src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apn5390-hog-ao-polo-nu-yody-3.jpg?v=1684810027840"
                            alt=""></li>
                </ul>
            </div>
        </div>

        


        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
            <div class="lg:col-span-12 col-span-1">
                <div class=" lg:grid lg:grid-cols-3 gap-5 hidden">                 
                        <div class="col-span-1 w-[100%]">
                            <div>
                                <img class="col-span-1 w-[100%] rounded-md object-cover rounded-xl"
                                src="/storage/uploads/caphe.webp"
                                alt="">
                            </div>
                            <div class="border border-2px rounded-xl mt-5"  style="height: 410px">
                                <p class="text-2xl p-5 text-blue-700">Vải Cafe</p>
                                <hr>
                                <p class=" p-5">Chất liệu tái chế sinh học độc quyền, thân thiện môi trường, an toàn cho người sử dụng.</p>
                                <ul class="list-disc pl-14">
                                    <li class="mb-2">Kiểm soát mùi - ODOR CONTROL</li>
                                    <li class="mb-2">Nhanh khô - FAST DRYING</li>
                                    <li class="mb-2">Thấm hút nhanh</li>
                                    <li class="mb-2">Chống nắng - UV PROTECTION</li>
                                    <li class="mb-2">Cảm giác "Siêu thoải mái" vải bên ngoài dệt sần thời trang, bên trong mềm mịn</li>
                                </ul>
                            </div>
                        </div>
                        



                        <div class="col-span-1 w-[100%]">
                            <div>
                                <img class="col-span-1 w-[100%] rounded-md object-cover rounded-xl"
                                src="/storage/uploads/cafe.webp"
                                alt="">
                            </div>
                            <div class="border border-2px rounded-xl mt-5" style="height: 410px">
                                <p class="text-2xl p-5 text-blue-700">Vải Coolmax</p>
                                <hr>
                                <p class=" p-5">Siêu phẩm chất liệu dành riêng cho mùa hè, vô cùng thích hợp làm đồng phục cho các đội nhóm. Sự khác biệt của vải này là bề mặt vải xốp, nhẹ, giúp ngăn chặn quá trình “ngưng tụ” của hồ hôi tạo nên cảm giác mát mẻ, thoải mái cho người mặc.</p>
                                <ul class="list-disc pl-14">
                                    <li class="mb-2">Công nghệ hạ nhiệt tức thì</li>
                                    <li class="mb-2">Thấm hút mồ hôi và khô nhanh</li>
                                    <li class="mb-2">Co giãn, ít nhàu, tiện dụng</li>
                                    <li class="mb-2">Nhẹ, thoáng mát, truyền dẫn ẩm tốt</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-span-1 w-[100%]">
                            <div>
                                <img class="col-span-1 w-[100%] rounded-md object-cover rounded-xl"
                                src="/storage/uploads/matchim.webp"
                                alt="">
                            </div>
                            <div class="border border-2px rounded-xl mt-5" style="height: 410px">
                                <p class="text-2xl p-5 text-blue-700">Vải Mắt chim</p>
                                <hr>
                                <p class=" p-5">Mang trong mình câu chuyện nỗ lực của cả đội ngũ YODY cùng nguyên liệu tốt nhất thế giới.</p>
                                <ul class="list-disc pl-14">
                                    <li class="mb-2">Hiệu ứng mắt chim độc đáo</li>
                                    <li class="mb-2">Vải Mềm - Mịn - Mát</li>
                                    <li class="mb-2">Thông thoáng, thấm hút cực tốt</li>
                                    <li class="mb-2">Co giãn, độ bền cao</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-span-1 w-[100%]">
                            <div>
                                <img class="col-span-1 w-[100%] rounded-md object-cover rounded-xl"
                                src="/storage/uploads/airycool.webp"
                                alt="">
                            </div>
                            <div class="border border-2px rounded-xl mt-5" style="height: 410px">
                                <p class="text-2xl p-5 text-blue-700">Vải Airycool</p>
                                <hr>
                                <p class=" p-5">Vượt trội ở khả năng làm mát, tạo sự thông thoáng cho cơ thể, thích hợp cho hoạt động thể thao, vận động mạnh qua công nghệ cool airy tiên tiến giúp giải nhiệt cơ thể cho ngày hè mát mẻ.</p>
                                <ul class="list-disc pl-14">
                                    <li class="mb-2">Khô nhanh</li>
                                    <li class="mb-2">Mềm mịn</li>
                                    <li class="mb-2">Thông thoáng, thấm hút</li>
                                    <li class="mb-2">Co giãn tốt, giữ form</li>
                                    <li class="mb-2">Độ bền cao, bền màu</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-span-1 w-[100%]">
                            <div>
                                <img class="col-span-1 w-[100%] rounded-md object-cover rounded-xl"
                                src="/storage/uploads/cotton.webp"
                                alt="">
                            </div>
                            <div class="border border-2px rounded-xl mt-5" style="height: 410px">
                                <p class="text-2xl p-5 text-blue-700">Vải Cotton</p>
                                <hr>
                                <p class=" p-5">Dành riêng cho dòng áo thun không cổ, sử dụng 100% nguyên liệu sợi bông cotton cao cấp mềm mại, bông xốp</p>
                                <ul class="list-disc pl-14">
                                    <li class="mb-2">Hút ẩm và thoát ẩm nhanh giúp người dùng luôn cảm thấy thoải mái và khô ráo </li>
                                    <li class="mb-2">Độ bền cao, sử dụng được lâu qua nhiều lần giặt</li>
                                    <li class="mb-2">Kiểu dáng basic cùng hoạ tiết trơn nên rất dễ mặc, dễ phối</li>
                                    <li class="mb-2">Bông làm áo được trồng theo tiêu chuẩn ECO an toàn cho làn da</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-span-1 w-[100%] ">
                            <div>
                                <img class="col-span-1 w-[100%] rounded-md object-cover rounded-xl"
                                src="/storage/uploads/nano.webp"
                                alt="">
                            </div>
                            <div class="border border-2px rounded-xl mt-5 " style="height: 410px">
                                <p class="text-2xl p-5 text-blue-700">Vải Nano</p>
                                <hr>
                                <p class=" p-5">Chất liệu mềm mại cùng thiết kế mới mang đến nét lịch lãm cho trang phục công sở.</p>
                                <ul class="list-disc pl-14">
                                    <li class="mb-2">Sợi vải siêu mảnh, ít nhăn tự nhiên</li>
                                    <li class="mb-2">Mềm mại, thấm hút nhanh</li>
                                    <li class="mb-2">Quick Dry 3D - Nhanh khô hơn 3 lần</li>
                                    <li class="mb-2">Anti-UV - Chống tia UV</li>
                                </ul>
                            </div>
                        </div>
          
                </div>
                <div class="lg:hidden">
                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="relative  overflow-hidden rounded-lg md:h-96" style="max-height: 800px;min-height: 600px">    
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class=" absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                        <div>
                                            <img class="  w-[100%] rounded-md object-cover rounded-xl "
                                            src="/storage/uploads/caphe.webp"
                                            alt="">
                                        </div>
                                        <div class="border border-2px rounded-xl mt-5"  style="height: 410px">
                                            <p class="text-2xl p-5 text-blue-700">Vải Cafe</p>
                                            <hr>
                                            <p class=" p-5">Chất liệu tái chế sinh học độc quyền, thân thiện môi trường, an toàn cho người sử dụng.</p>
                                            <ul class="list-disc pl-14">
                                                <li class="mb-2">Kiểm soát mùi - ODOR CONTROL</li>
                                                <li class="mb-2">Nhanh khô - FAST DRYING</li>
                                                <li class="mb-2">Thấm hút nhanh</li>
                                                <li class="mb-2">Chống nắng - UV PROTECTION</li>
                                                <li class="mb-2">Cảm giác "Siêu thoải mái" vải bên ngoài dệt sần thời trang, bên trong mềm mịn</li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class=" absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                        <div>
                                            <img class="  w-[100%] rounded-md object-cover rounded-xl "
                                            src="/storage/uploads/cafe.webp"
                                            alt="">
                                        </div>
                                        <div class="border border-2px rounded-xl mt-5" style="height: 410px">
                                            <p class="text-2xl p-5 text-blue-700">Vải Coolmax</p>
                                            <hr>
                                            <p class=" p-5">Siêu phẩm chất liệu dành riêng cho mùa hè, vô cùng thích hợp làm đồng phục cho các đội nhóm. Sự khác biệt của vải này là bề mặt vải xốp, nhẹ, giúp ngăn chặn quá trình “ngưng tụ” của hồ hôi tạo nên cảm giác mát mẻ, thoải mái cho người mặc.</p>
                                            <ul class="list-disc pl-14">
                                                <li class="mb-2">Công nghệ hạ nhiệt tức thì</li>
                                                <li class="mb-2">Thấm hút mồ hôi và khô nhanh</li>
                                                <li class="mb-2">Co giãn, ít nhàu, tiện dụng</li>
                                                <li class="mb-2">Nhẹ, thoáng mát, truyền dẫn ẩm tốt</li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <div class=" absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                                        <div>
                                            <img class="  w-[100%] rounded-md object-cover rounded-xl "
                                            src="/storage/uploads/matchim.webp"
                                            alt="">
                                        </div>
                                        <div class="border border-2px rounded-xl mt-5" style="height: 410px">
                                            <p class="text-2xl p-5 text-blue-700">Vải Mắt chim</p>
                                            <hr>
                                            <p class=" p-5">Mang trong mình câu chuyện nỗ lực của cả đội ngũ YODY cùng nguyên liệu tốt nhất thế giới.</p>
                                            <ul class="list-disc pl-14">
                                                <li class="mb-2">Hiệu ứng mắt chim độc đáo</li>
                                                <li class="mb-2">Vải Mềm - Mịn - Mát</li>
                                                <li class="mb-2">Thông thoáng, thấm hút cực tốt</li>
                                                <li class="mb-2">Co giãn, độ bền cao</li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>

                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class=" text-blue-950 w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                                <svg class=" text-blue-950 w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                </div>
            </div>
        </div>













    </div>
    <div class="lg:max-w-[1200px] mx-auto">
        <div>
            <div class="specialtyevent_ specialtyevent_all"> 
                <div class="grid grid-cols-2 md:grid-cols-2 xl:grid-cols-3 gap-7 mt-[50px]">
                    <div class="col-span-1 my-5 group_Product border border-blue-900 border-2 rounded-2xl" >
                   
                    </div>
                </div>
            </div>
        </div>    
    </div>
    

@endsection
