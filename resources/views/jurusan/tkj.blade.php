@extends('jurusan.layouts.app')

@section('title')
    SMK AB | Teknik Komputer & Jaringan
@endsection

@section('first-content')
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-primary">Teknik Komputer & Jaringan</h3>
                <br>
                <p>Lama Belajar 3 Tahun</p>
                <p style="text-decoration: underline">Pembelajaran Kejuruan :</p>
                <ul style="list-style: none;">
                    <li>1. Komputer dan Jaringan Dasar</li>
                    <li>2. Cisco Paket Tracer</li>
                    <li>3. Dasar Desain Grafis</li>
                    <li>4. Mikrotik</li>
                    <li>5. Networking Designer</li>
                    <li>6. Installasi OS Linux Debian & Configuration, Maupun Windows</li>
                    <li>7. Produk Kreatif dan Kewirausahaan</li>
                </ul>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('') }}dist/img/assets/tkj.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('') }}dist/img/assets/tkj.jpg" alt="Second slide">
                                    {{-- <img class="d-block w-100" src="{{ asset('') }}dist/img/assets/1.1.png" alt="Second slide"> --}}
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('') }}dist/img/assets/asw.jpg" alt="Third slide">
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
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