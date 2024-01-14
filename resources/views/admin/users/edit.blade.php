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
            @if ($errors->any())
                <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                    <strong class="font-bold">Whoops! Something went wrong.</strong>
                    <span class="block sm:inline">Please check the form for the following errors.</span>
                    <ul class="mt-3 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold text-gray-900">Admin Dashboard</h1>

                    {{-- <p class="mt-1 text-gray-600">You're logged in as admin!</p> --}}
                </div>
            </div>

            <div class="mt-8">
                <h2 class="mb-4 text-xl font-semibold text-gray-900">Modification d'un utilisateur</h2>
                <div class="p-6 bg-white rounded shadow-md">
                    <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block mb-2 text-sm font-bold text-gray-700">Nom:</label>
                            <input type="text" name="name" id="name" value="{{ old('name') ?? $user->name }}"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">

                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Email:</label>
                            <input type="email" name="email" id="email" value="{{ old('email') ?? $user->email }}"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>

                        @if ($user->image)
                            <img class="w-20 h-20 rounded-full" src="{{ asset('storage/' . $user->image) }}"
                                alt="Conseil Image">
                        @endif
                        <div class="mb-4">
                            <label for="image" class="block mb-2 text-sm font-bold text-gray-700">Image:</label>
                            <input type="file" name="image" id="image" value="{{ old('image') ?? $user->image }}"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="role" class="block mb-2 text-sm font-bold text-gray-700">Role:</label>
                            <select name="role" id="role"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                <option value="conseiller">Conseilleur</option>
                                <option value="user">Utilisateur</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for='phone'>Tél</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone') ?? $user->phone }}"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for='field'>Spécialité</label>
                            <input type="text" name="field" id="field" value="{{ old('field') ?? $user->field }}"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for='address'>Adresse</label>
                            <input type="text" name="address" id="address"
                                value="{{ old('address') ?? $user->address }}"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        {{-- <div class="mb-4">
                            <label for='company_name'>Société</label>
                            <input type="text" name="company_name" id="company_name"
                                value="{{ old('company_name') ?? $user->company_name }}"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div> --}}
                        {{-- <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm font-bold text-gray-700">Mot de passe:</label>
                            <input type="password" name="password" id="password"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-bold text-gray-700">Confirmation
                                du mot de passe:</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        </div> --}}
                        <div class="flex items-center justify-end">
                            <button
                                class="px-4 py-2 font-bold text-white rounded bg-violet-500 hover:bg-violet-700 focus:outline-none"
                                type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
