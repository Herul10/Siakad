<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $prodi = Prodi::when($search, function ($query) use ($search) {
            $query->where('kode_prodi', 'like', "%$search%")
                  ->orWhere('nama_prodi', 'like', "%$search%");
        })->paginate(10);

        return view('prodi.index', compact('prodi'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_prodi' => 'required',
            'nama_prodi' => 'required',
        ]);

        Prodi::create($request->all());

        return redirect()
            ->route('prodi.index')
            ->with('success', 'Data Prodi berhasil ditambahkan');
    }

    public function edit(Prodi $prodi)
    {
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, Prodi $prodi)
    {
        $prodi->update($request->all());

        return redirect()
            ->route('prodi.index')
            ->with('success', 'Data Prodi berhasil diubah');
    }

    public function destroy(Prodi $prodi)
    {
        $prodi->delete();

        return redirect()
            ->route('prodi.index')
            ->with('success', 'Data Prodi berhasil dihapus');
    }
}