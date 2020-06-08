<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use App\Bank;
use Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        $bank = Bank::all();
        return view('frontend.transaksi.transfer', compact('bank'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'bank' => 'required|string'
        ]);

        try {
            $siswa = Siswa::where('user_id', '=', $user->id)->update([
                'bank' => $request->bank,
                'transfer_status' => 'Sedang'
            ]);
            return redirect(route('payment.index'));
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function show()
    {
        
    }
}
