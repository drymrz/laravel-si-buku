@extends('dashboard.layouts.main')
@section('content')
    <div class="row g-3 mb-3">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 d-flex">
            <div class="card flex-column flex-fill p-4 position-relative shadow w-100 widget-card">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 ms-3">
                        <div class="fs-14 text-muted">Jumlah Judul <br>Buku</div>
                        <h3 class="fw-semi-bold mb-0">{{ $books->count() }}</h3>
                    </div>
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                            <path
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                            <path
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 d-flex">
            <div class="card flex-column flex-fill p-4 position-relative shadow w-100 widget-card">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 ms-3">
                        <div class="fs-14 text-muted">Total Stock <br> Buku</div>
                        <h3 class="fw-semi-bold mb-0">{{ $books->sum('stock') }}</h3>
                    </div>
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor"
                            class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                            <path
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                            <path
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 d-flex">
            <div class="card flex-column flex-fill p-4 position-relative shadow w-100 widget-card">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 ms-3">
                        <div class="fs-14 text-muted">Total Users</div>
                        <h3 class="fw-semi-bold mb-0">{{ $users->count() }}</h3>
                    </div>
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 d-flex">
            <div class="card flex-column flex-fill p-4 position-relative shadow w-100 widget-card">
                <div class="d-flex">
                    <div class="flex-grow-1 ms-3">
                        <div class="fs-14 text-muted">Total Category</div>
                        <h3 class="fw-semi-bold mb-0">{{ $categories->count() }}</h3>
                    </div>
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor"
                            class="bi bi-list-nested" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 p-4 total-box">
        <div class="g-4 gx-xxl-5 row">
            <div class="col-sm-4 total-box-left">
                <div class="align-items-center d-flex justify-content-between mb-4">
                    <h6 class="mb-0">Pemasukan</h6>
                    <div class="align-items-center d-flex justify-content-center rounded arrow-btn percentage-increase">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
                <h1 class="price">Rp. <span
                        class="counter">{{ number_format($orders->sum('total_price'), 0, ',', '.') }}</span>
                </h1>
            </div>
            <div class="col-sm-4 total-box-left">
                <div class="align-items-center d-flex justify-content-between mb-4">
                    <h6 class="mb-0">Buku Terjual</h6>
                    <div class="align-items-center d-flex justify-content-center rounded arrow-btn percentage-increase">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
                <h1 class="price counter">{{ $orderItems->sum('quantity') }}</h1>
            </div>
            <div class="col-sm-4 total-box__right">
                <div class="align-items-center d-flex justify-content-between mb-4">
                    <h6 class="mb-0">Total Order</h6>
                    <div class="align-items-center d-flex justify-content-center rounded arrow-btn percentage-increase">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                        </svg>
                    </div>
                </div>
                <h1 class="price counter">{{ $orders->count() }}</h1>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header position-relative">
            <h6 class="fs-17 fw-semi-bold my-1">Order Minggu Ini</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless text-nowrap category-list">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Total Items</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Tanggal Order</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders->where('created_at', '>=', now()->subWeek()) as $order)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->items->count() }}</td>
                                <td>Rp. {{ number_format($order->total_price, 0, ',', '.') }}</td>
                                <td>
                                    {{ $order->status }}
                                </td>
                                <td>{{ $order->created_at->format('d M Y, H:i') }}</td>
                                <td class="text-end">
                                    <a href="/dashboard/orders/{{ $order->id }}"
                                        class="btn btn-primary fw-medium btn-sm d-inline-flex align-items-center justify-content-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path
                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
