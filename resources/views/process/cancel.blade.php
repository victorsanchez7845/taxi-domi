@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/cancel.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/cancel.min.css') }}" rel="stylesheet">   
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="container cancel-content">
        <div class="left">
            @if(app()->getLocale() == "es")
                <h1>Lo sentimos, algo salió mal :(</h1>
                <p>Tu transacción no fue aprobada, podemos ayudarte ¡contáctanos!</p>
            @else
                <h1>Sorry, something went wrong :(</h1>
                <p>Your transaction was not approved, we can help you, contact us!</p>
            @endif
            <div class="one">
                <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}" class="link">{{ config('services.email') }}</a>
                @if(app()->getLocale() == "es")
                    <p>Llámanos al</p>
                @else
                    <p>Llámanos al</p>
                @endif                
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="{{ config('services.phone.MX') }}" class="link">{{ config('services.phone.MX') }}</a>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" title="{{ config('services.phone.US') }}" class="link">{{ config('services.phone.US') }}</a>
            </div>
            <div class="two">
                @if(app()->getLocale() == "es")
                    <a href="@lang('link.home')" title="Ir al inicio">Ir al inicio</a>
                    <a href="@lang('link.reservation')" title="Ver mi reservación">Ver mi reservación</a>
                @else
                    <a href="@lang('link.home')" title="Go home">Go home</a>
                    <a href="@lang('link.reservation')" title="View my reservation">View my reservation</a>
                @endif
            </div>
        </div>
        <div class="right">
            <picture>                
                <source srcset="/assets/img/general/cancel.webp" type="image/webp">
                <img src="/assets/img/general/cancel.png" alt="Error al confirmar tu reservación" title="Error al confirmar tu reservación" width="295" height="285">
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection