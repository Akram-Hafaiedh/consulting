<!-- conseil-component.blade.php -->
<div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col relative">
    <!-- Type badge -->
    <span
        class="absolute top-0 right-0 mt-2 mr-2 text-sm font-medium text-gray-600 bg-gray-100 px-3 py-1 rounded-full">{{ $type }}</span>
    <div class="flex-1 px-6 py-4">
        <div class="mb-3">
            <!-- Image -->
            <img src="{{ asset('assets/img/icons/' . $icon . '.png') }}" alt="Conseil Icon" class="w-20 h-20 mx-auto">
        </div>

        <!-- Title -->
        <div class="font-bold text-xl mb-2 text-center">{{ $title }}</div>

        <!-- Description -->
        <p class="text-gray-700 text-base text-center">
            {{ $description }}
        </p>
    </div>

    <div class="px-6 py-4">
        <!-- Button at the bottom -->
        <a href="{{ route('dashboard') }}"
            class="bg-violet-500 hover:bg-violet-700 text-white font-bold py-2 px-4 rounded mx-auto block text-center">
            Passer le quiz
        </a>
    </div>
</div>
