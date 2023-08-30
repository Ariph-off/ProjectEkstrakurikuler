<?php

namespace App\Http\Controllers;

use App\Models\PelatihModel;
use Illuminate\Http\Request;
use DB;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatih = DB::table("pelatih")->get();
        $dataToView = [
            'pelatihs' => $pelatih
        ];

        return view('pages.pelatih.index', $dataToView);

        // $data = PelatihModel::all(); // Mengambil semua data dari tabel menggunakan model
        // return view('dashboard.index', ['data' => $data]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
