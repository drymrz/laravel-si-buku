@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <h1>Edit Order</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="number" name="user_id" id="user_id" class="form-control" value="{{ $order->user_id }}" required>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price:</label>
            <input type="number" name="total_price" id="total_price" class="form-control" value="{{ $order->total_price }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ $order->status }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>
</div>
@endsection
