<?php

namespace App\Support;

class MahasiswaDummy
{
    public static function all(): array
    {
        return [
            ['nama' => 'Andi Pratama',   'nim' => '2024001', 'prodi' => 'Teknik Informatika', 'status' => 'aktif'],
            ['nama' => 'Siti Aisyah',    'nim' => '2024002', 'prodi' => 'Sistem Informasi',   'status' => 'aktif'],
            ['nama' => 'Budi Santoso',   'nim' => '2023015', 'prodi' => 'Teknik Informatika', 'status' => 'cuti'],
            ['nama' => 'Dewi Lestari',   'nim' => '2023020', 'prodi' => 'Teknik Komputer',    'status' => 'aktif'],
            ['nama' => 'Rizky Ramadhan', 'nim' => '2022008', 'prodi' => 'Sistem Informasi',   'status' => 'nonaktif'],
            ['nama' => 'Maya Putri',     'nim' => '2024010', 'prodi' => 'Teknik Informatika', 'status' => 'aktif'],
        ];
    }
}