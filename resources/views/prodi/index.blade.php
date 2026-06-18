@extends('layouts.app')

@section('title', 'Program Studi')

@section('content')

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">
        Data Program Studi
    </h1>

    <a href="{{ route('prodi.create') }}"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">
        + Tambah Program Studi
    </a>
</div>

@if(session('success'))
<div class="bg-green-100 border border-green-300 text-green-700 p-4 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">Kode Prodi</th>
                <th class="p-3 text-left">Nama Program Studi</th>
                <th class="p-3 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($prodi as $item)

            <tr class="border-t">
                <td class="p-3">{{ $loop->iteration }}</td>
                <td class="p-3">{{ $item->kode_prodi }}</td>
                <td class="p-3">{{ $item->nama_prodi }}</td>

                <td class="p-3 text-center">

                    <a href="{{ route('prodi.edit',$item->id) }}"
                       class="bg-yellow-500 text-white px-3 py-1 rounded">
                        Edit
                    </a>

                    <form action="{{ route('prodi.destroy',$item->id) }}"
                          method="POST"
                          class="inline">
                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Yakin?')"
                            class="bg-red-600 text-white px-3 py-1 rounded">
                            Hapus
                        </button>
                    </form>

                </td>
            </tr>

        @empty

            <tr>
                <td colspan="4" class="text-center p-6">
                    Belum ada data Program Studi
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection