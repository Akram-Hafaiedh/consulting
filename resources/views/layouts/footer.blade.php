<footer class="px-6 py-8 text-white bg-gradient-to-r from-purple-200 to-purple-500">
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-between">
            <div class="w-full mb-6 md:w-1/4 md:mb-0">
                <a href="{{ route('welcome') }}" class="flex items-center justify-center md:justify-start"
                    title="PathSoft">
                    <img class="w-[80px] h-auto" src="{{ asset('assets/img/Fichier 16.png') }}" alt="PathSoft">
                </a>
            </div>
            <div class="w-full mb-6 md:w-1/4 md:mb-0">
                <h3 class="mb-6 text-xl font-semibold text-violet-900">Services</h3>
                <ul>
                    <li><a class="hover:text-violet-900" href="{{ route('conseils') }}">Conseils eductionnels</a></li>
                    <li><a class="hover:text-violet-900" href="{{ route('conseils') }}">Conseils sanitaires</a></li>
                    <li><a class="hover:text-violet-900" href="{{ route('conseils') }}">Conseils relationnels</a></li>
                </ul>
            </div>
            <div class="w-full mb-6 md:w-1/4 md:mb-0">
                <h3 class="mb-6 text-xl font-semibold text-violet-900">Pages</h3>
                <ul>
                    <li><a class="hover:text-violet-900" href="{{ route('conseils') }}">Conseillers</a></li>
                    <li><a class="hover:text-violet-900" href="{{ route('login') }}">Rendez-Vous</a></li>
                    <li><a class="hover:text-violet-900" href="{{ route('login') }}">Chat</a></li>
                </ul>
            </div>
            <div class="w-full mb-6 space-y-4 md:w-1/4 md:mb-0">
                <div>
                    <h3 class="text-xl font-semibold text-violet-900">A propos nous</h3>
                    <ul>
                        <li><a class="hover:text-violet-900" href="{{ route('about') }}">Qui nous sommes</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-violet-900">Aide</h3>
                    <ul>
                        <li><a class="hover:text-violet-900" href="{{ route('faq') }}">FAQs</a></li>
                        <li><a class="hover:text-violet-900" href="{{ route('contact') }}">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="">
            <div class="px-4 py-4 mx-auto ">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="w-full mb-4 md:w-auto md:mb-0">
                        <div class="flex justify-center space-x-4 md:justify-end">
                            <a href="#" class="text-white hover:text-gray-900">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-white fill-white hover:fill-violet-900 hover:text-gray-900">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" height="16" width="10"
                                    viewBox="0 0 320 512">
                                    <path
                                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                </svg>
                            </a>
                            <a href="#" class="text-white fill-white hover:fill-violet-900 hover:text-gray-900">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                            <a href="#" class="text-white fill-white hover:fill-violet-900 hover:text-gray-900">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="w-full mb-4 md:w-auto md:mb-0">
                        <nav>
                            <ul class="flex space-x-4">
                                <li><a href="{{ route('privatePolicy') }}" class="hover:text-violet-900">Privacy
                                        Policy</a></li>
                                <li><a href="{{ route('termsAndConditions') }}" class="hover:text-violet-900">Terms of
                                        Use</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="w-full md:w-auto">

                        <p class="mt-4 text-center md:text-right">© {{ date('Y') }} PathSoft. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
