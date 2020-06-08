<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use App\Siswa;
use App\User;
use Auth;

class BerkasController extends Controller
{
    public function index()
    {
        $provinces = Province::pluck('name', 'id');
        return view('frontend.users.upload', compact('provinces'));
    }

    public function city(Request $request)
    {
        $cities = City::where('province_id', $request->get('id'))->pluck('name', 'id');
        return response()->json($cities);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required|numeric|unique:siswas,nik',
            'name' => 'required|string',
            'provinces' => 'required|string',
            'city' => 'required|string',
            'tempat_lahir' => 'required|string',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'post_code' => 'required|numeric',
            'berkas' => 'required|max:7000',
            'photo' => 'required|image|max:10000',
        ]);
        // dd($request->all());
        
        try {
            $user = Auth::user();
            $photo_name = null;
            $berkas_name = null;

            if ($request->hasFile('photo')) {
				$path = public_path('dist/img/users');
				$files = $request->photo;
				
				$photo_name = time().'.'.$files->getClientOriginalExtension();
				$files->move($path, $photo_name);
            }

            if ($request->hasFile('berkas')) {
				$path = public_path('berkas');
				$files = $request->berkas;
				
				$berkas_name = time().'.'.$files->getClientOriginalExtension();
				$files->move($path, $berkas_name);
            }
            $siswa = Siswa::firstOrCreate([
                'user_id' => $user->id,
                'nik' => $request->nik,
                'name' => $request->name,
                'province' => $request->provinces,
                'city' => $request->city,
                'tempat_lahir' => $request->tempat_lahir,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'address' => $request->address,
                'post_code' => $request->post_code,
                'berkas' => $berkas_name,
                'photo' => $photo_name,
                'bank' => null,
                'transfer_status' => 'Belum',
                'payment_status' => 'Belum'
            ]);
            return redirect(route('transaction.index'));
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
