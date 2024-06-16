@extends('dashboard.layouts.main')
@section('content')
    <div class="container-xxl">
        <div class="card">
            <div class="card-header position-relative">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h6 class="fs-17 fw-semi-bold my-1">Penerbit</h6>
                    </div>
                    <div class="text-end">
                        <a href="/dashboard/publishers/create" class="btn btn-primary fw-medium"><i
                                class="fa-solid fa-plus me-1"></i>Create
                            New
                            Data</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-borderless category-list">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Slug</th>
                                <th>Nama Penerbit</th>
                                <th>Jumlah Buku</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($publishers as $publisher)
                                <tr>
                                    <th>
                                        {{ $loop->iteration }}
                                    </th>
                                    <td>
                                        {{ $publisher->slug }}
                                    </td>
                                    <td>
                                        <div class="fw-medium">{{ $publisher->name }}</div>
                                    </td>
                                    <td>
                                        {{ $publisher->books->count() }}
                                    </td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="/dashboard/publishers/{{ $publisher->slug }}/edit"
                                                class="btn btn-primary btn-sm"><i class="fa-solid fa-edit mt-1"></i></a>
                                            <form action="/dashboard/publishers/{{ $publisher->slug }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
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
