@extends('dashboard.layouts.main')
@section('content')
    <div class="container-xxl">
        <div class="card mb-4">
            <div class="card-header position-relative">
                <h6 class="fs-17 fw-semi-bold mb-0">Tambah Data Penerbit</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/publishers" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="">
                                <label class="required fw-medium mb-2">Nama Penerbit</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    required="" id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary-soft"><i class="fa fa-plus me-2"></i>Add
                                New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
