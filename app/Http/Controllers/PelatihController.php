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
    public function index()
    {
        // $pelatih = DB::table("pelatih")->get();
        // $dataToView = [
        //     'pelatihs' => $pelatih
        // ];

        // return view('pages.pelatih.index', $dataToView);

        $pelatih = Pelatih::all(); // Mengambil semua data dari tabel menggunakan model
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
            'nama_pelatih' => 'required',
            'id_ekstra' => 'required',
            'no_ho' => 'required',
            'alamat' => 'required',
        ]);
     

        $pelatih = new Pelatih();
        $pelatih->nama_pelatih = $validatedData['nama_pelatih'];
        $pelatih->id_ekstra = $validatedData['id_ekstra'];
        $pelatih->no_ho = $validatedData['no_ho'];
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
            'no_ho' => 'required',
            'alamat' => 'required',
        ]);

        Pelatih::whereservice($pelatih)->update($validatedData);
        $pelatih = Pelatih::find($pelatih->id);
        $pelatih->nama_pelatih = $request->nama_pelatih;
        $pelatih->id_ekstra = $request->id_ekstra;
        $pelatih->no_ho = $request->no_ho;
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
