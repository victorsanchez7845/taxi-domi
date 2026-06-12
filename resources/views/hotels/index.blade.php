@extends('layout.master')

@push("push-top")
    {{-- CSS de la sección. Puedes dejar este mismo si el diseño ya funciona correctamente --}}
    <link href="{{ mix('/assets/css/hotels/index.min.css') }}" rel="preload" as="style">
    <link href="{{ mix('/assets/css/hotels/index.min.css') }}" rel="stylesheet">
@endpush

@push("push-bottom")
@endpush

@section('content')

    {{-- Header general con alternates SEO --}}
    @include('layout.header.general', ['link' => \App\Traits\GeneralTrait::getAlternate($seo)])

    {{-- Encabezado de la página --}}
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

    {{-- Listado de destinos --}}
    <div class="container destinations-list">

        {{-- Texto introductorio --}}
        <div class="top">
            @if(app()->getLocale() == "es")
                <h2>Destinos populares en República Dominicana</h2>

                <p>
                    Taxi Dominicana ofrece servicios de transporte privado hacia algunos de los destinos más visitados
                    de República Dominicana, conectando aeropuertos, hoteles, playas, zonas turísticas y ciudades principales.
                </p>

                <p>
                    Ya sea que viajes a Punta Cana, Santo Domingo, La Romana, Puerto Plata, Santiago o Miches,
                    estamos listos para llevarte de forma segura, cómoda y puntual. Contamos con tarifas claras,
                    sin cargos ocultos y conductores confiables para que tu traslado sea tranquilo desde el primer momento.
                    Si no encuentras el destino que buscas, puedes consultar con un asesor.
                </p>
            @else
                <h2>Popular destinations in the Dominican Republic</h2>

                <p>
                    Taxi Dominicana offers private transportation services to some of the most visited destinations
                    in the Dominican Republic, connecting airports, hotels, beaches, tourist areas, and main cities.
                </p>

                <p>
                    Whether you are traveling to Punta Cana, Santo Domingo, La Romana, Puerto Plata, Santiago, or Miches,
                    we are ready to take you safely, comfortably, and on time. We offer clear rates, no hidden fees,
                    and reliable drivers so your transfer is smooth from the moment you arrive. If you do not find
                    your destination on this list, you can contact an advisor.
                </p>
            @endif
        </div>

        {{-- Tarjetas de destinos --}}
        <div class="bottom">

            {{-- Destino 1: Punta Cana --}}
            <div class="item">
                <div class="one_">
                    {{-- URL pendiente. Reemplazar # cuando exista la página --}}
                    <a href="#" title="{{ app()->getLocale() == 'es' ? 'Hoteles en Punta Cana' : 'Hotels in Punta Cana' }}">
                        <picture>
                            <source srcset="/assets/img/destinations/punta-cana.webp" type="image/webp" />
                            <img
                                src="/assets/img/destinations/punta-cana.jpg"
                                alt="{{ app()->getLocale() == 'es' ? 'Traslado a Punta Cana' : 'Shuttle to Punta Cana' }}"
                                title="{{ app()->getLocale() == 'es' ? 'Traslado a Punta Cana' : 'Shuttle to Punta Cana' }}"
                                loading="lazy"
                                width="373"
                                height="260"
                            />
                        </picture>
                    </a>
                </div>

                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>República Dominicana</p>
                        <h3>Traslado a Punta Cana</h3>
                        <a href="#" title="Hoteles en Punta Cana">Hoteles en Punta Cana</a>
                        <p>Reserva desde <span>$29 USD</span></p>
                    @else
                        <p>Dominican Republic</p>
                        <h3>Shuttle to Punta Cana</h3>
                        <a href="#" title="Hotels in Punta Cana">Hotels in Punta Cana</a>
                        <p>Price from <span>$29 USD</span></p>
                    @endif
                </div>
            </div>

            {{-- Destino 2: Santo Domingo --}}
            <div class="item">
                <div class="one_">
                    {{-- URL pendiente. Reemplazar # cuando exista la página --}}
                    <a href="#" title="{{ app()->getLocale() == 'es' ? 'Hoteles en Santo Domingo' : 'Hotels in Santo Domingo' }}">
                        <picture>
                            <source srcset="/assets/img/destinations/santo-domingo.webp" type="image/webp" />
                            <img
                                src="/assets/img/destinations/santo-domingo.jpg"
                                alt="{{ app()->getLocale() == 'es' ? 'Traslado a Santo Domingo' : 'Shuttle to Santo Domingo' }}"
                                title="{{ app()->getLocale() == 'es' ? 'Traslado a Santo Domingo' : 'Shuttle to Santo Domingo' }}"
                                loading="lazy"
                                width="373"
                                height="260"
                            />
                        </picture>
                    </a>
                </div>

                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>República Dominicana</p>
                        <h3>Traslado a Santo Domingo</h3>
                        <a href="#" title="Hoteles en Santo Domingo">Hoteles en Santo Domingo</a>
                        <p>Reserva desde <span>$149 USD</span></p>
                    @else
                        <p>Dominican Republic</p>
                        <h3>Shuttle to Santo Domingo</h3>
                        <a href="#" title="Hotels in Santo Domingo">Hotels in Santo Domingo</a>
                        <p>Price from <span>$149 USD</span></p>
                    @endif
                </div>
            </div>

            {{-- Destino 3: La Romana --}}
            <div class="item">
                <div class="one_">
                    {{-- URL pendiente. Reemplazar # cuando exista la página --}}
                    <a href="#" title="{{ app()->getLocale() == 'es' ? 'Hoteles en La Romana' : 'Hotels in La Romana' }}">
                        <picture>
                            <source srcset="/assets/img/destinations/la-romana.webp" type="image/webp" />
                            <img
                                src="/assets/img/destinations/la-romana.jpg"
                                alt="{{ app()->getLocale() == 'es' ? 'Traslado a La Romana' : 'Shuttle to La Romana' }}"
                                title="{{ app()->getLocale() == 'es' ? 'Traslado a La Romana' : 'Shuttle to La Romana' }}"
                                loading="lazy"
                                width="373"
                                height="260"
                            />
                        </picture>
                    </a>
                </div>

                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>República Dominicana</p>
                        <h3>Traslado a La Romana</h3>
                        <a href="#" title="Hoteles en La Romana">Hoteles en La Romana</a>
                        <p>Reserva desde <span>$99 USD</span></p>
                    @else
                        <p>Dominican Republic</p>
                        <h3>Shuttle to La Romana</h3>
                        <a href="#" title="Hotels in La Romana">Hotels in La Romana</a>
                        <p>Price from <span>$99 USD</span></p>
                    @endif
                </div>
            </div>

            {{-- Destino 4: Puerto Plata --}}
            <div class="item">
                <div class="one_">
                    {{-- URL pendiente. Reemplazar # cuando exista la página --}}
                    <a href="#" title="{{ app()->getLocale() == 'es' ? 'Hoteles en Puerto Plata' : 'Hotels in Puerto Plata' }}">
                        <picture>
                            <source srcset="/assets/img/destinations/puerto-plata.webp" type="image/webp" />
                            <img
                                src="/assets/img/destinations/puerto-plata.jpg"
                                alt="{{ app()->getLocale() == 'es' ? 'Traslado a Puerto Plata' : 'Shuttle to Puerto Plata' }}"
                                title="{{ app()->getLocale() == 'es' ? 'Traslado a Puerto Plata' : 'Shuttle to Puerto Plata' }}"
                                loading="lazy"
                                width="373"
                                height="260"
                            />
                        </picture>
                    </a>
                </div>

                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>República Dominicana</p>
                        <h3>Traslado a Puerto Plata</h3>
                        <a href="#" title="Hoteles en Puerto Plata">Hoteles en Puerto Plata</a>
                        <p>Reserva desde <span>$249 USD</span></p>
                    @else
                        <p>Dominican Republic</p>
                        <h3>Shuttle to Puerto Plata</h3>
                        <a href="#" title="Hotels in Puerto Plata">Hotels in Puerto Plata</a>
                        <p>Price from <span>$249 USD</span></p>
                    @endif
                </div>
            </div>

            {{-- Destino 5: Santiago --}}
            <div class="item">
                <div class="one_">
                    {{-- URL pendiente. Reemplazar # cuando exista la página --}}
                    <a href="#" title="{{ app()->getLocale() == 'es' ? 'Hoteles en Santiago' : 'Hotels in Santiago' }}">
                        <picture>
                            <source srcset="/assets/img/destinations/santiago.webp" type="image/webp" />
                            <img
                                src="/assets/img/destinations/santiago.jpg"
                                alt="{{ app()->getLocale() == 'es' ? 'Traslado a Santiago' : 'Shuttle to Santiago' }}"
                                title="{{ app()->getLocale() == 'es' ? 'Traslado a Santiago' : 'Shuttle to Santiago' }}"
                                loading="lazy"
                                width="373"
                                height="260"
                            />
                        </picture>
                    </a>
                </div>

                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>República Dominicana</p>
                        <h3>Traslado a Santiago</h3>
                        <a href="#" title="Hoteles en Santiago">Hoteles en Santiago</a>
                        <p>Reserva desde <span>$199 USD</span></p>
                    @else
                        <p>Dominican Republic</p>
                        <h3>Shuttle to Santiago</h3>
                        <a href="#" title="Hotels in Santiago">Hotels in Santiago</a>
                        <p>Price from <span>$199 USD</span></p>
                    @endif
                </div>
            </div>

            {{-- Destino 6: Miches --}}
            <div class="item">
                <div class="one_">
                    {{-- URL pendiente. Reemplazar # cuando exista la página --}}
                    <a href="#" title="{{ app()->getLocale() == 'es' ? 'Hoteles en Miches' : 'Hotels in Miches' }}">
                        <picture>
                            <source srcset="/assets/img/destinations/miches.webp" type="image/webp" />
                            <img
                                src="/assets/img/destinations/miches.jpg"
                                alt="{{ app()->getLocale() == 'es' ? 'Traslado a Miches' : 'Shuttle to Miches' }}"
                                title="{{ app()->getLocale() == 'es' ? 'Traslado a Miches' : 'Shuttle to Miches' }}"
                                loading="lazy"
                                width="373"
                                height="260"
                            />
                        </picture>
                    </a>
                </div>

                <div class="two_">
                    @if(app()->getLocale() == "es")
                        <p>República Dominicana</p>
                        <h3>Traslado a Miches</h3>
                        <a href="#" title="Hoteles en Miches">Hoteles en Miches</a>
                        <p>Reserva desde <span>$129 USD</span></p>
                    @else
                        <p>Dominican Republic</p>
                        <h3>Shuttle to Miches</h3>
                        <a href="#" title="Hotels in Miches">Hotels in Miches</a>
                        <p>Price from <span>$129 USD</span></p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    {{-- Footer general --}}
    @include('layout.footer.general')

@endsection