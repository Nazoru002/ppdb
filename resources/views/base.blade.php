@extends('layouts.app')

@section('title')
    SMK AB | International School
@endsection

@section('first-content')
<div class="jumbotron example first text-center example" id="main-content">
    <a href="#section1" class="btn btn-primary button" data-slide="true" role="button" style="margin-top: 460px;">
        <span>Ketahui Kami Lebih Lanjut</span>
    </a>
</div>
@endsection

@section('second-content')
<div class="jumbotron example second bg-lightblue disabled color-palette">
    <h1 class="display-6 text-center mb-3">Kompetensi Keahlian Yang Dimiliki</h1>
    <hr>
    <div class="row text-dark">
        <div class="col-md-4 color-palette-set">
            <div class="card bg-success disabled color-palette">
                <div class="card-header">
                    <h3 class="card-title"><b>Rekayasa Perangkat Lunak</b></h3>
                </div>

                <div class="card-body text-center">
                    <a href="/rpl" class="btn btn-outline-dark btn-lg mb-3">Selengkapnya</a>
                    <img style="width: 80%; height: 100%;" src="{{ asset('') }}dist/img/assets/1.png" alt="" class="card-img-top">
                    <img style="width: 80%; height: 100%;" src="{{ asset('') }}dist/img/assets/1.1.png" alt="" class="card-img-top">
                </div>
            </div>
        </div>
        {{-- /.col-first --}}

        <div class="col-md-4">
            <div class="card bg-danger disabled color-palette">
                <div class="card-header">
                    <h3 class="card-title"><b>Teknik Komputer & Jaringan</b></h3>
                </div>

                <div class="card-body text-center">
                    <a href="/tkj" class="btn btn-outline-dark btn-lg mb-3">Selengkapnya</a>
                    <img style="width: 80%; height: 100%;" src="{{ asset('') }}dist/img/assets/2.png" alt="" class="card-img-top">
                    <img style="width: 80%; height: 100%;" src="{{ asset('') }}dist/img/assets/2.2.png" alt="" class="card-img-top">
                </div>
            </div>
        </div>
        {{-- /.col-second --}}

        <div class="col-md-4">
            <div class="card bg-orange disabled color-palette">
                <div class="card-header">
                    <h3 class="card-title text-white"><b>Perhotelan</b></h3>
                </div>

                <div class="card-body text-center">
                    <a href="#" class="btn btn-outline-dark btn-lg mb-3">Selengkapnya</a>
                    <img style="width: 60%; height: 100%;" src="{{ asset('') }}dist/img/assets/3.png" alt="" class="card-img-top">
                    <img style="width: 40%; height: 101%;" src="{{ asset('') }}dist/img/assets/3.3.png" alt="" class="img-third-second card-img-top">
                </div>
            </div>
        </div>
        {{-- /.col-third --}}
    </div>
    {{-- /.row --}}
</div>
@endsection

@section('third-content')
    <div class="jumbotron third example" style="background-color: #d81b60;">
        <h1 class="display-4 text-center text-grey mb-3"><b>Video Profile Kami</b></h1>
        <br>
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/TaETGTnEZSs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-md-6">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/s_eJY3uN3TQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <footer class="main-footer fourth bg-dark">
        <div class="row">
            <div class="col-md-6">
                <h5>Contact Us</h5>
                <hr>
                <p>
                    <i class="fab fa-fw fa-whatsapp"></i>
                    <span>0856 5902 4775</span>
                </p>

                <p>
                    <i class="fab fa-fw fa-facebook"></i>
                    <span><a href="https://www.facebook.com/smkabinternationalofficial/">SMK AB International School</a></span>
                </p>

                <p>
                    <i class="fab fa-fw fa-youtube"></i>
                    <span><a href="https://www.youtube.com/channel/UC-eBX7nNfCL3Ltf5d_FjrKA">SMK AB International</a></span>
                </p>
            
                <p>
                    <i class="fab fa-fw fa-instagram"></i>
                    <span><a href="https://www.instagram.com/smkabinternational/">@smkabinternational</a></span>
                </p>

                <br>

                <h5>Jam Kerja Kami</h5>
                <hr>
                <p>
                    <i class="far fa-fw fa-clock"></i>
                    <span>Senin - Jum'at | 07.30-16.00</span>
                </p>
                <p>
                    <i class="far fa-fw fa-clock"></i>
                    <span>Sabtu | 08.00-13.00</span>
                </p>
                <br>
            </div>

            <div class="col-md-6">
                <h5>Alamat :</h5>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6974662593248!2d106.91398791436747!3d-6.926719969723545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6849d3ec9010fd%3A0x6d55c66675111255!2sSMK%20AB%20International!5e0!3m2!1sen!2sid!4v1589553352080!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <br><br><br><br>
        <hr>
        <div class="text-center">
            <strong>Copyright &copy; <span id="date"></span>&ensp;<a href="{{ url('/') }}">SMK AB International</a>.</strong> All rights reserved.
        </div>
    </footer>
@endsection