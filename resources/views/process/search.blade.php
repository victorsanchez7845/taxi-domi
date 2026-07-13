@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/search.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/search.min.css') }}" rel="stylesheet">
    <script>
        const availability = parseInt(`{!! (( isset(  $data['error'] ) )? 0 : 1) !!}`);
    </script>
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvClfOixmQTxXslNfUqiYIprUdynaP7sY"></script>
    <script defer src="{{ mix('/assets/js/process/listing.min.js') }}"></script>
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.checkout',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])
    
    <div class="container general-container">
        <div class="left" id="result-listing-container">
            <div class="top">                

                @if(isset($data['items']))
                    <h1>{{ __('quote/search.title') }}</h1>
                    <h2>{{ __('quote/search.items_heading', ["one" => $data['places']['one_way']['init']['name'], "two" => $data['places']['one_way']['end']['name'] ]) }}</h2>
                    @if(app()->getLocale() == "es")
                        <p>¡Descubre el viaje perfecto con nosotros! Selecciona el vehículo que se adapte a tu estilo y prepárate para una experiencia inolvidable llena de comodidad, seguridad y diversión. ¡Tu aventura empieza con la elección de tu vehículo ideal! 🚗✨</p>
                    @else
                        <p>Discover the perfect trip with us! Select the vehicle that suits your style and get ready for an unforgettable experience full of comfort, safety and fun - your adventure starts with choosing your ideal vehicle! 🚗✨</p>
                    @endif
                @endif

                @if(isset($data['error']))
                    <div class="error">
                        @if(app()->getLocale() == "es")
                            <p>Lo sentimos :(</p>
                            <h2>Desafortunadamente no encontramos disponibilidad para la <strong>Zona</strong> / <strong>Horarios</strong> solicitados, descuida podemos resolverlo.</h2>
                        @else
                            <p>We are sorry :(</p>
                            <h2>Unfortunately we did not find availability for the <strong>Zone</strong> / <strong>Schedules</strong> requested, don't worry, we can solve it.</h2>
                        @endif
                        <div>
                            <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" class="btn">
                                <svg width="20" height="20"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                                USA &amp; Canada
                            </a>
                            <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" class="btn">
                                <svg width="20" height="20"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                                Mexico &amp; {{ __('quote/search.rest_of_the_world') }}
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=5219982942389&text=Hola%2C%20me%20gustar%C3%ADa%20cotizar%20un%20servicio" class="btn">
                                <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#social-whatsapp"></use></svg>
                                WhatsApp
                            </a>
                            <a href="#" class="btn" onclick='LiveChatWidget.call("maximize")'>
                                <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#chat"></use></svg>
                                Chat
                            </a>
                        </div>
                    </div>
                @endif
            </div>
            @if(isset($data['items']))
                <div class="bottom">

                    @foreach ($data['items'] as $item)      
                        @php
                    /*
                    |--------------------------------------------------------------------------
                    | Orden de los vehículos
                    |--------------------------------------------------------------------------
                    | 1. Sedan
                    | 2. Minivan
                    | 3. Nissan Urban
                    | 4. Suburban
                    |
                    | Los vehículos que no estén en esta lista aparecerán después.
                    */

                    $vehicleOrder = [
                        'sedan' => 1,
                        'minivan' => 2,
                        'nissan urban' => 3,
                        'suburban' => 4,
                    ];

                    $orderedItems = collect($data['items'])
                        ->sortBy(function ($item) use ($vehicleOrder) {
                            $vehicleName = strtolower(trim($item['name']));

                            return $vehicleOrder[$vehicleName] ?? 999;
                        })
                        ->values();
                @endphp

                @foreach ($orderedItems as $item)
                    @php
                        $before = (($item['price'] * 100) / 70);

                        if (in_array($item['id'], [5])) {
                            continue;
                        }

                        $vehicleName = strtolower(trim($item['name']));
                    @endphp

                    <div class="item">
                        <div class="one">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">

                            <div>
                                <h3>
                                    {{ $item['name'] }}
                                    <span>5/5</span>
                                </h3>

                                <ul>
                                    <li>
                                        {{ __('quote/search.up_to_pax', [
                                            'pax' => $item['passengers']
                                        ]) }}
                                    </li>

                                    <li>
                                        {{ __('quote/search.up_to_lugagge', [
                                            'pax' => $item['luggage']
                                        ]) }}
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="two">

                            {{-- SEDAN --}}
                            @if($vehicleName === 'sedan')

                                @if(app()->getLocale() === 'es')
                                    <p>
                                        Viaje cómodamente en un sedán privado, ideal para parejas
                                        o grupos pequeños de hasta {{ $item['passengers'] }} pasajeros.
                                        Disfrute de un traslado directo, cómodo y seguro desde
                                        el aeropuerto hasta su hotel.
                                    </p>

                                    <ul>
                                        <li>Servicio completamente privado</li>
                                        <li>Incluye impuestos del aeropuerto y seguro de viajero</li>
                                        <li>Sin tiempos de espera ni paradas continuas</li>
                                        <li>Vehículo con aire acondicionado</li>
                                        <li>Servicio disponible todos los días, las 24 horas</li>
                                    </ul>
                                @else
                                    <p>
                                        Travel comfortably in a private sedan, ideal for couples
                                        or small groups of up to {{ $item['passengers'] }} passengers.
                                        Enjoy a direct, comfortable and safe transfer from the
                                        airport to your hotel.
                                    </p>

                                    <ul>
                                        <li>Fully private service</li>
                                        <li>Includes airport taxes and traveler's insurance</li>
                                        <li>No waiting time or continuous stops</li>
                                        <li>Air-conditioned vehicle</li>
                                        <li>Service available every day, 24/7</li>
                                    </ul>
                                @endif

                            {{-- MINIVAN --}}
                            @elseif($vehicleName === 'minivan')

                                @if(app()->getLocale() === 'es')
                                    <p>
                                        Viaje cómodamente en una minivan totalmente equipada
                                        para hasta {{ $item['passengers'] }} pasajeros.
                                        El servicio es privado, sin tiempos de espera
                                        ni paradas continuas.
                                    </p>

                                    <ul>
                                        <li>Servicio completamente privado</li>
                                        <li>Incluye impuestos del aeropuerto y seguro de viajero</li>
                                        <li>Sin tiempos de espera ni paradas continuas</li>
                                        <li>Vehículo con aire acondicionado</li>
                                        <li>Servicio disponible todos los días, las 24 horas</li>
                                    </ul>
                                @else
                                    <p>
                                        Travel comfortably in a fully equipped private minivan
                                        for up to {{ $item['passengers'] }} passengers.
                                        The service is private, with no waiting time
                                        or continuous stops.
                                    </p>

                                    <ul>
                                        <li>Fully private service</li>
                                        <li>Includes airport taxes and traveler's insurance</li>
                                        <li>No waiting time or continuous stops</li>
                                        <li>Air-conditioned vehicle</li>
                                        <li>Service available every day, 24/7</li>
                                    </ul>
                                @endif

                            {{-- NISSAN URBAN --}}
                            @elseif(in_array($vehicleName, ['nissan urban', 'nissan urvan']))

                                @if(app()->getLocale() === 'es')
                                    <p>
                                        Viaje cómodamente en una espaciosa Nissan Urban,
                                        ideal para familias y grupos de hasta
                                        {{ $item['passengers'] }} pasajeros.
                                        Disfrute de un servicio privado y directo desde
                                        el aeropuerto hasta su destino.
                                    </p>

                                    <ul>
                                        <li>Servicio completamente privado</li>
                                        <li>Incluye impuestos del aeropuerto y seguro de viajero</li>
                                        <li>Sin tiempos de espera ni paradas continuas</li>
                                        <li>Amplio espacio para pasajeros y equipaje</li>
                                        <li>Servicio disponible todos los días, las 24 horas</li>
                                    </ul>
                                @else
                                    <p>
                                        Travel comfortably in a spacious Nissan Urban,
                                        ideal for families and groups of up to
                                        {{ $item['passengers'] }} passengers.
                                        Enjoy a private and direct service from the airport
                                        to your destination.
                                    </p>

                                    <ul>
                                        <li>Fully private service</li>
                                        <li>Includes airport taxes and traveler's insurance</li>
                                        <li>No waiting time or continuous stops</li>
                                        <li>Spacious room for passengers and luggage</li>
                                        <li>Service available every day, 24/7</li>
                                    </ul>
                                @endif

                            {{-- SUBURBAN --}}
                            @elseif($vehicleName === 'suburban')

                                @if(app()->getLocale() === 'es')
                                    <p>
                                        Viaje en una Suburban de lujo, ideal para grupos pequeños,
                                        parejas o familias de hasta
                                        {{ $item['passengers'] }} pasajeros.
                                        Totalmente equipada, es una excelente opción para
                                        su traslado desde el aeropuerto.
                                    </p>

                                    <ul>
                                        <li>Incluye impuestos del aeropuerto y seguros</li>
                                        <li>Servicio privado, sin tiempos de espera ni paradas continuas</li>
                                        <li>Incluye una silla para niños gratis cuando sea solicitada</li>
                                        <li>Vehículo sujeto a disponibilidad</li>
                                    </ul>
                                @else
                                    <p>
                                        Travel in a luxury Suburban, ideal for small groups,
                                        couples or families of up to
                                        {{ $item['passengers'] }} passengers.
                                        Fully equipped, it is an excellent option for your
                                        airport transfer.
                                    </p>

                                    <ul>
                                        <li>Includes airport taxes and insurance</li>
                                        <li>Private service, with no waiting time or continuous stops</li>
                                        <li>Includes a free child seat upon request</li>
                                        <li>Vehicle subject to availability</li>
                                    </ul>
                                @endif

                            {{-- CRAFTER / SPRINTER --}}
                            @elseif(
                                str_contains($vehicleName, 'crafter') ||
                                str_contains($vehicleName, 'sprinter')
                            )

                                @if(app()->getLocale() === 'es')
                                    <p>
                                        Viaje en una Sprinter o Crafter, ideal para grupos grandes
                                        de hasta {{ $item['passengers'] }} pasajeros.
                                        Totalmente equipada para ofrecer un traslado cómodo
                                        desde el aeropuerto hasta su hotel.
                                    </p>

                                    <ul>
                                        <li>Incluye impuestos del aeropuerto y seguros</li>
                                        <li>Servicio privado, sin tiempos de espera ni paradas continuas</li>
                                        <li>Incluye una silla para niños gratis cuando sea solicitada</li>
                                        <li>Servicio disponible todos los días, las 24 horas</li>
                                    </ul>
                                @else
                                    <p>
                                        Travel in a Sprinter or Crafter, ideal for large groups
                                        of up to {{ $item['passengers'] }} passengers.
                                        Fully equipped to provide a comfortable transfer
                                        from the airport to your hotel.
                                    </p>

                                    <ul>
                                        <li>Includes airport taxes and insurance</li>
                                        <li>Private service, with no waiting time or continuous stops</li>
                                        <li>Includes a free child seat upon request</li>
                                        <li>Service available every day, 24/7</li>
                                    </ul>
                                @endif

                            {{-- DETALLES GENÉRICOS PARA OTROS VEHÍCULOS --}}
                            @else

                                @if(app()->getLocale() === 'es')
                                    <p>
                                        Viaje cómodamente en un servicio privado para hasta
                                        {{ $item['passengers'] }} pasajeros.
                                        Disfrute de un traslado directo y seguro desde
                                        el aeropuerto hasta su destino.
                                    </p>

                                    <ul>
                                        <li>Servicio completamente privado</li>
                                        <li>Incluye impuestos del aeropuerto y seguro de viajero</li>
                                        <li>Sin tiempos de espera ni paradas continuas</li>
                                        <li>Servicio disponible todos los días, las 24 horas</li>
                                    </ul>
                                @else
                                    <p>
                                        Travel comfortably in a private service for up to
                                        {{ $item['passengers'] }} passengers.
                                        Enjoy a direct and safe transfer from the airport
                                        to your destination.
                                    </p>

                                    <ul>
                                        <li>Fully private service</li>
                                        <li>Includes airport taxes and traveler's insurance</li>
                                        <li>No waiting time or continuous stops</li>
                                        <li>Service available every day, 24/7</li>
                                    </ul>
                                @endif

                            @endif
                        </div>

                        <div class="three">
                            <div class="top">
                                <p>{{ __('quote/search.price_from') }}</p>

                                <p>
                                    ${{ number_format($before, 2) }}
                                    {{ $item['currency'] }}
                                </p>

                                <p>
                                    ${{ number_format($item['price'], 2) }}
                                    {{ $item['currency'] }}
                                </p>

                                <p>{{ __('quote/search.price_from') }}</p>
                            </div>

                            <form action="@lang('link.quote_register')" method="POST">
                                @csrf

                                <input
                                    type="hidden"
                                    name="id"
                                    value="{{ $item['id'] }}"
                                >

                                <button>
                                    {{ __('quote/search.book_btn') }}
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach

                </div>
            @endif
        </div>

        <div class="right">
            @if(app()->getLocale() == "es")
                <h2>Trayectoria de tu <span>viaje</span></h2>
            @else
                <h2>Your travel <span>route</span></h2>
            @endif

            @if(!isset($data['error']))
                <div class="map" id="map">{{ __('quote/search.map_title') }}</div>
            @endif
            <div class="bookingbox-parent">
                <button id="toggle-bookingbox-button" class="btn">{{ __('quote/search.modify_btn') }}</button>
                <div id="toggle-bookingbox-div" class="hidden">
                    <x-bookingbox/>
                </div>
            </div>
        </div>
        
    </div>
    
@endsection