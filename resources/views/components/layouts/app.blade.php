<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{-- {{ $slot }} --}}
    </flux:main>
</x-layouts.app.sidebar>
<head>
    <!-- ...other head content... -->
    @livewireStyles
</head>
<body>
     @yield('content')
    <!-- ...your page content... -->
    @livewireScripts
</body>
