@extends('layouts.app')

@section('content')
    @use(App\Models\User)
    <div class="container flex flex-col p-4 mx-auto">
        <div class="flex flex-col flex-grow border rounded-lg h-[80vh]">
            <div class="p-4 bg-gray-200">
                <h1 class="text-xl font-semibold">Chat</h1>
            </div>
            <div class="flex-grow p-4 bg-white">

                @foreach ($messages as $message)
                    @if ($message->sender_id == Auth::id() || $message->receiver_id == Auth::id())
                        <div class="mb-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    @if ($message->sender_id == Auth::id())
                                        <!-- If the sender is the current user, show current user's avatar -->
                                        @if (Auth::user()->image)
                                            <img class="w-8 h-8 rounded-full"
                                                src="{{ asset('assets/img/' . Auth::user()->image ?? 'avatar.png') }}"
                                                alt="User Avatar">
                                        @else
                                            <div
                                                class="flex items-center justify-center w-10 h-10 font-medium text-white uppercase rounded-full bg-violet-500">
                                                {{ User::find($message->sender_id)->initials }}
                                                <!-- Display sender initials -->
                                            </div>
                                        @endif
                                    @else
                                        <!-- If the sender is not the current user, show the other user's avatar -->
                                        @if ($sender = User::find($message->sender_id))
                                            @if (User::find($message->sender_id)->image)
                                                <img class="w-8 h-8 rounded-full"
                                                    src="{{ asset('assets/img/' . User::find($message->sender_id)->image) }}"
                                                    alt="User Avatar">
                                            @else
                                                <div
                                                    class="flex items-center justify-center w-10 h-10 font-medium text-white uppercase rounded-full bg-violet-500">
                                                    {{ User::find($message->sender_id)->initials }}
                                                    <!-- Display sender initials -->
                                                </div>
                                            @endif
                                        @endif
                                    @endif
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm"><strong>{{ User::find($message->sender_id)->name }}</strong></p>
                                    <p class="text-gray-600">{{ $message->content }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="p-4 bg-gray-100">
                <form class="flex justify-between" action="{{ route('messages.store', $user) }}" method="POST">
                    @csrf
                    <input type="text" name="content"
                        class="w-full px-4 py-2 bg-white border-gray-300 rounded-lg focus:border-violet-500 focus:ring-1 focus:ring-violet-500"
                        placeholder="Ecrivez...">
                    <button type="submit"
                        class="px-4 py-2 ml-2 text-white rounded-lg bg-violet-500 hover:bg-violet-600 focus:bg-violet-600 focus:outline-none">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
