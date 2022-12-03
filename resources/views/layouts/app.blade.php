<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="">
    {{-- @include('layouts.navigation') --}}
    <div dir="rtl" class="flex font-Tajawal antialiased h-screen bg-white">
        <div>
            @include('livewire.components.sidebar.main')
        </div>

        <!-- Page Content -->
        <div class="w-full">
            <div class=" py-7 px-24 mr-8 w-full overflow-y-auto rounded-lg bg-white ">
                <main>
                    {{ $slot }}
            </div>
            </main>
        </div>

    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>

</html>
