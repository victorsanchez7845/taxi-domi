@extends('layout.master')

@push("push-top")    
    <link href="{{ mix('/assets/css/hotels/index.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/hotels/index.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')    
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="heading">
        <div class="container">
            <div class="top">                
                <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                @if(app()->getLocale() == "es")
                    <h1>Nuestros destinos</h1>
                @else
                    <h1>Our destinations</h1>
                @endif
            </div>
        </div>
    </div>

    <div class="container destinations-list">
        <div class="top">
            @if(app()->getLocale() == "es")
                <h2>Llega a cualquier rincón de la Riviera Maya con Taxi Riviera Maya</h2>
                <p>En Taxi Riviera Maya, hacemos que tu viaje por la Riviera Maya sea accesible con nuestras tarifas bajas. No solo te llevamos a los destinos m&aacute;s ic&oacute;nicos, sino que tambi&eacute;n te dejamos en la puerta de tu hotel o destino favorito, brind&aacute;ndote comodidad desde el principio hasta el final de tu viaje.</p>
                <p>Con a&ntilde;os de experiencia en el sector de la transportaci&oacute;n tur&iacute;stica, garantizamos un viaje excepcional. Nuestros choferes profesionales conocen cada rinc&oacute;n de la Riviera Maya, asegur&aacute;ndote no solo un transporte eficiente, sino tambi&eacute;n una experiencia sin contratiempos ni inconvenientes. Descubre la Riviera Maya con confianza, seguridad y la comodidad que solo Taxi Riviera Maya puede ofrecer. Reserva hoy y vive la magia de la Riviera Maya sin preocupaciones. A continuaci&oacute;n te dejamos los destinos a los que tenemos cobertura, si no encuentras tu destino en la lista, puedes comunicarte y un asesor te ayudar&aacute; con mucho gusto.</p>
            @else
                <h2>Reach any corner of the Riviera Maya with Taxi Riviera Maya</h2>
                <p>At Taxi Riviera Maya, we make your journey through the Riviera Maya accessible with our low fares. Not only do we take you to the most iconic destinations, but we also drop you off at the door of your favorite hotel or destination, providing comfort from the beginning to the end of your trip.</p>
                <p>With years of experience in the tourist transportation sector, we guarantee an exceptional journey. Our professional drivers know every corner of the Riviera Maya, ensuring you not only efficient transportation but also a seamless and hassle-free experience. Discover the Riviera Maya with confidence, safety, and the comfort that only Taxi Riviera Maya can offer. Book today and experience the magic of the Riviera Maya without worries. Below, we provide a list of the destinations we cover. If you don't find your destination on the list, you can contact us, and an advisor will assist you gladly.</p>
            @endif
        </div>
        <div class="bottom">
            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_tulum')" title="{{ __('silos/index.tulum_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/tulum.webp" type="image/webp" />
                            <img src="/assets/img/destinations/tulum.jpg" alt="{{ __('silos/index.tulum_alt') }}" title="{{ __('silos/index.tulum_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                                           
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslado a Tulum</h3>
                        <a href="@lang('link.silos_tulum')" title="Hoteles en Tulum">Hoteles en Tulum</a>
                        <p>Reserva desde <span>$2,322 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Tulum</h3>
                        <a href="@lang('link.silos_tulum')" title="Hotels in Tulum">Hotels in Tulum</a>
                        <p>Price from <span>$129 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="#" title="{{ __('silos/index.cancun_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/cancun.webp" type="image/webp" />
                            <img src="/assets/img/destinations/cancun.jpg" alt="{{ __('silos/index.cancun_alt') }}" title="{{ __('silos/index.cancun_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Cancún</h3>
                        <a href="#" title="Hoteles en Cancún">Hoteles en Cancún</a>
                        <p>Reserva desde <span>$539 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Transportation to Cancun</h3>
                        <a href="#" title="Hotels in Cancún">Hotels in Cancun</a>
                        <p>Price from <span>$29 USD</span></p>
                    @endif
                </div>
            </div>
            
            <div class="item">
                <div class="one_">
                    <a href="#" title="{{ __('silos/index.pdc_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/playa-del-carmen.webp" type="image/webp" />
                            <img src="/assets/img/destinations/playa-del-carmen.jpg" alt="{{ __('silos/index.pdc_alt') }}" title="{{ __('silos/index.pdc_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                          
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Playa del Carmen</h3>
                        <a href="#" title="Hoteles en Playa del Carmen">Hoteles en Playa del Carmen</a>
                        <p>Reserva desde <span>$1,259 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Playa del Carmen</h3>
                        <a href="#" title="Hotels in Playa del Carmen">Hotels in Playa del Carmen</a>
                        <p>Price from <span>$69.99 USD</span></p>
                    @endif
                </div>
            </div>            

        </div>
    </div>


    @include('layout.footer.general')
@endsection