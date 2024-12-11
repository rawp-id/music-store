<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('transaksis.update', $transaksi->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="kode_transaksi" class="block text-sm font-medium text-gray-700">Kode Transaksi</label>
                        <input type="text" name="kode_transaksi" id="kode_transaksi"
                            value="{{ $transaksi->kode_transaksi }}"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="tanggal_transaksi" class="block text-sm font-medium text-gray-700">Tanggal
                            Transaksi</label>
                        <input type="date" name="tanggal_transaksi" id="tanggal_transaksi"
                            value="{{ $transaksi->tanggal_transaksi }}"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" value="{{ $transaksi->nama_barang }}"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="jumlah_barang" class="block text-sm font-medium text-gray-700">Jumlah Barang</label>
                        <input type="number" name="jumlah_barang" id="jumlah_barang"
                            value="{{ $transaksi->jumlah_barang }}"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="total_harga" class="block text-sm font-medium text-gray-700">Total Harga</label>
                        <input type="number" name="total_harga" id="total_harga" value="{{ $transaksi->total_harga }}"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
