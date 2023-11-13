<?php

namespace App\Http\Controllers;

use App\Models\Pradana;
use App\Models\Pradani;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Riwayat::all();
        return view('riwayat.index', compact('data'));

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

    public function hasil(){
        $pradana = Pradana::orderBy('jumlah_suara','DESC')->limit('1')->get();
        $pradani = Pradani::orderBy('jumlah_suara','DESC')->limit('1')->get();
        return view('hasil', compact('pradana','pradani'));
    }
}
