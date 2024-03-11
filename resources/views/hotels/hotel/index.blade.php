@php
    use App\Traits\PricesTrait;
@endphp
@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/hotels/hotel.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/hotels/hotel.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
    <x-analytics/>
@endpush

@section('content')    
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo ), 'active' => 2])
    
    <div class="container hotel-container">
        <div class="left">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
            <h1>Cab from Cancun to Aldea Xaan Tulum</h1>

            <picture>
                <source srcset="/assets/img/hotels/aldea-xaan-tulum.webp" type="image/webp" />
                <img src="/assets/img/hotels/aldea-xaan-tulum.jpg" alt="Comentario de nuestro cliente Sara M." title="Comentario de nuestro cliente Sara M." loading="lazy" width="750" height="460" />
            </picture>

            <p>Do you need a transportation service from Cancun to Aldea Xaan Tulum? Then look no further and book your private cab service from Cancun to Tulum right now from $100 USD</p>
            <h2>Where is the Xaan Tulum Village?</h2>
            <p>Aldea Xaan Tulum is located just 3.1 km from the center of Tulum and its postal address is Zona Hotelera Tulum, 77760 Tulum, Q.R..</p>
            <h3>What is the distance from Cancun airport to Aldea Xaan Tulum?</h3>
            <p>The distance from Cancun airport to Aldea Xaan Tulum is 121 km and the approximate private cab time is 1 hour and 30 minutes.</p>
            <h2>Why book with us?</h2>
            <p>Our transfer service and private cab is one of the best options to get from Cancun airport to the door of your hotel in Tulum. A service created by and for you. Why? Because we know that after several hours of flight the only thing you want is to start enjoying your vacations in the Mexican Caribbean.</p>
            <p>But unfortunately Tulum is located 118 km away from Cancun airport and the last thing you want is to deal with public transportation services that can take up to 2 hours to get to the town of Tulum, let alone travel very uncomfortably with your family and your luggage.</p>
            <p>That’s why our private cab service to Aldea Xaan Tulum from Cancun is by far the best alternative for you and we have different options for you to choose from. So don’t hesitate and book your transfer service with us right now.</p>

            <picture>
                <source srcset="/assets/img/hotels/general-banner.webp" type="image/webp" />
                <img src="/assets/img/hotels/general-banner.jpg" alt="Comentario de nuestro cliente Sara M." title="Comentario de nuestro cliente Sara M." loading="lazy" width="750" height="460" />
            </picture>

            <h2>What is our rate?</h2>
            <p>Our cab and private transfer rate to Tulum will depend a lot on the type of service you choose and this can be the standard private transfer service, VIP or Luxury transfer service and of course, our exclusive transfer service for groups.</p>

            <table>
                <tbody>
                    <tr>
                        <th>Saliendo de:</th>
                        <td>Aeropuerto Internacional de Cancún (CUN)</td>
                    </tr>
                    <tr>
                        <th>Llegando a:</th>
                        <td>Akumal</td>
                    </tr>
                    <tr>
                        <th>Precio:</th>
                        <td>$1944.00 MXN (sólo ida)</td>
                    </tr>
                    <tr>
                        <th>Duración:</th>
                        <td>1 H 30 Min</td>
                    </tr>
                    <tr>
                        <th>Distancia:</th>
                        <td>100 KM</td>
                    </tr>
                    <tr>
                        <th>Horario:</th>
                        <td>24 horas con reserva anticipada</td>
                    </tr>
                    <tr>
                        <th>Tipo de vehículo:</th>
                        <td>Minivan</td>
                    </tr>
                    <tr>
                        <th>Compañía:</th>
                        <td>Taxi Riviera Maya</td>
                    </tr>
                </tbody>
            </table>
            <p>Note: Our VIP Transfer has a capacity of 1 to 7 people and our group transfers service has a capacity of 1 to 16 passengers.</p>
            <h2>Our transportation units to Xaan Tulum Village</h2>
            <p>In which unit do you want to travel? Remember that we have different units for you to choose the type of private cab service you need and of course that fits your budget and if you do not know them yet, we present them to you right now.</p>
        </div>
        <div class="right">
            <x-bookingbox/>

            <div class="hotels-list">
                <h2>Otros Hoteles</h2>
                <a href="#" title="Cab from Cancun to La Selva Apartments Tulum">Cab from Cancun to La Selva Apartments Tulum</a>
                <a href="#" title="Cab from Cancun to Ambre & Epices Jungle Hotel & Spa">Cab from Cancun to Ambre & Epices Jungle Hotel & Spa</a>
                <a href="#" title="Cab from Cancun to Pepem Eco Hotel Tulum">Cab from Cancun to Pepem Eco Hotel Tulum</a>
                <a href="#" title="Cab from Cancun to Naala Tulum">Cab from Cancun to Naala Tulum</a>
                <a href="#" title="Cab from Cancun to Aldea Xaan Tulum">Cab from Cancun to Aldea Xaan Tulum</a>
                <a href="#" title="Cab from Cancun to UJO Condo Boutique">Cab from Cancun to UJO Condo Boutique</a>
                <a href="#" title="Cab from Cancún to Nomade Tulum">Cab from Cancún to Nomade Tulum</a>
                <a href="#" title="Cab from Cancun to Zamas Hotel">Cab from Cancun to Zamas Hotel</a>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection