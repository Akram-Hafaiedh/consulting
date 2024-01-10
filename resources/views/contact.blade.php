@extends('layouts.app')

@section('content')
    <div class="main-inner">
        <x-hero :image-url="asset('assets/img/b-3.png')" :title="'Contactez nous'" />
        <!-- End bread crumbs -->




        <x-contact-section title="Informations de contact" />



        <x-schedule />

        <!-- Begin map -->
        <div class="map">
            <iframe class="lazy"
                data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.1020346961877!2d-118.2916255847825!3d34.14373158058114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c0623fe71971%3A0xc829e89a5dcc767e!2zNDczMCBDcnlzdGFsIFNwcmluZ3MgRHIsIExvcyBBbmdlbGVzLCBDQSA5MDAyNywg0KHQv9C-0LvRg9GH0LXQvdGWINCo0YLQsNGC0Lgg0JDQvNC10YDQuNC60Lg!5e0!3m2!1suk!2sua!4v1621932036298!5m2!1suk!2sua"></iframe>
        </div><!-- End map -->

    </div>
@endsection
