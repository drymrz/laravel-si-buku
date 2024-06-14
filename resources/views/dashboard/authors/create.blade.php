@extends('dashboard.layouts.main')
@section('content')
    <div class="container-xxl">
        <div class="card mb-4">
            <div class="card-header position-relative">
                <h6 class="fs-17 fw-semi-bold mb-0">Tambah Data Penulis</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/authors" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="">
                                <label class="required fw-medium mb-2">Nama Penulis</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    required="" id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback text-start">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="">
                                <label class="required fw-medium mb-2">Bio</label>
                                <textarea required="" id="bio" name="bio" class="form-control @error('bio') is-invalid @enderror"
                                    rows="3" maxlength="255" placeholder="Please enter up to 255 characters.">{{ old('bio') }}"</textarea>
                                @error('bio')
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
