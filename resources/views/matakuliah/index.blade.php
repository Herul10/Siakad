@extends('layouts.app')

@section('title', 'Data Mata Kuliah')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Data Mata Kuliah</h2>

    <a href="{{ route('matakuliah.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded">
        Tambah Mata Kuliah
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white shadow rounded-lg overflow-hidden">

    <table class="w-full border-collapse">

        <thead>
            <tr class="bg-gray-100">
                <th class="border p-3">No</th>
                <th class="border p-3">Kode MK</th>
                <th class="border p-3">Nama Mata Kuliah</th>
                <th class="border p-3">SKS</th>
                <th class="border p-3">Semester</th>
                <th class="border p-3">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($mataKuliah as $item)

            <tr>
                <td class="border p-3 text-center">
                    {{ $loop->iteration }}
                </td>

                <td class="border p-3">
                    {{ $item->kode_mk }}
                </td>

                <td class="border p-3">
                    {{ $item->nama_mk }}
                </td>

                <td class="border p-3">
                    {{ $item->sks }}
                </td>

                <td class="border p-3">
                    {{ $item->semester }}
                </td>

                <td class="border p-3">

                    <div class="flex gap-2">

                        <a href="{{ route('matakuliah.edit', $item->id) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded">
                            Edit
                        </a>

                        <form action="{{ route('matakuliah.destroy', $item->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')"
                                    class="bg-red-600 text-white px-3 py-1 rounded">
                                Hapus
                            </button>

                        </form>

                    </div>

                </td>
            </tr>

        @empty

            <tr>
                <td colspan="6" class="text-center p-5">
                    Belum ada data mata kuliah
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="mt-4">
    {{ $mataKuliah->links() }}
</div>

@endsection