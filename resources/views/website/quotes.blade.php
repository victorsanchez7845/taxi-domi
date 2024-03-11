@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/quotes.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/quotes.min.css') }}" rel="stylesheet">
    <script defer src="{{ mix('/assets/js/quotations/index.min.js') }}"></script>
@endpush
@push("push-bottom")
    <script src="https://www.google.com/recaptcha/api.js?render=6LfvQVooAAAAACqxjq_sh-zf1J-m_d5j7F71NiUr" defer></script>
@endpush

@section('content')
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="parallax-container">
        <div class="container">                    
            @if(app()->getLocale() == "es")
                <h1>Cotizaciones</h1>
            @else
                <h1>Request a Quote</h1>
            @endif
        </div>
    </div>

    <div class="container items">
        <div class="top">
            @if(app()->getLocale() == "es")
                <p>Si deseas una cotización de un servicio especial de transporte, no dudes en consultarnos, llena el siguiente formulario y nos pondremos en contacto lo más pronto posible.</p>
            @else
                <p>Fill out the form below, and our dedicated team will promptly provide you with a customized quote tailored to your travel needs. Experience reliable, secure, and comfortable transfers to your destination. Your seamless journey begins here!</p>
            @endif            
            <div id="message"></div>
        </div>
        <form class="bottom" method="POST" id="formData">
            <div class="one">
                <div>
                    <label>{{ __('website/quotations.name') }} <small>*</small></label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div>
                    <label>{{ __('website/quotations.lastname') }} <small>*</small></label>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div>
                    <label>E-MAIL <small>*</small></label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div>
                    <label>{{ __('website/quotations.phone') }} <small>*</small></label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
            </div>
            
            <div class="two">
                <h2>{{ __('website/quotations.transportation_data') }}</h2>
                <div>
                    <div>
                        <label>{{ __('website/quotations.transportation_type') }} <small>*</small></label>
                        <select class="form-control" name="service_type" id="service_type">
                            <option value="Redondo" selected>{{ __('website/quotations.round_trip') }}</option>
                            <option value="Sencillo">{{ __('website/quotations.one_way') }}</option>
                        </select>
                    </div>
                    <div>
                        <label>{{ __('website/quotations.origin') }} <small>*</small></label>
                        <input type="text" class="form-control" name="origin" required>
                    </div>
                    <div>
                        <label>{{ __('website/quotations.destination') }} <small>*</small></label>
                        <input type="text" class="form-control" name="destination" required>
                    </div>
                    <div>
                        <label>{{ __('website/quotations.no_passengers') }} <small>*</small></label>
                        <select class="form-control" name="passengers">
                            @for($i=1; $i<=20; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor                            
                        </select>
                    </div>
                </div>
            </div>

            <div class="three">
                <h2>{{ __('website/quotations.arrival_information') }}</h2>
                <div>
                    <div>
                        <label>{{ __('website/quotations.arrival_date') }}</label>
                        <input type="date" class="form-control" name="arrival_date" required>
                    </div>
                    <div>
                        <label>{{ __('website/quotations.airline') }}</label>
                        <input type="text" class="form-control" name="arrival_airline" required>
                    </div>
                    <div>
                        <label>{{ __('website/quotations.flight_number') }}</label>
                        <input type="text" class="form-control" name="arrival_flight_number" required>
                    </div>
                </div>
            </div>

            <div class="four" id="departure_item">
                <h2>{{ __('website/quotations.departure_information') }}</h2>
                <div>
                    <div>
                        <label>{{ __('website/quotations.departure_date') }}</label>
                        <input type="date" class="form-control" name="departure_date">
                    </div>
                    <div>
                        <label>{{ __('website/quotations.airline') }}</label>
                        <input type="text" class="form-control" name="departure_airline">
                    </div>
                    <div>
                        <label>{{ __('website/quotations.flight_number') }}</label>
                        <input type="text" class="form-control" name="departure_flight_number">
                    </div>
                </div>
            </div>            

            <div class="five">
                <label>{{ __('website/quotations.notes') }} <small>*</small></label>
                <textarea class="form-control" rows="6" cols="30" name="message"></textarea>
            </div>
            @csrf
            <button type="submit">{{ __('website/quotations.send') }}</button>

        </form>
    </div>

    @include('layout.footer.general')
@endsection