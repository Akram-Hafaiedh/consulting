<div class="container px-4 py-8 mx-auto bg-gray-100 sm:px-6 lg:px-8">
    <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-800">Nos conseillers</h2>
        <p class="mt-3 text-xl text-gray-600">Une équipe de professionnels dévoués prêts à vous offrir le
            meilleur service client.
            Nos conseillers sont là pour répondre à vos questions, résoudre vos problèmes et vous assurer une
            expérience
            exceptionnelle.</p>
    </div>
    <div class="grid grid-cols-1 gap-8 mt-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($teamMembers as $user)
            <div
                class="flex flex-col items-center p-6 transition-shadow duration-300 ease-in-out bg-white rounded-lg shadow-xl hover:shadow-2xl">

                @if (isset($user->image) && !empty($user->image))
                    <img class="w-24 h-24 rounded-full" src="{{ asset('storage/' . $user->image) }}"
                        alt="{{ $user->name }}">
                @else
                    <img class="w-24 h-24 rounded-full" src="{{ asset('assets/img/avatar.png') }}"
                        alt="{{ $user->name }}">
                @endif

                <h3 class="mt-4 text-xl font-semibold text-gray-800">{{ $user->name }}</h3>
                {{-- <p class="text-indigo-600">{{ $user['position'] }}</p> --}}
                <p class="mt-1 text-gray-600">{{ $user->field }}</p>
                <a class="inline-block px-4 py-2 mt-4 font-bold text-white transition-colors duration-200 rounded-lg bg-violet-500 hover:bg-violet-600"
                    href='{{ route('team.show', $user) }}' target='_blank'>contacter</a>
            </div>
        @endforeach
    </div>
</div>
