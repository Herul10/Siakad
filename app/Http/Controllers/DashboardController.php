<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\MataKuliah;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'mahasiswa' => Mahasiswa::count(),
            'dosen' => Dosen::count(),
            'prodi' => Prodi::count(),
            'mk' => MataKuliah::count(),
        ]);
    }
}