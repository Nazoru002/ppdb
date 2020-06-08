<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Siswa;

class MainController extends Controller
{
    public function index()
    {
        $check = Auth::check();
        if ($check) {
            $user = Auth::user();
            $cek = Siswa::where('user_id', '=', $user->id)->first();
            
            if ($cek == null) {
                session()->flash('success', 'Silahkan Lanjut Upload Data Diri & Berkas - Berkas');
            } else {
                session()->flash('warning', 'Silahkan Tunggu Informasi Yang akan Disampaikan Ke Email Ataupun Nomor WhatsApp');
            }

            if ($user->roles->first()->name != 'Siswa') {
                Auth::logout();
                return redirect('/login');
            } else {
                return view('frontend.users.main');
            }
        }
    }
}
