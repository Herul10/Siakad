@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 py-6">

    <div class="bg-white rounded-lg shadow p-6">

        <h1 class="text-2xl font-bold mb-6">
            Edit Mata Kuliah
        </h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block font-medium mb-2">
                    Kode Mata Kuliah
                </label>

                <input
                    type="text"
                    name="kode_mk"
                    value="{{ old('kode_mk', $matakuliah->kode_mk) }}"
                    class="w-full border rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-2">
                    Nama Mata Kuliah
                </label>

                <input
                    type="text"
                    name="nama_mk"
                    value="{{ old('nama_mk', $matakuliah->nama_mk) }}"
                    class="w-full border rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-2">
                    SKS
                </label>

                <input
                    type="number"
                    name="sks"
                    value="{{ old('sks', $matakuliah->sks) }}"
                    class="w-full border rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-2">
                    Semester
                </label>

                <input
                    type="number"
                    name="semester"
                    value="{{ old('semester', $matakuliah->semester) }}"
                    class="w-full border rounded px-3 py-2">
            </div>

            <div class="flex gap-2">

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded">
                    Update
                </button>

                <a
                    href="{{ route('matakuliah.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded">
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

@endsection