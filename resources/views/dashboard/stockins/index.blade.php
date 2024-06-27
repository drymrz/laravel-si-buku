@extends('dashboard.layouts.main')
@section('content')
    <div class="container-xxl">
        <div class="card">
            <div class="card-header position-relative">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h6 class="fs-17 fw-semi-bold my-1">Stock In</h6>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('stockin.create') }}" class="btn btn-primary fw-medium"><i
                                class="fa-solid fa-plus me-1"></i>Tambah Stock Buku</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-borderless category-list">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Buku</th>
                                <th>Quantity</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stockins as $stockin)
                                <tr>
                                    <th>
                                        {{ $loop->iteration }}
                                    </th>
                                    <td>
                                        <div class="fw-medium">{{ $stockin->book->title }}</div>
                                    </td>
                                    <td>
                                        {{ $stockin->quantity }}
                                    </td>
                                    <td>
                                        {{ $stockin->created_at->format('d F Y, H:i') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
