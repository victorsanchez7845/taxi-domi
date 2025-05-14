@php
    $reviews = [
        "id" => reset($rez['items'])['code'],
        "email" => $rez['client']['email'],
        "time" => date("Y-m-d", strtotime( reset($rez['items'])['pickup'] )),
        "product" => reset($rez['items'])['service_type_name']
    ];
@endphp
@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/reservation-detail.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/reservation-detail.min.css') }}" rel="stylesheet">   
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.checkout',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="gray-container">
        <div class="container">                        
            @if(app()->getLocale() == "es")
                <h1>Datos de reservación</h1>
            @else
                <h1>Reservations data</h1>
            @endif
            <img src="/assets/img/svg/circle.svg" width="120" height="120" alt="" title="" loading="lazy">
            <div class="items">
                <div class="left">
                    <h3>{{ __('quote/reservation.hello') }}, {{ $rez['client']['first_name'] }} {{ $rez['client']['last_name'] }}</h3>
                    <ul>
                        <li class="one">{{ $rez['client']['phone'] }}</li>
                        <li class="two">{{ $rez['client']['email'] }}</li>
                    </ul>
                </div>
                <div class="right">
                    <h3>{{ __('quote/reservation.status_text') }}</h3>
                    <div>
                        <span>{{ $rez['status'] }}</span>
                        <a href="@lang('link.reservation')?logout=true">{{ __('quote/reservation.close_session') }}</a>
                    </div>
                </div>
            </div>
        </div>
        @if($rez['payments']['pending'] > 0)
            <div class="container">
                <div class="alert">
                    @if(app()->getLocale() == "en")
                        <p>If you have already made your payment and it is still not reflected, click on the button to update</p>
                        <a href="#" onclick="location.reload(); return false;" title="Update">Update</a>
                    @else
                        <p>Si ya ha realizado el pago y aún no se ha reflejado, haga clic en el botón para actualizar</p>
                        <a href="#" onclick="location.reload(); return false;" title="Actualizar">Actualizar</a>
                    @endif
                </div>
            </div>
        @endif
    </div>

    <div class="container information-section">
        <div class="left">
            
            <div class="rez-status">
                <p>{{ __('quote/reservation.status_text') }}</p>
                <p>{{ $rez['status'] }}</p>
            </div>

            
            @foreach ($rez['items'] as $key => $value)
                <div class="items">
                    <div class="element">
                        <p>{{ __('quote/reservation.reservation_code') }}:</p>
                        <p>{{ $key  }}</p>
                    </div>    
                    <div class="element">
                        <p>{{ __('quote/reservation.service') }}:</p>
                        <p>{{ $value['service_type_name']  }}</p>
                    </div>
                    <div class="element">
                        <p>{{ __('quote/reservation.passengers') }}:</p>
                        <p>{{ $value['passengers']  }}</p>
                    </div>
                    <div class="element">
                        <p>{{ __('quote/reservation.from') }}</p>
                        <p>{{ $value['from']['name']  }}</p>
                    </div>
                    <div class="element">
                        <p>{{ __('quote/reservation.to') }}</p>
                        <p>{{ $value['to']['name']  }}</p>
                    </div>
                    <div class="element">
                        <p>{{ __('quote/reservation.pickup_date') }}:</p>
                        <p>{{ $value['pickup']  }}</p>
                    </div>
                    @if($value['is_round_trip'] == true)
                        <div class="element">
                            <p>{{ __('quote/reservation.departure_date') }}:</p>
                            <p>{{ $value['departure_pickup']  }}</p>
                        </div>
                    @endif
                </div>             
            @endforeach
        </div>

        <div class="right">
            <h2>{{ __('quote/reservation.payment_methods') }}</h2>
            <div class="resume">
                <h2>Total: <span>${{ number_format($rez['sales']['total'],2) }} {{ $rez['config']['currency'] }}</span></h2>
                <p>X {{ sizeof($rez['items']) }} {{ __('quote/reservation.private_transportation') }}</p>
            </div>
            <div class="credit-cards">
                <img src="/assets/img/checkout/stripe.png" alt="Guaranteed safe and secure checkout" title="Guaranteed safe and secure checkout">
            </div>
            @if($rez['config']['is_cancelled'] == false && $rez['payments']['pending'] > 0)
                <a href="@lang('link.payment',['uuid' => $rez['config']['uuid']])" class="paypal" style="color:#16161D; font-size: 14pt; font-weight: bold;">Make Payment</a>
            @endif  
        </div>

    </div>

    @include('layout.footer.checkout')
@endsection