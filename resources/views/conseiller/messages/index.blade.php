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
                    <h1 class="text-2xl font-semibold text-gray-900"> Conseiller Dashboard</h1>

                    {{-- <p class="mt-1 text-gray-600">You're logged in as admin!</p> --}}
                </div>
            </div>
            <div class="container flex py-4 mx-auto">
                <div class="w-1/4 p-4 bg-gray-100">
                    <ul class="space-y-2">
                        @foreach ($usersWithMessages as $user)
                            <li
                                class="p-3 {{ $otherUser->id === $user->id ? 'bg-violet-500 text-white' : 'hover:bg-violet-300' }} rounded-lg hover:bg-violet-300">
                                <a href="{{ url('/chat', $user->id) }}">
                                    {{ $user->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex-grow flex flex-col mx-4 border rounded-lg h-[70vh] w-3/4">
                    <div class="p-4 bg-gray-100">
                        <h1 class="text-xl font-semibold">Chat</h1>
                    </div>
                    <div class="flex-grow p-4 overflow-auto bg-white ">
                        @foreach ($messages as $message)
                            <div class="mb-4 {{ $message->sender_id == Auth::id() ? 'text-right' : '' }}">
                                <div class="flex items-start {{ $message->sender_id == Auth::id() ? 'justify-end' : '' }}">
                                    @if ($message->sender_id != Auth::id())
                                        <div class="flex-shrink-0">
                                            @if ($otherUser->image)
                                                <img class="w-8 h-8 rounded-full"
                                                    src="{{ asset('storage/' . $otherUser->image) }}" alt="User Avatar">
                                            @else
                                                <div
                                                    class="flex items-center justify-center w-10 h-10 font-medium text-white uppercase rounded-full bg-violet-500">
                                                    {{ $otherUser->initials }}
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="ml-3 mr-3">
                                        <p class="text-sm"><strong>{{ $otherUser->name }}</strong></p>
                                        <p class="text-gray-600">{{ $message->content }}</p>
                                    </div>
                                    @if ($message->sender_id == Auth::id())
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="{{ asset('assets/img/avatar.png') }}"
                                                alt="User Avatar">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="p-4 bg-gray-100">
                        <form class="flex justify-between" action="{{ route('conseiller.messages.store', $otherUser) }}"
                            method="post">
                            @csrf
                            <input type="text" name="message"
                                class="w-full px-4 py-2 bg-white border-gray-300 rounded-lg focus:border-violet-500 focus:ring-1 focus:ring-violet-500"
                                placeholder="Type your message...">
                            <button type="submit"
                                class="px-4 py-2 ml-2 text-white rounded-lg bg-violet-500 hover:bg-violet-600 focus:bg-violet-600 focus:outline-none">
                                Envoyer
                            </button>
                        </form>
                    </div>
                </div>

                {{-- <div class="flex-grow flex flex-col mx-4 border rounded-lg h-[80vh] w-3/4">
                    <div class="p-4 bg-gray-100 ">
                        <h1 class="text-xl font-semibold">Chat</h1>
                    </div>
                    <div class="flex-grow p-4 bg-white">
                        <div class="mb-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="user-avatar.jpg" alt="User Avatar">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm"><strong>John Doe</strong></p>
                                    <p class="text-gray-600">Hello! How can I help you today?</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="user-avatar.jpg" alt="User Avatar">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm"><strong>Jane Smith</strong></p>
                                    <p class="text-gray-600">Hi, I have a question about the product.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="user-avatar.jpg" alt="User Avatar">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm"><strong>John Doe</strong></p>
                                    <p class="text-gray-600">Sure, what would you like to know?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-gray-100">
                        <form class="flex justify-between">
                            <input type="text"
                                class="w-full px-4 py-2 bg-white border-gray-300 rounded-lg focus:border-violet-500 focus:ring-1 focus:ring-violet-500"
                                placeholder="Type your message...">
                            <button type="submit"
                                class="px-4 py-2 ml-2 text-white rounded-lg bg-violet-500 hover:bg-violet-600 focus:bg-violet-600 focus:outline-none">Send</button>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
