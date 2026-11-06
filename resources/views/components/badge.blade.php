@props(['type' => 'aktif'])

@php
    $styles = [
        'aktif'    => 'bg-green-100 text-green-800',
        'cuti'     => 'bg-yellow-100 text-yellow-800',
        'nonaktif' => 'bg-red-100 text-red-800',
    ];
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-semibold ' . ($styles[$type] ?? 'bg-gray-100 text-gray-800')]) }}>
    {{ $slot }}
</span>