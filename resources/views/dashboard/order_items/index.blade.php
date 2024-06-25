@extends('dashboard.layouts.main')
@section('content')
<div class="container">
    <h1>Order Items for Order ID: {{ $orderId }}</h1>
    <a href="{{ route('order_items.create') }}" class="btn btn-primary">Create New Order Item</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order ID</th>
                <th>Book Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orderItems as $orderItem)
            <tr>
                <td>{{ $orderItem->id }}</td>
                <td>{{ $orderItem->order_id }}</td>
                <td>{{ $orderItem->book->title }}</td> <!-- Assuming 'title' is the attribute for book title -->
                <td>{{ $orderItem->quantity }}</td>
                <td>{{ $orderItem->price }}</td>
                <td>
                    <a href="{{ route('order_items.show', $orderItem->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('order_items.edit', $orderItem->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('order_items.destroy', $orderItem->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order item?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No order items found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
