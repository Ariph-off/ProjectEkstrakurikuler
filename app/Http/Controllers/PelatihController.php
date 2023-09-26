<?php

namespace App\Http\Controllers;

use App\Models\Pelatih;
use Illuminate\Http\Request;
use DB;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $pelatih = Pelatih::where('nama_pelatih','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $pelatih = Pelatih::paginate(5);
        }
        // $pelatih = DB::table("pelatih")->get();
        // $dataToView = [
        //     'pelatihs' => $pelatih
        // ];

        // return view('pages.pelatih.index', $dataToView);

        // $pelatih = Pelatih::all(); // Mengambil semua data dari tabel menggunakan model
        return view('pages.pelatih.index', ['pelatih' => $pelatih]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pelatih.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pelatih' => 'required|unique:pelatih,nama_pelatih',
            'id_ekstra' => 'required',
            'no_hp' => 'required|unique:pelatih,no_hp',
            'alamat' => 'required',
        ]);


        $pelatih = new Pelatih();
        $pelatih->nama_pelatih = $validatedData['nama_pelatih'];
        $pelatih->id_ekstra = $validatedData['id_ekstra'];
        $pelatih->no_hp = $validatedData['no_hp'];
        $pelatih->alamat = $validatedData['alamat'];
        $pelatih->save();

        return redirect()->route('pelatih.index')->with('success', 'User has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelatih = Pelatih::find($id);
        return view('pages.pelatih.edit', ['pelatih' => $pelatih]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelatih $pelatih)
    {
        $validatedData = $request->validate([
            'nama_pelatih' => 'required',
            'id_ekstra' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        // Pelatih::whereservice($pelatih)->update($validatedData);
        $pelatih = Pelatih::find($pelatih->id);
        $pelatih->nama_pelatih = $request->nama_pelatih;
        $pelatih->id_ekstra = $request->id_ekstra;
        $pelatih->no_hp = $request->no_hp;
        $pelatih->alamat = $request->alamat;

        $pelatih->save();

        return redirect('/pelatih')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Pelatih $pelatih)
    {
        $pelatih->delete();

        return redirect('/pelatih')->with('success', 'User has been deleted!');
    }
}
