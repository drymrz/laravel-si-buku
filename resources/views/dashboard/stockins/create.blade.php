@extends('dashboard.layouts.main')
@section('content')
    <div class="container-xxl">
        <div class="card mb-4">
            <div class="card-header position-relative">
                <h6 class="fs-17 fw-semi-bold mb-0">Tambah Stock Buku</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/stockin" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="">
                                <label class="required fw-medium mb-2">Nama Buku</label>
                                <select class="form-select @error('book_id') is-invalid @enderror" required=""
                                    id="book_id" name="book_id" value="{{ old('book_id') }}">
                                    <option value="" selected="" disabled="">Pilih Buku</option>
                                    @foreach ($books as $book)
                                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                                    @endforeach
                                </select>
                                @error('book_id')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="">
                                <label class="required fw-medium mb-2">Quantity</label>
                                <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                                    required="" name="quantity" id="quantity" value="{{ old('quantity') }}" />
                                @error('quantity')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary-soft"><i class="fa fa-plus me-2"></i>Tambah
                                Stock</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
