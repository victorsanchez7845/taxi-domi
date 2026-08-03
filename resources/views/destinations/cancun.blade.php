@php
    use App\Traits\PricesTrait;
@endphp
@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/santo-domingo.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/santo-domingo.min.css') }}" rel="stylesheet">

    @if(app()->getLocale() == "en")
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Santo Domingo Airport Transfers",
            "image": [
                "https://taxidominicana.com/assets/img/schema/1x1.jpg",
                "https://taxidominicana.com/assets/img/schema/4x3.jpg",
                "https://taxidominicana.com/assets/img/schema/16x9.jpg"
            ],
            "description": "Private transfer service to and from Las Americas International Airport, provided in comfortable vehicles for individuals, families and groups traveling to Santo Domingo and nearby destinations.",
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
                "url": "https://taxidominicana.com/santo-domingo-airport-transfers",
                "priceCurrency": "USD",
                "price": 29,
                "priceValidUntil": "2027-12-31",
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
            "name": "Traslados en Santo Domingo",
            "image": [
                "https://taxidominicana.com/assets/img/schema/1x1.jpg",
                "https://taxidominicana.com/assets/img/schema/4x3.jpg",
                "https://taxidominicana.com/assets/img/schema/16x9.jpg"
            ],
            "description": "Servicio de traslado privado desde y hacia el Aeropuerto Internacional Las Américas, con vehículos cómodos para pasajeros, familias y grupos que viajan a Santo Domingo y destinos cercanos.",
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
                "url": "https://taxidominicana.com/es/traslados-aeropuerto-santo-domingo",
                "priceCurrency": "USD",
                "price": 35,
                "priceValidUntil": "2027-12-31",
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

    <div class="banner">
        <picture>
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.webp" type="image/webp">
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.png" type="image/png">
            <source srcset="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" type="image/webp">
            <img src="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.png" alt="{{ __('destinations/santo-domingo.banner_alt') }}" title="{{ __('website/home.banner_title') }}" width="2160" height="400">
        </picture>
    </div>

    <div class="container main-content">
        <div class="left">
            <x-bookingbox/>
        </div>
        <div class="right">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
            @if(app()->getLocale() == "en")
                <h1>Santo Domingo Airport Transfers</h1>
                <h2>Private transportation to Santo Domingo at Best Prices</h2>
                <p>Looking for reliable transportation from Las Americas International Airport to Santo Domingo? Taxi Dominicana provides pre-booked private transfers with direct service to hotels, apartments, terminals, and meeting points across the city. Our goal is to make your arrival comfortable, organized, and free from unnecessary delays.</p>
                <p>We work with professional drivers and modern vehicles for solo travelers, families, and groups. Pickups are coordinated using your flight details, and our team maintains clear communication before the service. After landing, you can travel comfortably to the Colonial Zone, downtown Santo Domingo, and nearby areas.</p>
                <p>Along with safe and punctual transportation, we offer competitive rates and vehicle options for different group sizes. Book your Santo Domingo Airport Transfers in advance and avoid lines, negotiations, or uncertainty after your flight. Trust Taxi Dominicana for a comfortable, secure, and efficient ride to your destination.</p>
            @else
                <h1>Traslados en Santo Domingo</h1>
                <h2>Traslado a Santo Domingo al precio más bajo</h2>
                <p>&iquest;Buscas traslados confiables desde el Aeropuerto Internacional Las Am&eacute;ricas hacia Santo Domingo? En Taxi Dominicana ofrecemos transporte privado con reservaci&oacute;n previa, atenci&oacute;n personalizada y servicio directo hasta tu hotel, apartamento, terminal o punto de encuentro. Nuestro objetivo es que comiences tu visita con un recorrido c&oacute;modo, organizado y sin complicaciones.</p>
                <p>Contamos con conductores profesionales y veh&iacute;culos modernos para atender viajeros individuales, familias y grupos. Coordinamos tu recogida de acuerdo con la informaci&oacute;n de tu vuelo y mantenemos una comunicaci&oacute;n clara antes del servicio. Al llegar, podr&aacute;s trasladarte con tranquilidad hacia la Zona Colonial, el centro de Santo Domingo y otras zonas cercanas.</p>
                <p>Adem&aacute;s de brindar un servicio seguro y puntual, ofrecemos tarifas competitivas y opciones adecuadas para distintos tama&ntilde;os de grupo. Reserva tus traslados en Santo Domingo con anticipaci&oacute;n y evita filas, negociaciones o esperas innecesarias al salir del aeropuerto. Conf&iacute;a en Taxi Dominicana para llegar a tu destino de forma c&oacute;moda, segura y eficiente.</p>
            @endif
        </div>
    </div>

    <div class="bg_blue_one">
        <div class="container content_one">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Experience the Advantages of Private Transportation to Santo Domingo with Taxi Dominicana!</h2>
                    <p>When you choose a private transfer to Santo Domingo with Taxi Dominicana, you're opting for unparalleled convenience, comfort, and peace of mind for your journey. Here's why booking a private transfer is the ideal choice:</p>
                @else
                    <h2>¡Experimenta las ventajas del transporte privado a Santo Domingo con Taxi Dominicana!</h2>
                    <p>Cuando eliges un traslado privado a Santo Domingo con Taxi Dominicana, optas por una comodidad, confort y tranquilidad sin igual para tu viaje. Aquí te explicamos por qué reservar un traslado privado es la elección ideal:</p>
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
                            <p>With Taxi Dominicana, you'll enjoy a personalized experience tailored to your schedule and preferences. Our professional drivers will ensure that your transfer meets your specific needs and requirements.</p>
                        @else
                            <p>Experiencia Personalizada</p>
                            <p>Con Taxi Dominicana, disfrutarás de una experiencia personalizada adaptada a tu horario y preferencias. Nuestros conductores profesionales se asegurará de que tu traslado cumpla con tus necesidades y requisitos específicos.</p>
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
                            <p>Our private transfer service prioritizes your time and schedule, guaranteeing prompt departure and arrival times. Say goodbye to waiting for public transportation or dealing with inconvenient schedules.</p>
                        @else
                            <p>Eficiencia y Puntualidad</p>
                            <p>Nuestro servicio de traslado privado prioriza tu tiempo y horario, garantizando salidas y llegadas puntuales. Olvídate de esperar el transporte público o lidiar con horarios inconvenientes.</p>
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
                            <p>Traveling in one of our private vehicles means you'll have the space and privacy to relax and unwind during your journey. Whether you're traveling solo, with family, or in a group, you'll enjoy a comfortable and stress-free ride to Santo Domingo.</p>
                        @else
                            <p>Confort y Privacidad</p>
                            <p>En Taxi Dominicana, priorizamos tu seguridad por encima de todo. Nuestros conductores profesionales están entrenados para navegar las rutas de manera segura, garantizando un viaje fluido y seguro del Aeropuerto Las Américas a Santo Domingo.</p>
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
                            <p>At Taxi Dominicana, we prioritize your safety and security above all else. Our professional drivers are trained to navigate the routes safely, ensuring a smooth and secure journey from Las Americas Airport to Santo Domingo.</p>
                        @else
                            <p>Seguridad y Protección</p>
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
                <h2>How to Get to Santo Domingo</h2>
                <p>Getting to Santo Domingo is easier than ever with a variety of transportation options available. Whether you're arriving by air, land, or sea, here's everything you need to know to reach this vibrant destination:</p>
            @else
                <h2>Cómo llegar del Aeropuerto Las Américas a Santo Domingo</h2>
                <p>Cuando viajas del Aeropuerto Las Américas a Santo Domingo, hay varias opciones de transporte para considerar, aquí tienes algunas formas de ir del Aeropuerto Las Américas a Santo Domingo.</p>
            @endif
        </div>
        <div class="bottom">
            <div>
                @if(app()->getLocale() == "en")
                    <p><strong>By Air:</strong></p>
                    <p>Las Americas International Airport (SDQ) is the main gateway to the city and serves as one of the busiest airports in the República Dominicana. With numerous airlines offering domestic and international flights, getting to Santo Domingo by air is convenient and accessible from virtually anywhere in the world. Once you arrive at the airport, you can easily access downtown Santo Domingo and surrounding areas via taxi, shuttle, or rental car.</p>
                    <p><strong>By Land:</strong></p>
                    <p>If you're already in the República Dominicana or traveling from nearby cities, such as Juan Dolio or Santo Domingo, you can reach Santo Domingo by land. The region is well-connected by highways, making it easy to drive or take a bus to Santo Domingo. Bus services like Caribe Tours offer reliable and affordable transportation options with frequent departures to and from Santo Domingo. Additionally, private transfers and car rentals are available for those seeking more flexibility and convenience.</p>
                    <p><strong>By Sea:</strong></p>
                    <p>For travelers arriving from nearby islands or cruise ships, Santo Domingo offers several options for arriving by sea. The city has a modern marina, Port of Santo Domingo, which welcomes boats and yachts of various sizes. Whether you're sailing independently or arriving as part of a cruise, docking at Port of Santo Domingo provides easy access to Santo Domingo's attractions, hotels, and amenities.</p>
                    <p>No matter how you choose to get to Santo Domingo, rest assured that the journey will be as enjoyable as the destination itself. With a range of transportation options available, reaching Santo Domingo is simple and stress-free, allowing you to start your vacation on the right foot. Safe travels and welcome to Santo Domingo, where endless adventures await!</p>
                @else
                    <p>Una de las formas m&aacute;s convenientes y libres de problemas de realizar este viaje es reservando un servicio de traslado privado. Con los traslados privados, puedes disfrutar de una experiencia sin interrupciones de puerta a puerta, eliminando la necesidad de navegar por sistemas de transporte p&uacute;blico desconocidos o regatear con taxistas.</p>
                    <p>Alternativamente, si prefieres una opci&oacute;n m&aacute;s econ&oacute;mica, puedes optar por servicios de traslado compartido que operan entre el Aeropuerto Las Américas y Santo Domingo. Estos traslados compartidos suelen hacer paradas en varios hoteles y destinos a lo largo de la ruta, por lo que el tiempo de viaje puede ser ligeramente m&aacute;s largo en comparaci&oacute;n con un traslado privado. Sin embargo, los traslados compartidos ofrecen una soluci&oacute;n econ&oacute;mica para aquellos que buscan ahorrar dinero sin sacrificar comodidad o conveniencia.</p>
                    <p>Para los viajeros que buscan un poco m&aacute;s de flexibilidad e independencia, alquilar un coche es otra opci&oacute;n viable. Santo Domingo cuenta con varias agencias de alquiler de coches ubicadas en el aeropuerto, lo que facilita recoger un veh&iacute;culo al llegar. Conducir del Aeropuerto Las Américas a Santo Domingo es relativamente sencillo, con autopistas bien mantenidas que conectan los dos destinos. Adem&aacute;s, tener tu propio coche te da la libertad de explorar atracciones y playas cercanas a tu propio ritmo.</p>
                    <p>Por &uacute;ltimo, para aquellos que buscan experimentar un poco de aventura, tomar un autob&uacute;s p&uacute;blico del Aeropuerto Las Américas a Santo Domingo es una opci&oacute;n. Los autobuses de Caribe Tours son la opci&oacute;n m&aacute;s popular para viajes de larga distancia en Rep&uacute;blica Dominicana, ofreciendo asientos c&oacute;modos y cabinas con aire acondicionado. Aunque el viaje en autob&uacute;s puede llevar m&aacute;s tiempo en comparaci&oacute;n con otros m&eacute;todos de transporte, es una opci&oacute;n econ&oacute;mica que te permite disfrutar del paisaje durante el trayecto.</p>
                    <p>Sin importar qu&eacute; opci&oacute;n de transporte elijas, ten la seguridad de que llegar del Aeropuerto Las Américas a Santo Domingo es relativamente sencillo, lo que te permite concentrarte en disfrutar de todo lo que esta hermosa regi&oacute;n de Rep&uacute;blica Dominicana tiene para ofrecer.</p>
                @endif
            </div>
            <iframe src="https://www.google.com/maps?q=Las+Americas+International+Airport+Dominican+Republic&output=embed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="location search"></iframe>
            <div class="faqs-accordion">
                <div>
                    @if(app()->getLocale() == "en")
                        <h3>Private transportation:</h3>
                    @else
                        <h3>Transporte privado:</h3>
                    @endif
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Opting for private transportation in Santo Domingo offers convenience, comfort, and flexibility for travelers. Whether you're looking for a direct transfer from the airport to your hotel or exploring the city and its surroundings, private transportation services ensure a personalized experience tailored to your needs and schedule.</p>
                        @else
                            <p>Optar por el transporte privado en Santo Domingo ofrece comodidad, confort y flexibilidad para los viajeros. Ya sea que busques un traslado directo desde el aeropuerto hasta tu hotel o estés explorando la ciudad y sus alrededores, los servicios de transporte privado garantizan una experiencia personalizada adaptada a tus necesidades y horario.</p>
                        @endif
                    </div>
                </div>
                <div class="hidden">
                    @if(app()->getLocale() == "en")
                        <h3>Intercity bus:</h3>
                    @else
                        <h3>Autobús interurbano:</h3>
                    @endif
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>The Intercity bus service is a popular and affordable option for travelers looking to navigate Santo Domingo and its neighboring areas. With comfortable and air-conditioned buses, Caribe Tours provides reliable transportation between some destinations, including the airport, downtown Santo Domingo, and specific stations.</p>
                        @else
                            <p>El servicio de autobús Caribe Tours es una opción popular y económica para los viajeros que desean moverse por Santo Domingo y sus áreas circundantes. Con autobuses cómodos y con aire acondicionado, Caribe Tours ofrece un transporte confiable entre algunas destinos, incluyendo el aeropuerto, el centro de Santo Domingo y estaciones específicas.</p>
                        @endif
                    </div>
                </div>
                <div class="hidden">
                    @if(app()->getLocale() == "en")
                        <h3>Rent a car:</h3>
                    @else
                        <h3>Alquilar un coche:</h3>
                    @endif
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>For travelers seeking independence and flexibility, renting a car in Santo Domingo is an excellent choice. With numerous rental agencies located at the airport and throughout the city, renting a car allows you to explore Santo Domingo and its surroundings at your own pace. From pristine beaches to ancient ruins, having a rental car gives you the freedom to discover all that Santo Domingo has to offer on your own terms.</p>
                        @else
                            <p>Para los viajeros que buscan independencia y flexibilidad, alquilar un coche en Santo Domingo es una excelente opción. Con numerosas agencias de alquiler ubicadas en el aeropuerto y en toda la ciudad, alquilar un coche te permite explorar Santo Domingo y sus alrededores a tu propio ritmo. Desde playas prístinas hasta ruinas antiguas, tener un coche de alquiler te brinda la libertad de descubrir todo lo que Santo Domingo tiene para ofrecer según tus propios términos.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services_list_blue">
        <div class="container services_list">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Transportation Services from Santo Domingo Airport</h2>
                    <p>When traveling from Santo Domingo Airport to Santo Domingo, explore a variety of customized transportation options tailored to your preferences and group size.</p>
                @else
                    <h2>Tarifas de traslados desde el Aeropuerto de Santo Domingo</h2>
                    <p>Descubre precios competitivos adaptados a tu presupuesto para tu viaje desde el Aeropuerto Las Américas hasta Santo Domingo, garantizando la asequibilidad sin sacrificar la calidad y comodidad.</p>
                @endif
            </div>
            <div class="bottom">
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/van.webp" type="image/webp" />
                            <img src="/assets/img/services/van.jpg" alt="{{ __('destinations/santo-domingo.services_van_alt') }}" title="{{ __('destinations/santo-domingo.services_van_title') }}" loading="lazy" width="150" height="100"/>
                        </picture>
                        @if(app()->getLocale() == "en")
                            <p>From/To Santo Domingo Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Santo Domingo</p>
                            <p>Traslado al Aeropuerto</p>
                        @endif
                    </div>
                    <div class="information">
                        <p>{{ __('destinations/santo-domingo.passengers',['quantity' => 8]) }}</p>
                        <p>{{ __('destinations/santo-domingo.suitcase',['quantity' => 7]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/santo-domingo.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8), 2) }} USD</p>
                                @else
                                    <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8), 2) }} USD</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/santo-domingo.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/santo-domingo.view_rates') }}" title="{{ __('destinations/santo-domingo.view_rates') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/suburban.webp" type="image/webp" />
                            <img src="/assets/img/services/suburban.jpg" alt="{{ __('destinations/santo-domingo.services_suburban_alt') }}" title="{{ __('destinations/santo-domingo.services_suburban_title') }}" loading="lazy" width="150" height="100"/>
                        </picture>
                        @if(app()->getLocale() == "en")
                            <p>From/To Santo Domingo Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Santo Domingo</p>
                            <p>Traslado al Aeropuerto</p>
                        @endif
                    </div>
                    <div class="information">
                        <p>{{ __('destinations/santo-domingo.passengers',['quantity' => 5]) }}</p>
                        <p>{{ __('destinations/santo-domingo.suitcase',['quantity' => 5]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/santo-domingo.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ number_format((PricesTrait::price(1, 2, 'USD') / 5), 2) }} USD</p>
                                @else
                                    <p>${{ number_format((PricesTrait::price(1, 2, 'USD') / 5), 2) }} USD</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/santo-domingo.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/santo-domingo.view_rates') }}" title="{{ __('destinations/santo-domingo.view_rates') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/crafter.webp" type="image/webp" />
                            <img src="/assets/img/services/crafter.jpg" alt="{{ __('destinations/santo-domingo.services_crafter_alt') }}" title="{{ __('destinations/santo-domingo.services_crafter_title') }}" loading="lazy" width="150" height="100"/>
                        </picture>
                        @if(app()->getLocale() == "en")
                            <p>From/To Santo Domingo Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Santo Domingo</p>
                            <p>Traslado al Aeropuerto</p>
                        @endif
                    </div>
                    <div class="information">
                        <p>{{ __('destinations/santo-domingo.passengers',['quantity' => 15]) }}</p>
                        <p>{{ __('destinations/santo-domingo.suitcase',['quantity' => 14]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/santo-domingo.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ number_format((PricesTrait::price(1, 2, 'USD') / 15), 2) }} USD</p>
                                @else
                                    <p>${{ number_format((PricesTrait::price(1, 2, 'USD') / 15), 2) }} USD</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/santo-domingo.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/santo-domingo.view_rates') }}" title="{{ __('destinations/santo-domingo.view_rates') }}"></a>
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
                <h2>Santo Domingo Airport Transfers Rates</h2>
                <p>Discover competitive pricing tailored to your budget for your trip from Las Americas Airport to Santo Domingo, guaranteeing affordability while maintaining quality and comfort.</p>
            @else
                <h2>Tarifas de traslados en Santo Domingo</h2>
                <p>Explora nuestras opciones de precios competitivos para tu viaje de Juan Dolio a Santo Domingo, asegurando asequibilidad sin comprometer la calidad o comodidad.</p>
            @endif
        </div>
        <div class="bottom">
            @if(app()->getLocale() == "es")
                <table class="table table-striped table-responsive">
                    <caption>Precios de Servicios de Taxi por Destino</caption>
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
                            <td><strong>Santo Domingo Centro</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Zona Colonial de Santo Domingo</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Boca Chica</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(5, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(5, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Zona Colonial</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(21, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(21, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto de Santo Domingo</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(3, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(3, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Juan Dolio</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo Este</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(4, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(4, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>La Romana</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bayahíbe</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(8, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(8, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>San Pedro de Macorís</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(9, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(9, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(10, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(10, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Punta Cana</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Samaná</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(17, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(17, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santiago</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Plata</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(19, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(19, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Las Terrenas</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Jarabacoa</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo Colonial Zone</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(11, 1, 'USD') }} USD</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(11, 1, 'USD', true) }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo Aeropuerto</strong></td>
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
                    <caption>Prices may vary depending on season*</caption>
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
                            <td><strong>Santo Domingo Downtown</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo Colonial Zone</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Boca Chica</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(5, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(5, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Zona Colonial</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(21, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(21, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto de Santo Domingo</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(3, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(3, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Juan Dolio</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo Este</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(4, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(4, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>La Romana</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bayahíbe</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(8, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(8, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>San Pedro de Macorís</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(9, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(9, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(10, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(10, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Punta Cana</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Samaná</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(17, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(17, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santiago</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Plata</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(19, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(19, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Las Terrenas</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Jarabacoa</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo Colonial Zone</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(11, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(11, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo Airport</strong></td>
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
                    <h2>What Our Customers Say About our Santo Domingo Airport Transfers service</h2>
                    <p>Experience the satisfaction shared by countless travelers who have chosen Taxi Dominicana for their Santo Domingo Airport Transfers needs. Let us redefine your travel experience with unmatched comfort and service.</p>
                @else
                    <h2>Lo que dicen nuestros clientes sobre nuestro servicio de transporte desde el aeropuerto de Santo Domingo</h2>
                    <p>Experimenta la satisfacción compartida por innumerables viajeros que han elegido Taxi Dominicana para sus necesidades de transporte desde el aeropuerto de Santo Domingo. Permítenos redefinir tu experiencia de viaje con un confort y servicio inigualables.</p>
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
                        <img src="/assets/img/reviews/1.jpg" alt="{{ __('website/home.comment_title',['name' => 'Emily B.']) }}" title="{{ __('website/home.comment_title',['name' => 'Emily B.']) }}" loading="lazy" width="60" height="60" />
                    </picture>                        
                    <div>
                        <p>Emily B. <span>4.5</span></p>
                        @if(app()->getLocale() == "en")
                            <p>Booking with Taxi Dominicana was the highlight of my Santo Domingo trip. The private transfer was incredibly convenient, and our driver, Carlos, was not only friendly but also professional. The luxury service exceeded my expectations, and I'll definitely choose them again on my next the República Dominicana visit.</p>
                        @else
                            <p>Reservar con Taxi Dominicana fue el punto culminante de mi viaje a Santo Domingo. El traslado privado fue increíblemente conveniente, y nuestro conductor, Carlos, no solo fue amable sino también profesional. El servicio de lujo superó mis expectativas, ¡y definitivamente los elegiré nuevamente en mi próxima visita a República Dominicana!</p>
                        @endif
                    </div>
                </div>
                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/2.webp" type="image/webp" />
                        <img src="/assets/img/reviews/2.jpg" alt="{{ __('website/home.comment_title',['name' => 'Gabriela R']) }}" title="{{ __('website/home.comment_title',['name' => 'Gabriela R']) }}" loading="lazy" width="60" height="60" />
                    </picture>                        
                    <div>
                        <p>Gabriela R. <span>4.5</span></p>
                        @if(app()->getLocale() == "en")
                            <p>I can't praise Taxi Dominicana enough! From touchdown in Santo Domingo, everything was seamless. Our private transfer to Santo Domingo was comfortable and stress-free. The team's communication was excellent, and they were incredibly accommodating to our schedule changes. Thank you for making our trip hassle-free!</p>
                        @else
                            <p>¡No puedo elogiar lo suficiente a Taxi Dominicana! Desde el aterrizaje en Santo Domingo, todo fue impecable. Nuestro traslado privado a Santo Domingo fue cómodo y sin estrés. La comunicación con el equipo fue excelente, y fueron increíblemente complacientes con nuestros cambios de horario. ¡Gracias por hacer que nuestro viaje fuera sin complicaciones!</p>
                        @endif                        
                    </div>
                </div>
                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/3.webp" type="image/webp" />
                        <img src="/assets/img/reviews/3.jpg" alt="{{ __('website/home.comment_title',['name' => 'Sophia R.']) }}" title="{{ __('website/home.comment_title',['name' => 'Sophia R.']) }}" loading="lazy" width="60" height="60" />
                    </picture>                        
                    <div>
                        <p>Sophia R. <span>4.5</span></p>
                        @if(app()->getLocale() == "en")
                            <p>My friends and I opted for the small group service with Taxi Dominicana, and it perfectly suited our needs. The vehicle was clean and comfortable, and our driver, Omar, was fantastic. He even gave us some excellent recommendations for restaurants and activities in Santo Domingo. Overall, a fantastic experience from start to finish!</p>
                        @else
                            <p>Mis amigos y yo optamos por el servicio de grupo pequeño con Taxi Dominicana, y se adaptó perfectamente a nuestras necesidades. El vehículo estaba limpio y cómodo, y nuestro conductor, Omar, fue fantástico. Incluso nos dio algunas excelentes recomendaciones para restaurantes y actividades en Santo Domingo. En general, ¡una experiencia fantástica de principio a fin!</p>
                        @endif                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_destinations">
        <div class="top">
            @if(app()->getLocale() == "en")
                <h2>Experience Seamless Exploration of the República Dominicana</h2>
                <p>Embark on a journey of enchantment as you traverse the diverse and captivating destinations along the República Dominicana with Taxi Dominicana. From the pristine beaches of Santo Domingo to the bustling streets of Juan Dolio, our transportation services provide seamless access to the region's most iconic attractions.</p>
            @else
                <h2>Experimenta una exploración sin problemas de República Dominicana</h2>
                <p>Embárcate en un viaje de encanto mientras atraviesas los diversos y cautivadores destinos a lo largo de República Dominicana con Taxi Dominicana. Desde las playas prístinas de Santo Domingo hasta las bulliciosas calles de Juan Dolio, nuestros servicios de transporte proporcionan un acceso sin problemas a las atracciones más icónicas de la región.</p>
            @endif
        </div>
        <div class="bottom">
            <div>
                <a href="#" title="{{ __('destinations/santo-domingo.destination_santo-domingo_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/santo-domingo.webp" type="image/webp" />
                        <img src="/assets/img/destinations/santo-domingo.jpg" alt="{{ __('destinations/santo-domingo.destination_santo-domingo_alt') }}" title="{{ __('destinations/santo-domingo.destination_santo-domingo_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Santo Domingo</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Santo Domingo, ciudad costera de República Dominicana, deslumbra con sus antiguas ruinas colonials frente al mar. Sus playas de arena blanca y aguas turquesas crean un escenario impresionante digno de admirar.</p>
                @else
                    <p>Santo Domingo combina historia colonial, zonas modernas, restaurantes, museos y un animado malecón. Es el principal centro cultural y comercial del país y un punto ideal para comenzar a explorar destinos cercanos.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/santo-domingo.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'USD') / 8),0) }} USD</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/santo-domingo.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/santo-domingo.view_rates') }}" title="{{ __('destinations/santo-domingo.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/santo-domingo.destination_santo-domingo_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/santo-domingo.webp" type="image/webp" />
                        <img src="/assets/img/destinations/santo-domingo.jpg" alt="{{ __('destinations/santo-domingo.destination_santo-domingo_alt') }}" title="{{ __('destinations/santo-domingo.destination_santo-domingo_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Santo Domingo</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Boca Chica is a popular coastal destination near Santo Domingo, known for calm Caribbean waters, local restaurants, and a relaxed beach atmosphere. It is a convenient option for a day trip or a stay near the airport.</p>
                @else
                    <p>Boca Chica es un destino costero cercano a Santo Domingo, conocido por sus tranquilas aguas caribeñas, restaurantes locales y ambiente relajado. Es una opción conveniente para una excursión o una estancia cerca del aeropuerto.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/santo-domingo.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8),0) }} USD</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/santo-domingo.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/santo-domingo.view_rates') }}" title="{{ __('destinations/santo-domingo.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/santo-domingo.destination_pdc_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/playa-del-carmen.webp" type="image/webp" />
                        <img src="/assets/img/destinations/playa-del-carmen.jpg" alt="{{ __('destinations/santo-domingo.destination_pdc_alt') }}" title="{{ __('destinations/santo-domingo.destination_pdc_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Juan Dolio</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Juan Dolio, with its coastal charm, captivates with soft sandy beaches and crystal-clear waters. Its bustling main boulevard hosts shops and restaurants, while nearby colonial ruins provide a historical connection.</p>
                @else
                    <p>Juan Dolio, con su encanto costero, cautiva con playas de arena suave y aguas cristalinas. Su avenida principal bulliciosa alberga tiendas y restaurantes, mientras que las ruinas colonials cercanas ofrecen una conexión histórica.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/santo-domingo.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(6, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(6, 1, 'USD') / 8),0) }} USD</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/santo-domingo.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/santo-domingo.view_rates') }}" title="{{ __('destinations/santo-domingo.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/santo-domingo.destination_akumal_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/akumal.webp" type="image/webp" />
                        <img src="/assets/img/destinations/akumal.jpg" alt="{{ __('destinations/santo-domingo.destination_akumal_alt') }}" title="{{ __('destinations/santo-domingo.destination_akumal_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>San Pedro de Macorís</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>San Pedro de Macorís, a marine paradise in the República Dominicana, invites you to discover its serene beaches and crystal-clear waters. Known for turtle sightings, this coastal haven offers unforgettable snorkeling experiences.</p>
                @else
                    <p>San Pedro de Macorís, paraíso marino en República Dominicana, invita a descubrir sus playas serenas y aguas cristalinas. Conocido por el avistamiento de tortugas, este refugio costero ofrece experiencias de snorkel inolvidables.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/santo-domingo.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(9, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(9, 1, 'USD') / 8),0) }} USD</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/santo-domingo.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/santo-domingo.view_rates') }}" title="{{ __('destinations/santo-domingo.view_rates') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_five">
        <div class="left faqs_section">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Santo Domingo Airport Transfers Service FAQs</h2>
                    <p>Experience Seamless Santo Domingo Transportation: Your Questions Answered</p>
                @else
                    <h2>Servicio de Transporte desde el Aeropuerto de Santo Domingo: Preguntas Frecuentes</h2>
                    <p>Experimenta un transporte sin complicaciones en Santo Domingo: respondemos tus preguntas</p>
                @endif
            </div>
            <div class="bottom">
                @if(app()->getLocale() == "en")
                    <div>
                        <h3>What is the best time to visit Santo Domingo and why?</h3>
                        <div>
                            <p>The best time to visit Santo Domingo is during the months of December to April, when the weather is drier and the temperatures are warm and pleasant. During these months, days are typically sunny and nights are cool, making it ideal for enjoying the beaches and outdoor activities. Additionally, this season coincides with the high tourist season, meaning there are plenty of entertainment options, restaurants, and activities available for visitors.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are some of the best beaches in Santo Domingo and what makes them special?</h3>
                        <div>
                            <p>Santo Domingo is famous for its stunning white-sand beaches and crystal-clear waters. Some of the best beaches include Playa Delfines, known for its spectacular sunsets and perfect waves for surfing; Playa Norte in Isla Mujeres, with its calm, shallow waters ideal for swimming and snorkeling; and Playa Tortugas, which offers a variety of exciting water sports like parasailing and jet skiing. What makes these beaches special is their natural beauty and the wide range of activities and amenities available for visitors.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are the top cultural and natural attractions not to be missed in Santo Domingo?</h3>
                        <div>
                            <p>Among the top cultural attractions in Santo Domingo is the archaeological site of El Rey, which offers a fascinating glimpse into colonial history; Xcaret Park, where you can explore Mexican nature and culture through shows, activities, and exhibits; and the Santo Domingo Maya Museum, which houses an impressive collection of colonial artifacts and art. As for natural attractions, the Nichupté Lagoon offers the opportunity to explore wildlife and mangroves by kayak or boat tour, while the Sian Ka'an Biosphere Reserve is an ecological paradise with stunning landscapes of jungle, mangroves, and parques naturales.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What nightlife options does Santo Domingo offer for visitors?</h3>
                        <div>
                            <p>Santo Domingo is known for its vibrant nightlife, offering a wide variety of options for all tastes. From nightclubs and bars in the Hotel Zone, such as local clubs and rooftop bars, which offer live shows and DJ music to more relaxed beach clubs where you can enjoy cocktails at sunset. Additionally, the famous Zona Colonial street in downtown is packed with local bars, restaurants, and nightclubs offering a more authentic experience of Santo Domingo nightlife.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are some exciting activities to do in Santo Domingo beyond the beaches?</h3>
                        <div>
                            <p>In addition to enjoying the beaches, Santo Domingo offers a wide range of exciting activities for visitors. You can explore the stunning coral reefs and marine life while diving or snorkeling in the Caribbean coastline. You can also embark on an exciting jungle adventure through zip lines, ATV rides, and cenote swimming. Other highlights include whale and dolphin watching, deep-sea fishing, and golfing on world-class courses with breathtaking views.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What sets Taxi Dominicana apart from other transportation services for Santo Domingo Airport Transfers?</h3>
                        <div>
                            <p>Taxi Dominicana stands out for its unparalleled commitment to customer satisfaction, offering personalized service tailored to each traveler's needs. From the moment you land at Santo Domingo Airport, Taxi Dominicana ensures a seamless and stress-free experience, providing reliable transfers to your destination in Santo Domingo and beyond.</p>
                        </div>
                    </div>
                    <div>
                        <h3>How does Taxi Dominicana ensure a comfortable and secure journey for passengers?</h3>
                        <div>
                            <p>Taxi Dominicana prioritizes passenger comfort and safety by providing modern, well-maintained vehicles and professional drivers trained in safe driving practices. Whether you're traveling solo, with family, or in a group, you can relax and enjoy the journey knowing that Taxi Dominicana has your safety and comfort in mind.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What types of transportation options does Taxi Dominicana offer for Santo Domingo Airport Transfers?</h3>
                        <div>
                            <p>Taxi Dominicana offers a variety of transportation options to suit different preferences and group sizes. From private transfers for a personalized experience to shared shuttles for budget-conscious travelers, Taxi Dominicana ensures that every passenger's needs are met.</p>
                        </div>
                    </div>
                    <div>
                        <h3>How does Taxi Dominicana handle scheduling and communication with passengers?</h3>
                        <div>
                            <p>Taxi Dominicana prides itself on its efficient scheduling and clear communication with passengers. Whether you're booking in advance or arranging transportation on the spot, Taxi Dominicana ensures prompt pick-ups and drop-offs and keeps passengers informed every step of the way.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What do customers have to say about their experience with Taxi Dominicana for Santo Domingo Airport Transfers?</h3>
                        <div>
                            <p>Customers rave about the exceptional service and reliability of Taxi Dominicana for Santo Domingo Airport Transfers. From convenient booking processes to comfortable transfers, travelers consistently praise Taxi Dominicana for making their journey to and from Santo Domingo Airport hassle-free and enjoyable.</p>
                        </div>
                    </div>
                @else
                    <div>
                        <h3>¿Cuál es la mejor época para visitar Santo Domingo y por qué?</h3>
                        <div>
                            <p>La mejor época para visitar Santo Domingo es durante los meses de diciembre a abril, cuando el clima es más seco y las temperaturas son cálidas y agradables. Durante estos meses, los días suelen ser soleados y las noches frescas, lo que lo hace ideal para disfrutar de las playas y actividades al aire libre. Además, esta temporada coincide con la temporada alta de turismo, lo que significa que hay una amplia gama de opciones de entretenimiento, restaurantes y actividades disponibles para los visitantes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son algunas de las mejores playas en Santo Domingo y qué las hace especiales?</h3>
                        <div>
                            <p>Santo Domingo es famoso por sus impresionantes playas de arena blanca y aguas cristalinas. Algunas de las mejores playas incluyen Playa Delfines, conocida por sus espectaculares puestas de sol y olas perfectas para el surf; Playa Norte en Isla Mujeres, con sus aguas tranquilas y poco profundas ideales para nadar y hacer snorkel; y Playa Tortugas, que ofrece una variedad de emocionantes deportes acuáticos como parasailing y jet ski. Lo que hace que estas playas sean especiales es su belleza natural y la amplia gama de actividades y servicios disponibles para los visitantes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son las principales atracciones culturales y naturales que no te puedes perder en Santo Domingo?</h3>
                        <div>
                            <p>Entre las principales atracciones culturales en Santo Domingo se encuentra el sitio arqueológico de El Rey, que ofrece una fascinante visión de la historia colonial; Xcaret Park, donde puedes explorar la naturaleza y la cultura mexicana a través de espectáculos, actividades y exhibiciones; y el Museo Maya de Santo Domingo, que alberga una impresionante colección de artefactos y arte colonial. En cuanto a las atracciones naturales, la Laguna Nichupté ofrece la oportunidad de explorar la vida silvestre y los manglares en kayak o en un paseo en bote, mientras que la Reserva de la Biosfera de Sian Ka'an es un paraíso ecológico con impresionantes paisajes de selva, manglares y parques naturales.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué opciones de vida nocturna ofrece Santo Domingo para los visitantes?</h3>
                        <div>
                            <p>Santo Domingo es conocido por su animada vida nocturna, que ofrece una amplia variedad de opciones para todos los gustos. Desde discotecas y bares en la Zona Hotelera, como Coco Bongo y Mandala, que ofrecen espectáculos en vivo y música de DJ hasta clubes de playa más relajados donde puedes disfrutar de cócteles al atardecer. Además, la famosa calle Zona Colonial en el centro de la ciudad está repleta de bares locales, restaurantes y discotecas que ofrecen una experiencia más auténtica de la vida nocturna en Santo Domingo.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son algunas actividades emocionantes para realizar en Santo Domingo más allá de las playas?</h3>
                        <div>
                            <p>Además de disfrutar de las playas, Santo Domingo ofrece una amplia gama de actividades emocionantes para los visitantes. Puedes explorar los impresionantes arrecifes de coral y la vida marina mientras buceas o haces snorkel en el segundo sistema de arrecifes de coral más grande del mundo. También puedes embarcarte en una emocionante aventura en la jungla a través de tirolesas, paseos en ATV y nado en parques naturales. Otros puntos destacados incluyen la observación de ballenas y delfines, la pesca deportiva en alta mar y el golf en campos de clase mundial con vistas impresionantes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué distingue a Taxi Dominicana de otros servicios de transporte para el Aeropuerto de Santo Domingo?</h3>
                        <div>
                            <p>Taxi Dominicana se destaca por su compromiso inigualable con la satisfacción del cliente, ofreciendo un servicio personalizado adaptado a las necesidades de cada viajero. Desde el momento en que aterrizas en el Aeropuerto de Santo Domingo, Taxi Dominicana asegura una experiencia sin problemas y sin estrés, proporcionando traslados confiables a tu destino en Santo Domingo y más allá.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cómo garantiza Taxi Dominicana un viaje cómodo y seguro para los pasajeros?</h3>
                        <div>
                            <p>Taxi Dominicana prioriza la comodidad y la seguridad de los pasajeros al proporcionar vehículos modernos y bien mantenidos y conductores profesionales capacitados en prácticas seguras de conducción. Ya sea que viajes solo, con familia o en grupo, puedes relajarte y disfrutar del viaje sabiendo que Taxi Dominicana tiene tu seguridad y comodidad en mente.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué tipos de opciones de transporte ofrece Taxi Dominicana para el transporte desde el Aeropuerto de Santo Domingo?</h3>
                        <div>
                            <p>Taxi Dominicana ofrece una variedad de opciones de transporte para adaptarse a diferentes preferencias y tamaños de grupo. Desde traslados privados para una experiencia personalizada hasta traslados compartidos para viajeros conscientes del presupuesto, Taxi Dominicana asegura que se satisfagan las necesidades de cada pasajero.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cómo maneja Taxi Dominicana la programación y comunicación con los pasajeros?</h3>
                        <div>
                            <p>Taxi Dominicana se enorgullece de su programación eficiente y comunicación clara con los pasajeros. Ya sea que reserves con anticipación o arregles el transporte en el momento, Taxi Dominicana asegura recogidas y entregas rápidas y mantiene informados a los pasajeros en cada paso del camino.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué opinan los clientes sobre su experiencia con Taxi Dominicana para el transporte desde el Aeropuerto de Santo Domingo?</h3>
                        <div>
                            <p>Los clientes elogian el excepcional servicio y la confiabilidad de Taxi Dominicana para el transporte desde el Aeropuerto de Santo Domingo. Desde procesos de reserva convenientes hasta traslados cómodos, los viajeros elogian consistentemente a Taxi Dominicana por hacer que su viaje desde y hacia el Aeropuerto de Santo Domingo sea libre de problemas y agradable.</p>
                        </div>
                    </div>
                @endif
            </div>            
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/faqs/faqs-client.webp" type="image/webp" />
                <img src="/assets/img/faqs/faqs-client.jpg" alt="{{ __('destinations/santo-domingo.faqs_client_alt') }}" title="{{ __('destinations/santo-domingo.faqs_client_title') }}" loading="lazy" width="60" height="60" />
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection