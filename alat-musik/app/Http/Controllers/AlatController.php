<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alats = Alat::all();
        return view('alats.index', compact('alats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'nullable',
            'jenis' => 'nullable',
            'merk' => 'nullable',
            'harga' => 'nullable|numeric',
            'stok' => 'nullable|numeric',
        ]);

        Alat::create($request->all());

        return redirect()->route('alats.index')->with('success', 'Alat berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alat $alat)
    {
        return view('alats.edit', compact('alat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alat $alat)
    {
        $request->validate([
            'nama' => 'nullable',
            'jenis' => 'nullable',
            'merk' => 'nullable',
            'harga' => 'nullable|numeric',
            'stok' => 'nullable|numeric',
        ]);

        $alat->update($request->all());

        return redirect()->route('alats.index')->with('success', 'Alat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alat $alat)
    {
        $alat->delete();

        return redirect()->route('alats.index')->with('success', 'Alat berhasil dihapus.');
    }
}