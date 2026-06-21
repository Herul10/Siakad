@extends('layouts.app')

@section('title', 'Edit Dosen')

@section('content')

<div class="max-w-3xl">

    <h1 class="text-3xl font-bold mb-6">
        Edit Dosen
    </h1>

    <div class="bg-white p-6 rounded-xl shadow">

        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-2">
                    NIDN
                </label>

                <input
                    type="text"
                    name="nidn"
                    value="{{ old('nidn', $dosen->nidn) }}"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">
                    Nama Dosen
                </label>

                <input
                    type="text"
                    name="nama"
                    value="{{ old('nama', $dosen->nama) }}"
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
                    value="{{ old('email', $dosen->email) }}"
                    class="w-full border rounded-lg p-3"
                    required>
            </div>

            <div class="flex gap-2">
                <button
                    type="submit"
                    class="bg-yellow-500 text-white px-5 py-3 rounded-lg">
                    Update
                </button>

                <a href="{{ route('dosen.index') }}"
                   class="bg-gray-500 text-white px-5 py-3 rounded-lg">
                    Kembali
                </a>
            </div>

        </form>

    </div>

</div>

@endsection