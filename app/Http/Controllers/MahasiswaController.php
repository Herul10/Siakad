<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $mahasiswa = Mahasiswa::when($search,function($q) use($search){
            $q->where('nama','like',"%$search%")
              ->orWhere('nim','like',"%$search%");
        })->paginate(10);

        return view('mahasiswa.index',compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nim' => 'required|unique:mahasiswa,nim',
        'nama' => 'required',
        'jenis_kelamin' => 'required', // <-- Tambahkan baris keamanan ini
        'jurusan' => 'required'
    ]);

    \App\Models\Mahasiswa::create($request->all());

    return redirect()
        ->route('mahasiswa.index')
        ->with('success', 'Data Mahasiswa berhasil ditambahkan');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index');
    }
}