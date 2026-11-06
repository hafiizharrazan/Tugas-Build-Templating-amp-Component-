<?php

namespace App\Http\Controllers;

use App\Support\MahasiswaDummy;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index', [
            'mahasiswa' => MahasiswaDummy::all(),
        ]);
    }
}