@php
    use App\Traits\PricesTrait;
@endphp
@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/website/pricing.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/pricing.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
    <x-analytics/>
@endpush

@section('content')    
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo ), 'active' => 3])

    <div class="container pricing-container">
        <div class="top">
            <h1>Transportation Price</h1>
            <p>We have the best prices in transportation and private transfer service to Tulum. In addition, we have different types of units for you.</p>
        </div>
        <div class="middle">
            
            <div>
                <p>From/To Tulum Airport</p>
                <h2>Our Deluxe transportation unit</h2>
                <picture>
                    <source srcset="/assets/img/services/suburban.webp" type="image/webp">
                    <img src="/assets/img/services/suburban.jpg" alt="Suburban de lujo para grupos en Tulum - Transporte elegante para tus ocasiones especiales" title="Suburban de Lujo - Transporte elegante para grupos en Tulum, ideal para eventos especiales" loading="lazy" width="150" height="100">
                </picture>
                <p>Price from</p>
                <div>
                    $185 <p>USD <span>Per person</span></p>
                </div>
                <a href="#" title="Book now">Book now</a>
                <p>Luxury service, ideal for those looking for a VIP transfer aboard a luxury Chevrolet Suburban, comfortable, safe and secure with amenities and space for up to 5 passengers with luggage.</p>
                <ul>
                    <li>5 Passengers</li>
                    <li>5 Luggages</li>
                </ul>
            </div>

            <div class="active">
                <span>Most Popular</span>
                <p>From/To Tulum Airport</p>
                <h2>Our Deluxe transportation unit</h2>
                <picture>
                    <source srcset="/assets/img/services/van.webp" type="image/webp">
                    <img src="/assets/img/services/van.jpg" alt="Van de Pasajeros en Tulum - Explora el paraíso cómoda y seguramente" title="Van de Pasajeros - Descubre comodidad y seguridad en nuestro servicio de transporte en Tulum" loading="lazy" width="150" height="100">
                </picture>
                <p>Price from</p>
                <div>
                    $185 <p>USD <span>Per person</span></p>
                </div>
                <a href="#" title="Book now">Book now</a>
                <p>Luxury service, ideal for those looking for a VIP transfer aboard a luxury Chevrolet Suburban, comfortable, safe and secure with amenities and space for up to 5 passengers with luggage.</p>
                <ul>
                    <li>5 Passengers</li>
                    <li>5 Luggages</li>
                </ul>
            </div>

            <div>
                <p>From/To Tulum Airport</p>
                <h2>Our Deluxe transportation unit</h2>
                <picture>
                    <source srcset="/assets/img/services/crafter.webp" type="image/webp">
                    <img src="/assets/img/services/crafter.jpg" alt="Crafter para tours privados en Tulum - Experimenta la belleza con nuestro transporte exclusivo" title="Crafter - Transporte exclusivo para tours privados en Tulum, descubre la belleza con total comodidad" loading="lazy" width="150" height="100">
                </picture>
                <p>Price from</p>
                <div>
                    $185 <p>USD <span>Per person</span></p>
                </div>
                <a href="#" title="Book now">Book now</a>
                <p>Luxury service, ideal for those looking for a VIP transfer aboard a luxury Chevrolet Suburban, comfortable, safe and secure with amenities and space for up to 5 passengers with luggage.</p>
                <ul>
                    <li>5 Passengers</li>
                    <li>5 Luggages</li>
                </ul>
            </div>
        </div>
        <div class="bottom">
            @for($i=1; $i<=9; $i++)
            <table>
                <caption>Akumal Private Airport Transfers</caption>
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>One Way</th>
                        <th>Round Trip</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Private</td>
                        <td><b>$89</b> usd</td>
                        <td><b>$164.65</b> usd</td>
                    </tr>
                    <tr>
                        <td>Luxury</td>
                        <td><b>$193.50</b> usd</td>
                        <td><b>$375</b> usd</td>
                    </tr>
                    <tr>
                        <td>Airport Taxi</td>
                        <td><b>$95</b> usd</td>
                        <td><b>$175.75</b> usd</td>
                    </tr>
                    <tr>
                        <td>Small Group</td>
                        <td><b>$275.14</b> usd</td>
                        <td><b>$549</b> usd</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">
                            <a href="/" title="Book Transfers">Book Transfers</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
            @endfor
        </div>
    </div>

    @include('layout.footer.general')
@endsection