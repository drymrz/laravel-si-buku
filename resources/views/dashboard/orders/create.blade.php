@extends('dashboard.layouts.main')
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-light-danger color-danger">
                <i class="bi bi-exclamation-circle"></i> {{ $error }}
            </div>
        @endforeach
    @endif
    <div class="container-xxl">
        <div class="card mb-4">
            <div class="card-header position-relative">
                <h6 class="fs-17 fw-semi-bold mb-0">Tambah Data Order</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="">
                                <label class="required fw-medium mb-2">Pembeli</label>
                                <select class="form-select @error('user_id') is-invalid @enderror" required name="user_id"
                                    id="user_id">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div id="order-items">
                            <div class="order-item row g-4 mb-2">
                                <div class="col-sm-6">
                                    <div class="">
                                        <label class="required fw-medium mb-2">Nama Buku</label>
                                        <select class="form-select book-select" required name="order_items[0][book_id]"
                                            id="order_items[0][book_id]">
                                            <option value="" selected>Pilih Buku</option>
                                            @foreach ($books as $book)
                                                <option @disabled($book->stock == 0) data-price="{{ $book->price }}"
                                                    value="{{ $book->id }}">
                                                    {{ $book->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="">
                                        <label class="required fw-medium mb-2">Quantity</label>
                                        <input type="number" class="form-control quantity" required
                                            name="order_items[0][quantity]" id="order_items[0][quantity]" value="1" />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="">
                                        <label class="required fw-medium mb-2">Harga</label>
                                        <input type="number" class="form-control price" required
                                            name="order_items[0][price]" id="order_items[0][price]" value=""
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="">
                                        <label class="fw-medium mb-2">Action</label>
                                        <button type="button" class="btn btn-danger remove-item"><i
                                                class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" id="add-item" class="btn btn-primary-soft"><i
                                    class="fa fa-plus me-2"></i>Tambah Item</button>
                        </div>
                        <div class="col-sm-6 mt-4">
                            <div class="">
                                <label class="required fw-medium mb-2">Total Bayar</label>
                                <input type="number" readonly class="form-control" required name="total_price"
                                    id="total" value="" />
                            </div>
                        </div>
                        <div class="col-sm-6 mt-4">
                            <div class="">
                                <label class="required fw-medium mb-2">Status</label>
                                <select type="number" class="form-select" required name="status" id="status"
                                    value="">
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Create Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let itemIndex = 1;
            const orderItems = document.getElementById('order-items');
            const addItemButton = document.getElementById('add-item');
            const totalInput = document.getElementById('total');

            function calculateTotal() {
                let total = 0;
                document.querySelectorAll('.price').forEach(input => {
                    total += parseFloat(input.value) || 0;
                });
                totalInput.value = total;
            }

            addItemButton.addEventListener('click', function() {
                const newItem = document.createElement('div');
                newItem.classList.add('order-item', 'row', 'g-4', 'mb-2');
                newItem.innerHTML = `
                    <div class="col-sm-6">
                        <div class="">
                            <label class="required fw-medium mb-2">Nama Buku</label>
                            <select class="form-select book-select" required name="order_items[${itemIndex}][book_id]" id="order_items[${itemIndex}][book_id]">
                                <option value="" hidden>Pilih Buku</option>
                                @foreach ($books as $book)
                                    <option data-price="{{ $book->price }}" value="{{ $book->id }}">{{ $book->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="">
                            <label class="required fw-medium mb-2">Quantity</label>
                            <input type="number" class="form-control quantity" required name="order_items[${itemIndex}][quantity]" id="order_items[${itemIndex}][quantity]" value="1" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="">
                            <label class="required fw-medium mb-2">Harga</label>
                            <input type="number" class="form-control price" required name="order_items[${itemIndex}][price]" id="order_items[${itemIndex}][price]" value="" readonly />
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="">
                            <label class="fw-medium mb-2">Action</label>
                            <button type="button" class="btn btn-danger remove-item"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                `;
                orderItems.appendChild(newItem);
                itemIndex++;
                calculateTotal();
            });

            orderItems.addEventListener('change', function(event) {
                if (event.target.classList.contains('book-select')) {
                    const bookSelect = event.target;
                    const selectedOption = bookSelect.options[bookSelect.selectedIndex];
                    const price = selectedOption.getAttribute('data-price');
                    const parent = bookSelect.closest('.order-item');
                    const quantityInput = parent.querySelector('.quantity');
                    const priceInput = parent.querySelector('.price');

                    quantityInput.addEventListener('input', function() {
                        priceInput.value = quantityInput.value * price;
                        calculateTotal();
                    });

                    // Trigger the quantity input event to set the initial price
                    quantityInput.dispatchEvent(new Event('input'));
                }
            });

            orderItems.addEventListener('click', function(event) {
                if (event.target.classList.contains('remove-item') || event.target.closest(
                        '.remove-item')) {
                    const item = event.target.closest('.order-item');
                    item.remove();
                    calculateTotal();
                }
            });

            // Initial calculation of total price
            calculateTotal();
        });
    </script>
@endsection
