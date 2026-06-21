@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')

<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-bold text-slate-800">
            Data Mahasiswa
        </h2>
        <p class="text-slate-500">
            Daftar seluruh mahasiswa yang terdaftar.
        </p>
    </div>

    <a href="{{ route('mahasiswa.create') }}"
        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl shadow">
        + Tambah Mahasiswa
    </a>
</div>

@if(session('success'))
<div class="mb-4 p-4 bg-green-100 text-green-700 rounded-xl">
    {{ session('success') }}
</div>
@endif

<!-- Search -->
<form method="GET" action="{{ route('mahasiswa.index') }}" class="mb-6">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Cari NIM atau Nama..."
        class="w-full md:w-80 px-4 py-2 border rounded-xl">
</form>

<!-- Table -->
<div class="bg-white rounded-2xl shadow border overflow-hidden">

    <table class="w-full">

        <thead class="bg-slate-100">
            <tr>
                <th class="p-3 text-left">No</th>
                <th class="p-3 text-left">NIM</th>
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Jenis Kelamin</th>
                <th class="p-3 text-left">Alamat</th>
                <th class="p-3 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse($mahasiswa as $mhs)

            <tr class="border-t">

                <td class="p-3">
                    {{ $loop->iteration }}
                </td>

                <td class="p-3">
                    {{ $mhs->nim }}
                </td>

                <td class="p-3">
                    {{ $mhs->nama }}
                </td>

                <td class="p-3">
                    {{ $mhs->jenis_kelamin }}
                </td>

                <td class="p-3">
                    {{ $mhs->alamat }}
                </td>

                <td class="p-3 text-center">

                    <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                        class="px-3 py-1 bg-yellow-500 text-white rounded-lg">
                        Edit
                    </a>

                    <form
                        action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                        method="POST"
                        class="inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Yakin ingin menghapus data ini?')"
                            class="px-3 py-1 bg-red-600 text-white rounded-lg">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>
                <td colspan="6" class="p-5 text-center text-gray-500">
                    Belum ada data mahasiswa.
                </td>
            </tr>

            @endforelse

        </tbody>

    </table>

</div>

<!-- Pagination -->
<div class="mt-6">
    {{ $mahasiswa->links() }}
</div>

@endsection