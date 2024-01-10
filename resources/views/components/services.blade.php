<section class="container px-4 py-24 mx-auto bg-gray-100 sm:px-6 lg:px-8">
    <header class="w-full px-4 mb-10">
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-violet-500">Découvrez nos Parcours d'Apprentissage Interactifs</h1>
            <p class="mt-4 text-lg text-gray-600">Que vous souhaitiez élargir vos horizons éducatifs ou chercher des
                conseils en matière de santé et de bien-être, nos parcours d'apprentissage interactifs sont conçus pour
                vous guider à travers une mine d'informations. Chaque parcours est agrémenté de quiz captivants pour
                renforcer votre compréhension et mettre en pratique ce que vous avez appris.</p>
        </div>
    </header>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <!-- Each card is a grid item -->
        <div
            class="flex flex-col p-6 transition-shadow duration-300 ease-in-out bg-white rounded-lg shadow-lg hover:shadow-xl">
            <img src="{{ asset('assets/img/icons/livre-ouvert.png') }}" alt="Safe Shopping Icon" class="w-20 h-20 mx-auto">
            <h2 class="mt-4 text-xl font-bold text-gray-800">Parcours Éducatifs</h2>
            <p class="mt-2 text-gray-600">Découvrez de multiples filières éducatives et, à la fin de chaque section de
                conseil, évaluez vos connaissances avec un quiz.</p>
            <a href="{{ route('conseils') }}"
                class="inline-block px-6 py-2 mt-auto text-white transition-colors duration-200 ease-in-out rounded-lg bg-violet-500 hover:bg-violet-600">Voir
                Plus</a>
        </div>
        <div
            class="flex flex-col p-6 transition-shadow duration-300 ease-in-out bg-white rounded-lg shadow-lg hover:shadow-xl">
            <img src="{{ asset('assets/img/icons/sante.png') }}" alt="Safe Shopping Icon" class="w-20 h-20 mx-auto">
            <h2 class="mt-4 text-xl font-bold text-gray-800">Pacours Santé</h2>
            <p class="mt-2 text-gray-600">Explorez une diversité de recommandations dans le domaine de la santé et,
                pour chaque conseil, testez vos acquis à l'aide d'un quiz interactif.</p>
            <a href="{{ route('conseils') }}"
                class="inline-block px-6 py-2 mt-auto text-white transition-colors duration-200 ease-in-out rounded-lg bg-violet-500 hover:bg-violet-600">Voir
                Plus</a>
        </div>
        <div
            class="flex flex-col p-6 transition-shadow duration-300 ease-in-out bg-white rounded-lg shadow-lg hover:shadow-xl">
            <img src="{{ asset('assets/img/icons/main.png') }}" alt="Safe Shopping Icon" class="w-20 h-20 mx-auto">
            <h2 class="mt-4 text-xl font-bold text-gray-800">Relations</h2>
            <p class="mt-2 text-gray-600">Naviguez à travers un éventail de conseils pour enrichir vos relations
                interpersonnelles et, après chaque section, mettez en pratique vos nouvelles connaissances
                grâce à un quiz dédié.</p>
            <a href="{{ route('conseils') }}"
                class="inline-block px-6 py-2 mt-auto text-white transition-colors duration-200 ease-in-out rounded-lg bg-violet-500 hover:bg-violet-600">Voir
                Plus</a>
        </div>
        <!-- Repeat for other cards -->
    </div>
</section>
