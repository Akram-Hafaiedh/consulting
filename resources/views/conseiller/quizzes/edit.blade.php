@extends('layouts.admin')

@section('content')

    @dump($quiz->questions)
    <div class="container px-4 py-12 mx-auto" x-data="quizForm()">
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
            <div class="mt-8 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <h1 class="text-2xl font-semibold text-gray-900">Update Quiz</h1>
                        <a href="{{ route('conseiller.quizzes.index') }}"
                            class="px-4 py-2 text-sm font-medium text-white rounded bg-violet-500 hover:bg-violet-700">
                            Go back
                        </a>
                    </div>
                    @if ($errors->any())
                        <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded"
                            role="alert">
                            <strong class="font-bold">Whoops! Something went wrong.</strong>
                            <span class="block sm:inline">Please check the form for the following errors.</span>
                            <ul class="mt-3 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="pb-4 bg-white border-b border-gray-200 ">
                        <form method="POST" action="{{ route('conseiller.quizzes.update', $quiz) }}">
                            @csrf
                            @method('PUT')
                            <div class="mt-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Titre du quiz</label>
                                <input type="text" id="title" name="title" placeholder="Quiz Title"
                                    @class([
                                        'w-full mt-1 border-gray-300 rounded-md shadow-sm',
                                        'focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
                                        'border-red-500' => $errors->has('title'),
                                    ]) value="{{ old('title') ?? $quiz->title }}">
                                @error('title')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mt-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <input type="text" id="description" name="description" placeholder="Quiz description"
                                    class="w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    value="{{ old('description') ?? $quiz->description }}">

                                @error('description')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <template x-for="(question, questionIndex) in questions" :key="questionIndex">
                                <div class="pt-4 mt-6 border-t border-gray-200">
                                    <label x-bind:for="'questions[' + questionIndex + '][content]'"
                                        class="block text-sm font-medium text-gray-700">Question</label>
                                    <div class="flex justify-center mt-1 space-x-2">
                                        <input x-bind:id="'questions[' + questionIndex + '][content]'"
                                            x-model="question.content" type="text"
                                            :name="'questions[' + questionIndex + '][content]'" placeholder="Question text"
                                            class="w-full border-gray-300 rounded-md shadow-sm" required
                                            x-model="question.content">


                                        <button type="button" @click="removeQuestion(questionIndex)"
                                            class="flex items-center px-3 py-2 text-sm font-medium text-white transition-colors duration-150 ease-in-out bg-red-600 rounded hover:bg-red-700">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            {{-- Remove --}}
                                        </button>
                                    </div>
                                    <div class='mt-2'>
                                        <label class="block text-sm font-medium text-gray-700">Options:</label>
                                        <template x-for="(option, optionIndex) in question.options" :key="optionIndex">
                                            <div class="flex mt-2">
                                                <input type="text"
                                                    class="w-full mr-2 border-gray-300 rounded-md shadow-sm"
                                                    x-bind:id="'questions[' + questionIndex + '][options][' + optionIndex +
                                                        '][text]'"
                                                    :name="'questions[' + questionIndex + '][options][' + optionIndex +
                                                        '][text]'"
                                                    placeholder="Option text" x-model="option.text">

                                                <div class="flex flex-row space-x-2">
                                                    <!-- Remove Option Button -->
                                                    <button type="button" @click="removeOption(questionIndex, optionIndex)"
                                                        class="flex items-center px-3 py-2 text-sm font-medium text-white transition-colors duration-150 ease-in-out bg-red-600 rounded hover:bg-red-700">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                        {{-- Remove --}}
                                                    </button>

                                                    <!-- Add Option Button -->
                                                    <button type="button" @click="addOption(questionIndex, optionIndex)"
                                                        class="flex items-center px-3 py-2 text-sm font-medium text-white transition-colors duration-150 ease-in-out rounded bg-violet-600 hover:bg-violet-700 ">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M12 4v16m8-8H4" />
                                                        </svg>
                                                        {{-- Add Option --}}
                                                    </button>
                                                </div>

                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                            <div class="flex items-center mt-6">
                                <button type="button" @click="addQuestion"
                                    class="px-4 py-2 mr-4 text-sm font-medium text-white bg-green-500 rounded hover:bg-green-700">
                                    Add Question
                                </button>

                            </div>
                            <div class="flex justify-end mt-8">
                                <button type="submit"
                                    class="px-4 py-2 text-sm font-medium text-white rounded bg-violet-500 hover:bg-violet-700">
                                    Update Quiz
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        function quizForm() {
            return {
                questions: {{ Js::from($quiz->questions->toArray()) }},
                addQuestion() {
                    this.questions.push({
                        content: '',
                        options: [{
                                text: ''
                            },
                            {
                                text: ''
                            },
                            {
                                text: ''
                            }
                        ]
                    });
                },
                removeQuestion(questionIndex) {
                    this.questions.splice(questionIndex, 1);
                },
                addOption(questionIndex, optionIndex) {
                    let newOption = {
                        text: ''
                    };
                    this.questions[questionIndex].options.splice(optionIndex + 1, 0, newOption);

                },
                removeOption(questionIndex, optionIndex) {
                    this.questions[questionIndex].options.splice(optionIndex, 1);
                }
            };
        }
    </script>
@endsection
