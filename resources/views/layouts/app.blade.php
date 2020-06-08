<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- MyCss -->
    <link rel="stylesheet" href="{{ asset('') }}dist/css/mycss.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('') }}dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{-- SweetAlertBs --}}
    <link rel="stylesheet" href="{{ asset('') }}dist/css/sweetalert.min.css">

    {{-- SweetAlertjs --}}
    <script src="{{ asset('') }}dist/js/sweetalert.min.js"></script>
    <!-- jQuery -->
    <script src="{{ asset('') }}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('') }}dist/js/adminlte.min.js"></script>
    <script src="{{ asset('') }}dist/js/scrollify.js"></script>
</head>


<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark sticky-top">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('') }}dist/img/assets/logo.png" alt="SMK Logo" class="brand-image img-circle elevation-3">
                    <span class="brand-text font-weight-light">SMK AB International</span>
                </a>
              
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Berita</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Profil Sekolah</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">Some action </a></li>
                                <li><a href="#" class="dropdown-item">Some other action</a></li>
                            </ul>
                        </li>

                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">Visi & Misi</a>
                        </li>

                        <li class="nav-item">
                            <a href="/register" class="nav-link">Pendaftaran</a>
                        </li>


                        <li class="nav-item">
                            {{-- <a href="/login" class="nav-link">Login</a> --}}
                            <button type="button" class="nav-link btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                               Login
                            </button> 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="con">
            <!-- Content Header (Page header) -->
            @yield('first-content')
            <!-- /.content-header -->

            <!-- second-content -->
            <div class="content" id="section1">
                @yield('second-content')
            </div>
            <!-- /.second-content -->
            

            {{-- third-content --}}
            <div class="content">
                @yield('third-content')
            </div>
            {{-- /.third-content --}}
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <span class="example">
            @yield('footer')
        </span>
    </div>
    <!-- ./wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <form method="post" class="form-login"> --}}
                        {{-- @if (session('success'))
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
                        @endif --}}
                    {{-- </form> --}}
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn-login btn btn-outline-success btn-block">Login</button>
                </div>
                <div class="modal-footer ml-auto">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- My Script-->
    <script>
        $(document).ready(function () {
            // Scrollify
            $(function() {
                $.scrollify({
                    section : ".example",
                    interstitialSection : "",
                    easing: "easeOutExpo",
                    scrollSpeed: 1900,
                    
                    before:function() {},
                    after:function() {},
                    afterResize:function() {},
                    afterRender:function() {}
                });
            });

            // ScrollSpy
            $("#main-content a[href^='#']").on('click', function(e) {
                e.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function()  {
                    window.location.hash = hash;
                });
            });

            // Google Maps Script
            function initMap() {
                // The location of Uluru
                var uluru = {lat: -25.344, lng: 131.036};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                    document.getElementById('map'), {zoom: 4, center: uluru});
                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: uluru, map: map});
            }

            // Footer Year
            function clockTick()    {
                currentTime = new Date();
                year = currentTime.getFullYear();
                document.getElementById('date').innerHTML=year;
            }
            setInterval(function(){clockTick();}, 1000);

            $(".btn-login").click(function () {
                var email = $("#email").val();
                var password = $("#password").val();
                var token = $("meta[name='csrf-token']").attr("content");

                if (email.length == "") {
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Alamat Email Wajib Diisi !'
                    });
                } else if(password.length == ""){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Password Wajib Diisi !'
                    });
                } else {
                    $.ajax({
                        url: "{{ route('login.index') }}",
                        type: "POST",
                        dataType: "JSON",
                        cache: false,
                        data: {
                            "email": email,
                            "password": password,
                            "_token" : token
                        },

                        success: function (response) {
                            if (response.success) {
                                swal({
                                    type: 'success',
                                    title: 'Login Berhasil !',
                                    text: 'Anda akan diarahkan dalam 5 Detik',
                                    timer: 5000,
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                });
                                window.location = "{{ route('siswa.index') }}";
                            }
                            console.log(response);
                        },

                        error: function (response) {
                            swal({
                                type: "error",
                                title: "Oops !",
                                text: "Username atau password Salah !"
                            });
                            console.log(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
  
