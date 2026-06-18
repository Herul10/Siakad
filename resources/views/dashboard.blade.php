@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="space-y-6">

    <div>
        <h1 class="text-3xl font-bold text-slate-800 tracking-tight">
            Dashboard Admin
        </h1>
        <p class="text-sm text-slate-500 mt-1">
            Selamat datang kembali di Sistem Informasi Akademik (SIAKAD).
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500">Total Mahasiswa</p>
                <h2 class="text-3xl font-bold text-blue-600 mt-1">
                    {{ $totalMahasiswa }}
                </h2>
            </div>
            <div class="p-3 bg-blue-50 text-blue-600 rounded-xl">
                <i class="fa-solid fa-user-graduate text-xl"></i>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500">Total Dosen</p>
                <h2 class="text-3xl font-bold text-emerald-600 mt-1">
                    {{ $totalDosen }}
                </h2>
            </div>
            <div class="p-3 bg-emerald-50 text-emerald-600 rounded-xl">
                <i class="fa-solid fa-chalkboard-user text-xl"></i>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500">Program Studi</p>
                <h2 class="text-3xl font-bold text-amber-500 mt-1">
                    {{ $totalProdi }}
                </h2>
            </div>
            <div class="p-3 bg-amber-50 text-amber-500 rounded-xl">
                <i class="fa-solid fa-building-columns text-xl"></i>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-500">Mata Kuliah</p>
                <h2 class="text-3xl font-bold text-rose-500 mt-1">
                    {{ $totalMataKuliah }}
                </h2>
            </div>
            <div class="p-3 bg-rose-50 text-rose-500 rounded-xl">
                <i class="fa-solid fa-book text-xl"></i>
            </div>
        </div>

    </div>

    <div class="bg-gradient-to-r from-indigo-900 to-slate-900 rounded-2xl shadow-md p-8 text-white">
        <h2 class="text-2xl font-bold mb-2 tracking-tight">
            Selamat Datang di SIAKAD Systems
        </h2>
        <p class="text-indigo-200 text-sm max-w-2xl leading-relaxed">
            Sistem Informasi Akademik membantu Anda dalam pengelolaan data mahasiswa,
            dosen, program studi, mata kuliah, nilai, hingga sistem absensi kampus secara terintegrasi.
        </p>
        <a href="{{ route('mahasiswa.index') }}"
           class="inline-flex items-center gap-2 mt-6 px-5 py-2.5 bg-white hover:bg-indigo-50 text-indigo-950 font-semibold rounded-xl text-sm transition duration-200 shadow-sm">
            <i class="fa-solid fa-arrow-right-to-bracket text-xs"></i> Kelola Mahasiswa
        </a>
    </div>

</div>
@endsection