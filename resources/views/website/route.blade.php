@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="preload" as="style">
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    @include('layout.header.general', [
        'link' => \App\Traits\GeneralTrait::getAlternate($seo),
        'active' => 4
    ])

    <div class="container main-content">
        <div class="left">
            <x-bookingbox/>
        </div>

        <div class="right">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>

            @if(app()->getLocale() == "es")
                <h1>{{ $routeNameEs }}</h1>
                <h2>Transporte privado con Taxi Dominicana</h2>
                <p>Reserva tu traslado privado con Taxi Dominicana de forma rápida, segura y confiable. Ofrecemos transporte cómodo para pasajeros individuales, familias y grupos.</p>
                <p>Nuestros conductores profesionales te llevarán a tu destino con puntualidad, atención personalizada y tarifas claras.</p>
            @else
                <h1>{{ $routeNameEn }}</h1>
                <h2>Private transportation with Taxi Dominicana</h2>
                <p>Book your private transfer with Taxi Dominicana quickly, safely and reliably. We provide comfortable transportation for solo travelers, families and groups.</p>
                <p>Our professional drivers will take you to your destination with punctual service, personal attention and clear rates.</p>
            @endif
        </div>
    </div>

    @include('layout.footer.general')
@endsection