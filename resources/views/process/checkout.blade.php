@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/checkout.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/checkout.min.css') }}" rel="stylesheet">
    <script>
        const item_config = {
            flight_required: `{!! (int) $data['places']['config']['flight_required'] !!}`,
            service_type: `{!! $quote['type'] !!}`
        };
    </script>
    <script src="https://js.stripe.com/v3/"></script>    
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>

    <script>
        const stripe = Stripe('pk_live_51PTwwLHTWfttKamJWgj0rpn2cxAntGeadaCDbZWqlzbDyG2puIFxNnprnxwDfNdVNKlYIthcXeXshSlFM5dKc9PB00WMAWPd1i');
        const elements = stripe.elements({
            clientSecret: `{!! $payments['data'] !!}`,
        });
        elements.update({locale: `{!! app()->getLocale() !!}`});

        const paymentElementOptions = {
            layout: {
                type: 'accordion',
                defaultCollapsed: false,
                radios: true,
                spacedAccordionItems: true
            },
            business: {
                name: "Caribbean Transfers"
            },
            paymentMethodOrder: ['card', 'apple_pay', 'google_pay']
        };

        const paymentElement = elements.create('payment', paymentElementOptions);
        paymentElement.mount("#payment-element");
    </script>
    <script src="{{ mix('/assets/js/process/checkout.min.js') }}" defer></script>
@endpush

