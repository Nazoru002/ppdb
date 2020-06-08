@extends('frontend.layouts.master')

@section('title')
    SMK AB | Upload Berkas Siswa
@endsection

@section('content-header')
    <div class="container">
        <div class="card card-primary">
            <!-- form start -->
            <form role="form" action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @foreach ($errors->all() as $item)
                        {{ $item }}
                    @endforeach
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                *<input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK">
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                *<input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Lengkap Sesuai Ijazah">
                            </div>

                            <div class="form-group">
                                <label for="nama">Provinsi</label>
                                *<select name="province" id="province" class="form-control" onchange="tes(this);">
                                    <option value="">== Pilih Provinsi ==</option>
                                    @foreach ($provinces as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="provinces" id="idcity">
                            </div>
                           

                            <div class="form-group">
                                <label for="nama">Kota / Kabupaten</label>
                                *<select name="city" id="city" class="form-control">
                                    <option value="">== Pilih Provinsi Terlebih Dahulu ! ==</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nisn">Tempat Lahir</label>
                                *<input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth">Tanggal Lahir</label>
                                *<input type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="Masukkan Tanggal Lahir">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Jenis Kelamin</label>
                                *<select name="gender" id="gender" class="form-control">
                                    <option value="">== Pilih Jenis Kelamin ==</option>
                                    <option value="Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                *<input type="number" name="phone" class="form-control" id="phone" placeholder="Masukkan Nomor Telepon / WhatsApp">
                            </div>

                            <div class="form-group">
                                <label for="address">Alamat</label>
                                *<textarea name="address" class="form-control" id="address" placeholder="Masukkan Alamat Lengkap"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="post_code">Kode Pos</label>
                                *<input type="number" name="post_code" class="form-control" id="post_code" placeholder="Masukkan Kode Pos">
                            </div>

                            <div class="form-group">
                                <label for="berkas">Upload Berkas : Raport SMP & Kartu Keluarga</label>
                                *<input type="file" name="berkas" class="form-control" id="berkas" value="{{ old('berkas') }}">
                                <p class="text-danger">File Harus Ber-Ekstensi Rar / Zip</p>
                            </div>

                            <div class="form-group">
                                <label for="photo">Upload Photo : Harus Foto Berlatar Merah</label>
                                *<input type="file" name="photo" class="form-control" id="photo" value="{{ old('photo') }}">
                                <p class="text-danger">Foto Tidak Boleh Lebih Dari 5 MB & Harus Ber Ekstensi .jpg | .png | .jpeg</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-block btn-outline-success">Upload Data Diri</button>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
        <!-- /.card -->
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