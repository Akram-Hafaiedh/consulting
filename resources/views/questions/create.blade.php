@extends('layouts.app')

@section('content')
<div class="container px-4 py-8 mx-auto">
    <h1 class="mb-4 text-xl font-bold">Add Questions to Quiz: {{ $quiz->title }}</h1>

    <form action="{{ route('quizzes.storeQuestions', $quiz) }}" method="POST">
        @csrf
        <!-- You can add multiple question inputs or use JavaScript to dynamically add more -->
        <div class="mb-4">
            <label for="question1" class="block text-sm font-medium text-gray-700">Question 1</label>
            <input type="text" name="questions[]" id="question1" class="block w-full mt-1" required>
        </div>

        <div class="mb-4">
            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                Save Questions
            </button>
        </div>
    </form>
</div>
@endsection
