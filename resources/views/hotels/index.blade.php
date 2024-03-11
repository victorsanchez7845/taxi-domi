@extends('layout.master')

@php
    $breadcrumbs = [];
    $breadcrumbs[1] = [
        "URL" => "https://taxirivieramaya.com/",
        "name" => "Transporte Cancún Aeropuerto"
    ];
    $breadcrumbs[2] = [        
        "name" => "Destinos"
    ];
@endphp

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/hotels/index.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/hotels/index.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>    
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
            <div class="bottom">                
                <x-bookingbox />
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
                    <a href="@lang('link.silos_akumal')" title="{{ __('silos/index.akumal_image_title') }}8">
                        <picture>
                            <source srcset="/assets/img/destinations/destino-akumal.webp" type="image/webp" />
                            <img src="/assets/img/destinations/destino-akumal.jpg" alt="{{ __('silos/index.akumal_image_alt') }}" title="{{ __('silos/index.akumal_image_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Akumal</h3>
                        <a href="@lang('link.silos_akumal')" title="Hoteles en Akumal">Hoteles en Akumal</a>
                        <p>Reserva desde <span>$1,944 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Akumal Shuttle</h3>
                        <a href="@lang('link.silos_akumal')" title="Hotels in Akumal">Hotels in Akumal</a>
                        <p>Price from <span>$108 MXN</span></p>
                    @endif
                </div>
            </div>
            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_bahia_principe')" title="{{ __('silos/index.bahia_principe_image_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/bahia-principe.webp" type="image/webp" />
                            <img src="/assets/img/destinations/bahia-principe.jpg" alt="{{ __('silos/index.bahia_principe_image_alt') }}" title="{{ __('silos/index.bahia_principe_image_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Bahía Principe</h3>
                        <a href="@lang('link.silos_bahia_principe')" title="Hoteles en Bahía Principe">Hoteles en Bahía Principe</a>
                        <p>Reserva desde <span>$1,944 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Transfers to Bahia Principe</h3>
                        <a href="@lang('link.silos_bahia_principe')" title="Hotels in Bahía Principe">Hotels in Bahía Principe</a>
                        <p>Price from <span>$114 USD</span></p>
                    @endif
                </div>
            </div>
            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_boca_paila')" title="{{ __('silos/index.boca_paila_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/boca-paila.webp" type="image/webp" />
                            <img src="/assets/img/destinations/boca-paila.jpg" alt="{{ __('silos/index.boca_paila_alt') }}" title="{{ __('silos/index.boca_paila_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Boca Paila</h3>
                        <a href="@lang('link.silos_boca_paila')" title="Hoteles en Boca Paila">Hoteles en Boca Paila</a>
                        <p>Reserva desde <span>$2,682 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Boca Paila</h3>
                        <a href="@lang('link.silos_boca_paila')" title="Hotels in Boca Paila">Hotels in Boca Paila</a>
                        <p>Price from <span>$149 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_cancun')" title="{{ __('silos/index.cancun_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/cancun-zona-hotelera.webp" type="image/webp" />
                            <img src="/assets/img/destinations/cancun-zona-hotelera.jpg" alt="{{ __('silos/index.cancun_alt') }}" title="{{ __('silos/index.cancun_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Cancún</h3>
                        <a href="@lang('link.silos_cancun')" title="Hoteles en Cancún">Hoteles en Cancún</a>
                        <p>Reserva desde <span>$539 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Transportation to Cancun</h3>
                        <a href="@lang('link.silos_cancun')" title="Hotels in Cancún">Hotels in Cancun</a>
                        <p>Price from <span>$29 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_chetumal')" title="{{ __('silos/index.chetumal_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/chetumal.webp" type="image/webp" />
                            <img src="/assets/img/destinations/chetumal.jpg" alt="{{ __('silos/index.chetumal_alt') }}" title="{{ __('silos/index.chetumal_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Chetumal</h3>
                        <a href="@lang('link.silos_chetumal')" title="Hoteles en Chetumal">Hoteles en Chetumal</a>
                        <p>Reserva desde <span>$9,792 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Chetumal</h3>
                        <a href="@lang('link.silos_chetumal')" title="Hotels in Chetumal">Hotels in Chetumal</a>
                        <p>Price from <span>$544 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_chichen')" title="{{ __('silos/index.chichen_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/chichen-itza.webp" type="image/webp" />
                            <img src="/assets/img/destinations/chichen-itza.jpg" alt="{{ __('silos/index.chichen_alt') }}" title="{{ __('silos/index.chichen_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Chichén Itzá</h3>
                        <a href="@lang('link.silos_chichen')" title="Hoteles en Chichén Itzá">Hoteles en Chichén Itzá</a>
                        <p>Reserva desde <span>$7,650 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Chichén Itzá</h3>
                        <a href="@lang('link.silos_chichen')" title="Hotels in Chichén Itzá">Hotels in Chichén Itzá</a>
                        <p>Price from <span>$425 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_chiquila')" title="{{ __('silos/index.chiquila_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/chiquila.webp" type="image/webp" />
                            <img src="/assets/img/destinations/chiquila.jpg" alt="{{ __('silos/index.chiquila_alt') }}" title="{{ __('silos/index.chiquila_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Chiquilá</h3>
                        <a href="@lang('link.silos_chiquila')" title="Hoteles en Chiquilá">Hoteles en Chiquilá</a>
                        <p>Reserva desde <span>$4,590 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Chiquilá</h3>
                        <a href="@lang('link.silos_chiquila')" title="Hotels in Chiquilá">Hotels in Chiquilá</a>
                        <p>Price from <span>$255 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_costa_mujeres')" title="{{ __('silos/index.costa_mujeres_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/costa-mujeres.webp" type="image/webp" />
                            <img src="/assets/img/destinations/costa-mujeres.jpg" alt="{{ __('silos/index.costa_mujeres_alt') }}" title="{{ __('silos/index.costa_mujeres_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Costa Mujeres</h3>
                        <a href="@lang('link.silos_costa_mujeres')" title="Hoteles en Costa Mujeres">Hoteles en Costa Mujeres</a>
                        <p>Reserva desde <span>$990 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Costa Mujeres</h3>
                        <a href="@lang('link.silos_costa_mujeres')" title="Hotel in Costa Mujeres">Hotels in Costa Mujeres</a>
                        <p>Price from <span>$55 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_merida')" title="{{ __('silos/index.merida_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/merida.webp" type="image/webp" />
                            <img src="/assets/img/destinations/merida.jpg" alt="{{ __('silos/index.merida_alt') }}" title="{{ __('silos/index.merida_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                        
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Mérida</h3>
                        <a href="@lang('link.silos_merida')" title="Hoteles en Mérida">Hoteles en Mérida</a>
                        <p>Reserva desde <span>$9,450 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Mérida</h3>
                        <a href="@lang('link.silos_merida')" title="Hotels in Mérida">Hotels in Mérida</a>
                        <p>Price from <span>$525 USD</span></p>
                    @endif
                </div>
            </div>
            
            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_playa_del_carmen')" title="{{ __('silos/index.pdc_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/playa-del-carmen-destino.webp" type="image/webp" />
                            <img src="/assets/img/destinations/playa-del-carmen-destino.jpg" alt="{{ __('silos/index.pdc_alt') }}" title="{{ __('silos/index.pdc_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                          
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Playa del Carmen</h3>
                        <a href="@lang('link.silos_playa_del_carmen')" title="Hoteles en Playa del Carmen">Hoteles en Playa del Carmen</a>
                        <p>Reserva desde <span>$1,259 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Playa del Carmen</h3>
                        <a href="@lang('link.silos_playa_del_carmen')" title="Hotels in Playa del Carmen">Hotels in Playa del Carmen</a>
                        <p>Price from <span>$69.99 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_playa_mujeres')" title="{{ __('silos/index.playa_mujeres_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/playa-mujeres.webp" type="image/webp" />
                            <img src="/assets/img/destinations/playa-mujeres.jpg" alt="{{ __('silos/index.playa_mujeres_alt') }}" title="{{ __('silos/index.playa_mujeres_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                          
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Playa Mujeres</h3>
                        <a href="@lang('link.silos_playa_mujeres')" title="Hoteles en Playa Mujeres">Hoteles en Playa Mujeres</a>
                        <p>Reserva desde <span>$990 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Playa Mujeres</h3>
                        <a href="@lang('link.silos_playa_mujeres')" title="Hotels in Playa Mujeres">Hotels in Playa Mujeres</a>
                        <p>Price from <span>$55 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_playa_paraiso')" title="{{ __('silos/index.playa_paraiso_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/playa-paraiso.webp" type="image/webp" />
                            <img src="/assets/img/destinations/playa-paraiso.jpg" alt="{{ __('silos/index.playa_paraiso_alt') }}" title="{{ __('silos/index.playa_paraiso_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                          
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Playa Paraíso</h3>
                        <a href="@lang('link.silos_playa_paraiso')" title="Hoteles en Playa Paraíso">Hoteles en Playa Paraíso</a>
                        <p>Reserva desde <span>$1,170 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Playa Paraíso</h3>
                        <a href="@lang('link.silos_playa_paraiso')" title="Hotels in Playa Paraíso">Hotels in Playa Paraíso</a>
                        <p>Price from <span>$65 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_puerto_aventuras')" title="{{ __('silos/index.playa_paraiso_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/puerto-aventuras.webp" type="image/webp" />
                            <img src="/assets/img/destinations/puerto-aventuras.jpg" alt="{{ __('silos/index.playa_paraiso_alt') }}" title="{{ __('silos/index.playa_paraiso_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                          
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslados a Puerto Aventuras</h3>
                        <a href="@lang('link.silos_puerto_aventuras')" title="Hoteles en Puerto Aventuras">Hoteles en Puerto Aventuras</a>
                        <p>Reserva desde <span>$1,674 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Puerto Aventuras</h3>
                        <a href="@lang('link.silos_puerto_aventuras')" title="Hotels in Puerto Aventuras">Hotels in Puerto Aventuras</a>
                        <p>Price from <span>$94 USD</span></p>
                    @endif
                </div>
            </div>
            
            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_puerto_juarez')" title="{{ __('silos/index.puerto_juarez_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/puerto-juarez.webp" type="image/webp" />
                            <img src="/assets/img/destinations/puerto-juarez.jpg" alt="{{ __('silos/index.puerto_juarez_alt') }}" title="{{ __('silos/index.puerto_juarez_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                         
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslado a Puerto Juarez</h3>
                        <a href="@lang('link.silos_puerto_juarez')" title="Hoteles en Puerto Juarez">Hoteles en Puerto Juarez</a>
                        <p>Reserva desde <span>$954 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Puerto Juarez</h3>
                        <a href="@lang('link.silos_puerto_juarez')" title="Hotels in Puerto Juarez">Hotels in Puerto Juarez</a>
                        <p>Price from <span>$53 USD</span></p>
                    @endif
                </div>
            </div>

            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_puerto_morelos')" title="{{ __('silos/index.puerto_morelos_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/puerto-morelos-destino-taxi.webp" type="image/webp" />
                            <img src="/assets/img/destinations/puerto-morelos-destino-taxi.jpg" alt="{{ __('silos/index.puerto_morelos_alt') }}" title="{{ __('silos/index.puerto_morelos_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                         
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslado a Puerto Morelos</h3>
                        <a href="@lang('link.silos_puerto_morelos')" title="Hoteles en Puerto Morelos">Hoteles en Puerto Morelos</a>
                        <p>Reserva desde <span>$954 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Puerto Morelos</h3>
                        <a href="@lang('link.silos_puerto_morelos')" title="Hotels in Puerto Morelos">Hotels in Puerto Morelos</a>
                        <p>Price from <span>$53 USD</span></p>
                    @endif
                </div>
            </div>
            
            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_ruta_cenotes')" title="{{ __('silos/index.ruta_cenotes_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/ruta-de-los-cenotes.webp" type="image/webp" />
                            <img src="/assets/img/destinations/ruta-de-los-cenotes.jpg" alt="{{ __('silos/index.ruta_cenotes_alt') }}" title="{{ __('silos/index.ruta_cenotes_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                         
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslado a Ruta de los Cenotes</h3>
                        <a href="@lang('link.silos_ruta_cenotes')" title="Hoteles en Ruta de los Cenotes">Hoteles en Ruta de los Cenotes</a>
                        <p>Reserva desde <span>$1,458 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Ruta de los Cenotes</h3>
                        <a href="@lang('link.silos_ruta_cenotes')" title="Hotels in Ruta de los Cenotes">Hotels in Ruta de los Cenotes</a>
                        <p>Price from <span>$81 USD</span></p>
                    @endif
                </div>
            </div>
            
            <div class="item">
                <div class="one_">
                    <a href="@lang('link.silos_tulum')" title="{{ __('silos/index.tulum_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/tulum-destino.webp" type="image/webp" />
                            <img src="/assets/img/destinations/tulum-destino.jpg" alt="{{ __('silos/index.tulum_alt') }}" title="{{ __('silos/index.tulum_title') }}" loading="lazy" width="373" height="260" />
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
                    <a href="@lang('link.silos_valladolid')" title="{{ __('silos/index.valladolid_title') }}">
                        <picture>
                            <source srcset="/assets/img/destinations/valladolid.webp" type="image/webp" />
                            <img src="/assets/img/destinations/valladolid.jpg" alt="{{ __('silos/index.valladolid_alt') }}" title="{{ __('silos/index.valladolid_title') }}" loading="lazy" width="373" height="260" />
                        </picture>                                                           
                    </a>                    
                </div>
                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>Quintana Roo, México</p>
                        <h3>Traslado a Valladolid</h3>
                        <a href="@lang('link.silos_valladolid')" title="Hoteles en Valladolid">Hoteles en Valladolid</a>
                        <p>Reserva desde <span>$6,192 MXN</span></p>
                    @else
                        <p>Quintana Roo, México</p>
                        <h3>Shuttle to Valladolid</h3>
                        <a href="@lang('link.silos_valladolid')" title="Hotels in Valladolid">Hotels in Valladolid</a>
                        <p>Price from <span>$344 USD</span></p>
                    @endif
                </div>
            </div>

        </div>
    </div>


    @include('layout.footer.general')
@endsection