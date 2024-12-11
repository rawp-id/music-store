<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::all();
        return response()->json(['data' => $transaksis], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_transaksi' => 'nullable',
            'tanggal_transaksi' => 'nullable|date',
            'id_barang' => 'nullable',
            'nama_barang' => 'nullable',
            'jumlah_barang' => 'nullable|numeric',
            'total_harga' => 'nullable|numeric',
            'id_pembeli' => 'nullable',
            'nama_pembeli' => 'nullable',
        ]);

        $transaksi = Transaksi::create($validatedData);

        return response()->json(['message' => 'Transaksi berhasil ditambahkan.', 'data' => $transaksi], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        return response()->json(['data' => $transaksi], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $validatedData = $request->validate([
            'kode_transaksi' => 'nullable',
            'tanggal_transaksi' => 'nullable|date',
            'id_barang' => 'nullable',
            'nama_barang' => 'nullable',
            'jumlah_barang' => 'nullable|numeric',
            'total_harga' => 'nullable|numeric',
            'id_pembeli' => 'nullable',
            'nama_pembeli' => 'nullable',
        ]);

        $transaksi->update($validatedData);

        return response()->json(['message' => 'Transaksi berhasil diperbarui.', 'data' => $transaksi], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return response()->json(['message' => 'Transaksi berhasil dihapus.'], 200);
    }
}
