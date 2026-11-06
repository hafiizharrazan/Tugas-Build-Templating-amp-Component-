@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold mb-1">Selamat datang, {{ $admin }} 👋</h1>
    <p class="text-gray-500 mb-6">Ringkasan data mahasiswa hari ini.</p>

    {{-- Langkah 13: alert saat data dimuat / belum tersedia --}}
    @if ($statistik['total'] > 0)
        <x-alert type="success" class="mb-6">Data mahasiswa berhasil dimuat.</x-alert>
    @else
        <x-alert type="warning" class="mb-6">Data mahasiswa belum tersedia.</x-alert>
    @endif

    {{-- Langkah 19: kartu statistik (x-card) --}}
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 mb-6">
        <x-card>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Total Mahasiswa</p>
                    <p class="text-3xl font-bold">{{ $statistik['total'] }}</p>
                </div>
                <span class="text-3xl">👥</span>
            </div>
        </x-card>

        <x-card>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Mahasiswa Aktif</p>
                    <p class="text-3xl font-bold text-green-600">{{ $statistik['aktif'] }}</p>
                </div>
                <span class="text-3xl">✅</span>
            </div>
        </x-card>

        <x-card>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Mahasiswa Cuti</p>
                    <p class="text-3xl font-bold text-yellow-600">{{ $statistik['cuti'] }}</p>
                </div>
                <span class="text-3xl">🕒</span>
            </div>
        </x-card>

        <x-card>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Mahasiswa Nonaktif</p>
                    <p class="text-3xl font-bold text-red-600">{{ $statistik['nonaktif'] }}</p>
                </div>
                <span class="text-3xl">⛔</span>
            </div>
        </x-card>
    </div>

    {{-- Langkah 17: dua panel dengan slot berbeda --}}
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 mb-6">
        {{-- Panel 1: judul + deskripsi --}}
        <x-panel>
            <x-slot:header>
                <span>ℹ️ Tentang Dashboard</span>
            </x-slot:header>

            <p class="text-sm text-gray-600">
                Dashboard ini menampilkan ringkasan jumlah mahasiswa berdasarkan status akademik,
                serta daftar mahasiswa terbaru yang terdaftar di kampus.
            </p>
        </x-panel>

        {{-- Panel 2: judul + tombol aksi --}}
        <x-panel>
            <x-slot:header>
                <span>⚡ Aksi Cepat</span>
            </x-slot:header>

            <x-slot:actions>
                <x-button>Tambah Mahasiswa</x-button>
                <x-button variant="secondary">Ekspor</x-button>
            </x-slot:actions>

            <p class="text-sm text-gray-600">
                Gunakan tombol di pojok kanan atas panel ini untuk menambah atau mengekspor data.
            </p>
        </x-panel>
    </div>

    {{-- Langkah 20: tabel mahasiswa terbaru --}}
    <x-panel title="Mahasiswa Terbaru">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">NIM</th>
                        <th class="px-4 py-3">Program Studi</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse ($terbaru as $m)
                        <tr>
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3 font-medium">{{ $m['nama'] }}</td>
                            <td class="px-4 py-3">{{ $m['nim'] }}</td>
                            <td class="px-4 py-3">{{ $m['prodi'] }}</td>
                            <td class="px-4 py-3">
                                <x-badge :type="$m['status']">{{ ucfirst($m['status']) }}</x-badge>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <x-empty-state
                                    title="Belum ada mahasiswa"
                                    description="Tambahkan data mahasiswa agar tampil di tabel ini." />
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-panel>
@endsection