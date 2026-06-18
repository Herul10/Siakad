@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <div class="mb-8">
        <a href="{{ route('mahasiswa.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition flex items-center gap-2 mb-2">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Daftar
        </a>
        <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Tambah Mahasiswa Baru</h2>
        <p class="text-sm text-slate-500">Masukkan data diri mahasiswa dengan benar.</p>
    </div>

    <div class="max-w-2xl bg-white rounded-2xl shadow-sm border border-slate-200/80 p-6">
        <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Nomor Induk Mahasiswa (NIM)</label>
                <input type="text" name="nim" placeholder="Contoh: 220102034" required
                    class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Contoh: Ahmad Fauzi" required
                    class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition shadow-sm">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Jurusan / Program Studi</label>
                <input type="text" name="jurusan" placeholder="Contoh: Teknik Informatika" required
                    class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition shadow-sm">
            </div>

            <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
                <button type="reset" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-xl text-sm transition">
                    Reset
                </button>
                <button type="submit" class="px-5 py-2.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium rounded-xl text-sm shadow-md transition">
                    <i class="fa-solid fa-floppy-disk mr-1"></i> Simpan Data
                </button>
            </div>
        </form>
    </div>
@endsection