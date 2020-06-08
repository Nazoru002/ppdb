@extends('frontend.layouts.master')

@section('title')
    SMK AB | Transfer
@endsection

@section('content-header')
    <div class="container">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i>&ensp;Surat Tanda Bukti</h5>
            <br>
            <p>Silahkan Print Untuk Memudahkan Anda Transfer</p>

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
                                    <th>Nama Bank & Nomor Rekening Yang Dituju</th>
                                    <td>:</td>
                                    <td>{{ $siswa->bank }}</td>
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
                        {{-- <a href="/printTanda" class="btn btn-outline-success"><i class="fas fa-print"></i> Print</a> --}}
                        <a href="/printdata" target="_blank" class="btn btn-outline-primary"><i class="fas fa-download"></i> Generate PDF</a>
                    </div>
                </div>
            </div>

            <hr>

            <h5><i class="fas fa-info"></i>&ensp;Setelah Transfer Selesai Silahkan Upload Foto Bukti Pembayaran</h5>
            <br>
            <form action="{{ route('payment.store') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="photo_bukti">Upload Foto Bukti Pembayaran</label>
                    *<input type="file" name="photo_bukti" class="form-control" id="photo_bukti" value="{{ old('photo') }}">
                    <p class="text-danger">File Harus Ber-Ekstensi .jpg | .jpeg | .png</p>
                </div>
                <button class="btn btn-block btn-outline-success">Upload Bukti Transfer</button>
            </form>
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