<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

use Illuminate\Http\Request;
use DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        if($request->has('search')){
            $kategori = Kategori::where('nama_kategori','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $kategori = Kategori::paginate(5);
        }
        
        return view('pages.kategori.index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kategori.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kategori' => 'required|unique:kategori,nama_kategori',
            'keterangan' => 'required',
        ]);
     

        $kategori = new Kategori();
        $kategori->nama_kategori = $validatedData['nama_kategori'];
        $kategori->keterangan = $validatedData['keterangan'];
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'User has been created!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect('/ekstra')->with('success', 'User has been deleted!');
    }
}
