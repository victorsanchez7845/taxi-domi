@php    
    $enviroment = \App\Traits\PayPalTrait::getEnviroment();
    $credentials = \App\Traits\PayPalTrait::getCredentials();    

    $total = $rez['sales']['total'];
    if( $rez['config']['currency'] == "USD"):
        $total = $total * $rez['config']['payment_exchange_rate']['USD_MXN'];
    endif;

    $language = "en_US";
    if(app()->getLocale() == "es"):
        $language = "es_MX";
    endif
@endphp
@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/card-payment.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/card-payment.min.css') }}" rel="stylesheet">
        
    <script src="https://www.paypal.com/sdk/js?client-id={{ $credentials['client_id'] }}&currency=MXN&locale={{ $language }}&components=buttons" data-sdk-integration-source="developer-studio"></script>
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>

    <script>
        function resultMessage(message) {
            const messageContainer = document.getElementById('result-message');
            if (messageContainer) {
                messageContainer.innerHTML = message;
            } else {
                const newMessageContainer = document.createElement('div');
                newMessageContainer.id = 'result-message';
                newMessageContainer.innerHTML = message;
                document.body.appendChild(newMessageContainer);
            }
        }
        window.paypal.Buttons({
            style: {
                shape: "rect",
                layout: "vertical",
                color: "gold",
                label: "paypal",
            } ,
            async createOrder() {
                try {

                    const response = await fetch("/payment-create-order", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({}),
                    });

                    const orderData = await response.json();

                    if (orderData.id) {
                        return orderData.id;
                    }
                    const errorDetail = orderData?.details?.[0];
                    const errorMessage = errorDetail
                    ? `${errorDetail.issue} ${errorDetail.description} (${orderData.debug_id})`
                    : JSON.stringify(orderData);

                    throw new Error(errorMessage);
                } catch (error) {                    
                    resultMessage(`Could not initiate PayPal Checkout...<br><br>${error}`);
                }
            } ,
            async onApprove(data, actions) {
                try {
                    const response = await fetch(`/payment-execute-order`, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({id:data.orderID}),
                    });
                    
                    const orderData = await response.json();
                    // Three cases to handle:
                    //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                    //   (2) Other non-recoverable errors -> Show a failure message
                    //   (3) Successful transaction -> Show confirmation or thank you message

                    const errorDetail = orderData?.details?.[0];

                    if (errorDetail?.issue === "INSTRUMENT_DECLINED") {
                        // (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                        // recoverable state, per
                        // https://developer.paypal.com/docs/checkout/standard/customize/handle-funding-failures/
                        return actions.restart();
                    } else if (errorDetail) {
                        // (2) Other non-recoverable errors -> Show a failure message
                        throw new Error(`${errorDetail.description} (${orderData.debug_id})`);
                    } else if (!orderData.purchase_units) {
                        throw new Error(JSON.stringify(orderData));
                    } else {
                        actions.redirect(`https://tulumairportcab.com{{ __('link.quote_thank_you') }}`);
                            
                        // (3) Successful transaction -> Show confirmation or thank you message
                        // Or go to another URL:  actions.redirect('thank_you.html');
                        const transaction =
                            orderData?.purchase_units?.[0]?.payments?.captures?.[0] ||
                            orderData?.purchase_units?.[0]?.payments?.authorizations?.[0];
                            resultMessage(`Transaction ${transaction.status}: ${transaction.id}`);
                            console.log("Capture result",orderData, JSON.stringify(orderData, null, 2)
                        );
                    }
                } catch (error) {
                    console.error(error);
                    resultMessage(`Sorry, your transaction could not be processed...<br><br>${error}`);
                }
            },
        }).render("#paypal-button-container"); 
    </script>

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
                <p>${{ $total }} MXN</p>
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
                            <img src="/assets/img/payments/location.svg">
                            <p>@lang('quote/payment.type_of_service') <span>{{ (( $value['is_round_trip'] == 0 )? __('quote/payment.one_way') : __('quote/payment.round_trip') ) }}</span></p>
                        </div>
                        <div>
                            <img src="/assets/img/payments/location-tick.svg">
                            <p>@lang('quote/payment.passengers') <span>{{ $value['passengers'] }} Pax</span></p>
                        </div>
                    </div>
                    <div class="three">
                        <div class="one">
                            <p>@lang('quote/payment.leaving_from')</p>
                            <p>{{ $value['from']['name'] }}</p>
                        </div>
                        <div class="two">
                            <img src="/assets/img/payments/loader-points.svg" width="20" height="20" alt="" title="" loading="lazy">
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
            </div>
        </div>
        <div class="right">
            @if(isset( $_GET['code'] ))
                <div class="errorMessage">[{{ $_GET['code'] }}] {{ urldecode($_GET['message']) }}</div>
            @endif
            
            <div id="paypal-button-container"></div>
            <p id="result-message"></p>

            @if(false)
                <img src="/assets/img/payments/card-options.png">
            @endif
        </div>
    </div>
    
    @include('layout.footer.checkout')
@endsection