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
                <h2>Te llevamos a cualquier lugar de la Riviera Maya</h2>
                <p>Tulum Airport Cab, adem&aacute;s de ofrecer sus servicios de traslado en el Aeropuerto de Tulum, tambi&eacute;n ofrece servicios de traslado a diferentes puntos de la Riviera Maya, ya sea desde el Aeropuerto de Tulum o desde el Aeropuerto de Canc&uacute;n, estamos siempre listos para llevarte a donde la aventura de llame.</p>
                <p>Somos la primera empresa oficial en el Aeropuerto de Tulum, y por eso contamos con acceso a cualquier zona de la Riviera Maya, desde las atracciones m&aacute;s populares a los hoteles m&aacute;s exclusivos, te llevamos sin inconveniente, con las mejores tarifas y sin cargos ocultos a cualquier parte de la Pen&iacute;nsula de Yucat&aacute;n y la Riviera Maya. Te dejamos una lista para que encuentres tu destino favorito, si no encuentras el destino al que te diriges en esta lista, puedes consultar con un asesor, estamos siempre listos para atenderte.</p>
            @else
                <h2>We can take you anywhere in the Riviera Maya</h2>
                <p>Tulum Airport Cab, besides offering transfer services at Tulum Airport, also offers transfer services to different points of the Riviera Maya, either from Tulum Airport or Cancun Airport, we are always ready to take you wherever the adventure calls.</p>
                <p>We are the first official company at the Tulum Airport, and therefore we have access to any area of the Riviera Maya, from the most popular attractions to the most exclusive hotels, we take you without inconvenience, with the best rates and no hidden fees to any part of the Yucatan Peninsula and the Riviera Maya. We leave a list for you to find your favorite destination, if you don't find the destination you are looking for in this list, you can consult with an advisor, we are always ready to assist you.</p>
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