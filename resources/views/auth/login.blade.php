@extends('auth.layouts.master')
@section('title')
    SMK AB | Login
@endsection
@section('content')
<div class="login-box">
    <div class="login-logo">
        <img src="{{ asset('') }}dist/img/assets/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <a href=""><b>SMK AB</b> | Login</a>
    </div>
    <!-- /.login-logo -->

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login Untuk Memulai Sesi !</p>
                <form action="/cLogin" method="post">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('error') }}
                    </div>
                    @endif

                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <br>
            <div class="text-center">
                <p class="mb-1">
                    <a href="forgot-password.html">Lupa password</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('register') }}">Daftar Akun Baru</a>
                </p>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
@endsection
