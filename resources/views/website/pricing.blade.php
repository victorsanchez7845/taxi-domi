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
            @if(app()->getLocale() == "en")
                <h1>Tulum Transportation Prices</h1>
                <p>We have the best prices in Tulum transportation and private transfer service to Tulum. In addition, we have different types of units for you.</p>
            @else
                <h1>Transportation Price</h1>
                <p>We have the best prices in transportation and private transfer service to Tulum. In addition, we have different types of units for you.</p>
            @endif
        </div>
        <div class="middle">
            
            <div>
                @if(app()->getLocale() == "en")
                    <p>From/To Tulum Airport</p>
                    <h2>Luxury Transportation Service</h2>
                @else
                    <p>Desde/Hacia el aeropuerto de Tulum</p>
                    <h2>Servicio de Transporte de Lujo</h2>
                @endif 
                <picture>
                    <source srcset="/assets/img/services/suburban.webp" type="image/webp">
                    <img src="/assets/img/services/suburban.jpg" alt="{{ __('website/pricing.image_one_alt') }}" title="{{ __('website/pricing.image_one_title') }}" loading="lazy" width="150" height="100">
                </picture>
                <p>{{ __('website/pricing.price_from') }}</p>
                <div>
                    @if(app()->getLocale() == "en")
                        $184 <p>USD <span>{{ __('website/pricing.per_person') }}</span></p>
                    @else
                        $3,330 <p>MXN <span>{{ __('website/pricing.per_person') }}</span></p>
                    @endif
                </div>
                <a href="#" title="{{ __('website/pricing.book_now') }}">{{ __('website/pricing.book_now') }}</a>
                @if(app()->getLocale() == "en")
                    <p>Tulum Luxury Transportation service. Ideal for those looking for a VIP transfer aboard a luxury Chevrolet Suburban, comfortable, safe, and secure with amenities and space for up to 5 passengers with luggage.</p>
                @else
                    <p>Servicio de Transportación de Lujo en Tulum. Ideal para aquellos que buscan un traslado VIP a bordo de una lujosa Chevrolet Suburban, cómoda, segura y con comodidades y espacio para hasta 5 pasajeros con equipaje.</p>
                @endif
                <ul>
                    <li>5 {{ __('website/pricing.passengers') }}</li>
                    <li>5 {{ __('website/pricing.luggages') }}</li>
                </ul>
            </div>

            <div class="active">
                @if(app()->getLocale() == "en")
                    <span>Most Popular</span>
                    <p>From/To Tulum Airport</p>
                    <h2>Private Transportation Service</h2>
                @else
                    <span>Más Popular</span>
                    <p>Desde/hacia el aeropuerto de Tulum</p>
                    <h2>Servicio de Transporte Privado</h2>
                @endif
                <picture>
                    <source srcset="/assets/img/services/van.webp" type="image/webp">
                    <img src="/assets/img/services/van.jpg" alt="{{ __('website/pricing.image_two_alt') }}" title="{{ __('website/pricing.image_two_title') }}" loading="lazy" width="150" height="100">
                </picture>
                <p>{{ __('website/pricing.price_from') }}</p>
                <div>
                    @if(app()->getLocale() == "en")
                        $137 <p>USD <span>{{ __('website/pricing.per_person') }}</span></p>
                    @else
                        $2,466 <p>MXN <span>{{ __('website/pricing.per_person') }}</span></p>
                    @endif
                </div>
                <a href="#" title="{{ __('website/pricing.book_now') }}">{{ __('website/pricing.book_now') }}</a>
                @if(app()->getLocale() == "en")
                    <p>This Tulum Private Transfer service is provided in a vehicle operated by VW transporter vans (or similar), and has a maximum capacity of 8 passengers, the prices of this vehicle vary according to the number of passengers.</p>
                @else
                    <p>Este servicio de Traslado Privado en Tulum se proporciona en un vehículo operado por camionetas VW transporter (o similar), y tiene una capacidad máxima de 8 pasajeros, los precios de este vehículo varían de acuerdo al número de pasajeros.</p>
                @endif
                <ul>
                    <li>8 {{ __('website/pricing.passengers') }}</li>
                    <li>7 {{ __('website/pricing.luggages') }}</li>
                </ul>
            </div>

            <div>
                @if(app()->getLocale() == "en")
                    <p>From/To Tulum Airport</p>
                    <h2>Group Transportation Service</h2>
                @else
                    <p>Desde/hacia el Aeropuerto de Tulum</p>
                    <h2>Servicio de Transporte para Grupos</h2>
                @endif
                <picture>
                    <source srcset="/assets/img/services/crafter.webp" type="image/webp">
                    <img src="/assets/img/services/crafter.jpg" alt="{{ __('website/pricing.image_three_alt') }}" title="{{ __('website/pricing.image_three_title') }}" loading="lazy" width="150" height="100">
                </picture>
                <p>{{ __('website/pricing.price_from') }}</p>
                <div>
                    @if(app()->getLocale() == "en")
                        $184 <p>USD <span>{{ __('website/pricing.per_person') }}</span></p>
                    @else
                        $3,330 <p>MXN <span>{{ __('website/pricing.per_person') }}</span></p>
                    @endif
                </div>
                <a href="#" title="{{ __('website/pricing.book_now') }}">{{ __('website/pricing.book_now') }}</a>
                @if(app()->getLocale() == "en")
                    <p>Transportation for groups in Tulum is available for all our destinations, the service is provided in a VW Transporter for up to 14 passengers.</p>
                @else
                    <p>Transportación para grupos en Tulum está disponible para todos nuestros destinos, el servicio se presta en una VW Transporter para hasta 14 pasajeros.</p>
                @endif
                <ul>
                    <li>15 {{ __('website/pricing.passengers') }}</li>
                    <li>14 {{ __('website/pricing.luggages') }}</li>
                </ul>
            </div>
        </div>
        <div class="bottom">
            <div class="title">
                @if(app()->getLocale() == "en")
                    <h2>Tulum Shuttle Rates</h2>
                @else
                    <h2>Tulum Shuttle Rates</h2>
                @endif
            </div>
            <div class="items">
                <table>
                    <caption>
                        @if(app()->getLocale() == "en")
                            Cancun Hotel Zone Transfers
                        @else
                            Traslados Zona Hotelera Cancun
                        @endif
                    </caption>
                    <thead>
                        <tr>
                            <th>{{ __('website/pricing.service') }}</th>
                            <th>{{ __('website/pricing.one_way') }}</th>
                            <th>{{ __('website/pricing.round_trip') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('website/pricing.private') }}</td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$29</b> usd
                                @else
                                    <b>$539</b> mxn
                                @endif
                            </td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$59</b> usd
                                @else
                                    <b>$1,079</b> mxn
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('website/pricing.luxury') }}</td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$78</b> usd
                                @else
                                    <b>$89</b> mxn
                                @endif
                            </td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$151</b> usd
                                @else
                                    <b>$2,718</b> mxn
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('website/pricing.small_group') }}</td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$78</b> usd
                                @else
                                    <b>$89</b> mxn
                                @endif
                            </td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$151</b> usd
                                @else
                                    <b>$2,718</b> mxn
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <a href="{{ __('website/pricing.link') }}" title="{{ __('website/pricing.book_now') }}">{{ __('website/pricing.book_now') }}</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <table>
                    <caption>
                        @if(app()->getLocale() == "en")
                            Playa del Carmen Transfers
                        @else
                            Traslados Playa del Carmen
                        @endif
                    </caption>
                    <thead>
                        <tr>
                            <th>{{ __('website/pricing.service') }}</th>
                            <th>{{ __('website/pricing.one_way') }}</th>
                            <th>{{ __('website/pricing.round_trip') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('website/pricing.private') }}</td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$69</b> usd
                                @else
                                    <b>$1,259</b> mxn
                                @endif
                            </td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$134</b> usd
                                @else
                                    <b>$2,429</b> mxn
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('website/pricing.luxury') }}</td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$145</b> usd
                                @else
                                    <b>$2,610</b> mxn
                                @endif
                            </td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$280</b> usd
                                @else
                                    <b>$5,040</b> mxn
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('website/pricing.small_group') }}</td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$145</b> usd
                                @else
                                    <b>$2,610</b> mxn
                                @endif
                            </td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$280</b> usd
                                @else
                                    <b>$5,040</b> mxn
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <a href="{{ __('website/pricing.link') }}" title="{{ __('website/pricing.book_now') }}">{{ __('website/pricing.book_now') }}</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <table>
                    <caption>
                        @if(app()->getLocale() == "en")
                            Tulum Transfers
                        @else
                            Traslados Tulum
                        @endif
                    </caption>
                    <thead>
                        <tr>
                            <th>{{ __('website/pricing.service') }}</th>
                            <th>{{ __('website/pricing.one_way') }}</th>
                            <th>{{ __('website/pricing.round_trip') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ __('website/pricing.private') }}</td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$137</b> usd
                                @else
                                    <b>$2,466</b> mxn
                                @endif
                            </td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$219</b> usd
                                @else
                                    <b>$3,942</b> mxn
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('website/pricing.luxury') }}</td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$184</b> usd
                                @else
                                    <b>$3,329</b> mxn
                                @endif
                            </td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$295</b> usd
                                @else
                                    <b>$5,321</b> mxn
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('website/pricing.small_group') }}</td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$184</b> usd
                                @else
                                    <b>$3,329</b> mxn
                                @endif
                            </td>
                            <td>
                                @if(app()->getLocale() == "en")
                                    <b>$295</b> usd
                                @else
                                    <b>$5,321</b> mxn
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <a href="{{ __('website/pricing.link') }}" title="{{ __('website/pricing.book_now') }}">{{ __('website/pricing.book_now') }}</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection