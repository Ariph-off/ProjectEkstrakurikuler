<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
use DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $siswa = Siswa::where('nama_siswa','LIKE','%' .$request->search.'%')->get();
        }else{
            $siswa = Siswa::get();
        }

        return view('pages.siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.siswa.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_ekstra' => 'required|unique:siswa,id_ekstra',
            'nama_siswa' => 'required|unique:siswa,nama_siswa',
            'id_kelas' => 'required',
            'nisn' => 'required|unique:siswa,nisn',
            'no_hp' => 'required',
        ]);


        $siswa = new Siswa();
        $siswa->id_ekstra = $validatedData['id_ekstra'];
        $siswa->nama_siswa = $validatedData['nama_siswa'];
        $siswa->id_kelas = $validatedData['id_kelas'];
        $siswa->nisn = $validatedData['nisn'];
        $siswa->no_hp = $validatedData['no_hp'];
        $siswa->save();

        return redirect()->route('siswa.index')->with('success', 'User has been created!');
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
        $siswa = Siswa::find($id);
        return view('pages.siswa.edit', ['siswa' => $siswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required',
            'id_kelas' => 'required',
            'nisn' => 'required',
            'no_hp' => 'required',
            'id_ekstra' => 'required',
        ]);

        // Pelatih::whereservice($pelatih)->update($validatedData);
        $siswa = Siswa::find($siswa->id);
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->nisn = $request->nisn;
        $siswa->no_hp = $request->no_hp;
        $siswa->id_ekstra = $request->id_ekstra;

        $siswa->save();

        return redirect('/siswa')->with('success', 'User has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect('/siswa')->with('success', 'User has been deleted!');
    }
}
