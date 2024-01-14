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
                        <h1 class="text-2xl font-semibold text-gray-900">Liste des conseils</h1>
                        <a href="{{ route('conseils.create') }}"
                            class="px-4 py-2 text-sm font-medium text-white rounded bg-violet-500 hover:bg-violet-700">
                            Add New
                        </a>
                    </div>
                    {{-- Table for managing conseils --}}
                    <table class="w-full mt-4 table-auto">
                        <thead>
                            <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                                <th class="px-6 py-3 text-left">ID</th>
                                <th class="px-6 py-3 text-left">Title</th>
                                <th class="px-6 py-3 text-left">Image</th>
                                <th class="px-6 py-3 text-left">Type</th>
                                <th class="px-6 py-3 text-center">Date</th>
                                <th class="px-6 py-3 pr-16 text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-light text-gray-600">
                            {{-- You would typically fetch and loop through conseils data here --}}
                            @foreach ($conseils as $conseil)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="px-6 py-3 text-left whitespace-nowrap">
                                        {{ $conseil->id }}
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        {{ $conseil->title }}
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        @if ($conseil->image)
                                            @php
                                                $imagePath = Str::startsWith($conseil->image, 'conseils/') ? 'storage/' . $conseil->image : $conseil->image;
                                            @endphp
                                            <img src="{{ asset($imagePath) }}" alt="Conseil Image"
                                                style="width:150px; height:auto;">
                                        @endif
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        {{ $conseil->type }}
                                    </td>
                                    <td class="px-6 py-3 text-center">
                                        {{ $conseil->created_at->format('d/m/Y') }}
                                    </td>
                                    <td class="px-6 py-3 text-center">
                                        <div class="flex justify-end space-x-2 item-center">
                                            <!-- Edit button -->
                                            <a href="{{ route('conseils.edit', $conseil->id) }}"
                                                class="px-2 py-1 mr-1 text-sm font-medium text-white rounded-full bg-violet-500 hover:bg-violet-700">
                                                Edit
                                            </a>
                                            <!-- Delete button -->
                                            <form action="{{ route('conseils.destroy', $conseil->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-2 py-1 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-red-700">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- End of conseils table --}}
                </div>
            </div>
        </div>
    </div>
@endsection
