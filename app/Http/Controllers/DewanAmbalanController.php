<?php

namespace App\Http\Controllers;

use App\Models\DewanAmbalan;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class DewanAmbalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DewanAmbalan::all();
        return view('dewanambalan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dewanambalan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'password' => 'required'
        ]);

        $data = new DewanAmbalan();
        $data->nisn = $request->nisn;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('dewanambalan.index');
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
        $data = DewanAmbalan::FindOrFail($id);
        return view('dewanambalan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = DewanAmbalan::FindOrFail($id);
        $data->nisn = $request->nisn;
        $data->seve();

        return redirect()->route('dewanambalan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DewanAmbalan::FindOrFail($id)->delete();
        return redirect()->route('dewanambalan.index');
    }
}
