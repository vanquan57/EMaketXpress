@extends('admin.layouts.home')
@section('content')
    <div>
        <ul class="py-2 w-[100%] bg-[#F9FAFB] flex pl-2 border-b">
            <li>
                <a href="/admin/promotions"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500   rounded-lg bg-gray-100  dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700  dark:hover:text-white">
                    <span class="w-full">Thêm Mã Khuyến Mãi</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="/admin/promotions/list"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium rounded-lg text-gray-900  bg-gray-300  dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Danh Sách Mã Khuyến Mãi</span>
                </a>
            </li>
            <li class="ml-2">
                <a href="#"
                    class="inline-flex border items-center justify-center p-2 text-base font-medium text-gray-500 rounded-lg bg-gray-100 hover:text-gray-900 hover:bg-gray-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="w-full">Cập Nhật Mã Khuyến Mãi</span>
                </a>
            </li>
        </ul>

        <div class="card-content ">
            <table class="border-2">
                <thead>
                    <tr class="text-sm text-center">
                        <th>ID</th>
                        <th>Tên chương trình</th>
                        <th>Mã khuyến mãi</th>
                        <th>Lượng giảm</th>
                        <th>Ngày bắt đầu</th>
                        <th>Ngày kết thúc</th>
                        <th>Kích Hoạt</th>
                        <th>Thuộc danh mục</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listPromotions as $PromotionItem)
                        <tr class="text-sm text-center">
                            <td>{{ $PromotionItem->PromotionID }}</td>
                            <td>{{ $PromotionItem->PromotionName }}</td>
                            <td>{{ $PromotionItem->PromotionCode }}</td>
                            <td>{{ $PromotionItem->DiscountAmount }} {{ $PromotionItem->DiscountType == 1 ? 'VNĐ' : '%' }}</td>
                            <td>{{ $PromotionItem->StartDate }}</td>
                            <td>{{ $PromotionItem->EndDate }}</td>
                            <td>{!! \App\Helpers\Helper::Active($PromotionItem->Active) !!}</td>
                            <td>{{ $PromotionItem->CategoryID }}</td>
                            <td class="flex"><a href="/admin/promotions/edit-{{ $PromotionItem->PromotionID }}">
                                    <button class="button small blue --jb-modal" data-target="sample-modal-2"
                                        type="button">
                                        <span class="icon"><i class="fas fa-edit"></i></span>
                                    </button>
                                </a>
                                <a href="#" class="ml-1"
                                onclick="removeRow({{ $PromotionItem->PromotionID }}, '/admin/promotions/destroy')">
                                    <button class="button small red --jb-modal" data-target="sample-modal-2" type="button">
                                        <span class="icon"><i class="fas fa-trash"></i></span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
