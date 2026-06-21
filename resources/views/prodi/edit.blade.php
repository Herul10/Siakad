@extends('layouts.app')

@section('title', 'Edit Program Studi')

@section('content')

<div class="max-w-3xl">

    <h1 class="text-3xl font-bold mb-6">
        Edit Program Studi
    </h1>

    <div class="bg-white p-6 rounded-xl shadow">

        <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="fakultas_id" value="{{ $prodi->fakultas_id }}">

            <div class="mb-4">
                <label class="block mb-2">
                    Kode Program Studi
                </label>

                <input
                    type="text"
                    name="kode"
                    value="{{ $prodi->kode }}"
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
                    value="{{ $prodi->nama_prodi }}"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <button
                type="submit"
                class="bg-yellow-500 text-white px-5 py-3 rounded-lg">
                Update
            </button>

            <a href="{{ route('prodi.index') }}"
               class="bg-gray-500 text-white px-5 py-3 rounded-lg">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection