<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use Auth;

class DataSiswaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $siswa = Siswa::where('user_id', '=', $user->id)->firstOrFail();
        return view('frontend.Datapages.diri', compact('siswa'));
    }
}
