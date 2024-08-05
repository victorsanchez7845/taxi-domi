@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/processing.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/processing.min.css') }}" rel="stylesheet">    
@endpush
@push("push-bottom")
    <x-hotjar/>
    <x-analytics/>
    @if(app()->getLocale() == "es")
        <script>
            gtag('event', 'conversion', {
                'send_to': 'AW-16596385055/j-1ZCNuYscgZEJ_64uk9',
                'value': `{!! $data['sales']['total'] !!}`,
                'currency': `{!! $data['config']['currency'] !!}`,
                'transaction_id': `{!! $data['config']['id'] !!}`,
            });
        </script>
    @endif
    @if(app()->getLocale() == "en")
        <script>
            gtag('event', 'conversion', {
                'send_to': 'AW-16596385055/jwwWCNG6o7cZEJ_64uk9',
                'value': `{!! $data['sales']['total'] !!}`,
                'currency': `{!! $data['config']['currency'] !!}`,
                'transaction_id': `{!! $data['config']['id'] !!}`,
            });
        </script>
    @endif
@endpush

@section('content')
    @include('layout.header.checkout',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])
    
    <div class="parallax-container">
        <div class="container">
            <h1>{{ __('quote/processing.title') }}</h1>
        </div>
    </div>

    <div class="container redirect-container">
        <h2>{{ __('quote/processing.timer') }} <span id="timer">3</span> ...</h2>
    </div>

    <script>
        (function () {
            var timerElement = document.getElementById("timer");
            var contador = 3;

            function updateCounter() {
                timerElement.textContent = contador;
                contador--;

                if (contador < 0) {
                    clearInterval(intervalo);
                   window.location.href = `{!! $payment !!}`;                    
                }
            }

            updateCounter();
            var intervalo = setInterval(updateCounter, 1000);
        })();
    </script>
    
@endsection