<?php

namespace App\Http\Controllers;

use App\Models\Pradani;
use App\Models\Riwayat;
use App\Models\Riwayat_pradani;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PilihPradaniConrtroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pradani::all();
        return view('dewanambalan.pilihpradani', compact('data'));
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
        $jum_suara = Pradani::select('jumlah_suara')->where('id', $request->id_pradani)->value('jumlah_suara');

        $tol_jum = $jum_suara +1;

        $riwayat = new Riwayat_pradani();
        $riwayat->id_pradani = $request->id_pradani;
        $riwayat->nisn = auth()->guard('dewanambalan')->user()->nisn;
        $riwayat->save();

        Pradani::where('id', $request->id_pradani)->update([
            'jumlah_suara' => $tol_jum
        ]);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('logindewan');
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
