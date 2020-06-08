<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    public function index()
    {
        $check = Auth::check();
        if ($check) {
            $user = Auth::user();
            if ($user->roles->first()->name != 'Admin') {
                Auth::logout();
                return redirect('/backend');
            } else {
                return view('admin.pages.index');
            }
        }
    }
}
