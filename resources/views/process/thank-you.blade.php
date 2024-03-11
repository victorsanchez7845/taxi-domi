@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/thank-you.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/thank-you.min.css') }}" rel="stylesheet">   
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="container thank-you-content">
        <div class="left">                        
            @if(app()->getLocale() == "es")
                <h1>Tu reservación ha sido confirmada :)</h1>
                <p>Hemos enviado un correo de confirmación, para más información por favor contáctanos.</p>
            @else
                <h1>Your reservation has been confirmed :)</h1>
                <p>We have sent you a confirmation email, for more information please contact us.</p>
            @endif
            <div class="one">
                <a href="mailto:{{ config('services.email') }}" title="{{ config('services.email') }}" class="link">{{ config('services.email') }}</a>
                @if(app()->getLocale() == "es")
                    <p>Llámanos al</p>
                @else
                    <p>Call us at</p>
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
                <source srcset="/assets/img/general/confirmation.webp" type="image/webp">
                <img src="/assets/img/general/confirmation.png" alt="Reservación confirmada" title="Reservación confirmada" width="295" height="285">
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection