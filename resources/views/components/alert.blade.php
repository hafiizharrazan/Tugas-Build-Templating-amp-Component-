@props(['type' => 'info'])

@php
    $styles = [
        'success' => 'bg-green-50 border-green-300 text-green-800',
        'warning' => 'bg-yellow-50 border-yellow-300 text-yellow-800',
        'info'    => 'bg-blue-50 border-blue-300 text-blue-800',
        'error'   => 'bg-red-50 border-red-300 text-red-800',
    ];
    $icons = ['success' => '✔', 'warning' => '⚠', 'info' => 'ℹ', 'error' => '✖'];
@endphp

<div {{ $attributes->merge(['class' => 'flex items-start gap-3 border rounded-lg px-4 py-3 ' . ($styles[$type] ?? $styles['info'])]) }} role="alert">
    <span class="font-bold">{{ $icons[$type] ?? $icons['info'] }}</span>
    <div>{{ $slot }}</div>
</div>