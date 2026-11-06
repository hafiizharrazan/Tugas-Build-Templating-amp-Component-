<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') - SIAKAD Mini</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex flex-col">

        {{-- Header --}}
        @include('partials.navbar')

        <div class="flex flex-1">
            {{-- Sidebar --}}
            @include('partials.sidebar')

            {{-- Area konten --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>

        {{-- Footer --}}
        <footer class="bg-white border-t border-gray-200 text-center text-sm text-gray-500 py-4">
            &copy; {{ date('Y') }} SIAKAD Mini. Dibuat dengan Laravel.
        </footer>
    </div>
</body>
</html>