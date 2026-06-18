@extends('layouts.app')

@section('title', 'Tambah Dosen')

@section('content')

<div class="max-w-3xl">

    <h1 class="text-3xl font-bold mb-6">
        Tambah Dosen
    </h1>

    <div class="bg-white p-6 rounded-2xl shadow">

        <form action="{{ route('dosen.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block mb-2">NIDN</label>
                <input type="text"
                       name="nidn"
                       class="w-full border rounded-lg p-3"
                       required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Nama Dosen</label>
                <input type="text"
                       name="nama"
                       class="w-full border rounded-lg p-3"
                       required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Email</label>
                <input type="email"
                       name="email"
                       class="w-full border rounded-lg p-3"
                       required>
            </div>

            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">
                Simpan
            </button>

            <a href="{{ route('dosen.index') }}"
               class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-3 rounded-lg">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection