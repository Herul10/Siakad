@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')

<div class="max-w-3xl">

    <h1 class="text-3xl font-bold mb-6">
        Edit Mahasiswa
    </h1>

    <div class="bg-white p-6 rounded-xl shadow">

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-2">
                    NIM
                </label>

                <input
                    type="text"
                    name="nim"
                    value="{{ old('nim', $mahasiswa->nim) }}"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">
                    Nama Mahasiswa
                </label>

                <input
                    type="text"
                    name="nama"
                    value="{{ old('nama', $mahasiswa->nama) }}"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email', $mahasiswa->email) }}"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div class="flex gap-2">
                <button
                    type="submit"
                    class="bg-yellow-500 text-white px-5 py-3 rounded-lg">
                    Update
                </button>

                <a href="{{ route('mahasiswa.index') }}"
                   class="bg-gray-500 text-white px-5 py-3 rounded-lg">
                    Kembali
                </a>
            </div>

        </form>

    </div>

</div>

@endsection