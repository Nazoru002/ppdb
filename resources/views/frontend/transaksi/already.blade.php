@extends('frontend.layouts.master')

@section('title')
    SMK AB | Success Transfer
@endsection

@section('content-header')
    <div class="container">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i>&ensp;Tanda Bukti Telah Transfer</h5>
            <br>
            <p>Silahkan Print Atau Bisa Berupa Soft File PDF Untuk Ditunjukan Kepada Panitia & Di Tukarkan Dengan Kartu Peserta Didik Baru</p>

            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <tr>
                                    <th>NIK</th>
                                    <td>:</td>
                                    <td>{{ $siswa->nik }}</td>
                                </tr>

                                <tr>
                                    <th>Nama Siswa</th>
                                    <td>:</td>
                                    <td>{{ $siswa->name }}</td>
                                </tr>

                                <tr>
                                    <th>Status Transfer</th>
                                    <td>:</td>
                                    <td>{{ $siswa->transfer_status }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="text-center">
                        {{-- <a href="{{ url('') }}" target="_blank" class="btn btn-outline-success"><i class="fas fa-print"></i> Print</a> --}}
                        <a href="/printend" target="_blank" class="btn btn-outline-primary"><i class="fas fa-download"></i> Generate PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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