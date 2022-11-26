<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    {{-- @include('layouts.navigation') --}}
    <div dir="rtl" class="flex font-sans antialiased h-screen bg-white">
        <div>
            @include('livewire.components.sidebar.main')
        </div>

        <!-- Page Content -->
        <div class="w-full">
            <div class=" py-7 px-20 mr-8 w-full overflow-y-auto rounded-lg bg-white ">
                <main>
                    {{ $slot }}
            </div>
            </main>
        </div>

    </div>

    @livewireScripts
</body>

</html>
