@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <h1>Order Item Details</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $orderItem->id }}</td>
        </tr>
        <tr>
            <th>Order ID</th>
            <td>{{ $orderItem->order_id }}</td>
        </tr>
        <tr>
            <th>Book ID</th>
            <td>{{ $orderItem->book_id }}</td>
        </tr>
        <tr>
            <th>Quantity</th>
            <td>{{ $orderItem->quantity }}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{ $orderItem->price }}</td>
        </tr>
    </table>
    <a href="{{ route('order-items.index', $orderItem->order_id) }}" class="btn btn-primary">Back to Order Items</a>
</div>
@endsection

