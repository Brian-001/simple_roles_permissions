<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="{{ asset('js/toastify.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/toastify.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    @livewireScripts

</head>
<body class="font-sans antialiased">
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="w-1/5 bg-blue-500 p-4">
            <!-- Sidebar Header -->
            <div class="text-white text-2xl font-semibold p-4">
                Hotel Admin
            </div>
            <!-- Navigation Links -->
            <ul class="mt-6 space-y-4">
                <li>
                    <a href="{{ route('admins.index') }}" class="text-white hover:text-black duration-300">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admins.admin_dish') }}" class="text-white hover:text-black duration-300">Dishes</a>
                </li>
                <li>
                    <a href="{{ route('admins.admin_table') }}" class="text-white hover:text-black duration-300">Tables</a>
                </li>
                <li>
                    <a href="{{ route('admins.admin_room') }}" class="text-white hover:text-black duration-300">Rooms</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-black duration-300">Orders</a>
                </li>

            </ul>
        </div>

        <!-- Content -->
        <div class="w-4/5 p-6">
            @yield('content')
        </div>
    </div>

</body>






