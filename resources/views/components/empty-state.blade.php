@props([
    'title' => 'Belum ada data',
    'description' => 'Data akan tampil di sini setelah tersedia.',
    'icon' => '📭',
])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center justify-center text-center py-10']) }}>
    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-gray-100 text-3xl">
        {{ $icon }}
    </div>
    <h3 class="mt-4 text-base font-semibold text-gray-800">{{ $title }}</h3>
    <p class="mt-1 max-w-sm text-sm text-gray-500">{{ $description }}</p>
    <div class="mt-4">{{ $slot }}</div>
</div>