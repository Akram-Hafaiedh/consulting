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
                        <h1 class="text-2xl font-semibold text-gray-900">Modifier le conseil</h1>
                        <a href="{{ route('allconseils') }}"
                            class="px-4 py-2 text-sm font-medium text-white rounded bg-violet-500 hover:bg-violet-700">
                            Go back
                        </a>
                    </div>
                    {{-- Start of the "Conseil" form --}}
                    <form action="{{ route('conseils.update', $conseil) }}" method="POST" enctype="multipart/form-data"
                        class="mt-4">
                        @csrf
                        @method('patch')

                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input id="title" name="title" type="text" value="{{ old('title', $conseil->title) }}"
                                class="w-full px-3 py-2 mt-1 border-1 rounded shadow-sm focus:ring focus:ring-opacity-50 focus:ring-violet-400 @error('title') border-red-500 @enderror">
                            @error('title')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <input type="file" id="image" name="image"
                            class="w-full px-3 py-2 mt-1 border rounded shadow-sm focus:ring focus:ring-opacity-50 @error('image') border-red-500 @enderror">
                        @error('image')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea id="description" name="description" rows="4"
                                class="w-full px-3 py-2 mt-1 border rounded shadow-sm focus:ring focus:ring-opacity-50 focus:ring-violet-400 @error('description') border-red-500 @enderror">{{ old('description', $conseil->description) }}</textarea>
                            @error('description')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="type"
                                class="block text-sm font-medium text-gray-700 @error('type') border-red-500 @enderror">Type</label>
                            <select id="type" name="type" required
                                class="w-full px-3 py-2 mt-1 border rounded shadow-sm focus:ring focus:ring-opacity-50 focus:ring-violet-400">
                                <option value="" disabled {{ old('type', $conseil->type) === '' ? 'selected' : '' }}>
                                    Select a type
                                </option>
                                <option value="santé" {{ old('type', $conseil->type) === 'santé' ? 'selected' : '' }}>
                                    Santé
                                </option>
                                <option value="education"
                                    {{ old('type', $conseil->type) === 'education' ? 'selected' : '' }}>
                                    Éducation
                                </option>
                                <option value="relationnel"
                                    {{ old('type', $conseil->type) === 'relationnel' ? 'selected' : '' }}>
                                    Relationnel
                                </option>
                            </select>
                            @error('type')
                                <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- Add more form fields as needed --}}
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                class="px-4 py-2 text-sm font-medium text-white rounded bg-violet-500 hover:bg-violet-700 focus:outline-none focus:ring focus:ring-opacity-50">
                                update Conseil
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
