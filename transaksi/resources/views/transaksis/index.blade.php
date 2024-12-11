<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <a href="{{ route('transaksis.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Tambah Transaksi
                </a>
                <table class="table-auto w-full mt-4">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Kode Transaksi</th>
                            <th class="px-4 py-2">Tanggal</th>
                            <th class="px-4 py-2">Nama Barang</th>
                            <th class="px-4 py-2">Jumlah</th>
                            <th class="px-4 py-2">Total Harga</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksis as $transaksi)
                            <tr>
                                <td class="border px-4 py-2">{{ $transaksi->kode_transaksi }}</td>
                                <td class="border px-4 py-2">{{ $transaksi->tanggal_transaksi }}</td>
                                <td class="border px-4 py-2">{{ $transaksi->nama_barang }}</td>
                                <td class="border px-4 py-2">{{ $transaksi->jumlah_barang }}</td>
                                <td class="border px-4 py-2">{{ $transaksi->total_harga }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('transaksis.edit', $transaksi->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                    <form action="{{ route('transaksis.destroy', $transaksi->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