@section('content')
    @include('layout.header.checkout',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])
    @php
        $time = [
            "one_way_date" => date("Y-m-d", strtotime($data['places']['one_way']['init']['time'])),
            "one_way_time" => date("H:i", strtotime($data['places']['one_way']['init']['time'])),
            "round_trip_date" =>  (( isset($data['places']['round_trip']['init']['time']) )? date("Y-m-d", strtotime($data['places']['round_trip']['init']['time'])) : '' ),
            "round_trip_time" => (( isset($data['places']['round_trip']['init']['time']) )? date("H:i", strtotime($data['places']['round_trip']['init']['time'])) : '' ),
        ];
    @endphp    

    <form class="container checkout-container" method="POST" action="@lang('link.quote_processing')" id="checkoutForm">
        @if(isset($_GET['code']))
        <div class="badge-error">
            <p><strong>{{ $_GET['code'] }}</strong>: {{ $_GET['message'] }}</p>
        </div>
        @endif

        <div class="left">

            <div class="arrival-information">
                <h1>Datos de <strong>Reservación</strong></h1>

                @if(app()->getLocale() == "es")
                    <h2><strong>Información</strong> de llegada</h2>
                @else
                    <h2><strong>Arrival</strong> information</h2>
                @endif

                <div class="{{ (( $data['places']['config']['flight_required'] == false )? 'two-columns' : '' ) }}">
                    <div>
                        <label>{{ __('quote/checkout.pickup_date') }}</label>
                        <input type="text" class="form-control" value="{{ $time['one_way_date'] }}" name="arrival_date" disabled>
                    </div>
                    <div>
                        <label>{{ __('quote/checkout.pickup_time') }}</label>
                        <input type="text" class="form-control" value="{{ $time['one_way_time'] }}" name="arrival_time" disabled>
                    </div>
                    @if($data['places']['config']['flight_required'])
                    <div>
                        <label>{{ __('quote/checkout.airline') }}</label>
                        <input type="text" class="form-control" name="arrival_airline" placeholder="{{ __('quote/checkout.airline_placeholder') }}" value="{{ $form['arrival_airline'] }}">
                    </div>
                    <div>
                        <label>{{ __('quote/checkout.flight_number') }}</label>
                        <input type="text" class="form-control" name="arrival_flight_number" placeholder="{{ __('quote/checkout.flight_number_placeholder') }}" value="{{ $form['arrival_flight_number'] }}">
                    </div>
                    @endif
                </div>
            </div>
    
            <div class="general-information">
                @if($quote['type'] == "RT")
                <h2>{{ __('quote/checkout.departure_information_title') }}</h2>
                <div class="return-information">
                    <div>
                        <label>{{ __('quote/checkout.departure_date') }}</label>
                        <input type="text" class="form-control" value="{{ $time['round_trip_date'] }}" disabled>
                    </div>
                    <div>
                        <label>{{ __('quote/checkout.departure_time') }}</label>
                        <input type="text" class="form-control" value="{{ $time['round_trip_time'] }}" disabled>
                    </div>
                </div>
                @endif
                    
                @if(app()->getLocale() == "es")
                    <h2><strong>Información</strong> del viajero</h2>
                @else
                    <h2><strong>Passenger</strong> information</h2>
                @endif

                <div class="client-information">
                    <div class="one">
                        <div>
                            <label>{{ __('quote/checkout.name') }}</label>
                            <input type="text" class="form-control" name="first_name" placeholder="{{ __('quote/checkout.name_placeholder') }}" value="{{ $form['first_name'] }}">
                        </div>
                        <div>
                            <label>{{ __('quote/checkout.lastname') }}</label>
                            <input type="text" class="form-control" name="last_name" placeholder="{{ __('quote/checkout.name_placeholder') }}" value="{{ $form['last_name'] }}">
                        </div>
                    </div>
                    <div class="two">
                        <div>
                            <label>E-mail</label>
                            <input type="text" class="form-control" name="email" placeholder="{{ __('quote/checkout.email_placeholder') }}" value="{{ $form['email'] }}">
                        </div>
                        <div>
                            <label>{{ __('quote/checkout.phone') }}</label>
                            <input type="text" class="form-control" name="phone" placeholder="{{ __('quote/checkout.phone_placeholder') }}" value="{{ $form['phone'] }}">
                        </div>
                    </div>
                    <div class="three">
                        <div>
                            <label>{{ __('quote/checkout.notes') }}</label>
                            <input type="text" class="form-control" name="special_request" placeholder="{{ __('quote/checkout.notes_placeholder') }}" value="{{ $form['special_request'] }}">
                        </div>
                    </div>
                </div>
            </div>           
    
            <div class="payment-information">
                <h2>{{ __('quote/checkout.payment_method') }}</h2>
                <h3>
                    @if(app()->getLocale() == "es")
                        Utilizamos encriptación SSL para pagos seguros respaldado por <span></span>
                    @else
                        We use SSL encryption for secure payments powered by <span></span>
                    @endif
                </h3>
                @if(false)
                    <div>
                        <label class="active">
                            <input type="radio" name="payment_type" id="paypal" value="paypal" checked>
                            PayPal
                            <img src="/assets/img/checkout/paypal.svg" alt="PayPal" title="PayPal">
                        </label>                    
                        <label>
                            <input type="radio" name="payment_type" id="card" value="credit_card">
                            <span>{{ __('quote/checkout.credit_card_text') }}</span>                        
                            <img src="/assets/img/checkout/mastercard.svg" alt="{{ __('quote/checkout.credit_card_text') }}" title="{{ __('quote/checkout.credit_card_text') }}">                        
                        </label>                    
                        @if($data['places']['config']['flight_required'] && false)
                        <label>
                            <input type="radio" name="payment_type" id="cash" value="cash">
                            <span>{{ __('quote/checkout.cash_text') }}</span>
                            <img src="/assets/img/checkout/cash.svg" alt="PayPal" title="PayPal">
                        </label>
                        @endif
                    </div>
                @endif
                <div id="paymentV2">
                    <div id="payment-form">
                        <div id="payment-element"></div>
                        <div id="error-message"></div>
                    </div>
                </div>
                <div id="paymentInfo">
                    @if(app()->getLocale() == "en")
                        <p><strong>Important!</strong> You have to present the debit or credit card with which you made the payment when starting your transfer.</p>
                        <p>If you choose to pay by credit/debit card, your payment will be converted into local currency (MXN) at a preferential exchange rate for you ❤️.</p>
                    @else
                        <p><strong>¡Importante!</strong> Debe presentar la tarjeta de débito o crédito con la que realizó el pago al iniciar la transferencia.</p>
                        <p>Si elige pagar con tarjeta de crédito/débito, su pago se convertirá en moneda local (MXN) a un tipo de cambio preferente para usted ❤️.</p>
                    @endif
                </div>
            </div>
    
            <div class="bottom">
                <p>{{ __('quote/checkout.accept_terms_text') }} <a href="@lang('link.terms')" target="_blank" title="{{ __('quote/checkout.terms_and_conditions') }}">{{ __('quote/checkout.terms_and_conditions') }}</a>.</p>
                <input type="hidden" name="token" value="{{ $data['items']['token'] }}">
                <input type="hidden" name="type" value="{{ $quote['type'] }}">
                @csrf
                <button id="btn_send" type="submit" class="btn">{{ __('quote/checkout.book_now_btn') }}</button>
            </div>


        </div>
        <div class="right">

            <div class="vehicle">
                <img src="{{ $data['items']['image'] }}" alt="" title="">
                <div>
                    <h2>{!! __('quote/checkout.subtitle',["pax" => $data['items']['passengers']]) !!}</h2>
                    <ul>
                        <li class="pax"><strong>{{ __('quote/checkout.passengers') }}:</strong> {{ $quote['passengers'] }}</li>
                        <li class="point"><strong>{{ __('quote/checkout.origin') }}:</strong> {{ $data['places']['one_way']['init']['name'] }}</li>
                        <li class="point"><strong>{{ __('quote/checkout.destination') }}:</strong> {{ $data['places']['one_way']['end']['name'] }}</li>
                    </ul>
                </div>
            </div>

            <div class="pricing-information">
                <h2>Total: <span>${{number_format($data['items']['price'],2)}} {{ $data['items']['currency'] }}</span></h2>
                <p>{{ __('quote/checkout.resume', ["vehicles"=>$data['items']['vehicles'], "type" => $data['items']['name'], "pax" => $data['items']['passengers']]) }}</p>
            </div>

        </div>
        
    </form>

    @include('layout.footer.checkout')
@endsection