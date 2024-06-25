@extends('dashboard.layouts.main')


@section('content')
<div class="container">
    <h1>Order Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <th>User ID</th>
            <td>{{ $order->user_id }}</td>
        </tr>
        <tr>
            <th>Total Price</th>
            <td>{{ $order->total_price }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $order->status }}</td>
        </tr>
    </table>
    <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
</div>
@endsection
