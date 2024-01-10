<section>
    <div class="container px-4 py-6 mx-auto sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold leading-tight text-violet-500 sm:text-4xl">À propos</h2>
            <p class="mt-2 text-lg text-gray-500">Découvrez qui nous sommes et ce que nous faisons.</p>
        </div>
        <div class="grid grid-cols-1 gap-6 mt-8 md:gap-8 sm:grid-cols-2">
            <div class="relative overflow-hidden bg-white rounded-lg shadow-lg">
                <div class="px-6 py-8">
                    <h3 class="text-2xl font-semibold">Notre équipe</h3>
                    <p class="mt-4 text-gray-600">Nous sommes une équipe de quatre étudiants en informatique passionnés
                        par le développement web et la création de solutions innovantes.</p>
                    <p class="mt-4 text-gray-600">Notre mission est de fournir des services de haute qualité qui
                        répondent aux besoins technologiques de nos clients.</p>
                </div>
                <div class="px-6 mt-6">
                    <h4 class="text-lg font-semibold">Nos Services</h4>
                    <ul class="mt-4 space-y-3">
                        <li class="flex items-center space-x-3">
                            <x-icons.check-circle class="w-6 h-6 text-violet-500" />
                            <span class="text-gray-700">Éducation et formation</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-icons.check-circle class="w-6 h-6 text-violet-500" />
                            <span class="text-gray-700">Conseils de santé et de style de vie </span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-icons.check-circle class="w-6 h-6 text-violet-500" />
                            <span class="text-gray-700">Gestion des relations clients</span>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center my-8">
                    <a href="{{ route('about') }}"
                        class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white transition duration-150 ease-in-out border border-transparent rounded-md shadow-sm bg-violet-600 hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-violet-500">
                        En savoir plus
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-center bg-white rounded-lg shadow-lg">
                <!-- Make sure the div container for the image takes full height -->
                <div class="w-full h-full">
                    <!-- Add 'object-cover' and 'h-full' to the image -->
                    <img src="{{ asset('assets/img/compare-after.jpg') }}" alt="Notre équipe"
                        class="object-cover w-full h-full rounded-lg">
                </div>
            </div>
        </div>
    </div>
</section>
