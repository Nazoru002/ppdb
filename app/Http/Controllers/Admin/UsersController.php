<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        try {
            $login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            if ($login == true) {
                $user = User::where('email', '=', $request->email)->firstOrFail();
                if ($user->roles->first()->name == 'Admin') {
                    return redirect(route('admin.index'));
                } else {
                    session()->flash('fail', 'User Anda Tidak Dapat Digunakan !');
                    return redirect('/login');
                }
            } else {
                session()->flash('fail', 'E-mail / Password Salah !');
            }
        } catch (\Exception $e) {
            dd($e);
            session()->flash('error', 'Terjadi Kesalahan ! Coba Lagi Dalam Beberapa Saat !');
            return redirect()->back();
        }
    }
}
