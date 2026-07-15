@php
    use App\Traits\PricesTrait;
@endphp
@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="stylesheet">

    @if(app()->getLocale() == "en")
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Punta Cana Airport Transfers",
            "image": [
                "https://taxidominicana.com/assets/img/schema/1x1.jpg",
                "https://taxidominicana.com/assets/img/schema/4x3.jpg",
                "https://taxidominicana.com/assets/img/schema/16x9.jpg"
            ],
            "description": "Private Punta Cana Airport Transfers to hotels and resorts in Bávaro, Cap Cana, Uvero Alto and nearby destinations, with professional drivers and comfortable vehicles.",
            "sku": "016001",
            "mpn": "026001",
            "brand": {
                "@type": "Brand",
                "name": "Taxi Dominicana"
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
                "url": "https://taxidominicana.com/punta-cana-airport-transfers",
                "priceCurrency": "USD",
                "price": 35,
                "priceValidUntil": "2027-12-31",
                "itemCondition": "https://schema.org/NewCondition",
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
            "name": "Traslados en Punta Cana",
            "image": [
                "https://taxidominicana.com/assets/img/schema/1x1.jpg",
                "https://taxidominicana.com/assets/img/schema/4x3.jpg",
                "https://taxidominicana.com/assets/img/schema/16x9.jpg"
            ],
            "description": "Traslados privados desde y hacia el Aeropuerto de Punta Cana para hoteles de Bávaro, Cap Cana, Uvero Alto y destinos cercanos, con conductores profesionales.",
            "sku": "016001",
            "mpn": "026001",
            "brand": {
                "@type": "Brand",
                "name": "Taxi Dominicana"
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
                "url": "https://taxidominicana.com/es/traslados-aeropuerto-punta-cana",
                "priceCurrency": "USD",
                "price": 35,
                "priceValidUntil": "2027-12-31",
                "itemCondition": "https://schema.org/NewCondition",
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

    <div class="banner">
        <picture>
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.webp" type="image/webp">
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.png" type="image/png">
            <source srcset="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" type="image/webp">
            <img src="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.png" alt="{{ __('destinations/tulum.banner_alt') }}" title="{{ __('website/home.banner_title') }}" width="2160" height="400">
        </picture>
    </div>

    <div class="container main-content">
        <div class="left">
            <x-bookingbox/>
        </div>
        <div class="right">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
            @if(app()->getLocale() == "en")
                <h1>Punta Cana Airport Transfers</h1>
                <h2>Private Punta Cana Airport Transfers at Great Rates</h2>
                <p>Looking for reliable, safe, and affordable Punta Cana Airport Transfers? Taxi Dominicana is ready to help. We provide private transportation from Punta Cana International Airport to hotels and resorts throughout Bávaro, Cap Cana, Uvero Alto, Macao, and nearby areas. Book ahead and enjoy a smooth arrival with direct service to your destination.</p>
                <p>At Taxi Dominicana, we understand how important comfort and peace of mind are after a flight. Our professional drivers and well-maintained vehicles provide dependable service from the moment you leave the terminal. Your Punta Cana airport transfer is planned around your arrival, helping you travel comfortably while enjoying the tropical scenery of the Dominican Republic.</p>
                <p>Along with dependable service, we offer competitive rates for couples, families, and groups. With Taxi Dominicana, you receive clear pricing, private transportation, and practical options for different party sizes. Reserve your Punta Cana Airport Transfers before traveling and reach your hotel safely, comfortably, and without dealing with unexpected transportation costs.</p>
            @else
                <h1>Traslados en Punta Cana</h1>
                <h2>Traslados al Aeropuerto de Punta Cana al Mejor Precio</h2>
                <p>&iquest;Buscas traslados en Punta Cana confiables, seguros y a buen precio? Taxi Dominicana es tu mejor opci&oacute;n. Ofrecemos transporte privado desde el Aeropuerto Internacional de Punta Cana hacia hoteles y resorts de B&aacute;varo, Cap Cana, Uvero Alto, Macao y zonas cercanas. Reserva con anticipaci&oacute;n y disfruta una llegada directa, c&oacute;moda y sin complicaciones.</p>
                <p>En Taxi Dominicana entendemos la importancia de viajar con tranquilidad despu&eacute;s de un vuelo. Contamos con conductores profesionales y veh&iacute;culos en buenas condiciones para ofrecer un servicio puntual desde la terminal. Nuestro objetivo es que tus traslados en Punta Cana sean c&oacute;modos y sencillos mientras disfrutas del paisaje tropical de Rep&uacute;blica Dominicana.</p>
                <p>Adem&aacute;s de un servicio confiable, ofrecemos tarifas competitivas para parejas, familias y grupos. Con Taxi Dominicana recibes precios claros, transporte privado y opciones para distintos n&uacute;meros de pasajeros. Reserva tus traslados al Aeropuerto de Punta Cana antes de viajar y llega a tu hotel de forma segura, c&oacute;moda y sin cargos inesperados.</p>
            @endif
        </div>
    </div>

    <div class="bg_blue_one">
        <div class="container content_one">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>The Advantages of Private Punta Cana Airport Transfers</h2>
                    <p>Booking private Punta Cana Airport Transfers gives you greater convenience, comfort, and peace of mind from the moment you arrive. Here is why reserving your airport transportation in advance is the ideal choice:</p>
                @else
                    <h2>Ventajas de reservar traslados privados en Punta Cana</h2>
                    <p>Reservar traslados privados en Punta Cana ofrece mayor comodidad, privacidad y tranquilidad desde tu llegada. Aqu&iacute; te explicamos por qu&eacute; contratar tu transporte al aeropuerto con anticipaci&oacute;n es la opci&oacute;n ideal:</p>
                @endif                
            </div>
            <div class="bottom">
                <div>
                    <div class="icon">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#booking"></use></svg>
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Personalized Experience</p>
                            <p>With a private transfer, you'll enjoy a personalized experience tailored to your schedule and preferences. </p>
                        @else
                            <p>Experiencia Personalizada</p>
                            <p>Con un traslado privado, disfrutarás de una experiencia personalizada adaptada a tu horario y preferencias.</p>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#standing"></use></svg>
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Efficiency and Timeliness</p>
                            <p>Private transfers prioritize your time and schedule, guaranteeing prompt departure and arrival times.</p>
                        @else
                            <p>Eficiencia y Puntualidad</p>
                            <p>Los traslados privados priorizan tu tiempo y horario, garantizando salidas y llegadas puntuales.</p>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#comfort"></use></svg>
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Comfort and Privacy</p>
                            <p>Traveling in a private vehicle means you'll have the space and privacy to relax and unwind during your journey. </p>
                        @else
                            <p>Comodidad y Privacidad</p>
                            <p>Viajar en un vehículo privado significa que tendrás espacio y privacidad para relajarte y descansar durante tu trayecto.</p>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#private"></use></svg>
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Safety and Security</p>
                            <p>Private transfer services prioritize your safety and security, providing professional drivers who are trained to navigate the routes safely. </p>
                        @else
                            <p>Seguridad</p>
                            <p>Los servicios de traslado privado priorizan tu seguridad, proporcionando conductores profesionales capacitados para navegar de forma segura por las rutas.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_two">
        <div class="top">
            @if(app()->getLocale() == "en")
                <h2>How to Get from Punta Cana Airport to Your Hotel</h2>
                <p>When traveling from Punta Cana Airport to your hotel, several transportation options are available. Here are the main ways to reach resorts across Punta Cana.</p>
            @else
                <h2>Cómo llegar del Aeropuerto de Punta Cana a tu hotel</h2>
                <p>Al viajar del Aeropuerto de Punta Cana a tu hotel, existen varias opciones de transporte. Estas son las principales formas de llegar a los resorts de la zona.</p>
            @endif
        </div>
        <div class="bottom">
            <div>
                @if(app()->getLocale() == "en")
                    <p>One of the easiest ways to reach your hotel is to reserve private Punta Cana Airport Transfers. A driver meets your arrival and takes you directly to your resort, avoiding queues, shared stops, and negotiations with transportation providers after a long flight.</p>
                    <p>Shared shuttles may be a lower-cost alternative for solo travelers. They usually wait for several passengers and stop at multiple hotels before reaching your destination, so travel time can be longer than with private transportation. They may also have fixed departure schedules and luggage restrictions.</p>
                    <p>Renting a car is another option for travelers who want independence during their stay. Rental desks are available near Punta Cana International Airport, although drivers should consider insurance, deposits, local traffic, parking, and navigation before choosing this alternative for their airport arrival.</p>
                    <p>Public buses and local connections are available but are not designed as direct airport-to-hotel services. Reaching Bávaro, Cap Cana, Uvero Alto, or other resort areas may require transfers and additional taxis, making this option less practical when traveling with luggage or children.</p>
                    <p>For a direct and organized arrival, booking Punta Cana Airport Transfers in advance is usually the most comfortable solution, allowing you to focus on enjoying your vacation in the Dominican Republic.</p>
                @else
                    <p>Una de las formas m&aacute;s c&oacute;modas de llegar a tu hotel es reservar traslados privados en Punta Cana. Un conductor coordina tu llegada y te lleva directamente al resort, evitando filas, paradas compartidas y negociaciones con transportistas despu&eacute;s de un vuelo largo.</p>
                    <p>Los servicios compartidos pueden ser una alternativa econ&oacute;mica para viajeros solos. Normalmente esperan a varios pasajeros y realizan paradas en distintos hoteles, por lo que el recorrido puede durar m&aacute;s que un traslado privado. Tambi&eacute;n pueden tener horarios fijos y restricciones de equipaje.</p>
                    <p>Alquilar un veh&iacute;culo es otra opci&oacute;n para quienes desean independencia durante su estancia. Cerca del Aeropuerto Internacional de Punta Cana existen agencias, aunque conviene considerar seguros, dep&oacute;sitos, tr&aacute;fico, estacionamiento y navegaci&oacute;n antes de elegir esta alternativa.</p>
                    <p>Los autobuses p&uacute;blicos y conexiones locales no funcionan como servicios directos del aeropuerto al hotel. Para llegar a B&aacute;varo, Cap Cana, Uvero Alto u otras zonas puedes necesitar cambios y taxis adicionales, algo poco pr&aacute;ctico con equipaje o ni&ntilde;os.</p>
                    <p>Para una llegada directa y organizada, reservar traslados en Punta Cana con anticipaci&oacute;n suele ser la alternativa m&aacute;s c&oacute;moda, permiti&eacute;ndote concentrarte en disfrutar tus vacaciones en Rep&uacute;blica Dominicana.</p>
                @endif
            </div>
            <iframe src="https://www.google.com/maps?q=Punta+Cana+International+Airport&output=embed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Punta Cana International Airport location"></iframe>
            <div class="faqs-accordion">
                <div>
                    <h3>Private Transportation</h3>
                    <div>
                        <p>
                            After a long flight, private transportation offers a direct ride to your Punta Cana hotel with a prearranged rate and no shared stops.
                        </p>
                    </div>
                </div>
                <div class="hidden">
                    <h3>Shared Shuttle</h3>
                    <div>
                        <p>
                            After a long flight, private transportation offers a direct ride to your Punta Cana hotel with a prearranged rate and no shared stops. Para evitar todo eso, se recomienda organizar antes de viajar, una opción de
                            transportation to Punta Cana hotels may involve shared stops and additional waiting, while a private transfer travels directly to your resort.
                        </p>
                    </div>
                </div>
                <div class="hidden">
                    <h3>Car Rental</h3>
                    <div>
                        <p>
                            After a long flight, private transportation offers a direct ride to your Punta Cana hotel with a prearranged rate and no shared stops. Para evitar todo eso, se recomienda organizar antes de viajar, una opción de
                            transportation to Punta Cana hotels may involve shared stops and additional waiting, while a private transfer travels directly to your resort.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services_list_blue">
        <div class="container services_list">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Punta Cana Airport Transportation Services</h2>
                    <p>Choose from private Punta Cana airport transportation options designed around your travel needs, preferences, luggage, and group size.</p>
                @else
                    <h2>Servicios de traslados en Punta Cana</h2>
                    <p>Elige entre opciones de traslados en Punta Cana adaptadas a tus necesidades, preferencias, equipaje y al n&uacute;mero de personas de tu grupo.</p>
                @endif
            </div>
            <div class="bottom">
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/van.webp" type="image/webp" />
                            <img src="/assets/img/services/van.jpg" alt="{{ __('destinations/tulum.services_van_alt') }}" title="{{ __('destinations/tulum.services_van_title') }}" loading="lazy" width="150" height="100"/>
                        </picture>
                        @if(app()->getLocale() == "en")
                            <p>From/To Punta Cana Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Punta Cana</p>
                            <p>Traslado al Aeropuerto</p>
                        @endif
                    </div>
                    <div class="information">
                        <p>{{ __('destinations/tulum.passengers',['quantity' => 8]) }}</p>
                        <p>{{ __('destinations/tulum.suitcase',['quantity' => 7]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/tulum.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ (PricesTrait::price(22, 1, 'USD') / 8) }} USD</p>
                                @else
                                    <p>${{ (PricesTrait::price(22, 1, 'USD') / 8) }} USD</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/tulum.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/tulum.view_rates') }}" title="{{ __('destinations/tulum.view_rates') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/suburban.webp" type="image/webp" />
                            <img src="/assets/img/services/suburban.jpg" alt="{{ __('destinations/tulum.services_suburban_alt') }}" title="{{ __('destinations/tulum.services_suburban_title') }}" loading="lazy" width="150" height="100"/>
                        </picture>
                        @if(app()->getLocale() == "en")
                            <p>From/To Punta Cana Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Punta Cana</p>
                            <p>Traslado al Aeropuerto</p>
                        @endif
                    </div>
                    <div class="information">
                        <p>{{ __('destinations/tulum.passengers',['quantity' => 5]) }}</p>
                        <p>{{ __('destinations/tulum.suitcase',['quantity' => 5]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/tulum.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>$67.60 USD</p>
                                @else
                                    <p>$1216 USD</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/tulum.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/tulum.view_rates') }}" title="{{ __('destinations/tulum.view_rates') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/crafter.webp" type="image/webp" />
                            <img src="/assets/img/services/crafter.jpg" alt="{{ __('destinations/tulum.services_crafter_alt') }}" title="{{ __('destinations/tulum.services_crafter_title') }}" loading="lazy" width="150" height="100"/>
                        </picture>
                        @if(app()->getLocale() == "en")
                            <p>From/To Punta Cana Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Punta Cana</p>
                            <p>Traslado al Aeropuerto</p>
                        @endif
                    </div>
                    <div class="information">
                        <p>{{ __('destinations/tulum.passengers',['quantity' => 15]) }}</p>
                        <p>{{ __('destinations/tulum.suitcase',['quantity' => 14]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/tulum.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>$24.14 USD</p>
                                @else
                                    <p>$434.52 USD</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/tulum.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/tulum.view_rates') }}" title="{{ __('destinations/tulum.view_rates') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_three">
        <div class="top">
            @if(app()->getLocale() == "en")
                <h2>Punta Cana Airport Transfer Rates</h2>
                <p>Explore competitive Punta Cana Airport Transfer rates for popular hotel areas, with practical options that maintain comfort, privacy, and dependable service.</p>
            @else
                <h2>Tarifas de traslados en Punta Cana</h2>
                <p>Consulta tarifas competitivas de traslados en Punta Cana hacia las principales zonas hoteleras, sin sacrificar comodidad, privacidad ni un servicio confiable.</p>
            @endif
        </div>
        <div class="bottom">
            @if(app()->getLocale() == "es")
                <table class="table table-striped table-responsive">
                    <caption>Precios de traslados privados desde el Aeropuerto de Punta Cana</caption>
                    <thead>
                        <tr>
                            <th rowspan="2" scope="col" class="destino">Destino</th>
                            <th colspan="2">Taxi Privado<br> 1-8 pasajeros</th>
                            <th colspan="2">Taxi de Lujo<br> 1-5 pasajeros</th>
                            <th colspan="2">Taxi para Grupos<br> 1-16 pasajeros</th>
                        </tr>
                        <tr>
                            <th>Sencillo</th>
                            <th>Redondo</th>
                            <th>Sencillo</th>
                            <th>Redondo</th>
                            <th>Sencillo</th>
                            <th>Redondo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Punta Cana</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bávaro</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Cap Cana</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(5, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(5, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Uvero Alto</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(21, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(21, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Macao</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(3, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(3, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Cabeza de Toro</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Arena Gorda</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(4, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(4, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>El Cortecito</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Los Corales</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(8, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(8, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bávaro Beach</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(9, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(9, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Miches</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(10, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(10, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bayahíbe</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>La Romana</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(17, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(17, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Juan Dolio</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(19, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(19, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Boca Chica</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Plata</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Aeropuerto de Punta Cana</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(11, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(11, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Hoteles de Punta Cana</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(22, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(22, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">N/A</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">N/A</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">N/A</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">N/A</td>
                        </tr>
                    </tbody>
                </table>
            @else
                <table class="table table-striped table-responsive">
                    <caption>Punta Cana Airport transfer prices may vary by season*</caption>
                    <thead>
                        <tr>
                            <th rowspan="2" scope="col" class="destino">Destination</th>
                            <th colspan="2">Private Taxi<br> 1-8 passengers</th>
                            <th colspan="2">Luxury Taxi<br> 1-5 passengers</th>
                            <th colspan="2">Taxi for Groups<br> 1-16 passengers</th>
                        </tr>
                        <tr>
                            <th>One Way</th>
                            <th>Round Trip</th>
                            <th>One Way</th>
                            <th>Round Trip</th>
                            <th>One Way</th>
                            <th>Round Trip</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Punta Cana</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bavaro</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Cap Cana</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(5, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(5, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Uvero Alto</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(21, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(21, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Macao</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(3, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(3, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Cabeza de Toro</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Arena Gorda</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(4, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(4, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>El Cortecito</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Los Corales</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(8, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(8, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bavaro Beach</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(9, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(9, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Miches</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(10, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(10, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bayahibe</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>La Romana</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(17, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(17, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Juan Dolio</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(19, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(19, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Boca Chica</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Plata</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Punta Cana Airport</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(11, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(11, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Punta Cana Hotels</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(22, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(22, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">N/A</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">N/A</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">N/A</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">N/A</td>
                        </tr>
                    </tbody>
                </table>
            @endif            
        </div>
    </div>

    <div class="bg_blue_two">
        <div class="container content_four">
            <div class="left">
                @if(app()->getLocale() == "en")
                    <h2>What Customers Say About Our Punta Cana Transfers</h2>
                    <p>Discover why travelers choose Taxi Dominicana for Punta Cana Airport Transfers and let our team make your arrival more comfortable, organized, and satisfying.</p>
                @else
                    <h2>Opiniones sobre nuestros traslados en Punta Cana</h2>
                    <p>Conoce por qu&eacute; nuestros viajeros eligen Taxi Dominicana para sus traslados en Punta Cana y permite que nuestro equipo haga tu llegada m&aacute;s c&oacute;moda y organizada.</p>
                @endif
                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/clients-list.webp" type="image/webp" />
                        <img src="/assets/img/reviews/clients-list.jpg" alt="{{ __('website/home.comment_general') }}" title="{{ __('website/home.comment_general') }}" loading="lazy" width="60" height="60" />
                    </picture>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>4.9 Rating</p>
                            <p>+180 Users</p>
                        @else
                            <p>4.9 Calificación</p>
                            <p>+180 Usuarios</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="right">
                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/1.webp" type="image/webp" />
                        <img src="/assets/img/reviews/1.jpg" alt="{{ __('website/home.comment_title',['name' => 'Jennifer S.']) }}" title="{{ __('website/home.comment_title',['name' => 'Jennifer S.']) }}" loading="lazy" width="60" height="60" />
                    </picture>                        
                    <div>
                        <p>Jennifer S. <span>4.5</span></p>
                        @if(app()->getLocale() == "en")
                            <p>Booking with Taxi Dominicana was the best decision for our Punta Cana vacation. The private airport transfer was convenient, and our driver was friendly and professional. The vehicle was comfortable, the pickup was organized, and I will gladly use the service again on my next visit to the Dominican Republic.</p>
                        @else
                            <p>Reservar con Taxi Dominicana fue una excelente decisi&oacute;n para nuestras vacaciones en Punta Cana. El traslado privado fue muy c&oacute;modo, el conductor fue amable y profesional, y la recogida estuvo bien organizada. Definitivamente volver&eacute; a usar el servicio en mi pr&oacute;xima visita a Rep&uacute;blica Dominicana.</p>
                        @endif
                    </div>
                </div>
                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/2.webp" type="image/webp" />
                        <img src="/assets/img/reviews/2.jpg" alt="{{ __('website/home.comment_title',['name' => 'Michael J.']) }}" title="{{ __('website/home.comment_title',['name' => 'Michael J.']) }}" loading="lazy" width="60" height="60" />
                    </picture>                        
                    <div>
                        <p>Michael J. <span>4.5</span></p>
                        @if(app()->getLocale() == "en")
                            <p>I highly recommend Taxi Dominicana. From the moment we landed at Punta Cana Airport, everything was simple. Our private transfer to Bávaro was comfortable and stress-free. Communication with the team was excellent, and they accommodated our flight schedule. Thank you for making our arrival so easy!</p>
                        @else
                            <p>Recomiendo ampliamente Taxi Dominicana. Desde que aterrizamos en el Aeropuerto de Punta Cana, todo fue sencillo. Nuestro traslado privado a B&aacute;varo fue c&oacute;modo y sin estr&eacute;s. La comunicaci&oacute;n fue excelente y se adaptaron al horario del vuelo. &iexcl;Gracias por facilitar nuestra llegada!</p>
                        @endif                        
                    </div>
                </div>
                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/3.webp" type="image/webp" />
                        <img src="/assets/img/reviews/3.jpg" alt="{{ __('website/home.comment_title',['name' => 'Sarah W.']) }}" title="{{ __('website/home.comment_title',['name' => 'Sarah W.']) }}" loading="lazy" width="60" height="60" />
                    </picture>                        
                    <div>
                        <p>Sarah W. <span>4.5</span></p>
                        @if(app()->getLocale() == "en")
                            <p>My friends and I chose the group transfer with Taxi Dominicana, and it was perfect for our needs. The vehicle was clean and comfortable, and our driver was excellent. He also shared useful recommendations for restaurants and activities in Punta Cana. Overall, it was a great experience from arrival to hotel drop-off!</p>
                        @else
                            <p>Mis amigos y yo elegimos el traslado para grupos con Taxi Dominicana y fue perfecto. El veh&iacute;culo estaba limpio y c&oacute;modo, y el conductor fue excelente. Tambi&eacute;n comparti&oacute; recomendaciones de restaurantes y actividades en Punta Cana. En general, fue una gran experiencia desde el aeropuerto hasta el hotel.</p>
                        @endif                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_destinations">
        <div class="top">
            @if(app()->getLocale() == "en")
                <h2>Explore Punta Cana with Convenient Private Transfers</h2>
                <p>Discover Punta Cana and its most popular resort areas with Taxi Dominicana. From the beaches of Bávaro and Cap Cana to the peaceful hotels of Uvero Alto, our private transportation services connect you comfortably with the region’s main destinations.</p>
            @else
                <h2>Explora Punta Cana con traslados privados y cómodos</h2>
                <p>Descubre Punta Cana y sus zonas hoteleras m&aacute;s populares con Taxi Dominicana. Desde las playas de B&aacute;varo y Cap Cana hasta los tranquilos hoteles de Uvero Alto, nuestros traslados privados te conectan c&oacute;modamente con los principales destinos de la regi&oacute;n.</p>
            @endif
        </div>
        <div class="bottom">
            <div>
                <a href="#" title="{{ __('destinations/tulum.destination_tulum_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/tulum.webp" type="image/webp" />
                        <img src="/assets/img/destinations/tulum.jpg" alt="{{ __('destinations/tulum.destination_tulum_alt') }}" title="{{ __('destinations/tulum.destination_tulum_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Bávaro</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Bávaro is one of Punta Cana’s most popular hotel areas, known for white-sand beaches, turquoise water, lively resorts, restaurants, and convenient access from Punta Cana International Airport.</p>
                @else
                    <p>B&aacute;varo es una de las zonas hoteleras m&aacute;s populares de Punta Cana, conocida por sus playas blancas, agua turquesa, resorts, restaurantes y cercan&iacute;a con el aeropuerto.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/tulum.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'USD') / 8),0) }} USD</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/tulum.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/tulum.view_rates') }}" title="{{ __('destinations/tulum.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/tulum.destination_cancun_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/cancun.webp" type="image/webp" />
                        <img src="/assets/img/destinations/cancun.jpg" alt="{{ __('destinations/tulum.destination_cancun_alt') }}" title="{{ __('destinations/tulum.destination_cancun_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Cap Cana</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Cap Cana is an exclusive resort community with luxury hotels, beaches, golf courses, and a marina, located within convenient driving distance of Punta Cana International Airport.</p>
                @else
                    <p>Cap Cana es una exclusiva comunidad tur&iacute;stica con hoteles de lujo, playas, campos de golf y marina, ubicada a una distancia conveniente del Aeropuerto de Punta Cana.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/tulum.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8),0) }} USD</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/tulum.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/tulum.view_rates') }}" title="{{ __('destinations/tulum.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/tulum.destination_pdc_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/playa-del-carmen.webp" type="image/webp" />
                        <img src="/assets/img/destinations/playa-del-carmen.jpg" alt="{{ __('destinations/tulum.destination_pdc_alt') }}" title="{{ __('destinations/tulum.destination_pdc_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Uvero Alto</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Uvero Alto offers a quieter side of Punta Cana, with spacious beachfront resorts and a relaxed atmosphere. Private airport transportation makes the longer route comfortable and direct.</p>
                @else
                    <p>Uvero Alto ofrece una zona tranquila de Punta Cana, con amplios resorts frente al mar. Un traslado privado desde el aeropuerto hace que el recorrido sea directo y c&oacute;modo.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/tulum.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(6, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(6, 1, 'USD') / 8),0) }} USD</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/tulum.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/tulum.view_rates') }}" title="{{ __('destinations/tulum.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/tulum.destination_akumal_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/akumal.webp" type="image/webp" />
                        <img src="/assets/img/destinations/akumal.jpg" alt="{{ __('destinations/tulum.destination_akumal_alt') }}" title="{{ __('destinations/tulum.destination_akumal_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Macao</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Macao is known for its natural beach, surf-friendly waves, and local atmosphere. Our Punta Cana transfers provide convenient transportation between the airport and hotels near this coastal area.</p>
                @else
                    <p>Macao es conocida por su playa natural, sus olas para surf y su ambiente local. Nuestros traslados conectan el aeropuerto con hoteles cercanos a esta zona costera.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/tulum.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(9, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(9, 1, 'USD') / 8),0) }} USD</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/tulum.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/tulum.view_rates') }}" title="{{ __('destinations/tulum.view_rates') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_five">
        <div class="left faqs_section">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Punta Cana Airport Transfers FAQs</h2>
                    <p>Helpful answers for planning your private airport transportation</p>
                @else
                    <h2>Preguntas frecuentes sobre traslados en Punta Cana</h2>
                    <p>Respuestas útiles para organizar tu transporte privado desde el aeropuerto</p>
                @endif
            </div>
            <div class="bottom">
                @if(app()->getLocale() == "en")
                    <div><h3>How do Punta Cana Airport Transfers work?</h3><div><p>After booking, you receive confirmation with your pickup details. For airport arrivals, your driver follows the scheduled flight information and meets you at the designated area outside the terminal. You then travel directly in a private vehicle to your hotel, resort, villa, or accommodation in Punta Cana.</p></div></div>
                    <div><h3>Which areas can I reach from Punta Cana Airport?</h3><div><p>Private transfers are available to the main hotel areas, including Bávaro, Cap Cana, Cabeza de Toro, Arena Gorda, El Cortecito, Los Corales, Macao, and Uvero Alto. Longer-distance transportation may also be arranged for destinations such as Bayahíbe, La Romana, Miches, Juan Dolio, and Santo Domingo.</p></div></div>
                    <div><h3>How long does a transfer from Punta Cana Airport take?</h3><div><p>Travel time depends on the location of your hotel and current road conditions. Hotels in Punta Cana, Cap Cana, and Cabeza de Toro are generally closer to the airport, while Bávaro, Macao, and Uvero Alto require a longer drive. Your reservation should include the correct hotel name to help plan the route.</p></div></div>
                    <div><h3>Are Punta Cana airport transfers private?</h3><div><p>Yes. A private transfer is reserved for you and the passengers included in your booking. You do not need to wait for unrelated travelers or make multiple hotel stops. This provides a more direct, comfortable, and predictable trip from Punta Cana International Airport to your destination.</p></div></div>
                    <div><h3>What information is needed to make a reservation?</h3><div><p>Please provide your arrival or departure date, flight number, airline, hotel or accommodation, number of passengers, and the amount of luggage. Accurate information helps coordinate the correct pickup time, vehicle capacity, and route for your Punta Cana Airport Transfer.</p></div></div>
                    <div><h3>What happens if my flight is delayed?</h3><div><p>Flight information allows the transportation team to review changes to your scheduled arrival. If the airline changes your flight number, arrival date, or route, contact the team as soon as possible so the reservation can be updated and your pickup can be coordinated correctly.</p></div></div>
                    <div><h3>What types of vehicles are available?</h3><div><p>Vehicle options may include sedans, SUVs, minivans, passenger vans, and larger vehicles for groups. The assigned option depends on the number of passengers, luggage, service selected, and availability. Always include children and all suitcases when choosing the appropriate vehicle.</p></div></div>
                    <div><h3>Can I book a return transfer to Punta Cana Airport?</h3><div><p>Yes. You can reserve one-way transportation or a round trip. For departures, the pickup time is scheduled early enough to account for the distance from your hotel, possible traffic, airline check-in, and the recommended arrival time at Punta Cana International Airport.</p></div></div>
                    <div><h3>Are child seats available?</h3><div><p>Child-seat availability should be requested before completing the reservation. Include the child's age and the type of seat required so the team can confirm whether the appropriate equipment is available. Local availability and vehicle compatibility may affect confirmation.</p></div></div>
                    <div><h3>How can I book Punta Cana Airport Transfers?</h3><div><p>You can complete your reservation through the booking form on this website. Select the airport, hotel area, date, passengers, and service, then review the displayed rate and trip details. For questions or special arrangements, contact Taxi Dominicana before your travel date.</p></div></div>
                @else
                    <div><h3>¿Cómo funcionan los traslados desde el Aeropuerto de Punta Cana?</h3><div><p>Después de reservar recibirás la confirmación con los datos de recogida. En llegadas, el conductor revisa la información del vuelo y te espera en el punto indicado fuera de la terminal. Después viajarás directamente en un vehículo privado hacia tu hotel, resort, villa o alojamiento.</p></div></div>
                    <div><h3>¿A qué zonas puedo viajar desde el Aeropuerto de Punta Cana?</h3><div><p>Ofrecemos traslados hacia las principales zonas hoteleras, incluyendo Bávaro, Cap Cana, Cabeza de Toro, Arena Gorda, El Cortecito, Los Corales, Macao y Uvero Alto. También pueden organizarse servicios de mayor distancia hacia Bayahíbe, La Romana, Miches, Juan Dolio y Santo Domingo.</p></div></div>
                    <div><h3>¿Cuánto dura un traslado desde el Aeropuerto de Punta Cana?</h3><div><p>El tiempo depende de la ubicación del hotel y de las condiciones de la carretera. Punta Cana, Cap Cana y Cabeza de Toro suelen estar más cerca del aeropuerto, mientras que Bávaro, Macao y Uvero Alto requieren un recorrido mayor. Incluye el nombre correcto del hotel al reservar.</p></div></div>
                    <div><h3>¿Los traslados en Punta Cana son privados?</h3><div><p>Sí. El vehículo se reserva para ti y para los pasajeros incluidos en tu reservación. No tendrás que esperar a viajeros ajenos ni realizar múltiples paradas en hoteles. Esto permite un trayecto más directo, cómodo y predecible desde el aeropuerto hasta tu destino.</p></div></div>
                    <div><h3>¿Qué información necesito para reservar?</h3><div><p>Debes proporcionar la fecha de llegada o salida, número de vuelo, aerolínea, hotel o alojamiento, número de pasajeros y cantidad de equipaje. La información correcta permite coordinar el horario, la capacidad del vehículo y la ruta de tus traslados en Punta Cana.</p></div></div>
                    <div><h3>¿Qué sucede si mi vuelo se retrasa?</h3><div><p>La información del vuelo permite revisar cambios en la llegada programada. Si la aerolínea modifica el número de vuelo, la fecha o la ruta, comunícate con el equipo lo antes posible para actualizar la reservación y coordinar correctamente la recogida.</p></div></div>
                    <div><h3>¿Qué tipos de vehículos están disponibles?</h3><div><p>Las opciones pueden incluir sedanes, SUVs, minivans, vans de pasajeros y vehículos para grupos. La unidad asignada depende del número de pasajeros, equipaje, servicio elegido y disponibilidad. Incluye a los niños y todas las maletas al seleccionar el vehículo.</p></div></div>
                    <div><h3>¿Puedo reservar el traslado de regreso al aeropuerto?</h3><div><p>Sí. Puedes reservar un servicio sencillo o viaje redondo. Para las salidas, la hora de recogida se programa considerando la distancia desde el hotel, el posible tráfico, el proceso de documentación y el tiempo recomendado de llegada al Aeropuerto Internacional de Punta Cana.</p></div></div>
                    <div><h3>¿Hay asientos infantiles disponibles?</h3><div><p>La disponibilidad de asientos infantiles debe solicitarse antes de completar la reservación. Indica la edad del menor y el tipo de asiento requerido para que el equipo confirme el equipo disponible. La compatibilidad del vehículo puede influir en la confirmación.</p></div></div>
                    <div><h3>¿Cómo puedo reservar traslados en Punta Cana?</h3><div><p>Puedes completar la reservación mediante el formulario de este sitio. Selecciona el aeropuerto, zona hotelera, fecha, pasajeros y servicio; después revisa la tarifa y los datos del viaje. Para solicitudes especiales, contacta a Taxi Dominicana antes de tu fecha de viaje.</p></div></div>
                @endif
            </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/faqs/faqs-client.webp" type="image/webp" />
                <img src="/assets/img/faqs/faqs-client.jpg" alt="{{ __('destinations/tulum.faqs_client_alt') }}" title="{{ __('destinations/tulum.faqs_client_title') }}" loading="lazy" width="60" height="60" />
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection