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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-900 bg-gray-100">

    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div
            class="absolute inset-y-0 left-0 flex flex-col justify-between w-64 px-2 space-y-6 transition duration-200 ease-in-out transform -translate-x-full bg-white py-7 md:relative md:translate-x-0">

            <!-- Top section with logo and navigation -->
            <div>
                <div class="flex items-center justify-center">
                    <a href="{{ route('welcome') }}"
                        class="block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white"><img
                            class="h-auto max-h-24" src="{{ asset('assets/img/Fichier 16.png') }}" alt="PathSoft"></a>
                    </a>
                </div>
                <nav class="text-center">

                    @admin()
                        <div
                            class="w-full text-xl font-semibold tracking-widest text-gray-700 uppercase focus:outline-none">
                            Admin
                        </div>
                        <a href="{{ route('admin-dashboard') }}"
                            class="text-center block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">Dashboard</a>
                        {{-- <a href="{{ route('quizzes.index') }}"
    class="block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">Quizzes</a> --}}
                        <a href="{{ route('users.index') }}"
                            class="text-center block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">Users</a>
                        <a href="{{ route('faqs.index') }}"
                            class="text-center block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">FAQ's</a>
                        <a href="{{ route('admin.messages') }}"
                            class="text-center block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">Messages</a>
                    @endadmin

                    @conseiller()
                        <div
                            class="w-full text-xl font-semibold tracking-widest text-gray-700 uppercase focus:outline-none">
                            Conseiller
                        </div>
                        <a href="{{ route('conseiller-dashboard') }}"
                            class="text-center block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">Dashboard</a>
                        <a href="{{ route('allconseils') }}"
                            class="text-center block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">Conseils</a>
                        <a href="{{ route('appointments.index') }}"
                            class="text-center block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">Rendez-vous</a>
                        <a href="{{ route('conseiller.messages.index') }}"
                            class="text-center block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">Chat</a>
                        <a href="{{ route('conseiller.quizzes.index') }}"
                            class="text-center block py-2.5 px-4 rounded transition duration-200 hover:bg-violet-500 hover:text-white">Quizzes</a>
                    @endconseiller



                    <!-- Add more navigation links here -->
                </nav>
            </div>
            <!-- Middle section with user information -->

            <!-- Bottom section with logout -->
            <div class="px-4 pb-4">
                <div class="px-4">
                    @auth
                        <div class="mb-4">
                            <p class="text-gray-500">Logged in as:</p>
                            <p class="font-semibold">{{ auth()->user()->name }}</p>
                        </div>
                    @endauth
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full p-2 text-white bg-red-500 rounded hover:bg-red-700 focus:outline-none focus:bg-red-700">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <!-- Content area -->
        <div class="flex flex-col flex-1 overflow-hidden">

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                @yield('content') <!-- This is where child views will inject their content -->
            </main>
        </div>
    </div>
</body>

</html>
