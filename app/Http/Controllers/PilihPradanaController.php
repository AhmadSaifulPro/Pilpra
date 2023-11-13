<?php

namespace App\Http\Controllers;

use App\Models\DewanAmbalan;
use App\Models\Pradana;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class PilihPradanaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pradana::all();
        return view('dewanambalan.pilihpradana', compact('data'));
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
        $jum_suara = Pradana::select('jumlah_suara')->where('id', $request->id_pradana)->value('jumlah_suara');

        $tol_jum = $jum_suara +1;

        $riwayat = new Riwayat();
        $riwayat->id_pradana = $request->id_pradana;
        $riwayat->nisn = auth()->guard('dewanambalan')->user()->nisn;
        $riwayat->save();

        Pradana::where('id', $request->id_pradana)->update([
            'jumlah_suara' => $tol_jum
        ]);

        return redirect()->route('pilihpradani.index');
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
