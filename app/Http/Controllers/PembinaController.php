<?php

namespace App\Http\Controllers;
use App\Models\Pembina;
use App\Models\Ekstra;

use Illuminate\Http\Request;
use DB;


class PembinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $pembina = Pembina::where('nama_pembina','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $pembina = Pembina::paginate(5);
        }
        
        return view('pages.pembina.index', ['pembina' => $pembina]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ekstra = Ekstra::get();

        return view('pages.pembina.create', ['ekstra' => $ekstra]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pembina' => 'required|unique:pembina,nama_pembina',
            'id_ekstra' => 'required',
            'no_hp' => 'required|unique:pembina,no_hp',
            'alamat' => 'required',
        ]);
     

        $pembina = new Pembina();
        $pembina->nama_pembina = $validatedData['nama_pembina'];
        $pembina->id_ekstra = $validatedData['id_ekstra'];
        $pembina->no_hp = $validatedData['no_hp'];
        $pembina->alamat = $validatedData['alamat'];
        $pembina->save();

        return redirect()->route('pembina.index')->with('success', 'User has been created!');
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
        $pembina = Pembina::find($id);
        return view('pages.pembina.edit', ['pembina' => $pembina]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembina $pembina)
    {
        $validatedData = $request->validate([
            'nama_pembina' => 'required',
            'id_ekstra' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        // Pelatih::whereservice($pelatih)->update($validatedData);
        $pembina = Pembina::find($pembina->id);
        $pembina->nama_pembina = $request->nama_pembina;
        $pembina->id_ekstra = $request->id_ekstra;
        $pembina->no_hp = $request->no_hp;
        $pembina->alamat = $request->alamat;
        
        $pembina->save();

        return redirect('/pembina')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembina $pembina)
    {
        $pembina->delete();

        return redirect('/pembina')->with('success', 'User has been deleted!');
    }
}
