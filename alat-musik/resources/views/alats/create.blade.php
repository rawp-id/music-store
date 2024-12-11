<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Alat Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('alats.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="jenis" class="block text-sm font-medium text-gray-700">Jenis</label>
                        <input type="text" name="jenis" id="jenis"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="merk" class="block text-sm font-medium text-gray-700">Merk</label>
                        <input type="text" name="merk" id="merk"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                        <input type="number" name="harga" id="harga"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <div class="mb-4">
                        <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
                        <input type="number" name="stok" id="stok"
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
