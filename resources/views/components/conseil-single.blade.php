<div class="relative flex flex-col overflow-hidden bg-white rounded-lg shadow-lg">
    <!-- Type badge -->
    <span
        class="absolute top-0 right-0 px-3 py-1 mt-2 mr-2 text-sm font-medium text-gray-600 bg-gray-100 rounded-full">{{ $type }}</span>
    <div class="flex-1 px-6 py-4">
        <div class="mb-3">
            <!-- Image -->
            @php
                $imagePath = Str::startsWith($conseil->image, 'conseils/') ? 'storage/' . $conseil->image : $conseil->image;
            @endphp
            <img src="{{ asset($imagePath) }}" alt="Conseil Icon" class="mx-auto ">
        </div>

        <!-- Title -->
        {{-- <div class="mb-2 text-xl font-bold text-center">{{ $title }}</div> --}}

        <!-- Description -->
        {{-- <p class="text-base text-center text-gray-700">
            {{ $description }}
        </p> --}}
    </div>

    {{-- <div class="px-6 py-4">
        <!-- Button at the bottom -->
        <a href="{{ route('dashboard') }}"
            class="block px-4 py-2 mx-auto font-bold text-center text-white rounded bg-violet-500 hover:bg-violet-700">
            Passer le quiz
        </a>
    </div> --}}
</div>
