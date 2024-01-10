<section class="relative h-screen bg-center bg-no-repeat bg-cover" style="background-image: url('{{ $imageUrl }}');">
    <div class="container flex items-center justify-end h-full px-4 mx-auto">
        <div class="w-1/2 text-center text-white hero-content">
            <h1 class="mb-4 font-bold text-purple-900 text-7xl">{{ $title }}</h1>
            <p class="text-xl text-black">{{ $text }}</p>
        </div>
    </div>
    <svg class="absolute bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
        style="position: absolute; bottom: 0; left: 0; width: 100%;">
        <defs>
            <linearGradient id="wave-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color: rgba(168, 138, 230, 0.7); stop-opacity: 1" />
                <stop offset="25%" style="stop-color: rgba(142, 106, 161, 0.5); stop-opacity: 1" />
                <stop offset="50%" style="stop-color: rgba(198, 160, 218, 0.3); stop-opacity: 1" />
                <stop offset="75%" style="stop-color: rgba(205, 174, 221, 0.5); stop-opacity: 1" />
                <stop offset="100%" style="stop-color: rgba(217, 190, 232, 0.7); stop-opacity: 1" />
            </linearGradient>
        </defs>
        <path fill="url(#wave-gradient)" fill-opacity="1"
            d="M0,192L60,181.3C120,171,240,149,360,165.3C480,181,600,235,720,229.3C840,224,960,160,1080,133.3C1200,107,1320,117,1380,122.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
</section>
