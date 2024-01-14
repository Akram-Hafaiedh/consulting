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
            <div class="mt-8 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <h1 class="text-2xl font-semibold text-gray-900">Liste des quizzes</h1>
                        <a href="{{ route('conseiller.quizzes.create') }}"
                            class="px-4 py-2 text-sm font-medium text-white rounded bg-violet-500 hover:bg-violet-700">
                            Add New
                        </a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full mt-4 leading-normal bg-white border border-gray-300">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left uppercase bg-gray-100 border-b-2 border-gray-300">
                                        Titre
                                    </th>
                                    <th
                                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left uppercase bg-gray-100 border-b-2 border-gray-300">
                                        Description
                                    </th>
                                    <th
                                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left uppercase bg-gray-100 border-b-2 border-gray-300">
                                        Questions
                                    </th>
                                    <th
                                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left uppercase bg-gray-100 border-b-2 border-gray-300">
                                        Created At
                                    </th>
                                    <th
                                        class="px-5 py-3 text-xs font-semibold tracking-wider text-left uppercase bg-gray-100 border-b-2 border-gray-300">
                                        Updated At
                                    </th>
                                    <th
                                        class="px-5 py-3 text-xs font-semibold tracking-wider text-center uppercase bg-gray-100 border-b-2 border-gray-300">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($quizzes as $quiz)
                                    <tr class="{{ $loop->even ? 'bg-gray-50' : '' }}">
                                        <td class="px-5 py-5 text-sm border-b">
                                            <p class="text-gray-900">{{ $quiz->title }}</p>
                                        </td>
                                        <td class="px-5 py-5 text-sm border-b">
                                            <p class="text-gray-900">{{ $quiz->description }}</p>
                                        </td>
                                        <td class="px-5 py-5 text-sm text-center border-b">
                                            <p class="text-gray-900">{{ count($quiz->questions) }}</p>
                                        </td>
                                        <td class="px-5 py-5 text-sm border-b">
                                            <p class="text-gray-900">{{ $quiz->created_at->format('Y-m-d') }}</p>
                                        </td>
                                        <td class="px-5 py-5 text-sm border-b">
                                            <p class="text-gray-900">{{ $quiz->updated_at->format('Y-m-d') }}</p>
                                        </td>
                                        <td class="px-5 py-5 text-sm border-b">
                                            <div class="flex items-center space-x-3">
                                                <a href="{{ route('conseiller.quizzes.edit', $quiz) }}"
                                                    class="px-2 py-1 text-white rounded-full bg-violet-600 hover:bg-violet-700">
                                                    Edit
                                                </a>
                                                <form action="{{ route('conseiller.quizzes.destroy', $quiz) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="px-2 py-1 text-white bg-red-600 rounded-full hover:bg-red-700">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-5 py-5 text-sm text-center text-gray-500">No quizzes
                                            found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
