<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;
use App\Transaksi;
use Auth;
use PDF;

class PaymentShowController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $siswa = Siswa::where('user_id', '=', $user->id)->firstOrFail();
        return view('frontend.transaksi.success', compact('siswa'));
    }

    public function viewprint()
    {
        $user = Auth::user();
        $siswa = Siswa::where('user_id', '=', $user->id)->firstOrFail();
        
        return view('frontend.Datapages.vPrint', compact('siswa'));
    }

    public function print()
    {
        $user = Auth::user();
        $siswa = Siswa::where('user_id', '=', $user->id)->firstOrFail();
        $pdf = PDF::loadview('frontend.Datapages.print', compact('siswa'));
        return $pdf->stream();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'photo_bukti' => 'required|image|max:10000'
        ]);

        try {
            $photo_name = null;
            $user = Auth::user();

            if ($request->hasFile('photo_bukti')) {
				$path = public_path('dist/img/bukti_transfer');
				$files = $request->photo_bukti;
				
				$photo_name = time().'.'.$files->getClientOriginalExtension();
				$files->move($path, $photo_name);
            }
            $siswa = Siswa::where('user_id', '=', $user->id)->update([
                'transfer_status' => 'Sudah'
            ]);
            $transaksi = Transaksi::firstOrCreate([
                'user_id' => $user->id,
                'bukti_photo' => $photo_name
            ]);
            return redirect(route('already.index'));
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
