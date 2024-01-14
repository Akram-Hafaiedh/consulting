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
                        <h1 class="text-2xl font-semibold text-gray-900">Liste des rendez vous</h1>
                    </div>
                    <div class="mt-8 overflow-hidden bg-white rounded-lg shadow-lg">
                        @if ($appointments->isEmpty())
                            <p class="p-4">You have no appointments scheduled.</p>
                        @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white border border-gray-300 shadow">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="px-4 py-3 text-sm font-semibold text-left uppercase border-b">Date
                                            </th>
                                            <th class="px-4 py-3 text-sm font-semibold text-left uppercase border-b">Time
                                            </th>
                                            <th class="px-4 py-3 text-sm font-semibold text-left uppercase border-b">Message
                                            </th>
                                            <th class="px-4 py-3 text-sm font-semibold text-left uppercase border-b">Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($appointments as $appointment)
                                            <tr class="{{ $loop->even ? 'bg-gray-50' : '' }}">
                                                <td class="px-4 py-2 border-b">{{ $appointment->date }}</td>
                                                <td class="px-4 py-2 border-b">{{ $appointment->time }}</td>
                                                <td class="px-4 py-2 border-b">{{ $appointment->message }}</td>
                                                <td class="px-4 py-2 border-b">
                                                    {{-- Add/Edit your actions --}}
                                                    <form action="{{ route('appointments.destroy', $appointment->id) }}"
                                                        method="POST" class="inline"
                                                        onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-red-600 hover:text-red-900">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="px-4 py-2 text-center text-gray-500">No
                                                    appointments found.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
