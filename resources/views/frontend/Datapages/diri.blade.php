@extends('frontend.layouts.master')

@section('title')
    SMK AB | Data Diri
@endsection

@section('content-header')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>{{ $siswa->name }}</td>
                        </tr>

                        <tr>
                            <td>NIK</td>
                            <td>{{ $siswa->nik }}</td>
                        </tr>

                        <tr>
                            <td>Tempat Lahir</td>
                            <td>{{ $siswa->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>{{ $siswa->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $siswa->gender }}</td>
                        </tr>
                        <tr>
                            <td>Telepon / Nomor WhatsApp</td>
                            <td>{{ $siswa->phone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Provinsi</td>
                            <td>{{ $siswa->province }}</td>
                        </tr>
                        <tr>
                            <td>Kota/Kabupaten</td>
                            <td>{{ $siswa->city }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $siswa->address }}</td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td>{{ $siswa->post_code }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    
@endsection

@section('aside')
<h5>
    <i class="fas fa-fw fa-user-cog"></i>
    <span>Pengaturan Akun</span>
</h5>
<hr>
<p>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
        @csrf
    </form>
</p>
@endsection