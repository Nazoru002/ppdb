@extends('frontend.layouts.master')

@section('title')
    SMK AB | Transfer
@endsection

@section('content-header')
    <div class="container">
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i>&ensp;Surat Tanda Bukti</h5>
            <br>
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
                        <a href="/printdata" target="_blank" class="btn btn-outline-success"><i class="fas fa-print"></i> Print PDF FILE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
