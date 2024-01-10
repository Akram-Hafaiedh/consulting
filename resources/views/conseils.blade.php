@extends('layouts.app')

@section('content')
    <main class="my-8 main-inner">
        <x-hero :image-url="asset('assets/img/slide.png')" :title="'Cultivez votre bien-être au quotidien'" />

        <section class="container px-8 mx-auto">
            @foreach ($conseilsByType as $type => $conseils)
                <div class="mt-8">
                    <h2 class="mb-6 text-2xl font-bold text-gray-800">{{ ucfirst($type) }}</h2>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                        @foreach ($conseils as $conseil)
                            <x-conseil-single :title="$conseil->title" :description="$conseil->description" :icon="$conseil->icon" :type="$conseil->type" />
                        @endforeach
                    </div>
                </div>
            @endforeach

            {{-- {{ $conseilsByType->links() }} --}}
        </section>
    </main>
@endsection
