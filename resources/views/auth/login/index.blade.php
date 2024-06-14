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
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="mb-5">
                        <h2 class="display-6 fw-semibold mb-3">Selamat Datang! Silahkan <span
                                class="font-caveat text-primary">Log In</span> Terlebih Dahulu.</h2>
                        <p class="mb-0">Unlock a world of exclusive content, enjoy special offers, and be the first to
                            dive
                            into exciting news and updates by joining our community!</p>
                    </div>
                    <form class="login-form" action="/login" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="required">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" id="username" autofocus required>
                            @error('username')
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
                        <div class="form-check mb-4 text-start">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Remember me next time</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">Log In</button>
                    </form>
                    <div class="bottom-text text-center mt-4"> Don't have an account? <a href="/register"
                            class="fw-medium text-decoration-underline">Register</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
