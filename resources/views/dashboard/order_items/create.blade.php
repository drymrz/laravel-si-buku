@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <h1>Create New Order Item</h1>
    <form action="{{ route('order_items.store') }}" method="POST" id="createOrderItemForm">
        @csrf
        <div class="form-group">
            <label for="order_id">Order ID:</label>
            <input type="number" name="order_id" id="order_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="book_id">Book:</label>
            <select name="book_id" id="book_id" class="form-control" required>
                <option value="">-- Select Book --</option>
                @foreach($books as $book)
                    <option value="{{ $book->id }}" data-price="{{ $book->price }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" class="form-control" readonly>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Create Order Item</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil elemen-elemen yang dibutuhkan
        var bookSelect = document.getElementById('book_id');
        var quantityInput = document.getElementById('quantity');
        var priceInput = document.getElementById('price');

        // Event listener untuk saat memilih buku
        bookSelect.addEventListener('change', function () {
            var selectedOption = bookSelect.options[bookSelect.selectedIndex];
            var bookPrice = selectedOption.getAttribute('data-price');
            updatePrice(bookPrice);
        });

        // Event listener untuk saat mengubah jumlah quantity
        quantityInput.addEventListener('input', function () {
            var selectedOption = bookSelect.options[bookSelect.selectedIndex];
            var bookPrice = selectedOption.getAttribute('data-price');
            updatePrice(bookPrice);
        });

        // Fungsi untuk mengupdate harga berdasarkan buku dan quantity
        function updatePrice(bookPrice) {
            var quantity = quantityInput.value;
            var totalPrice = bookPrice * quantity;
            priceInput.value = totalPrice.toFixed(2); // Format harga dengan dua desimal
        }
    });
</script>
@endsection
