<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['site_title'] ?? 'Portfolio' }}</title>
    <meta name="description" content="{{ $data['profile']['bio'] ?? '' }}">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite('resources/css/app.css')

    {{-- Alpine.js for mobile toggle --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body x-data="{ sidebarOpen: false }">

    {{-- Animated mesh background --}}
    <div class="bg-mesh" aria-hidden="true"></div>

    {{-- ── Header ── --}}
    <x-header :title="$data['site_title']" />

    {{-- ── Sidebar ── --}}
    <x-sidebar :data="$data" />

    {{-- Mobile overlay --}}
    <div
        x-show="sidebarOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="sidebarOpen = false"
        class="fixed inset-0 bg-black/20 backdrop-blur-sm z-40 md:hidden"
        style="display:none"
        aria-hidden="true"
    ></div>

    {{-- ── Main ── --}}
    <main class="main-content" id="main-content">
        @yield('content')
    </main>

    {{-- ── Footer ── --}}
    <x-footer :data="$data" />

</body>
</html>
