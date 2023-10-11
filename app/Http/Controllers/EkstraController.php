<?php

namespace App\Http\Controllers;
use App\Models\Ekstra;
use Illuminate\Http\Request;
use DB;

class EkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $ekstra = Ekstra::where('nama_ekstra','LIKE','%' .$request->search.'%')->get();
        }else{
            $ekstra = Ekstra::get();
        }
        // $pelatih = DB::table("pelatih")->get();
        // $dataToView = [
        //     'pelatihs' => $pelatih
        // ];

        // return view('pages.pelatih.index', $dataToView);

        // $pelatih = Pelatih::all(); // Mengambil semua data dari tabel menggunakan model
        return view('pages.ekstra.index', ['ekstra' => $ekstra]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.ekstra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_ekstra' => 'required|unique:ekstra,nama_ekstra',
            'id_kategori' => 'required',
        ]);


        $ekstra = new Ekstra();
        $ekstra->nama_ekstra = $validatedData['nama_ekstra'];
        $ekstra->id_kategori = $validatedData['id_kategori'];
        $ekstra->save();

        return redirect()->route('ekstra.index')->with('success', 'User has been created!');
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
        $ekstra = Ekstra::find($id);
        return view('pages.ekstra.edit', ['ekstra' => $ekstra]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ekstra $ekstra)
    {
        $validatedData = $request->validate([
            'nama_ekstra' => 'required',
            'id_kategori' => 'required',

        ]);

        // Pelatih::whereservice($pelatih)->update($validatedData);
        $ekstra = Ekstra::find($ekstra->id);
        $ekstra->nama_ekstra = $request->nama_ekstra;
        $ekstra->id_kategori = $request->id_kategori;

        $ekstra->save();

        return redirect('/ekstra')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ekstra $ekstra)
    {
        $ekstra->delete();

        return redirect('/ekstra')->with('success', 'User has been deleted!');
    }
}
