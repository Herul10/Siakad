@extends('layouts.app')

@section('title', 'Data Mata Kuliah')

@section('content')
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Data Mata Kuliah</h2>
            <p class="text-sm text-slate-500">Kelola seluruh daftar mata kuliah aktif di sini.</p>
        </div>
        <a href="{{ route('matakuliah.create') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-medium px-5 py-2.5 rounded-xl shadow-md hover:shadow-lg transition duration-200">
            <i class="fa-solid fa-plus text-sm"></i> Tambah Mata Kuliah
        </a>
    </div>

    <div class="mb-6 max-w-xs relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
            <i class="fa-solid fa-magnifying-glass text-sm"></i>
        </span>
        <input type="text" placeholder="Cari Mata Kuliah..." class="w-full pl-10 pr-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition shadow-sm" />
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200/80 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-indigo-50 text-indigo-900 border-b border-slate-200">
                    <th class="px-6 py-4 font-semibold text-sm w-16 text-center">No</th>
                    <th class="px-6 py-4 font-semibold text-sm">Kode MK</th>
                    <th class="px-6 py-4 font-semibold text-sm">Nama Mata Kuliah</th>
                    <th class="px-6 py-4 font-semibold text-sm w-32">SKS</th>
                    <th class="px-6 py-4 font-semibold text-sm w-36 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-slate-400">
                        <div class="flex flex-col items-center justify-center space-y-2">
                            <i class="fa-regular fa-folder-open text-4xl text-slate-300"></i>
                            <p class="font-medium">Belum ada data mata kuliah</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection