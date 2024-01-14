{{-- <!-- Begin mobile main menu -->
<nav class="sr-only mmm">
    <div class="mmm-content">
        <ul class="mmm-list">
            <li>
                <a href="index.html">Acceuil</a>
            </li>
            <li>
                <a href="about-us.html">A propos</a>
            </li>
            <li>
                <a href="services.html">Pages</a>
            </li>
            <li>
                <a href="typography.html">Contact</a>
            </li>
            <li>
                <a href="/login">FAQs</a>
            </li>
            <li>
                <a href="/login">Login/Register</a>
            </li>

        </ul>
    </div
</nav> --}}

<header class="header header-minimal">
    <nav class="fixed top-0 z-10 w-full bg-white">
        <div class="container px-8 mx-auto">
            <div class="z-10 flex items-center justify-between flex-nowrap max-h-24">
                <!-- Header visible on medium screens (md) and larger -->
                <div class="flex justify-center space-x-8">
                    <a href="{{ route('welcome') }}" class="block" title="PathSoft">
                        <img class="h-auto max-h-24" src="{{ asset('assets/img/Fichier 16.png') }}" alt="PathSoft">
                    </a>
                    @auth
                        <div class="flex items-center">
                            <a class="text-violet-800" href="{{ route('quizzes.index') }}" title="Quizzes">
                                Quizzes
                            </a>
                        </div>
                    @endauth
                    @admin()
                        <div class="flex items-center">
                            <a class="text-violet-800" href="{{ route('admin-dashboard') }}" title="Dashboard">
                                Dashboard
                            </a>
                        </div>
                    @endadmin

                    @conseiller()
                        <div class="flex items-center">
                            <a class="text-violet-800" href="{{ route('conseiller-dashboard') }}" title="Dashboard">
                                Dashboard
                            </a>
                        </div>
                    @endconseiller

                </div>

                <!-- Navigation visible on medium screens (md) and larger -->
                <div class="items-center justify-end hidden md:flex">
                    <ul class="flex items-center space-x-4">
                        <li>
                            <a class="text-violet-800" href="{{ route('welcome') }}" data-title="Acceuil">Acceuil</a>
                        </li>
                        <li>
                            <a class="text-violet-800" href="{{ route('about') }}" data-title="A propos">A
                                propos</a>
                        </li>
                        <li>
                            <a class="text-violet-800" href="{{ route('conseils') }}" data-title="Conseils">
                                Conseils
                            </a>
                        </li>
                        <li>
                            <a class="text-violet-800" href="{{ route('contact') }}" data-title="Contact">
                                Contact
                            </a>
                        </li>
                        <li>
                            <a class="text-violet-800" href="{{ route('conseillers') }}" data-title="Contact">
                                Team
                            </a>
                        </li>
                        <li>
                            <a class="text-violet-800" href="{{ route('faq') }}" data-title="FAQs"
                                class="text-violet-800">FAQs
                            </a>
                        </li>
                        <li>
                            @auth
                                <!-- Dropdown for logged-in users -->
                                <div class="relative">
                                    <!-- Trigger for dropdown -->
                                    <button class="flex items-center space-x-2" id="user-menu-button" aria-expanded="false"
                                        aria-haspopup="true">
                                        <div
                                            class="flex items-center justify-center w-10 h-10 font-medium text-white uppercase rounded-full bg-violet-500">
                                            {{ Auth::user()->initials }} <!-- Display user initials here -->
                                        </div>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div class="absolute right-0 w-48 py-1 mt-2 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1" hidden>
                                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700"
                                            role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                        <!-- Add other menu items here -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit"
                                                class="block w-full px-4 py-2 text-sm text-left text-gray-700"
                                                role="menuitem" tabindex="-1" id="user-menu-item-2"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">Sign
                                                out</button>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}" data-title="Login/Register"
                                    class="text-violet-800">Login/Register</a>
                            @endauth
                        </li>
                    </ul>
                </div>


                <!-- Button for mobile menu, visible on small screens (sm) and hidden on medium screens (md) and larger -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="mobile-menu-button">
                        <!-- Menu button icon or SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                            <path
                                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>
