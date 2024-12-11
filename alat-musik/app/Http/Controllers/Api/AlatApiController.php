<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alat;
use Illuminate\Http\Request;

class AlatApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alats = Alat::all();
        return response()->json(["data" => $alats], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'nullable|string',
            'jenis' => 'nullable|string',
            'merk' => 'nullable|string',
            'harga' => 'nullable|numeric',
            'stok' => 'nullable|numeric',
        ]);

        $alat = Alat::create($request->all());

        return response()->json([
            'message' => 'Alat berhasil ditambahkan.',
            'data' => $alat
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Alat $alat)
    {
        return response()->json(["data" => $alat], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alat $alat)
    {
        $request->validate([
            'nama' => 'nullable|string',
            'jenis' => 'nullable|string',
            'merk' => 'nullable|string',
            'harga' => 'nullable|numeric',
            'stok' => 'nullable|numeric',
        ]);

        $alat->update($request->all());

        return response()->json([
            'message' => 'Alat berhasil diperbarui.',
            'data' => $alat
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alat $alat)
    {
        $alat->delete();

        return response()->json([
            'message' => 'Alat berhasil dihapus.'
        ], 200);
    }
}
