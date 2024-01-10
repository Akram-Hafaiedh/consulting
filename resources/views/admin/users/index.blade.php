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


                    <h2 class="mb-4 text-xl font-semibold text-gray-900">Non-Admin Users</h2>
                    <a href="{{ route('users.create') }}"
                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none">Add
                        User
                    </a>
                </div>

                <div class="my-6 bg-white rounded shadow-md">
                    <table class="w-full text-left border-collapse">
                        <!-- Table Header -->
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                    Name</th>
                                <th
                                    class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">
                                    Email
                                </th>

                                <th class="border-b border-grey-light"></th>
                            </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody>
                            @forelse ($nonAdminUsers as $user)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="px-6 py-4 border-b border-grey-light">{{ $user->name }}
                                        <div>
                                            @foreach ($user->roles as $role)
                                                <span
                                                    class="inline-block px-2 text-xs font-semibold tracking-wide text-blue-800 uppercase bg-blue-100 rounded-full">
                                                    {{ $role->name }}
                                                </span>
                                            @endforeach
                                        </div>

                                    </td>
                                    <td class="px-6 py-4 border-b border-grey-light">{{ $user->email }}</td>

                                    <td class="px-6 py-4 text-right border-b border-gray-200">
                                        <form action="{{ route('users.destroy', $user) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this user?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1 text-sm text-white bg-red-600 rounded-full hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-opacity-50">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-6 py-4 border-b border-grey-light" colspan="2">
                                        No non-admin users found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="px-4 py-2">
                        {{ $nonAdminUsers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
