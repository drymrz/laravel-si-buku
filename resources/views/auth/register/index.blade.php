@extends('auth.layouts.main')
@section('content')
    <div class="p-3 p-sm-5">
        <div class="row g-4 g-xl-5 justify-content-center">
            <div class="col-xl-5 d-flex justify-content-center">
                <div class="authentication-wrap overflow-hidden position-relative text-center text-sm-start my-5 m-0">
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="mb-5">
                        <h2 class="display-6 fw-semibold mb-3">Ayo <span class="font-caveat text-primary">Register</span>
                            Terlebih Dahulu!</h2>
                    </div>
                    <form class="login-form" action="/register" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="required">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" autofocus required>
                            @error('name')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label class="required">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" id="username" autofocus required>
                            @error('username')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label class="required">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" autofocus required>
                            @error('email')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label class="required">Password</label>
                            <input id="password" type="password"
                                class="form-control password @error('password') is-invalid @enderror" autocomplete="off"
                                id="password" name="password" required>
                            <i data-bs-toggle="#password" class="fa-regular fa-eye-slash toggle-password"></i>
                            @error('username')
                                <div class="invalid-feedback text-start">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">Daftar</button>
                    </form>
                    <div class="bottom-text text-center mt-4"> Sudah punya akun? <a href="/"
                            class="fw-medium text-decoration-underline">Log In</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
