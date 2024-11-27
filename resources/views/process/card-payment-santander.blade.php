@php
    $total = $rez['sales']['total'];
    $currency = "MXN";
    if($rez['config']['currency'] == "USD"):
        $total = number_format( ( $total * $rez['config']['payment_exchange_rate']['USD_MXN'] ) , 2, '.', '');        
    endif;
@endphp 

@extends('layout.master')
@push("push-top")
    <link href="{{ mix('/assets/css/process/card-payment-mit.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/card-payment-mit.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.checkout',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])
    
    <div class="container payment-container">
        <div class="left">
            <div class="top">
                <h1>@lang('quote/payment.title') <span>{{ $rez['status'] }}</span></h1>
                <h2>@lang('quote/payment.hi'), {{ $rez['client']['first_name'] }}</h2>
                <div>
                    <p><strong>@lang('quote/payment.phone')</strong>: {{ $rez['client']['phone'] }}</p>
                    <p><strong>E-mail</strong>: {{ $rez['client']['email'] }}</p>
                </div>
            </div>
    
            <div class="resume">
                <p>Total</p>
                <p>${{ $total }} {{ $currency }}</p>
            </div>
    
            <div class="items">
                @foreach ($rez['items'] as $key => $value)                    
                <div class="item">
                    <div class="one">
                        <h2>@lang('quote/payment.travel_information')</h2>
                        <h3>@lang('quote/payment.reservation_code'): <strong>{{ $key }}</strong></h3>
                    </div>
                    <div class="two">
                        <div>
                            <img src="/assets/img/svg/location.svg">
                            <p>@lang('quote/payment.type_of_service') <span>{{ (( $value['is_round_trip'] == 0 )? __('quote/payment.one_way') : __('quote/payment.round_trip') ) }}</span></p>
                        </div>
                        <div>
                            <img src="/assets/img/svg/location-tick.svg">
                            <p>@lang('quote/payment.passengers') <span>{{ $value['passengers'] }} Pax</span></p>
                        </div>
                    </div>
                    <div class="three">
                        <div class="one">
                            <p>@lang('quote/payment.leaving_from')</p>
                            <p>{{ $value['from']['name'] }}</p>
                        </div>
                        <div class="two">
                            <img src="/assets/img/svg/loader-points.svg" width="20" height="20" alt="" title="" loading="lazy">
                        </div>
                        <div class="three">
                            <p>@lang('quote/payment.going_to')</p>
                            <p>{{ $value['to']['name'] }}</p>
                        </div>
                    </div>
                    <div class="four">
                        @if(!empty( $value['flight_number'] ))
                            <p>@lang('quote/payment.flight_number') <span>{{ $value['flight_number'] }}</span></p>
                        @endif
                        <p>@lang('quote/payment.pickup') <span>{{ date("Y-m-d", strtotime($value['pickup'])) }} @ {{ date("H:i", strtotime( $value['pickup'] )) }}</span></p>
                        @if( !empty( $value['departure_pickup'] ) )
                            <p>@lang('quote/payment.departure') <span>{{ date("Y-m-d", strtotime($value['departure_pickup'])) }} @ {{ date("H:i", strtotime( $value['departure_pickup'] )) }}</span></p>
                        @endif
                    </div>
                    <div class="five"></div>
                </div>
                @endforeach
                <div class="badges">
                    <div class="payment">
                        @if(app()->getLocale() == "en")
                            <p>If you have already made your payment, you can check your reservation details click on the next button.</p>                        
                            <a href="@lang('link.quote_reservation_detail')?email={{ $rez['client']['email'] }}&code={{ reset($rez['items'])['code'] }}" title="I have already made my payment">I have already made my payment</a>                        
                        @else
                            <p>Si ya ha efectuado el pago, puede comprobar los detalles de su reserva pulsando el siguiente botón.</p>
                            <a href="@lang('link.quote_reservation_detail')?email={{ $rez['client']['email'] }}&code={{ reset($rez['items'])['code'] }}" title="Ya realice mi pago">Ya realice mi pago</a>                        
                        @endif
                    </div>
                    <div class="payment_error">
                        @if(app()->getLocale() == "en")
                            <p>If you have an error with the payment form click on the following button.</p>
                            <a href="@lang('link.payment')" class="btn" title="Update form">Update form</a>
                        @else
                            <p>Si tienes un error con el formulario de pago da clic en el siguiente botón.</p>
                            <a href="@lang('link.payment')" class="btn" title="Actualizar formulario">Actualizar formulario</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            @if(isset( $bank['url'] ))
                <iframe src="{{ $bank['url'] }}"></iframe>
            @endif
            <img src="/assets/img/payments/card-options.png">
        </div>
    </div>
    
    
    @include('layout.footer.checkout')
@endsection