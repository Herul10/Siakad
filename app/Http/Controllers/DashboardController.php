<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; 
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil jumlah total data terbaru langsung dari database
        $totalMahasiswa = Mahasiswa::count(); 
        $totalDosen = Dosen::count();
        $totalProdi = Prodi::count();
        $totalMataKuliah = MataKuliah::count();

        // Mengirimkan variabel ke file view dashboard.blade.php
        return view('dashboard', compact('totalMahasiswa', 'totalDosen', 'totalProdi', 'totalMataKuliah'));
    }
}