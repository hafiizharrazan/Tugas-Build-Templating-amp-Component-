@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    {{-- Langkah 2: sapaan dengan nama administrator --}}
    <h1 class="text-2xl font-bold mb-1">Halo, {{ $admin }} 👋</h1>
    <p class="text-gray-500 mb-6">Berikut daftar mahasiswa yang terdaftar.</p>

    <x-panel title="Daftar Mahasiswa">
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
                    {{-- Langkah 4: @forelse dengan $loop->iteration --}}
                    @forelse ($mahasiswa as $m)
                        <tr>
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3 font-medium">{{ $m['nama'] }}</td>
                            <td class="px-4 py-3">{{ $m['nim'] }}</td>
                            <td class="px-4 py-3">{{ $m['prodi'] }}</td>
                            <td class="px-4 py-3">
                                {{-- Langkah 3: status dengan @if, tampil lewat badge --}}
                                @if ($m['status'] === 'aktif')
                                    <x-badge type="aktif">Aktif</x-badge>
                                @elseif ($m['status'] === 'cuti')
                                    <x-badge type="cuti">Cuti</x-badge>
                                @else
                                    <x-badge type="nonaktif">Nonaktif</x-badge>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <x-empty-state title="Belum ada mahasiswa"
                                    description="Data mahasiswa belum tersedia." />
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </x-panel>
@endsection