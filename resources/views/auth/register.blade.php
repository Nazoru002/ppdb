@extends('auth.layouts.master')

@section('title')
    SMK AB | Daftar
@endsection

@section('content')
<div class="register-box">
    <div class="register-logo">
      <img src="{{ asset('') }}dist/img/assets/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <a href=""><b>SMK AB </b>| Daftar</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Daftar Menjadi Siswa Baru !</p>
            <form action="/cRegister" method="post">
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
                    <input type="text" name="email" class="form-control" placeholder="Email">
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
                <button type="submit" class="btn btn-success btn-block">Register</button>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-google mr-2"></i>
                    Sign up using Google
                </a>
            </div>
            <div class="text-center">
                <a href="{{ route('login') }}" class="text-center">Sudah Punya Akun? Login !</a>
                <br>
                <a href="/" class="text-center">Kembali Ke Home</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.card -->
</div>
<!-- /.register-box -->
@endsection
