@props(['title' => null])

<section {{ $attributes->merge(['class' => 'bg-white border border-gray-200 rounded-xl shadow-sm']) }}>
    <header class="flex items-center justify-between gap-3 border-b border-gray-200 px-5 py-3">
        <div class="font-semibold text-gray-800">{{ $header ?? $title }}</div>

        @isset($actions)
            <div class="flex items-center gap-2">{{ $actions }}</div>
        @endisset
    </header>

    <div class="p-5">
        {{ $slot }}
    </div>
</section>