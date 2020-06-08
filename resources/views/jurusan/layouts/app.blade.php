<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- MyCss -->
    {{-- <link rel="stylesheet" href="{{ asset('') }}dist/css/mycss.css"> --}}
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('') }}dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ asset('') }}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('') }}dist/js/adminlte.min.js"></script>
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
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Pendaftaran</a>
                        </li>


                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>
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

    <!-- My Script-->
    <script>
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
    </script>
</body>
</html>
