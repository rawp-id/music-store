<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Alat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <a href="{{ route('alats.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Tambah Alat
                </a>
                <table class="table-auto w-full mt-4">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Jenis</th>
                            <th class="px-4 py-2">Merk</th>
                            <th class="px-4 py-2">Harga</th>
                            <th class="px-4 py-2">Stok</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alats as $alat)
                        <tr>
                            <td class="border px-4 py-2">{{ $alat->nama }}</td>
                            <td class="border px-4 py-2">{{ $alat->jenis }}</td>
                            <td class="border px-4 py-2">{{ $alat->merk }}</td>
                            <td class="border px-4 py-2">{{ $alat->harga }}</td>
                            <td class="border px-4 py-2">{{ $alat->stok }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('alats.edit', $alat->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                                <form action="{{ route('alats.destroy', $alat->id) }}" method="POST" class="inline">
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
