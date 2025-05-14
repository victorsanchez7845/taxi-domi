@extends('layout.master')

@push("push-top")
     <link href="{{ mix('/assets/css/process/payment/index.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/payment/index.min.css') }}" rel="stylesheet">
    
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.payment.paypal.public') }}&currency={{ $data['config']['currency'] }}&components=buttons&disable-funding=paylater,venmo"></script>
    @if(false)
        <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.payment.paypal.public') }}&buyer-country=MX&currency={{ $data['config']['currency'] }}&components=buttons" data-sdk-integration-source="developer-studio"></script>
    @endif
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
    <script>
        const stripe_public_key = `{!! config('services.payment.stripe.public') !!}`;
        const stripe_order = `{!! $stripe_id !!}`;

        const paypal_public_key = `{!! config('services.payment.paypal.public') !!}`;
        const paypal_order = `{!! $paypal_id !!}`;
        
        let time = `{!! $data['config']['creation_date'] !!}`;
        let uuid = `{!! $uuid !!}`;
    </script>

    <script defer src="{{ mix('/assets/js/process/payment.min.js') }}"></script>
@endpush

@section('content')
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="container main-items">
        <div class="wrapper">
            <div class="left">

                <div class="elements">
                    <div class="top">
                        <h2>@lang('reservations/payment.title_payment_method')</h2>
                        <button id="counter">@lang('reservations/payment.pay_now') <span>(00:00:00)</span></button>
                        @if(false)
                            <p>Your booking may have been canceled because you took too long to submit payment</p>
                        @endif
                    </div>
                    <div class="items">

                        <div class="element active" data-type="stripe">
                            <div class="top">
                                <h3>@lang('reservations/payment.credit_debit_card')</h3>
                                <div>
                                    <img src="/assets/img/payments/AMEX.png" width="24" height="16" alt="" title="" loading="lazy">
                                    <img src="/assets/img/payments/MC.png" width="24" height="16" alt="" title="" loading="lazy">
                                    <img src="/assets/img/payments/VISA.png" width="24" height="16" alt="" title="" loading="lazy">
                                    <img src="/assets/img/payments/JCB.png" width="24" height="16" alt="" title="" loading="lazy">
                                    <img src="/assets/img/payments/UNIONPAY.png" width="24" height="16" alt="" title="" loading="lazy">
                                    <img src="/assets/img/payments/DINERS.png" width="24" height="16" alt="" title="" loading="lazy">
                                    <img src="/assets/img/payments/DISCOVER.png" width="24" height="16" alt="" title="" loading="lazy">                                        
                                </div>
                            </div>
                            <div class="bottom">
                                <div id="strype-payment-element"></div>
                                <div id="stripeErrorDiv" class="error"></div>
                                <img src="/assets/img/payments/powered_by_stripe.png" width="135" alt="" title="" loading="lazy">

                                <button class="btn" id="PaymentButton">@lang('reservations/payment.pay') {{ $data['config']['currency'] }}${{ number_format( $data['payments']['pending'],2 ) }}</button>
                            </div>
                        </div>

                        <div class="element" data-type="paypal">
                            <div class="top">
                                <h3>PayPal</h3>
                                <div>
                                    <img src="/assets/img/payments/AMEX.png" width="24" height="16" alt="" title="" loading="lazy">
                                    <img src="/assets/img/payments/VISA.png" width="24" height="16" alt="" title="" loading="lazy">
                                    <img src="/assets/img/payments/MC.png" width="24" height="16" alt="" title="" loading="lazy">
                                </div>
                            </div>
                            <div class="bottom">                                    
                                <div id="paypal-payment-element"></div>
                                <div id="paypalErrorDiv" class="error"></div>
                                <img src="/assets/img/payments/powered_by_paypal.png" width="135" alt="" title="" loading="lazy">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="right">
                <div class="information">
                    <div class="top">
                        <h2>@lang('reservations/payment.booking_info')</h2>
                    </div>
                    <div class="middle">
                        @foreach($data['items'] as $key => $value)
                            <div class="item">
                                <p>{{ $value['code'] }}</p>
                                <p>{{ $value['from']['name'] }} <span>@lang('reservations/payment.pickup_time'): {{ date('H:i, m d', strtotime($value['pickup'])) }}</span></p>                            
                                <p>{{ $value['to']['name'] }}
                                    @if( $value['is_round_trip'] == true )
                                        <span>@lang('reservations/payment.departure_time'): {{ date('H:i, m d', strtotime($value['departure_pickup'])) }}</span>
                                    @endif
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div class="bottom">
                        <h2>@lang('reservations/payment.customer_info')</h2>
                        <p>@lang('reservations/payment.name'): {{ $data['client']['first_name'] }} {{ $data['client']['last_name'] }}</p>
                        <p>@lang('reservations/payment.phone'): {{ $data['client']['phone'] }}</p>
                        <p>Email: {{ $data['client']['email'] }}</p>
                    </div>
                    <div class="margin">
                        <div class="one"></div>
                        <div class="two"></div>
                        <div class="three"></div>
                    </div>
                    <div class="price">
                        <p>Total <span>{{ $data['config']['currency'] }}${{ number_format( $data['payments']['pending'],2 ) }}</span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection