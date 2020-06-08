@extends('admin.layouts.master')

@section('title')
    SMK AB | Admin Area
@endsection

@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">
                Data PPDB
            </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item active">Data PPDB</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable Calon Siswa Baru</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Provinsi</th>
                                <th>Kabupaten/Kota</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $s)
                                <tr>
                                    <td>{{ $s->nik }}</td>
                                    <td>{{ $s->name }}</td>
                                    <td>{{ $s->province }}</td>
                                    <td>{{ $s->city }}</td>
                                    <td>{{ $s->gender }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Provinsi</th>
                                <th>Kabupaten/Kota</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
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