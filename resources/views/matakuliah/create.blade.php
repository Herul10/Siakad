@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah')

@section('content')
    <div class="mb-8">
        <a href="{{ route('matakuliah.index') }}"
            class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition flex items-center gap-2 mb-2">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar
        </a>

        <h2 class="text-2xl font-bold text-slate-800 tracking-tight">
            Tambah Mata Kuliah Baru
        </h2>

        <p class="text-sm text-slate-500">
            Silakan isi formulir di bawah ini dengan lengkap.
        </p>
    </div>

    <div class="max-w-2xl bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6">

        <form action="{{ route('matakuliah.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Kode Mata Kuliah
                </label>

                <input type="text"
                    name="kode_mk"
                    placeholder="Contoh: IF-102"
                    required
                    class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Nama Mata Kuliah
                </label>

                <input type="text"
                    name="nama_mk"
                    placeholder="Contoh: Pemrograman Web Berbasis Framework"
                    required
                    class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Jumlah SKS
                </label>

                <select name="sks"
                    required
                    class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition shadow-sm">

                    <option value="" disabled selected>Pilih SKS</option>
                    <option value="1">1 SKS</option>
                    <option value="2">2 SKS</option>
                    <option value="3">3 SKS</option>
                    <option value="4">4 SKS</option>
                </select>
            </div>

            <!-- TAMBAHAN SEMESTER -->
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">
                    Semester
                </label>

                <select name="semester"
                    required
                    class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition shadow-sm">

                    <option value="" disabled selected>Pilih Semester</option>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester 5</option>
                    <option value="6">Semester 6</option>
                    <option value="7">Semester 7</option>
                    <option value="8">Semester 8</option>
                </select>
            </div>

            <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
                <button type="reset"
                    class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-xl text-sm transition">
                    Reset
                </button>

                <button type="submit"
                    class="px-5 py-2.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium rounded-xl text-sm shadow-md transition">
                    <i class="fa-solid fa-floppy-disk mr-1"></i>
                    Simpan Data
                </button>
            </div>
        </form>

    </div>
@endsection