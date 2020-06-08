@extends('frontend.layouts.master')

@section('title')
    SMK AB | Transfer
@endsection

@section('content-header')
    <div class="container">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i>&ensp;Pendaftaran kamu telah kami terima, selanjutnya informasi akan kami sampaikan pada nomor telepon dan email.</h5>
            <br>
            <p>Transfer Biaya Pendaftaran</p>
            <form role="form" action="{{ route('transaction.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @foreach ($errors->all() as $item)
                        {{ $item }}
                    @endforeach
                    <div class="form-group">
                        <label for="nama">Silahkan Pilih Bank</label>
                        *<select name="bank" id="bank" class="form-control">
                            <option value="">== Pilih Bank ==</option>
                            @foreach ($bank as $item)
                                <option value="{{ $item->nama_bank }} {{ $item->no_rekening }}">{{ $item->nama_bank }} ({{ $item->no_rekening }})</option>
                            @endforeach
                        </select>
                    </div>
                    <p>Silahkan transfer biaya Pendaftaran sebesar <b>Rp. 250.000,-</b></p>
                    <p>Untuk Konfirmasi transfer biaya Pendaftaran Telah Kami Terima silahkan menghubungi nomor berikut : <b>0856-5902-4775</b></p>
                    <button class="btn btn-block btn-outline-success">Konfirmasi Pemabayaran</button>
                </div>
                <!-- /.card-body -->
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