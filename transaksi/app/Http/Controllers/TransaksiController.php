<?php

namespace App\Http\Controllers;

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
        return view('transaksis.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_transaksi' => 'nullable',
            'tanggal_transaksi' => 'nullable|date',
            'id_barang' => 'nullable',
            'nama_barang' => 'nullable',
            'jumlah_barang' => 'nullable|numeric',
            'total_harga' => 'nullable|numeric',
            'id_pembeli' => 'nullable',
            'nama_pembeli' => 'nullable',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        return view('transaksis.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'kode_transaksi' => 'nullable',
            'tanggal_transaksi' => 'nullable|date',
            'id_barang' => 'nullable',
            'nama_barang' => 'nullable',
            'jumlah_barang' => 'nullable|numeric',
            'total_harga' => 'nullable|numeric',
            'id_pembeli' => 'nullable',
            'nama_pembeli' => 'nullable',
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksis.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
