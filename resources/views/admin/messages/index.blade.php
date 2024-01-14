<!-- admin/messages/index.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container px-4 py-12 mx-auto">
        <div class="mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div id="success-message"
                    class="relative px-4 py-3 mb-4 text-green-700 transition-opacity duration-1000 bg-green-100 border border-green-400 rounded">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold text-gray-900">Conseiller Dashboard</h1>
                </div>
            </div>

            <div class="mt-8 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h1 class="text-2xl font-semibold text-gray-900">Contacts</h1>
                    </div>

                    <div class="grid gap-4 mt-4">
                        @forelse ($messages as $message)
                            <div class="p-6 bg-gray-100 border-l-4 rounded-md shadow-md border-violet-500">
                                <p class="font-medium text-gray-900">Name: {{ $message->name }} ({{ $message->created_at }})
                                </p>
                                <p class="text-gray-600">Email: {{ $message->email }}</p>
                                <p class="mt-2 text-gray-700">{{ $message->message }}</p>
                            </div>
                        @empty
                            <div class="p-4 bg-white rounded-md shadow-md">
                                <p class="text-gray-700">No messages found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
