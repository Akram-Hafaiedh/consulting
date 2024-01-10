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


            {{-- Non-Admin Users Table --}}
            <div class="mt-8">
                <h2 class="mb-4 text-xl font-semibold text-gray-900">Création d'un FAQ</h2>
                <div class="p-6 bg-white rounded shadow-md">
                    <form action="{{ route('faqs.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="question" class="block mb-2 text-sm font-bold text-gray-700">Question:</label>
                            <input type="text" name="question" id="question"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="answer" class="block mb-2 text-sm font-bold text-gray-700">Réponse:</label>
                            <textarea name="answer" id="answer"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
                        </div>

                        <div class="flex items-center justify-end">
                            <button
                                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none"
                                type="submit">Create FAQ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
