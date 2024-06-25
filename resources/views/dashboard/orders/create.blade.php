@extends('dashboard.layouts.main')
@section('content')
<div class="container">
    <h1>Create New Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User:</label>
            <select name="user_id" id="user_id" class="form-control" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price:</label>
            <input type="number" name="total_price" id="total_price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" id="status" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Create Order</button>
    </form>
</div>
@endsection
