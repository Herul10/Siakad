@extends('layouts.app')

@section('title', 'Tambah Program Studi')

@section('content')

<div class="max-w-3xl">

    <h1 class="text-3xl font-bold mb-6">
        Tambah Program Studi
    </h1>

    <div class="bg-white p-6 rounded-xl shadow">

        <form action="{{ route('prodi.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block mb-2">
                    Fakultas ID
                </label>

                <input
                    type="number"
                    name="fakultas_id"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">
                    Kode Program Studi
                </label>

                <input
                    type="text"
                    name="kode"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">
                    Nama Program Studi
                </label>

                <input
                    type="text"
                    name="nama_prodi"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <button
                type="submit"
                class="bg-blue-600 text-white px-5 py-3 rounded-lg">
                Simpan
            </button>

            <a href="{{ route('prodi.index') }}"
               class="bg-gray-500 text-white px-5 py-3 rounded-lg">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection