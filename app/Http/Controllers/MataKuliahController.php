<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $mataKuliah = MataKuliah::when($search, function ($query) use ($search) {
            $query->where('kode_mk', 'like', "%{$search}%")
                  ->orWhere('nama_mk', 'like', "%{$search}%");
        })->paginate(10);

        return view('matakuliah.index', compact('mataKuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk'  => 'required',
            'nama_mk'  => 'required',
            'sks'      => 'required',
            'semester' => 'required',
        ]);

        MataKuliah::create([
            'kode_mk'  => $request->kode_mk,
            'nama_mk'  => $request->nama_mk,
            'sks'      => $request->sks,
            'semester' => $request->semester,
        ]);

        return redirect()
            ->route('matakuliah.index')
            ->with('success', 'Data Mata Kuliah berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        return view('matakuliah.edit', compact('mataKuliah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_mk'  => 'required',
            'nama_mk'  => 'required',
            'sks'      => 'required',
            'semester' => 'required',
        ]);

        $mataKuliah = MataKuliah::findOrFail($id);

        $mataKuliah->update([
            'kode_mk'  => $request->kode_mk,
            'nama_mk'  => $request->nama_mk,
            'sks'      => $request->sks,
            'semester' => $request->semester,
        ]);

        return redirect()
            ->route('matakuliah.index')
            ->with('success', 'Data Mata Kuliah berhasil diubah');
    }

    public function destroy($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        $mataKuliah->delete();

        return redirect()
            ->route('matakuliah.index')
            ->with('success', 'Data Mata Kuliah berhasil dihapus');
    }
}