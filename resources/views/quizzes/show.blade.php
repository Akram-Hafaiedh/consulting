@extends('layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    {{ $quiz->title }}
                </h3>
                <p class="max-w-2xl mt-1 text-sm text-gray-500">
                    {{ $quiz->description }}
                </p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <!-- Add your quiz details here -->
                    <!-- Example: -->
                    @foreach ($quiz->questions as $question)
                        <div
                            class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Question {{ $loop->index + 1 }}
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $question->content }}
                                <!-- You can add the list of options here if you have them -->
                                <!-- Example: -->
                                <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                                    @foreach ($question->options as $option)
                                        <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                            <span class="flex items-center flex-1 w-0">
                                                <span class="flex-1 w-0 ml-2 truncate">
                                                    {{ $option->text }}
                                                </span>
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>

        <!-- If you have a form to submit the answers, you can add it here -->
    </div>
@endsection
