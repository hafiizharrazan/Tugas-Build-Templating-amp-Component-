@props(['variant' => 'primary'])

@php
    $styles = [
        'primary'   => 'bg-indigo-600 text-white hover:bg-indigo-700',
        'secondary' => 'bg-white text-gray-700 border border-gray-300 hover:bg-gray-50',
    ];
@endphp

<button {{ $attributes->merge([
    'type'  => 'button',
    'class' => 'inline-flex items-center rounded-lg px-4 py-2 text-sm font-medium transition ' . ($styles[$variant] ?? $styles['primary']),
]) }}>
    {{ $slot }}
</button>