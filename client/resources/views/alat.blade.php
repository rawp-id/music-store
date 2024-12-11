<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Alat Musik') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Tabel Alat Musik -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Jenis</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Merk</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Harga</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Stok</th>
                                    <th class="border border-gray-300 px-4 py-2 text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($alat as $item)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item['id'] }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item['nama'] }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item['jenis'] }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item['merk'] }}</td>
                                        <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $item['stok'] }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                Beli
                                            </button>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="border border-gray-300 px-4 py-2 text-center">Tidak ada data alat musik.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
