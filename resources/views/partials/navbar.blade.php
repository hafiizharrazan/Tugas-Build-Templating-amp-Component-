<header class="bg-indigo-700 text-white shadow">
    <div class="flex items-center justify-between px-6 py-3">
        <div class="flex items-center gap-4">
            <span class="text-xl font-bold">🎓 SIAKAD Mini</span>
            <span class="hidden sm:inline text-indigo-200">|</span>
            <span class="hidden sm:inline text-indigo-100">@yield('title', 'Dashboard')</span>
        </div>

        <div class="flex items-center gap-3">
            <div class="text-right leading-tight">
                <div class="text-sm font-semibold">{{ $admin }}</div>
                <div class="text-xs text-indigo-200">Administrator</div>
            </div>
            <div class="h-9 w-9 rounded-full bg-white text-indigo-700 flex items-center justify-center font-bold">
                {{ strtoupper(substr($admin, 0, 1)) }}
            </div>
        </div>
    </div>
</header>