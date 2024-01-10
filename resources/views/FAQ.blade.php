@extends('layouts.app')

@section('content')
    <div>
        <x-hero :image-url="asset('assets/img/slide2-small.png')" :title="'Cultivez votre bien-être au quotidien'" />

        <section class="py-12">
            <div class="container px-4 mx-auto">
                <div class="mb-8 text-center">
                    <h2 class="text-3xl font-bold">Frequently Asked Questions</h2>
                </div>
                <div class="flex flex-wrap -mx-4">
                    @foreach ($faqs as $faq)
                        <div class="w-full px-4 mb-8 lg:w-1/2">
                            <div class="p-6 bg-white rounded-lg shadow-lg">
                                <h3 class="mb-4 text-xl font-bold">{{ $faq->question }}</h3>
                                <p class="text-gray-600">{{ $faq->answer }}</p>
                            </div>
                        </div>
                    @endforeach

                    <!-- Add more question-answer pairs as needed -->
                </div>
            </div>
        </section>


    </div>
@endsection
