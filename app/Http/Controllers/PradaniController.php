<?php

namespace App\Http\Controllers;

use App\Models\Pradani;
use Illuminate\Http\Request;

class PradaniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pradani::all();
        return view('pradani.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pradani.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'foto' => 'required'
        ]);

        if ($request->file('foto')) {
            $img = $request->file('foto');
            $foto = time() . '-' . $img->getClientOriginalName();
            $lokasi = 'img';
            $img->move($lokasi, $foto);
        }

        $data = new Pradani();
        $data->nama  = $request->nama;
        $data->kelas = $request->kelas;
        $data->foto = $foto;
        $data->jumlah_suara = 0;
        $data->save();

        return redirect()->route('pradani.index')->with('success', ' Data Berhasil di Tambah');
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
        $data = Pradani::FindOrFail($id);
        return view('pradani.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'foto' => 'required'
        ]);

        $data = Pradani::FindOrfail($id);
        if ($request->file('foto')) {
            $img = $request->file('foto');
            $foto = time() . '-' . $img->getClientOriginalName();
            $lokasi = 'img';
            $img->move($foto, $lokasi);
        } else {

            $data->nama = $request->nama;
            $data->kelas = $request->kelas;
        }

        return redirect()->route('pradani.index')->with('success', ' Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pradani::FindOrfail($id)->delete();
        return redirect()->route('pradani.index')->with('success','Data Berhasil DI Hapus');
    }
}
