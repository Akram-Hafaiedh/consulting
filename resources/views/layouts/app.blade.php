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
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">

    <!-- Styles -->


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preload"
        href="{{ asset('assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-regular.woff2') }}"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload"
        href="{{ asset('assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-700.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets/fonts/montserrat-v25-latin/montserrat-v25-latin-700.woff2') }}"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets/fonts/montserrat-v25-latin/montserrat-v25-latin-600.woff2') }}"
        as="font" type="font/woff2" crossorigin>

    <link rel="preload" href="{{ asset('assets/fonts/material-icons/material-icons.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets/fonts/material-icons/material-icons-outlined.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        {{-- @include('layouts.navigation') --}}
        @include('layouts.nav')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow dark:bg-gray-800">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="mt-24">
            @yield('content')
        </main>

        @include('layouts.footer')

        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/lozad/lozad.min.js') }}"></script>
        <script src="{{ asset('assets/libs/device/device.js') }}"></script>
        <script src="{{ asset('assets/libs/spincrement/jquery.spincrement.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pristine/pristine.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="{{ asset('assets/js/forms.js') }}"></script>
    </div>
</body>

</html>
