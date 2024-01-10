@extends('layouts.admin')

@section('content')
    <div class="container px-4 py-12 mx-auto">
        <div class="mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div id="success-message"
                    class="relative px-4 py-3 text-green-700 transition-opacity duration-1000 bg-green-100 border border-green-400 rounded"
                    role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold text-gray-900"> Admin Dashboard</h1>

                    {{-- <p class="mt-1 text-gray-600">You're logged in as admin!</p> --}}
                </div>
            </div>
            <div class="grid w-full grid-cols-1 gap-6 mt-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                {{-- <div class="p-6 bg-white border-b border-gray-200 rounded shadow">
                    <h2 class="text-xl font-semibold text-gray-900">Admin Users</h2>
                    <p class="mt-2 text-gray-600">{{ $adminUserCount }}</p>
                </div> --}}
                <div class="p-6 bg-white border-b border-gray-200 rounded shadow">
                    <h2 class="text-xl font-semibold text-gray-900">Regular Users</h2>
                    <p class="mt-2 text-gray-600">{{ $regularUserCount }}</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200 rounded shadow">
                    <h2 class="text-xl font-semibold text-gray-900">Conseiller Users</h2>
                    <p class="mt-2 text-gray-600">{{ $conseillerUserCount }}</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200 rounded shadow">
                    <h2 class="text-xl font-semibold text-gray-900">Quiz count</h2>
                    <p class="mt-2 text-gray-600">{{ $quizCount }}</p>
                </div>
                <div class="p-6 bg-white border-b border-gray-200 rounded shadow">
                    <h2 class="text-xl font-semibold text-gray-900">Conseil count</h2>
                    <p class="mt-2 text-gray-600">{{ $conseilsCount }}</p>
                </div>
                <!-- Add more cards for other roles -->
            </div>


        </div>
    </div>
@endsection
