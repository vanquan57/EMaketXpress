@extends('admin.layouts.home')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Tổng Quan</li>
            </ul>

        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1>
                Thông Số Hiện Tại
            </h1>
        </div>
    </section>

    <section class="section main-section">
        <div class="grid gap-6 grid-cols-1 md:grid-cols-3 mb-6">
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Số Lượng Khách Hàng
                            </h3>
                            <h1>
                                {{ $numberUsers }}
                            </h1>
                        </div>
                        <span class="icon widget-icon text-green-500"><i
                                class="mdi mdi-account-multiple mdi-48px"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Số Lượng Đơn Hàng
                            </h3>
                            <h1>
                                {{ $numberOrders }}
                            </h1>
                        </div>
                        <span class="icon widget-icon text-blue-500"><i class="mdi mdi-cart-outline mdi-48px"></i></span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Số Mã Giảm Giá
                            </h3>
                            <h1>
                                {{ $numberPromotions }}
                            </h1>
                        </div>
                        <span class="icon widget-icon text-red-500"><i
                                class="fa-solid fa-money-bill-trend-up text-[48px]"></i></span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="flex items-center justify-between">
                        <div class="widget-label">
                            <h3>
                                Số Lượng Sản Phẩm
                            </h3>
                            <h1>
                                {{ $numberProducts }}
                            </h1>
                        </div>
                        <span class="icon widget-icon text-red-500"><i
                                class="fa-regular fa-chart-bar text-[48px]"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="notification blue">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
                <div>
                    <span class="icon"><i class="mdi mdi-buffer"></i></span>
                    <b>Danh Sách Khách Hàng</b>
                </div>
            </div>
        </div>

        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    Tài Khoản
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Tên</th>
                            <th>Địa Chỉ</th>
                            <th>Số Điện Thoại</th>
                            <th>Trạng Thái</th>
                            <th>Ngày Tạo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($infoUserDefaults)
                            @foreach ($infoUserDefaults as $infoUserDefault)
                                <tr class="font-medium text-sm">
                                    <td class="image-cell">
                                        <div class="image">
                                            <img src="{{ $infoUserDefault->avatar ? $infoUserDefault->avatar : 'https://api-private.atlassian.com/users/0cce1b66ea5b0f118a553ac58068ac76/avatar' }}"
                                                class="rounded-full" alt="User Avatar">
                                        </div>
                                    </td>
                                    @if ($infoUserDefault->InfoUsers && $infoUserDefault->InfoUsers->isNotEmpty())
                                        @foreach ($infoUserDefault->InfoUsers as $infoUser)
                                            <td>{{ $infoUser->Name }}</td>
                                            <td>{{ $infoUser->Province }}, {{ $infoUser->District }}, {{ $infoUser->Ward }},
                                                {{ $infoUser->DetailedAddress }}</td>
                                            <td>{{ $infoUser->PhoneNumber }}</td>
                                        @endforeach
                                    @else
                                        <td>{{ $infoUserDefault->username }}</td>
                                        <td></td>
                                        <td></td>
                                    @endif

                                    <td>{{ $infoUserDefault->active == 1 ? 'Đã Kích Hoạt' : 'Chưa Kích Hoạt' }}</td>
                                    <td>
                                        @php
                                            $createDate = explode(' ', $infoUserDefault->created_at);
                                        @endphp
                                        <small class="text-gray-500">{{ $createDate[0] }}</small>
                                    </td>
                                    <td class="actions-cell">
                                        <div class="buttons right nowrap">
                                            <button class="button small blue --jb-modal" data-target="sample-modal-2"
                                                type="button">
                                                <span class="icon"><i class="mdi mdi-eye"></i></span>
                                            </button>
                                            <button class="button small red --jb-modal" data-target="sample-modal"
                                                type="button">
                                                <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endisset



                    </tbody>
                </table>
                <div class="table-pagination">
                    <div class="flex items-center justify-between">
                        @isset($infoUserDefaults)
                            {{ $infoUserDefaults->links() }}
                        @endisset
                        
                        <small>Page {{ request()->query('page') }} of @isset($infoUserDefaults)
                                {{ $infoUserDefaults->lastPage() }}
                            @endisset
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div id="sample-modal" class="modal">
        <div class="modal-background --jb-modal-close"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Sample modal</p>
            </header>
            <section class="modal-card-body">
                <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
                <p>This is sample modal</p>
            </section>
            <footer class="modal-card-foot">
                <button class="button --jb-modal-close">Cancel</button>
                <button class="button red --jb-modal-close">Confirm</button>
            </footer>
        </div>
    </div>

    <div id="sample-modal-2" class="modal">
        <div class="modal-background --jb-modal-close"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Sample modal</p>
            </header>
            <section class="modal-card-body">
                <p>Lorem ipsum dolor sit amet <b>adipiscing elit</b></p>
                <p>This is sample modal</p>
            </section>
            <footer class="modal-card-foot">
                <button class="button --jb-modal-close">Cancel</button>
                <button class="button blue --jb-modal-close">Confirm</button>
            </footer>
        </div>
    </div>
@endsection
