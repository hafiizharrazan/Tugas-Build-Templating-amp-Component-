<?php

namespace App\Http\Controllers;

use App\Support\MahasiswaDummy;

class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswa = collect(MahasiswaDummy::all());

        $statistik = [
            'total'    => $mahasiswa->count(),
            'aktif'    => $mahasiswa->where('status', 'aktif')->count(),
            'cuti'     => $mahasiswa->where('status', 'cuti')->count(),
            'nonaktif' => $mahasiswa->where('status', 'nonaktif')->count(),
        ];

        // 5 mahasiswa terbaru (urutan dibalik dari data terakhir)
        $terbaru = $mahasiswa->reverse()->take(5)->values()->all();

        return view('dashboard', compact('statistik', 'terbaru'));
    }
}