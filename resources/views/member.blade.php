@extends('layouts.app')

@section('content')
    <div class="container grid gap-4 px-4 py-8 mx-auto my-20 lg:grid-cols-2">
        <div class="flex flex-col w-full max-w-2xl mx-auto bg-white rounded-lg shadow-lg lg:max-w-none">
            <div class="flex justify-center mt-4">
                @if ($user->image)
                    <img class="object-cover w-32 h-32 border-4 border-indigo-500 rounded-full"
                        src="{{ asset('storage/' . $user->image) }}" alt="User profile picture">
                @else
                    <div
                        class="inline-flex items-center justify-center w-32 h-32 overflow-hidden border-4 rounded-full border-violet-900 bg-violet-500">
                        <span
                            class="font-medium leading-none text-white text-7xl">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                    </div>
                @endif
            </div>
            <div class="p-8 ">
                <h1 class="mb-2 text-2xl font-medium text-gray-900">{{ $user->name }}</h1>
                <p class="mb-4 text-base text-gray-600">specialité: {{ $user->field }}</p>
                <p class="mb-4 text-base text-gray-600">Tél: {{ $user->phone }}</p>
                <p class="mb-4 text-base text-gray-600">Adresse: {{ $user->address }}</p>
                <p class="mb-4 text-base text-gray-600">Email: {{ $user->email }}</p>
                <div class="mt-4">
                    <h3 class="mb-2 text-lg font-semibold text-gray-900"></h3>
                    <div class="flex justify-start space-x-3">
                        @if ($user->twitter_link)
                            <a href="{{ $user->twitter_link }}" class="text-blue-500 hover:text-blue-600">
                                <i class="fab fa-twitter"></i>
                            </a>
                        @endif
                        @if ($user->linkedin_link)
                            <a href="{{ $user->linkedin_link }}" class="text-blue-700 hover:text-blue-800">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        @endif
                        @if ($user->facebook_link)
                            <a href="{{ $user->facebook_link }}" class="text-blue-600 hover:text-blue-700">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif
                        <!-- Add more social links as needed -->
                    </div>
                </div>
                <div class='mt-auto'>
                    @if ($user->isConseiller())
                        <div class="flex justify-end mt-6 space-x-4">
                            {{-- <a href="mailto:{{ $user->email }}"
                                class="px-4 py-2 text-lg font-semibold text-center text-white transition duration-200 ease-in bg-green-500 rounded shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                Envoyer un message
                            </a> --}}
                            <a href="{{ route('conversation.show', $user) }}"
                                class="px-4 py-2 text-lg font-semibold text-center text-white transition duration-200 ease-in bg-green-500 rounded shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                Envoyer un message
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full h-full max-w-2xl mx-auto bg-white rounded-lg shadow-lg lg:max-w-none">
            <div class="flex flex-col justify-between h-full p-8">
                <h1 class="mb-4 text-2xl font-medium text-gray-900">Demander un rendez vous</h1>
                <form action="{{ route('appointments.store') }}" method="POST" class="h-auto">
                    @csrf

                    @if ($errors->any())
                        <div class="p-4 mb-4 text-red-700 bg-red-100 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-4">
                        <label for="date" class="block mb-2 text-sm font-bold text-gray-700">
                            Veillez choisir une date:
                        </label>
                        <input type="date" id="date" name="date" required
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="time" class="block mb-2 text-sm font-bold text-gray-700">Veillez choisir
                            l'horaire:</label>
                        <input type="time" id="time" name="time" required
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-bold text-gray-700">Votre message
                        </label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-3 py-2 mb-3 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="mt-auto">
                        <div class="flex justify-end mt-auto">
                            <button type="submit"
                                class="px-4 py-2 text-lg font-semibold text-white rounded bg-violet-500 hover:bg-violet-700 focus:outline-none focus:shadow-outline">
                                Prendre rendez vous
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
