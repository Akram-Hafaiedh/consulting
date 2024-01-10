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
                <div class="flex items-center justify-between mb-4">
                    <h2 class="mb-4 text-xl font-semibold text-gray-900">FAQs</h2>
                    <a href="{{ route('faqs.create') }}"
                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none">Add
                        FAQ
                    </a>
                </div>

                <div class="my-6 bg-white rounded shadow-md">
                    <table class="w-full text-left border-collapse">
                        <!-- Table Header -->
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                    Question</th>
                                <th
                                    class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                    Réponse
                                </th>
                                <th class="border-b border-grey-light"></th>
                            </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody>
                            @forelse ($faqs as $faq)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="px-6 py-4 border-b border-grey-light">{{ $faq->question }}</td>
                                    <td class="px-6 py-4 border-b border-grey-light">{{ $faq->answer }}</td>

                                    <td
                                        class="inline-flex items-center justify-center w-full px-6 py-4 space-x-2 text-right border-b border-gray-200">
                                        <form action="{{ route('faqs.destroy', $faq) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this faq?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1 text-sm text-white bg-red-600 rounded-full hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-opacity-50">
                                                Delete
                                            </button>
                                        </form>

                                        <a href="{{ route('faqs.edit', $faq) }}"
                                            class="px-3 py-1 text-sm text-white bg-blue-600 rounded-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">Edit</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-4 border-b border-grey-light" colspan="2">
                                        No FAQ's found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
