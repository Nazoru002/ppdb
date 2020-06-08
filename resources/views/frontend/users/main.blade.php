@extends('frontend.layouts.master')

@section('title')
    SMK AB | Dashboard Siswa
@endsection

@section('content-header')
<div class="container">
    @if (session('success'))
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            {{ session('success') }} <a href="{{ route('upload.index') }}">Klik Disini</a>
        </div>
    @endif

    @if (session('warning'))
        <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            {{ session('warning') }}
        </div>
    @endif
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