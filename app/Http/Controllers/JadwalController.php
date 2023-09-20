<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use DB;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $jadwal = Jadwal::where('hari','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $jadwal = Jadwal::paginate(5);
        }
        
        return view('pages.jadwal.index', ['jadwal' => $jadwal]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.jadwal.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'hari' => 'required',
            'tanggal' => 'required',
            'jam' => 'required'

        ]);
     

        $jadwal = new Jadwal();
        $jadwal->hari = $validatedData['hari'];
        $jadwal->tanggal = $validatedData['tanggal'];
        $jadwal->tanggal = $validatedData['jam'];

        $jadwal->save();

        return redirect()->route('jadwal.index')->with('success', 'User has been created!');
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
    public function destroy(string $id)
    {
        //
    }
}
