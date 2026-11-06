@php
    $menus = [
        ['label' => 'Dashboard',      'route' => 'dashboard',       'icon' => '📊'],
        ['label' => 'Data Mahasiswa', 'route' => 'mahasiswa.index', 'icon' => '👥'],
        ['label' => 'Laporan',        'route' => 'laporan',         'icon' => '📄'],
    ];
@endphp

<aside class="w-60 shrink-0 bg-gray-800 text-gray-300">
    <nav class="p-4 space-y-1">
        <p class="px-3 pb-2 text-xs uppercase tracking-wider text-gray-500">Menu</p>

        @foreach ($menus as $menu)
            <a href="{{ route($menu['route']) }}"
               class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition
                      {{ request()->routeIs($menu['route']) ? 'bg-indigo-600 text-white' : 'hover:bg-gray-700 hover:text-white' }}">
                <span>{{ $menu['icon'] }}</span>
                <span>{{ $menu['label'] }}</span>
            </a>
        @endforeach
    </nav>
</aside>