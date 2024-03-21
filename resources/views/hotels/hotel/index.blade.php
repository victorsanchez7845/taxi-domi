@php
    use App\Traits\PricesTrait;

    $name = $data['name'];
    $address = $data['address'];
    $zone = $data['zone']['name'];
    $distance = $data['zone']['distance'];
    $time = $data['zone']['time'];
    $currency = $data['currency'];
    $price = $data['default_price'];
@endphp
@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/hotels/hotel.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/hotels/hotel.min.css') }}" rel="stylesheet">

    @if(app()->getLocale() == "en")
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Shuttle to {{ $name }}",
            "image": [
                "https://tulumairportcab.com/assets/img/schema/1x1.jpg",
                "https://tulumairportcab.com/assets/img/schema/4x3.jpg",
                "https://tulumairportcab.com/assets/img/schema/16x9.jpg"
            ],
            "description": "Cab service to and from Tulum Airport, the service is provided in a VW Transporter for up to 8 passengers. Available for the entire Riviera Maya.",
            "sku": "016001",
            "mpn": "026001",
            "brand": {
                "@type": "Brand",
                "name": "Tulum Airport Cab"
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                "@type": "Rating",
                    "ratingValue": 5,
                    "bestRating": 5
                },
                "author": {
                    "@type": "Person",
                    "name": "Annete Leyva"
                }
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": 5,
                "reviewCount": 1287
            },
            "offers": {
                "@type": "Offer",
                "url": "https://tulumairportcab.com/cancun-to-tulum-shuttle",
                "priceCurrency": "USD",
                "price": {{ $price }},
                "priceValidUntil": "2024-12-31",
                "itemCondition": "https://schema.org/UsedCondition",
                "availability": "https://schema.org/InStock"
            }
        }
        </script>
    @endif

    @if(app()->getLocale() == "es")
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Traslado a {{ $name }}",
            "image": [
                "https://tulumairportcab.com/assets/img/schema/1x1.jpg",
                "https://tulumairportcab.com/assets/img/schema/4x3.jpg",
                "https://tulumairportcab.com/assets/img/schema/16x9.jpg"
            ],
            "description": "Servicio de Taxi desde y hacia el Aeropuerto de Tulum, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. Disponible para toda la Riviera Maya.",
            "sku": "016001",
            "mpn": "026001",
            "brand": {
                "@type": "Brand",
                "name": "Tulum Airport Cab"
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                "@type": "Rating",
                    "ratingValue": 5,
                    "bestRating": 5
                },
                "author": {
                    "@type": "Person",
                    "name": "Annete Leyva"
                }
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": 5,
                "reviewCount": 1287
            },
            "offers": {
                "@type": "Offer",
                "url": "https://tulumairportcab.com/es/traslado-de-cancun-a-tulum",
                "priceCurrency": "MXN",
                "price": {{ $price }},
                "priceValidUntil": "2024-12-31",
                "itemCondition": "https://schema.org/UsedCondition",
                "availability": "https://schema.org/InStock"
            }
        }
        </script>
    @endif

@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
    <x-analytics/>
@endpush

