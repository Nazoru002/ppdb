<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;
use Auth;
use PDF;

class AlreadyController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $siswa = Siswa::where('user_id', '=', $user->id)->firstOrFail();
        return view('frontend.transaksi.already', compact('siswa'));
    }

    public function print()
    {
        $user = Auth::user();
        $siswa = Siswa::where('user_id', '=', $user->id)->firstOrFail();
        $pdf = PDF::loadview('frontend.Datapages.printend', compact('siswa'));
        return $pdf->stream();
    }
}
