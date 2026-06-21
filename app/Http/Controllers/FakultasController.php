<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $fakultas = Fakultas::when($search, function ($query) use ($search) {
            $query->where('kode_fakultas', 'like', "%{$search}%")
                  ->orWhere('nama_fakultas', 'like', "%{$search}%");
        })->paginate(10);

        return view('fakultas.index', compact('fakultas'));
    }

    public function create()
    {
        return view('fakultas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_fakultas' => 'required',
            'nama_fakultas' => 'required',
        ]);

        Fakultas::create([
            'kode_fakultas' => $request->kode_fakultas,
            'nama_fakultas' => $request->nama_fakultas,
        ]);

        return redirect()
            ->route('fakultas.index')
            ->with('success', 'Data Fakultas berhasil ditambahkan');
    }

    public function edit(Fakultas $fakulta)
    {
        return view('fakultas.edit', [
            'fakultas' => $fakulta
        ]);
    }

    public function update(Request $request, Fakultas $fakulta)
    {
        $request->validate([
            'kode_fakultas' => 'required',
            'nama_fakultas' => 'required',
        ]);

        $fakulta->update([
            'kode_fakultas' => $request->kode_fakultas,
            'nama_fakultas' => $request->nama_fakultas,
        ]);

        return redirect()
            ->route('fakultas.index')
            ->with('success', 'Data Fakultas berhasil diubah');
    }

    public function destroy(Fakultas $fakulta)
    {
        $fakulta->delete();

        return redirect()
            ->route('fakultas.index')
            ->with('success', 'Data Fakultas berhasil dihapus');
    }
}