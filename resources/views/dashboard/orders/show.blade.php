@extends('dashboard.layouts.main')


@section('content')
    <div class="container-xxl">
        <div class="card">
            <div class="card-header position-relative">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h6 class="fs-17 fw-semi-bold my-1">Orders Details</h6>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
                    </div>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <td>{{ $order->id }}</td>
                </tr>
                <tr>
                    <th>Pembeli</th>
                    <td>{{ $order->user->name }}</td>
                </tr>
                <tr>
                    <th>Total Price</th>
                    <td>Rp. {{ $order->total_price }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $order->status }}</td>
                </tr>
            </table>
            <div class="card-body">
                <h6 class="fs-17 fw-semi-bold my-1">Items</h6>
                <div class="table-responsive">
                    <table class="table table-striped table-borderless category-list">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->items as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->book->title }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>Rp. {{ $item->price }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
