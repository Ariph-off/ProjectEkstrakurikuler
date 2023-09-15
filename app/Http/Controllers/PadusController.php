<?php

namespace App\Http\Controllers;

use App\Models\Pelatih;
use Illuminate\Http\Request;
use DB;
class PadusControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $padus = Padus::where('nama_siswa','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $padus = sis::paginate(5);
        }
        // $pelatih = DB::table("pelatih")->get();
        // $dataToView = [
        //     'pelatihs' => $pelatih
        // ];

        // return view('pages.pelatih.index', $dataToView);

        // $pelatih = Pelatih::all(); // Mengambil semua data dari tabel menggunakan model
        return view('pages.paduansuara.index', ['siswa' => $padus]);
    }
}