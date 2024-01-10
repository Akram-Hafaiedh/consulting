@extends('layouts.app')

@section('content')
    <div>
        <x-hero :image-url="asset('assets/img/slide2-small.jpg')" :title="'Découvrez notre passion'" />

        <!-- End bread crumbs -->

        <x-who-we-are />

        <x-services />

        <section class="py-12">
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap -mx-4 space-y-4">
                    <div class="w-full px-4 mb-8">
                        <div class="text-center">
                            {{-- <div class="mb-2 text-sm font-semibold text-gray-600">quelques raisons</div> --}}
                            <h2 class="mb-4 text-3xl font-bold text-violet-500">Pourquoi nous choisir</h2>
                        </div>
                    </div>
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                            <div class="p-6 bg-white rounded-lg shadow-lg">
                                <div class="mb-4 text-xl font-bold">{{ $i }}</div>
                                <h3 class="mb-2 text-lg font-bold">Matériel de haute qualité</h3>
                                <p class="text-gray-600">Nous utilisons du matériel de pointe pour développer les
                                    applications les plus efficaces pour nos clients</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        <section class="container px-4 py-8 mx-auto">
            <div class="mx-auto ">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <div class="col-span-1 md:col-span-2 lg:col-span-4">
                        <div class="text-center">
                            {{-- <div class="text-sm text-gray-600 uppercase">Le meilleur</div> --}}
                            <h2 class="my-2 text-3xl font-bold sm:text-4xl text-violet-500">Nos clients</h2>
                            <p class="text-xl text-gray-700 ">Nos clients ont bouleversé des industries, ouvert de nouveaux
                                marchés
                                et
                                amélioré la vie de nombreuses personnes. Nous sommes privilégiés de travailler avec des
                                centaines
                                d'entreprises tournées vers l'avenir, y compris de nombreuses marques mondiales de premier
                                plan
                                dans le domaine du matériel, des logiciels et des produits de consommation.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                        <!-- Begin brands item -->
                        <div class="brands-item item-style">
                            <img src="{{ asset('assets/img/brands/circle.png') }}" alt="">
                        </div><!-- End brands item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                        <!-- Begin brands item -->
                        <div class="brands-item item-style">
                            <img src={{ asset('assets/img/brands/codelab.png') }} alt="">
                        </div><!-- End brands item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                        <!-- Begin brands item -->
                        <div class="brands-item item-style">
                            <img class="lazy" src={{ asset('assets/img/brands/earth.png') }} alt="">
                        </div><!-- End brands item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                        <!-- Begin brands item -->
                        <div class="brands-item item-style">
                            <img src="{{ asset('assets/img/brands/hexa.png') }}" alt="">
                        </div><!-- End brands item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                        <!-- Begin brands item -->
                        <div class="brands-item item-style">
                            <img src="{{ asset('assets/img/brands/lightai.png') }}" class="lazy" alt="">
                        </div><!-- End brands item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                        <!-- Begin brands item -->
                        <div class="brands-item item-style">
                            <img src="{{ asset('assets/img/brands/nirastate.png') }}" class="lazy" alt="">
                        </div><!-- End brands item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                        <!-- Begin brands item -->
                        <div class="brands-item item-style">
                            <img src="{{ asset('assets/img/brands/treva.png') }}" class="lazy" alt="">
                        </div><!-- End brands item -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-6 item">
                        <!-- Begin brands item -->
                        <div class="brands-item item-style">
                            <img src="{{ asset('assets/img/brands/zootv.png') }}" class="lazy" alt="">
                        </div><!-- End brands item -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
