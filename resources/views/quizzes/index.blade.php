@extends('layouts.app')

@section('content')
    <div class="container px-4 mx-auto my-24">
        @auth
            <h1 class="mb-6 text-2xl font-bold">Available Quizzes</h1>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($quizzes as $quiz)
                    <div class="p-5 bg-white rounded-lg shadow-md">
                        <h2 class="text-lg font-semibold">{{ $quiz->title }}</h2>
                        <p>{{ $quiz->description }}</p>
                        <a href="{{ route('quizzes.show', $quiz) }}"
                            class="inline-block px-6 py-2 mt-4 text-white transition-colors bg-purple-500 rounded hover:bg-purple-600">Take
                            Quiz</a>
                    </div>
                @endforeach
            </div>
        @else
            <p>Please <a href="{{ route('login') }}" class="text-blue-500 transition-colors hover:text-blue-600">login</a> to see
                the quizzes.</p>
        @endauth
    </div>
@endsection
