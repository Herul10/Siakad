@extends('layouts.app')

@section('title', 'Data Dosen')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-4xl font-bold text-slate-800">
            Data Dosen
        </h1>

        <p class="text-slate-500">
            Kelola seluruh data dosen aktif di sini.
        </p>
    </div>

    <a href="{{ route('dosen.create') }}"
       class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-6 py-3 rounded-2xl shadow-lg">

        <i class="fa-solid fa-plus mr-2"></i>
        Tambah Dosen

    </a>

</div>

@if(session('success'))
<div class="bg-green-100 border border-green-300 text-green-700 p-4 rounded-xl mb-6">
    {{ session('success') }}
</div>
@endif

<!-- Search -->
<div class="bg-white rounded-2xl shadow p-4 mb-6">

    <form method="GET" action="{{ route('dosen.index') }}">

        <div class="relative">

            <i class="fa-solid fa-magnifying-glass absolute left-4 top-4 text-gray-400"></i>

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari NIDN atau Nama Dosen..."
                class="w-full border border-gray-200 rounded-xl pl-12 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">

        </div>

    </form>

</div>

<!-- Table -->
<div class="bg-white rounded-2xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-slate-100">
            <tr>
                <th class="p-4 text-left">No</th>
                <th class="p-4 text-left">NIDN</th>
                <th class="p-4 text-left">Nama Dosen</th>
                <th class="p-4 text-left">Email</th>
                <th class="p-4 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($dosen as $item)

            <tr class="border-t hover:bg-slate-50">

                <td class="p-4">
                    {{ $loop->iteration }}
                </td>

                <td class="p-4 font-medium">
                    {{ $item->nidn }}
                </td>

                <td class="p-4">
                    {{ $item->nama }}
                </td>

                <td class="p-4">
                    {{ $item->email }}
                </td>

                <td class="p-4 text-center">

                    <a href="{{ route('dosen.edit', $item->id) }}"
                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-lg">

                        <i class="fa-solid fa-pen-to-square"></i>

                    </a>

                    <form action="{{ route('dosen.destroy', $item->id) }}"
                          method="POST"
                          class="inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Yakin ingin menghapus data dosen?')"
                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded-lg">

                            <i class="fa-solid fa-trash"></i>

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="5" class="py-16 text-center text-gray-400">

                    <i class="fa-solid fa-user-group text-5xl mb-4 block"></i>

                    Belum ada data dosen

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

<div class="mt-6">
    {{ $dosen->links() }}
</div>

@endsection