@section('content')    
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo ), 'active' => 2])
    
    <div class="container hotel-container">
        <div class="left">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
            @if(app()->getLocale() == "en")
                <h1>Shuttle to {{ $name }} at the best price</h1>
            @else
                <h1>Traslado a {{ $name }} al precio más bajo</h1>
            @endif

            <picture>
                <source srcset="/assets/img/hotels/tulum.webp" type="image/webp" />
                <img src="/assets/img/hotels/tulum.jpg" alt="{{ __('silos/hotel.one_image_alt') }}" title="{{ __('silos/hotel.one_image_title') }}" loading="lazy" width="750" height="460" />
            </picture>

            @if(app()->getLocale() == "en")
                <p>Do you need a transportation service from Cancun to {{ $name }}? Then look no further and book your private cab service from Cancun to {{ $zone }} right now from {{ $price }}</p>
                <h2>Where is the {{ $name }} located?</h2>
                <p>{{ $name }} is located just {{ $distance }} from the center of Tulum and its postal address is {{ $address }}.</p>
                <h3>What is the distance from Cancun airport to {{ $name }}?</h3>
                <p>The distance from Cancun airport to {{ $name }} is {{ $zone }} and the approximate private cab time is {{ $time }}.</p>

                <h2>Why book with us?</h2>
                <p>Our transfer service and private cab is one of the best options to get from Cancun airport to the door of your hotel in {{ $zone }}. A service created by and for you. Why? Because we know that after several hours of flight the only thing you want is to start enjoying your vacations in the Mexican Caribbean.</p>
                <p>But unfortunately Tulum is located 118 km away from Cancun airport and the last thing you want is to deal with public transportation services that can take up to 2 hours to get to the town of Tulum, let alone travel very uncomfortably with your family and your luggage.</p>
                <p>That's why our private cab service to {{ $name }} from Cancun is by far the best alternative for you and we have different options for you to choose from. So don't hesitate and book your transfer service with us right now.</p>
            @else
                <p>¿Necesita un servicio de transporte de Cancún a {{ $name }}? Entonces no busque más y reserve ahora mismo su servicio de taxi privado de Cancún a {{ $zone }} desde Precio</p>
                <h2>¿Dónde se encuentra {{ $name }}?</h2>
                <p>{{ $name }} se encuentra a solo {{ $zone }} del centro de Tulum y su dirección postal es {{ $address }}.</p>
                <h3>¿Cuál es la distancia desde el aeropuerto de Cancún a {{ $name }}?</h3>
                <p>La distancia desde el aeropuerto de Cancún a {{ $name }} es {{ $zone }} y el tiempo aproximado de taxi privado es {{ $time }}.</p>

                <h2>¿Por qué reservar con nosotros?</h2>
                <p>Nuestro servicio de traslado y taxi privado es una de las mejores opciones para llegar del aeropuerto de Cancun a la puerta de su hotel en {{ $zone }}. Un servicio creado por y para usted. ¿Por qué? Porque sabemos que después de varias horas de vuelo lo único que quieres es empezar a disfrutar de tus vacaciones en el Caribe Mexicano.</p>
                <p>Pero desafortunadamente Tulum se encuentra a 118 km del aeropuerto de Cancún y lo último que quieres es lidiar con servicios de transporte público que pueden tardar hasta 2 horas en llegar al pueblo de Tulum, y mucho menos viajar muy incómodo con tu familia y tu equipaje.</p>
                <p>Es por eso que nuestro servicio de taxi privado a {{ $name }} desde Cancún es por mucho la mejor alternativa para ti y tenemos diferentes opciones para que elijas. Así que no lo dude y reserve su servicio de traslado con nosotros ahora mismo.</p>                
            @endif 


            <picture>
                <source srcset="/assets/img/hotels/general-banner.webp" type="image/webp" />
                <img src="/assets/img/hotels/general-banner.jpg" alt="{{ __('silos/hotel.two_image_alt') }}" title="{{ __('silos/hotel.two_image_title') }}" loading="lazy" width="750" height="460" />
            </picture>

            @if(app()->getLocale() == "en")
                <h2>What is our rate?</h2>
                <p>Our cab and private transfer rate to {{ $name }} will depend a lot on the type of service you choose and this can be the standard private transfer service, VIP or Luxury transfer service and of course, our exclusive transfer service for groups.</p>
                        
                <h2>Our transportation units to {{ $name }}</h2>
                <p>In which unit do you want to travel? Remember that we have different units for you to choose the type of private cab service you need and of course that fits your budget and if you do not know them yet, we present them to you right now.</p>
            @else
                <h2>¿Cuál es nuestra tarifa?</h2>
                <p>Nuestra tarifa de taxi y traslado privado a {{ $name }} dependerá mucho del tipo de servicio que elija y este puede ser el servicio de traslado privado estándar, servicio de traslado VIP o de Lujo y por supuesto, nuestro servicio de traslado exclusivo para grupos.</p>
                        
                <h2>Nuestras unidades de transporte a {{ $name }}</h2>
                <p>¿En qué unidad quieres viajar? Recuerde que disponemos de diferentes unidades para que elija el tipo de servicio de taxi privado que necesite y por supuesto que se ajuste a su presupuesto y si aún no las conoce, se las presentamos ahora mismo.</p>
            @endif
        </div>
        <div class="right">
            <x-bookingbox/>

            <div class="hotels-list">
                @if(app()->getLocale() == "en")
                    <h2>Other Hotels</h2>
                    <a href="#" title="Cab from Cancun to La Selva Apartments Tulum">Cab from Cancun to La Selva Apartments Tulum</a>
                    <a href="#" title="Cab from Cancun to Ambre & Epices Jungle Hotel & Spa">Cab from Cancun to Ambre & Epices Jungle Hotel & Spa</a>
                    <a href="#" title="Cab from Cancun to Pepem Eco Hotel Tulum">Cab from Cancun to Pepem Eco Hotel Tulum</a>
                    <a href="#" title="Cab from Cancun to Naala Tulum">Cab from Cancun to Naala Tulum</a>
                    <a href="#" title="Cab from Cancun to Aldea Xaan Tulum">Cab from Cancun to Aldea Xaan Tulum</a>
                    <a href="#" title="Cab from Cancun to UJO Condo Boutique">Cab from Cancun to UJO Condo Boutique</a>
                    <a href="#" title="Cab from Cancún to Nomade Tulum">Cab from Cancún to Nomade Tulum</a>
                    <a href="#" title="Cab from Cancun to Zamas Hotel">Cab from Cancun to Zamas Hotel</a>
                @else
                    <h2>Otros Hoteles</h2>
                    <a href="#" title="Cab from Cancun to La Selva Apartments Tulum">Cab from Cancun to La Selva Apartments Tulum</a>
                    <a href="#" title="Cab from Cancun to Ambre & Epices Jungle Hotel & Spa">Cab from Cancun to Ambre & Epices Jungle Hotel & Spa</a>
                    <a href="#" title="Cab from Cancun to Pepem Eco Hotel Tulum">Cab from Cancun to Pepem Eco Hotel Tulum</a>
                    <a href="#" title="Cab from Cancun to Naala Tulum">Cab from Cancun to Naala Tulum</a>
                    <a href="#" title="Cab from Cancun to Aldea Xaan Tulum">Cab from Cancun to Aldea Xaan Tulum</a>
                    <a href="#" title="Cab from Cancun to UJO Condo Boutique">Cab from Cancun to UJO Condo Boutique</a>
                    <a href="#" title="Cab from Cancún to Nomade Tulum">Cab from Cancún to Nomade Tulum</a>
                    <a href="#" title="Cab from Cancun to Zamas Hotel">Cab from Cancun to Zamas Hotel</a>
                @endif
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection