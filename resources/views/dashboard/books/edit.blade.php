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
                <h6 class="fs-17 fw-semi-bold mb-0">Edit Data Buku</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/books/{{ $book->slug }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Judul Buku</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    required="" id="title" name="title" value="{{ old('title', $book->title) }}">
                                @error('title')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Kategori</label>
                                <select class="form-select @error('category_id') is-invalid @enderror" required
                                    name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                        @if (old('category_id', $book->category_id) == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="" hidden></option>
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Penulis</label>
                                <select class="form-select @error('author_id') is-invalid @enderror" required
                                    name="author_id" id="author_id">
                                    @foreach ($authors as $author)
                                        @if (old('author_id', $book->author_id) == $author->id)
                                            <option value="{{ $author->id }}" selected>{{ $author->name }}</option>
                                        @else
                                            <option value="" hidden></option>
                                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('author_id')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Penerbit</label>
                                <select class="form-select @error('publisher_id') is-invalid @enderror" required
                                    name="publisher_id" id="publisher_id">
                                    @foreach ($publishers as $publisher)
                                        @if (old('publisher_id', $book->publisher_id) == $publisher->id)
                                            <option value="{{ $publisher->id }}" selected>{{ $publisher->name }}</option>
                                        @else
                                            <option value="" hidden></option>
                                            <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('publisher_id')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Jumlah Stok</label>
                                <input readonly type="number" class="form-control @error('stock') is-invalid @enderror"
                                    placeholder="1" required="" name="stock" id="stock"
                                    value="{{ old('stock', $book->stock) }}" />
                                @error('stock')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="">
                                <label class="required fw-medium mb-2">Harga</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    placeholder="65000" required="" name="price" id="price"
                                    value="{{ old('price', $book->price) }}" />
                                @error('price')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary-soft"><i
                                    class="fa fa-edit me-2"></i>Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
