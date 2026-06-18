<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $dosen = Dosen::when($search, function ($query) use ($search) {
            $query->where('nama', 'like', "%$search%")
                  ->orWhere('nidn', 'like', "%$search%");
        })->paginate(10);

        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'nidn' => 'required',
        'nama' => 'required',
        'email' => 'required'
    ]);

    Dosen::create([
        'nidn' => $request->nidn,
        'nama' => $request->nama,
        'email' => $request->email,
        'user_id' => auth()->id(),
    ]);

    return redirect()->route('dosen.index')
        ->with('success','Data dosen berhasil ditambahkan');
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $dosen->update($request->all());

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data dosen berhasil diubah');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()
            ->route('dosen.index')
            ->with('success', 'Data dosen berhasil dihapus');
    }
}