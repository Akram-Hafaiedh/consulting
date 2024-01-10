@extends('layouts.app')



@section('content')
    <div class="main-inner">
        <x-hero :image-url="asset('assets/img/slide.png')" :title="'Cultivez votre bien-être au quotidien'" />

        <div class="section-bgc intro">
            <div class="intro-item intro-item-type-1"
                style="position: relative; background-image: url({{ asset('assets/img/slide.png') }});">
                <!-- Your image content goes here -->
            </div>
        </div>

        {{-- <section class="sm:mb-32">
            <div class="px-4 py-6 mx-auto bg-gray-100 max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold text-center">About us</h2>
                <div class="flex flex-col mt-6 space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">

                    <div
                        class="relative flex items-center justify-center w-full max-w-lg p-4 mx-auto bg-white rounded shadow-md sm:w-1/2">
                        <div class="h-full">
                            <img src="{{ asset('assets/img/friends (1).jpg') }}" alt="Image 1"
                                class="absolute inset-0 object-cover w-full h-full transition-transform duration-300 ease-in-out rounded ">
                            <img src="{{ asset('assets/img/friends (2).jpg') }}" alt="Image 2"
                                class="absolute hidden object-cover w-1/3 transition-transform duration-300 ease-in-out transform translate-x-2 translate-y-2 rounded sm:w-1/4 sm:translate-x-4 sm:translate-y-4 lg:w-1/5 lg:translate-x-6 lg:translate-y-6 -left-10 -bottom-20 sm:block">

                        </div>
                    </div>
                    <div class="flex flex-col items-center p-4 bg-white rounded shadow-md sm:w-1/2">
                        <h3 class="mt-2 text-xl font-bold">Qui somme nous?</h3>
                        <p class="mt-2 text-center">Nous sommes une équipe de 4 étudiants en informatique en 3ème année.</p>
                        <p class="mt-2 text-center">Nous avons créé ce site web pour mettre en valeur nos services et
                            compétences.</p>
                        <p class="mt-2 text-center">Nous proposons une large gamme de services pour répondre à vos besoins.
                        </p>
                        <p class="mt-2 text-center">Contactez-nous dès aujourd'hui pour une consultation personnalisée.</p>
                        <ul class="px-6 my-5 mr-auto space-y-4">
                            <li class="flex items-center space-x-4 fill-violet-400">
                                <x-svg.check-circle-icon class="w-7 h-7" />
                                <span> Education</span>
                            </li>
                            <li class="flex items-center space-x-4 fill-violet-400">
                                <x-svg.check-circle-icon class="w-7 h-7" />
                                <span> Santé</span>
                            </li>
                            <li class="flex items-center space-x-4 fill-violet-400">
                                <x-svg.check-circle-icon class="w-7 h-7" />
                                <span> Relations</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}

        <x-who-we-are />

        {{-- <section class="section">
            <div class="container">
                <div class="row">
                    <header class="col-12">
                        <div class="section-heading heading-center">

                    </header>
                    <div class="col-lg-6 col-md-6 col-12 item">


                        <div class="content">
                            <img class="i1" src="{{ asset('assets/img/friends (1).jpg') }}" alt="">
                            <img class="i2" src="{{ asset('assets/img/friends (2).jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 item">

                        <div class="btn-group justify-content-center justify-content-md-start">
                            <a href="https://www.templatemonster.com/website-templates/pathsoft-it-solutions-for-your-business-services-website-template-83414.html?utm_campaign=blog_site_KovalWeb&utm_source=KovalWeb&utm_medium=referral&aff=KovalWeb"
                                class="btn btn-border btn-with-icon btn-small ripple">
                                <span>A propos</span>
                                <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                    <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                </svg>
                            </a>

                        </div>


                        <br>
                        <h3>Qui Sommes Nous ?</h3>
                        <p>Nous sommes une équipe de 4 étudiants en 3ème année en informatique.<br> Nous avons
                            crée ce site afin de pouvoir avoir une idée de nos services <br> Nous avons crée ce
                            site afin de pouvoir avoir une idée de nos services <br> Nous avons crée ce site afin
                            de pouvoir avoir une idée de nos services.
                            <br> Nous avons crée ce site afin de pouvoir avoir une idée de nos services
                            <br>

                        <p>
                            <img src="{{ asset('assets/img/icons/cocher (1).png') }}" class="small-icon" alt="Icon">
                            Education

                            <br>
                            <img src="{{ asset('assets/img/icons/cocher (1).png') }}" class="small-icon" alt="Icon">
                            Santé

                            <br>
                            <img src="{{ asset('assets/img/icons/cocher (1).png') }}" class="small-icon" alt="Icon">
                            Relation
                        </p>

                        <div class="btn-group justify-content-center justify-content-md-start">
                            <a href="https://www.templatemonster.com/website-templates/pathsoft-it-solutions-for-your-business-services-website-template-83414.html?utm_campaign=blog_site_KovalWeb&utm_source=KovalWeb&utm_medium=referral&aff=KovalWeb"
                                class="btn btn-border btn-with-icon btn-w240 ripple"
                                style="background-color: #B38EFB; color: white">
                                <span>Voir plus </span>
                            </a>

                        </div>
                    </div>

                    </p>

                </div>

            </div>
        </section> --}}

        <x-services />


        <x-c-t-a />

        {{-- <x-banner /> --}}



        <section class="container py-24 mx-auto text-center">
            @php
                $teamForPage = [
                    [
                        'name' => 'Amine Fares',
                        'field' => 'Education',
                        'position' => 'Head of Educational Outreach',
                        'image' => 't2.jpg', // Replace with actual image file
                    ],
                    [
                        'name' => 'Sara Ben Ammar',
                        'field' => 'Relations',
                        'position' => 'Client Relations Specialist',
                        'image' => 't1.jpg', // Replace with actual image file
                    ],
                    [
                        'name' => 'Khaled Ayari',
                        'field' => 'Santé',
                        'position' => 'Health Services Manager',
                        'image' => 't3.jpg', // Replace with actual image file
                    ],
                    [
                        'name' => 'Leila Gharbi',
                        'field' => 'Education',
                        'position' => 'Customer Service Director',
                        'image' => 't4.jpg', // Replace with actual image file
                    ],
                    // ... additional team members as needed
                ];
            @endphp

            <x-team :team-members="$teamForPage" />

            <a href="{{ route('conseillers') }}"
                class="inline-block px-4 py-2 mt-8 font-bold text-white transition-colors duration-200 rounded-lg bg-violet-500 hover:bg-violet-600">
                Voir les membres
            </a>

        </section>




        {{--
        <section class="section">
            <div class="container">
                <div class="row">

                    <div class="grid-cols-12 lg:grid-cols-6 md:grid-cols-6 item">
                        <div class="content">
                            <div class="btn-group justify-content-center justify-content-md-start">
                                <a href="https://www.templatemonster.com/website-templates/pathsoft-it-solutions-for-your-business-services-website-template-83414.html?utm_campaign=blog_site_KovalWeb&utm_source=KovalWeb&utm_medium=referral&aff=KovalWeb"
                                    class="btn btn-border btn-with-icon btn-small ripple">
                                    <span style="font-size: 20px"> Rendez-vous</span>
                                    <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
                                        <use xlink:href="assets/img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                            </div>

                            <h2>Prendre un rendez-vous pour consulter notre conseiller en ligne</h2>

                            <div class="counter-min-info-container">
                                <div class="counter-min-info" style="background-color: #dbc8fd">
                                    <img src="{{ asset('assets/img/telephone.png') }}" alt="Telephone Icon"
                                        class="counter-min-icon">
                                    <b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +216 50 000 000 </b>
                                </div>
                                <br>
                                <div class="counter-min-info" style="background-color: #dbc8fd">
                                    <img src="{{ asset('assets/img/telephone.png') }}" alt="Telephone Icon"
                                        class="counter-min-icon">
                                    <b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; +216 50 000 000 </b>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12 item">
                        <div class="col-xl-15 col-md-12 content-item">
                            <form action="#!" method="post" class="form-submission contact-form contact-form-padding"
                                novalidate>
                                <input type="hidden" name="Subject" value="Contact form">
                                <div class="row gutters-default">
                                    <div class="col-12">
                                        <h3>Contact Form</h3>
                                    </div>
                                    <!-- Input Fields -->
                                    <div class="col-xl-6 col-sm-6 col-12">
                                        <!-- Full Name -->
                                        <div class="form-field">
                                            <label for="contact-name" class="form-field-label">Full Name</label>
                                            <input type="text" class="form-field-input" name="Name" value=""
                                                autocomplete="off" id="contact-name" required
                                                data-pristine-required-message="This field is required.">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6 col-12">
                                        <!-- Phone Number -->
                                        <div class="form-field">
                                            <label for="contact-phone" class="form-field-label">Phone Number</label>
                                            <input type="tel" class="form-field-input mask-phone" name="Phone"
                                                value="" autocomplete="off" id="contact-phone" required
                                                data-pristine-required-message="This field is required.">
                                        </div>
                                    </div>
                                    <!-- Email Address -->
                                    <div class="col-xl-6 col-12">
                                        <div class="form-field">
                                            <label for="contact-email" class="form-field-label">Email
                                                Address</label>
                                            <input type="email" class="form-field-input" name="Email" value=""
                                                autocomplete="off" id="contact-email" required
                                                data-pristine-required-message="This field is required."
                                                data-pristine-email-message="Please enter a valid email address.">
                                        </div>
                                    </div>
                                    <!-- Your Message -->
                                    <div class="col-12">
                                        <div class="form-field">
                                            <label for="contact-message" class="form-field-label">Your
                                                Message</label>
                                            <textarea name="Message" class="form-field-input" id="contact-message" cols="2" rows="5"></textarea>
                                        </div>
                                        <!-- Form Buttons -->
                                        <div class="form-btn"
                                            style="display: flex; justify-content: center; align-items: center;">
                                            <button type="submit" class="btn btn-w240 ripple"><span>Prendre un
                                                    rendez-vous</span></button>
                                        </div>
                                        <br>
                                        <!-- Additional Buttons -->
                                        <div class="row"
                                            style="display: flex; justify-content: center; align-items: center;">
                                            <div class="form-btn">
                                                <button type="submit" class="btn btn-w240 ripple"><span>Prendre un
                                                        rendez-vous</span></button>
                                                &nbsp; &nbsp;
                                                <button type="submit" class="btn btn-w240 ripple"><span>Prendre un
                                                        rendez-vous</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}




        {{-- <section class="bg-white ">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16">
                <div class="p-8 mb-8 border border-gray-200 rounded-lg bg-gray-50 md:p-12">
                    <a href="#"
                        class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md  dark:text-blue-400 mb-2">
                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 14">
                            <path
                                d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                        </svg>
                        Tutorial
                    </a>
                    <h1 class="mb-2 text-3xl font-extrabold text-gray-900 md:text-5xl">How to quickly
                        deploy a static website</h1>
                    <p class="mb-6 text-lg font-normal text-gray-500 dark:text-gray-400">Static websites are now used to
                        bootstrap lots of websites and are becoming the basis for a variety of tools that even influence
                        both web designers and developers.</p>
                    <a href="#"
                        class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Read more
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="grid gap-8 md:grid-cols-2">
                    <div class="p-8 border border-gray-200 rounded-lg bg-gray-50 md:p-12">
                        <a href="#"
                            class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md  dark:text-green-400 mb-2">
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 18 18">
                                <path
                                    d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                            </svg>
                            Design
                        </a>
                        <h2 class="mb-2 text-3xl font-extrabold text-gray-900 ">Start with Flowbite Design
                            System</h2>
                        <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">Static websites are now used
                            to bootstrap lots of websites and are becoming the basis for a variety of tools that even
                            influence both web designers and developers.</p>
                        <a href="#"
                            class="inline-flex items-center text-lg font-medium text-blue-600 dark:text-blue-500 hover:underline">Read
                            more
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                    <div class="p-8 border border-gray-200 rounded-lg bg-gray-50 md:p-12">
                        <a href="#"
                            class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md   mb-2">
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15" />
                            </svg>
                            Code
                        </a>
                        <h2 class="mb-2 text-3xl font-extrabold text-gray-900 ">Best react libraries around
                            the web</h2>
                        <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">Static websites are now used
                            to bootstrap lots of websites and are becoming the basis for a variety of tools that even
                            influence both web designers and developers.</p>
                        <a href="#"
                            class="inline-flex items-center text-lg font-medium text-blue-600 dark:text-blue-500 hover:underline">Read
                            more
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}





        <section class="py-24 bg-white">
            <div class="container px-4 py-16 mx-auto lg:px-8 ">
                <h2 class="mb-6 text-3xl font-semibold lg:text-4xl">Foire aux questions (FAQ)</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-x-8">
                    <div class="py-8 md:py-0 md:px-4">
                        <h3 class="mb-4 text-xl font-semibold text-black">Comment utiliser notre service?</h3>
                        <p class="text-gray-500">Pour commencer, inscrivez-vous simplement sur notre site Web et suivez
                            les instructions pour configurer votre compte. C'est rapide et facile!</p>
                    </div>
                    <div class="py-8 border-purple-300 md:py-0 md:border-l md:px-4">
                        <h3 class="mb-4 text-xl font-semibold text-black">Quels modes de paiement acceptez-vous?</h3>
                        <p class="text-gray-500">Nous acceptons plusieurs modes de paiement, y compris les cartes de
                            crédit, PayPal, et les virements bancaires.</p>
                    </div>
                    <div class="py-8 md:py-0 md:px-4">
                        <h3 class="mb-4 text-xl font-semibold text-black">Puis-je annuler mon abonnement à tout moment?
                        </h3>
                        <p class="text-gray-500">Oui, vous pouvez annuler votre abonnement à tout moment dans les
                            paramètres de votre compte ou en contactant notre support client.</p>
                    </div>
                    <div class="py-8 border-purple-300 md:py-0 md:border-l md:px-4">
                        <h3 class="mb-4 text-xl font-semibold text-black">Offrez-vous un support technique?</h3>
                        <p class="text-gray-500">Oui, notre équipe de support technique est disponible pour répondre à vos
                            questions et vous aider avec tout problème que vous pourriez rencontrer.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
