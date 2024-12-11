<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi')->nullable();
            $table->string('tanggal_transaksi')->nullable();
            $table->string('id_barang')->nullable();
            $table->string('nama_barang')->nullable();
            $table->integer('jumlah_barang')->nullable();
            $table->integer('total_harga')->nullable();
            $table->string('id_pembeli')->nullable();
            $table->string('nama_pembeli')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
