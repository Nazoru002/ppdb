<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        return view('base');
    }

    public function rpl()
    {
        return view('jurusan.rpl');
    }

    public function tkj()
    {
        return view('jurusan.tkj');
    }

    public function visimisi()
    {
        
    }
}
