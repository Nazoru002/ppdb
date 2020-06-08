<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use App\Siswa;
use App\User;
use Auth;

class DataController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        // $provinces = Province::pluck('name', 'id');
        return view('admin.pages.DataSiswa.index', compact('siswa'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
