@php
    use App\Traits\PricesTrait;
@endphp
@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/cancun.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/cancun.min.css') }}" rel="stylesheet">

    @if(app()->getLocale() == "en")
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "Cancun Airport Transportation",
            "image": [
                "https://tulumairportcab.com/assets/img/schema/1x1.jpg",
                "https://tulumairportcab.com/assets/img/schema/4x3.jpg",
                "https://tulumairportcab.com/assets/img/schema/16x9.jpg"
            ],
            "description": "Cab service to and from Cancun Airport, the service is provided in a VW Transporter for up to 8 passengers. Available for the entire Riviera Maya.",
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
                "url": "https://tulumairportcab.com/cancun-airport-transportation",
                "priceCurrency": "USD",
                "price": 29,
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
            "name": "Traslado Aeropuerto Cancún",
            "image": [
                "https://tulumairportcab.com/assets/img/schema/1x1.jpg",
                "https://tulumairportcab.com/assets/img/schema/4x3.jpg",
                "https://tulumairportcab.com/assets/img/schema/16x9.jpg"
            ],
            "description": "Servicio de Taxi desde y hacia el Aeropuerto de Cancún, el servicio se proporciona en un VW Transporter para hasta 8 pasajeros. Disponible para toda la Riviera Maya.",
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
                "url": "https://tulumairportcab.com/es/traslado-cancun-aeropuerto",
                "priceCurrency": "MXN",
                "price": 539,
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

    <div class="banner">
        <picture>
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.webp" type="image/webp">
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.png" type="image/png">
            <source srcset="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" type="image/webp">
            <img src="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.png" alt="{{ __('destinations/cancun.banner_alt') }}" title="{{ __('website/home.banner_title') }}" width="2160" height="400">
        </picture>
    </div>

    <div class="container main-content">
        <div class="left">
            <x-bookingbox/>
        </div>
        <div class="right">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
            @if(app()->getLocale() == "en")
                <h1>Cancun Airport Transportation</h1>
                <h2>Private transportation to Cancun at Best Prices</h2>
                <p>Looking for reliable transportation from Cancun Airport to your destination in Cancun? Look no further than Tulum Airport Taxi! Our company specializes in providing quality transfers, ensuring a comfortable and hassle-free journey from Cancun Airport to anywhere in Cancun and its surrounding areas. With our shuttle service, you can rest assured that you will arrive at your destination on time and without complications.</p>
                <p>At Tulum Airport Taxi, we understand the importance of peace of mind and confidence when traveling. That's why we have professional drivers and modern, well-maintained vehicles to ensure the safety of our passengers at all times. Our priority is to provide a pleasant and worry-free travel experience so you can relax and enjoy the beautiful scenery of Cancun during your shuttle from the airport.</p>
                <p>In addition to our reputation as a reliable and safe company, we pride ourselves on offering competitive rates that fit any budget. With Tulum Airport Taxi, you not only get quality service but also enjoy the lowest prices on the market for your transportation needs in Cancun. Trust us to take you safely, comfortably, and affordably to your destination in Cancun!</p>
            @else
                <h1>Traslado Aeropuerto Cancún</h1>
                <h2>Traslado a Cancún al precio más bajo</h2>
                <p>&iquest;Busca transportaci&oacute;n confiable del Aeropuerto de Canc&uacute;n a su destino en Canc&uacute;n? No busques m&aacute;s, &iexcl;Tulum Airport Taxi! Nuestra empresa se especializa en ofrecer traslados de calidad, asegurando un viaje c&oacute;modo y sin complicaciones desde el Aeropuerto de Canc&uacute;n a cualquier lugar en Canc&uacute;n y sus alrededores. Con nuestro servicio de transporte, puede estar seguro de que llegar&aacute; a su destino a tiempo y sin complicaciones.</p>
                <p>En Tulum Airport Taxi, entendemos la importancia de la tranquilidad y la confianza al viajar. Es por eso que contamos con conductores profesionales y veh&iacute;culos modernos y bien mantenidos para garantizar la seguridad de nuestros pasajeros en todo momento. Nuestra prioridad es proporcionar una experiencia de viaje agradable y sin preocupaciones para que pueda relajarse y disfrutar del hermoso paisaje de Canc&uacute;n durante su traslado desde el aeropuerto.</p>
                <p>Adem&aacute;s de nuestra reputaci&oacute;n como una empresa confiable y segura, nos enorgullecemos de ofrecer tarifas competitivas que se ajustan a cualquier presupuesto. Con Tulum Airport Taxi, no s&oacute;lo obtendr&aacute; un servicio de calidad, sino que tambi&eacute;n disfrutar&aacute; de los precios m&aacute;s bajos del mercado para sus necesidades de transporte en Canc&uacute;n. &iexcl;Conf&iacute;e en nosotros para llevarlo de forma segura, c&oacute;moda y asequible a su destino en Canc&uacute;n!</p>
            @endif
        </div>
    </div>

    <div class="bg_blue_one">
        <div class="container content_one">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Experience the Advantages of Private Transportation to Cancun with Tulum Airport Taxi!</h2>
                    <p>When you choose a private transfer to Cancun with Tulum Airport Taxi, you're opting for unparalleled convenience, comfort, and peace of mind for your journey. Here's why booking a private transfer is the ideal choice:</p>
                @else
                    <h2>¡Experimenta las ventajas del transporte privado a Cancún con Tulum Airport Taxi!</h2>
                    <p>Cuando eliges un traslado privado a Cancún con Tulum Airport Taxi, optas por una comodidad, confort y tranquilidad sin igual para tu viaje. Aquí te explicamos por qué reservar un traslado privado es la elección ideal:</p>
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
                            <p>With Tulum Airport Taxi, you'll enjoy a personalized experience tailored to your schedule and preferences. Our professional drivers will ensure that your transfer meets your specific needs and requirements.</p>
                        @else
                            <p>Experiencia Personalizada</p>
                            <p>Con Tulum Airport Taxi, disfrutarás de una experiencia personalizada adaptada a tu horario y preferencias. Nuestros conductores profesionales se asegurará de que tu traslado cumpla con tus necesidades y requisitos específicos.</p>
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
                            <p>Traveling in one of our private vehicles means you'll have the space and privacy to relax and unwind during your journey. Whether you're traveling solo, with family, or in a group, you'll enjoy a comfortable and stress-free ride to Cancun.</p>
                        @else
                            <p>Confort y Privacidad</p>
                            <p>En Tulum Airport Taxi, priorizamos tu seguridad por encima de todo. Nuestros conductores profesionales están entrenados para navegar las rutas de manera segura, garantizando un viaje fluido y seguro de Tulum a Cancún.</p>
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
                            <p>At Tulum Airport Taxi, we prioritize your safety and security above all else. Our professional drivers are trained to navigate the routes safely, ensuring a smooth and secure journey from Tulum to Cancun.</p>
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
                <h2>How to Get to Cancun</h2>
                <p>Getting to Cancun is easier than ever with a variety of transportation options available. Whether you're arriving by air, land, or sea, here's everything you need to know to reach this vibrant destination:</p>
            @else
                <h2>Cómo llegar de Cancún a Tulum</h2>
                <p>Cuando viajas de Cancún a Tulum, hay varias opciones de transporte para considerar, aquí tienes algunas formas de ir de Cancún a Tulum.</p>
            @endif
        </div>
        <div class="bottom">
            <div>
                @if(app()->getLocale() == "en")
                    <p><strong>By Air:</strong></p>
                    <p>Cancun International Airport (CUN) is the main gateway to the city and serves as one of the busiest airports in Mexico. With numerous airlines offering domestic and international flights, getting to Cancun by air is convenient and accessible from virtually anywhere in the world. Once you arrive at the airport, you can easily access downtown Cancun and surrounding areas via taxi, shuttle, or rental car.</p>
                    <p><strong>By Land:</strong></p>
                    <p>If you're already in Mexico or traveling from nearby cities, such as Playa del Carmen or Tulum, you can reach Cancun by land. The region is well-connected by highways, making it easy to drive or take a bus to Cancun. Bus services like ADO offer reliable and affordable transportation options with frequent departures to and from Cancun. Additionally, private transfers and car rentals are available for those seeking more flexibility and convenience.</p>
                    <p><strong>By Sea:</strong></p>
                    <p>For travelers arriving from nearby islands or cruise ships, Cancun offers several options for arriving by sea. The city has a modern marina, Marina Chac Chi, which welcomes boats and yachts of various sizes. Whether you're sailing independently or arriving as part of a cruise, docking at Marina Chac Chi provides easy access to Cancun's attractions, hotels, and amenities.</p>
                    <p>No matter how you choose to get to Cancun, rest assured that the journey will be as enjoyable as the destination itself. With a range of transportation options available, reaching Cancun is simple and stress-free, allowing you to start your vacation on the right foot. Safe travels and welcome to Cancun, where endless adventures await!</p>
                @else
                    <p>Una de las formas m&aacute;s convenientes y libres de problemas de realizar este viaje es reservando un servicio de traslado privado. Con los traslados privados, puedes disfrutar de una experiencia sin interrupciones de puerta a puerta, eliminando la necesidad de navegar por sistemas de transporte p&uacute;blico desconocidos o regatear con taxistas.</p>
                    <p>Alternativamente, si prefieres una opci&oacute;n m&aacute;s econ&oacute;mica, puedes optar por servicios de traslado compartido que operan entre Canc&uacute;n y Tulum. Estos traslados compartidos suelen hacer paradas en varios hoteles y destinos a lo largo de la ruta, por lo que el tiempo de viaje puede ser ligeramente m&aacute;s largo en comparaci&oacute;n con un traslado privado. Sin embargo, los traslados compartidos ofrecen una soluci&oacute;n econ&oacute;mica para aquellos que buscan ahorrar dinero sin sacrificar comodidad o conveniencia.</p>
                    <p>Para los viajeros que buscan un poco m&aacute;s de flexibilidad e independencia, alquilar un coche es otra opci&oacute;n viable. Canc&uacute;n cuenta con varias agencias de alquiler de coches ubicadas en el aeropuerto, lo que facilita recoger un veh&iacute;culo al llegar. Conducir de Canc&uacute;n a Tulum es relativamente sencillo, con autopistas bien mantenidas que conectan los dos destinos. Adem&aacute;s, tener tu propio coche te da la libertad de explorar atracciones y playas cercanas a tu propio ritmo.</p>
                    <p>Por &uacute;ltimo, para aquellos que buscan experimentar un poco de aventura, tomar un autob&uacute;s p&uacute;blico de Canc&uacute;n a Tulum es una opci&oacute;n. Los autobuses de ADO son la opci&oacute;n m&aacute;s popular para viajes de larga distancia en M&eacute;xico, ofreciendo asientos c&oacute;modos y cabinas con aire acondicionado. Aunque el viaje en autob&uacute;s puede llevar m&aacute;s tiempo en comparaci&oacute;n con otros m&eacute;todos de transporte, es una opci&oacute;n econ&oacute;mica que te permite disfrutar del paisaje durante el trayecto.</p>
                    <p>Sin importar qu&eacute; opci&oacute;n de transporte elijas, ten la seguridad de que llegar de Canc&uacute;n a Tulum es relativamente sencillo, lo que te permite concentrarte en disfrutar de todo lo que esta hermosa regi&oacute;n de M&eacute;xico tiene para ofrecer.</p>
                @endif
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57163.93391680891!2d-86.86595496768744!3d21.067088348122944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e81bb49b57809%3A0xe7f7d44da1f07a06!2sAeropuerto%20Internacional%20de%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1709055310971!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="location search"></iframe>
            <div class="faqs-accordion">
                <div>
                    @if(app()->getLocale() == "en")
                        <h3>Private transportation:</h3>
                    @else
                        <h3>Transporte privado:</h3>
                    @endif
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Opting for private transportation in Cancun offers convenience, comfort, and flexibility for travelers. Whether you're looking for a direct transfer from the airport to your hotel or exploring the city and its surroundings, private transportation services ensure a personalized experience tailored to your needs and schedule.</p>
                        @else
                            <p>Optar por el transporte privado en Cancún ofrece comodidad, confort y flexibilidad para los viajeros. Ya sea que busques un traslado directo desde el aeropuerto hasta tu hotel o estés explorando la ciudad y sus alrededores, los servicios de transporte privado garantizan una experiencia personalizada adaptada a tus necesidades y horario.</p>
                        @endif
                    </div>
                </div>
                <div class="hidden">
                    @if(app()->getLocale() == "en")
                        <h3>ADO bus:</h3>
                    @else
                        <h3>Autobús ADO:</h3>
                    @endif
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>The ADO bus service is a popular and affordable option for travelers looking to navigate Cancun and its neighboring areas. With comfortable and air-conditioned buses, ADO provides reliable transportation between some destinations, including the airport, downtown Cancun, and specific stations.</p>
                        @else
                            <p>El servicio de autobús ADO es una opción popular y económica para los viajeros que desean moverse por Cancún y sus áreas circundantes. Con autobuses cómodos y con aire acondicionado, ADO ofrece un transporte confiable entre algunas destinos, incluyendo el aeropuerto, el centro de Cancún y estaciones específicas.</p>
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
                            <p>For travelers seeking independence and flexibility, renting a car in Cancun is an excellent choice. With numerous rental agencies located at the airport and throughout the city, renting a car allows you to explore Cancun and its surroundings at your own pace. From pristine beaches to ancient ruins, having a rental car gives you the freedom to discover all that Cancun has to offer on your own terms.</p>
                        @else
                            <p>Para los viajeros que buscan independencia y flexibilidad, alquilar un coche en Cancún es una excelente opción. Con numerosas agencias de alquiler ubicadas en el aeropuerto y en toda la ciudad, alquilar un coche te permite explorar Cancún y sus alrededores a tu propio ritmo. Desde playas prístinas hasta ruinas antiguas, tener un coche de alquiler te brinda la libertad de descubrir todo lo que Cancún tiene para ofrecer según tus propios términos.</p>
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
                    <h2>Transportation Services from Cancun Airport</h2>
                    <p>When traveling from Cancun Airport to Cancun, explore a variety of customized transportation options tailored to your preferences and group size.</p>
                @else
                    <h2>Tarifas de transporte desde el aeropuerto de Cancún</h2>
                    <p>Descubre precios competitivos adaptados a tu presupuesto para tu viaje desde Tulum a Cancún, garantizando la asequibilidad sin sacrificar la calidad y comodidad.</p>
                @endif
            </div>
            <div class="bottom">
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/van.webp" type="image/webp" />
                            <img src="/assets/img/services/van.jpg" alt="{{ __('destinations/cancun.services_van_alt') }}" title="{{ __('destinations/cancun.services_van_title') }}" loading="lazy" width="150" height="100"/>
                        </picture>
                        @if(app()->getLocale() == "en")
                            <p>From/To Tulum Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Tulum</p>
                            <p>Traslado al Aeropuerto</p>
                        @endif
                    </div>
                    <div class="information">
                        <p>{{ __('destinations/cancun.passengers',['quantity' => 8]) }}</p>
                        <p>{{ __('destinations/cancun.suitcase',['quantity' => 7]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/cancun.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8), 2) }} USD</p>
                                @else
                                    <p>${{ number_format((PricesTrait::price(1, 1, 'MXN') / 8), 2) }} MXN</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/cancun.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/cancun.view_rates') }}" title="{{ __('destinations/cancun.view_rates') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/suburban.webp" type="image/webp" />
                            <img src="/assets/img/services/suburban.jpg" alt="{{ __('destinations/cancun.services_suburban_alt') }}" title="{{ __('destinations/cancun.services_suburban_title') }}" loading="lazy" width="150" height="100"/>
                        </picture>
                        @if(app()->getLocale() == "en")
                            <p>From/To Tulum Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Tulum</p>
                            <p>Traslado al Aeropuerto</p>
                        @endif
                    </div>
                    <div class="information">
                        <p>{{ __('destinations/cancun.passengers',['quantity' => 5]) }}</p>
                        <p>{{ __('destinations/cancun.suitcase',['quantity' => 5]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/cancun.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ number_format((PricesTrait::price(1, 2, 'USD') / 5), 2) }} USD</p>
                                @else
                                    <p>${{ number_format((PricesTrait::price(1, 2, 'MXN') / 5), 2) }} MXN</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/cancun.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/cancun.view_rates') }}" title="{{ __('destinations/cancun.view_rates') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/crafter.webp" type="image/webp" />
                            <img src="/assets/img/services/crafter.jpg" alt="{{ __('destinations/cancun.services_crafter_alt') }}" title="{{ __('destinations/cancun.services_crafter_title') }}" loading="lazy" width="150" height="100"/>
                        </picture>
                        @if(app()->getLocale() == "en")
                            <p>From/To Tulum Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Tulum</p>
                            <p>Traslado al Aeropuerto</p>
                        @endif
                    </div>
                    <div class="information">
                        <p>{{ __('destinations/cancun.passengers',['quantity' => 15]) }}</p>
                        <p>{{ __('destinations/cancun.suitcase',['quantity' => 14]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/cancun.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ number_format((PricesTrait::price(1, 2, 'USD') / 15), 2) }} USD</p>
                                @else
                                    <p>${{ number_format((PricesTrait::price(1, 2, 'MXN') / 15), 2) }} MXN</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/cancun.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/cancun.view_rates') }}" title="{{ __('destinations/cancun.view_rates') }}"></a>
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
                <h2>Cancun Airport Transportation Rates</h2>
                <p>Discover competitive pricing tailored to your budget for your trip from Tulum to Cancun, guaranteeing affordability while maintaining quality and comfort.</p>
            @else
                <h2>Tarifas de Transporte de Playa del Carmen a Cancún</h2>
                <p>Explora nuestras opciones de precios competitivos para tu viaje de Playa del Carmen a Cancún, asegurando asequibilidad sin comprometer la calidad o comodidad.</p>
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
                            <td><strong>Cancun Centro</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(1, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Zona Hotelera de Cancún</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(1, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(1, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(1, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Morelos</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(5, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(5, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(5, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(5, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(5, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(5, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Playa Mujeres</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(21, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(21, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(21, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(21, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(21, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(21, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Juárez</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(3, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(3, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(3, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(3, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(3, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(3, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Playa del Carmen</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(6, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Costa Mujeres</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(4, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(4, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(4, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(4, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(4, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(4, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Cozumel</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(6, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(6, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(6, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Aventuras</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(8, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(8, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(8, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(8, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(8, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(8, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Akumal</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(9, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(9, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(9, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(9, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(9, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(9, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Tulum</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(10, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(10, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(10, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(10, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(10, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(10, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Mahahual</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(20, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Holbox</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(17, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(17, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(17, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(17, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(17, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(17, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Valladolid</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(16, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Merida</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(19, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(19, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(19, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(19, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(19, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(19, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Bacalar</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(20, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(20, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(20, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Coba</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(16, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(16, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(16, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Tulum Hotel Zone</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(11, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(11, 1, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Sencillo)">${{ PricesTrait::price(11, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi de Lujo" data-sublabel="1 - 5 Pasajeros (Redondo)">${{ PricesTrait::price(11, 2, 'MXN', true) }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Sencillo)">${{ PricesTrait::price(11, 2, 'MXN') }} MXN</td>
                            <td data-label="Taxi para Grupos" data-sublabel="1 - 15 Pasajeros (Redondo)">${{ PricesTrait::price(11, 2, 'MXN', true) }} MXN</td>
                        </tr>
                        <tr>
                            <td><strong>Tulum Aeropuerto</strong></td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Sencillo)">${{ PricesTrait::price(22, 1, 'MXN') }} MXN</td>
                            <td data-label="Taxi Privado" data-sublabel="1 - 8 Pasajeros (Redondo)">${{ PricesTrait::price(22, 1, 'MXN', true) }} MXN</td>
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
                            <td><strong>Cancun Downtown</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Cancun Hotel Zone</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(1, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(1, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Morelos</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(5, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(5, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(5, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Playa Mujeres</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(21, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(21, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(21, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(21, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Juárez</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(3, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(3, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(3, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Playa del Carmen</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Costa Mujeres</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(4, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(4, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(4, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Cozumel</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(6, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(6, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Puerto Aventuras</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(8, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(8, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(8, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Akumal</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(9, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(9, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(9, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(9, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Tulum</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(10, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(10, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(10, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(10, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Mahahual</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Holbox</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(17, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(17, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(17, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(17, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Valladolid</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Merida</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(19, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(19, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(19, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(19, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bacalar</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(20, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(20, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(20, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(20, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Coba</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(16, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(16, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(16, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(16, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Tulum Hotel Zone</strong></td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (One Way)">${{ PricesTrait::price(11, 1, 'USD') }} USD</td>
                            <td data-label="Private Taxi" data-sublabel="1 - 8 Passengers (Round Trip)">${{ PricesTrait::price(11, 1, 'USD', true) }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (One Way)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Luxury Taxi" data-sublabel="1 - 5 Passengers (Round Trip)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (One Way)">${{ PricesTrait::price(11, 2, 'USD') }} USD</td>
                            <td data-label="Taxi for Groups" data-sublabel="1 - 15 Passengers (Round Trip)">${{ PricesTrait::price(11, 2, 'USD', true) }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Tulum Airport</strong></td>
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
                    <h2>What Our Customers Say About our Cancun Airport Transportation service</h2>
                    <p>Experience the satisfaction shared by countless travelers who have chosen Tulum Airport Cab for their Cancun Airport Transportation needs. Let us redefine your travel experience with unmatched comfort and service.</p>
                @else
                    <h2>Lo que dicen nuestros clientes sobre nuestro servicio de transporte desde el aeropuerto de Cancún</h2>
                    <p>Experimenta la satisfacción compartida por innumerables viajeros que han elegido Tulum Airport Cab para sus necesidades de transporte desde el aeropuerto de Cancún. Permítenos redefinir tu experiencia de viaje con un confort y servicio inigualables.</p>
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
                            <p>Booking with Tulum Airport Cab was the highlight of my Tulum trip. The private transfer was incredibly convenient, and our driver, Carlos, was not only friendly but also professional. The luxury service exceeded my expectations, and I'll definitely choose them again on my next Mexico visit.</p>
                        @else
                            <p>Reservar con Tulum Airport Cab fue el punto culminante de mi viaje a Tulum. El traslado privado fue increíblemente conveniente, y nuestro conductor, Carlos, no solo fue amable sino también profesional. El servicio de lujo superó mis expectativas, ¡y definitivamente los elegiré nuevamente en mi próxima visita a México!.</p>
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
                            <p>I can't praise Tulum Airport Cab enough! From touchdown in Cancun, everything was seamless. Our private transfer to Tulum was comfortable and stress-free. The team's communication was excellent, and they were incredibly accommodating to our schedule changes. Thank you for making our trip hassle-free!.</p>
                        @else
                            <p>¡No puedo elogiar lo suficiente a Tulum Airport Cab! Desde el aterrizaje en Cancún, todo fue impecable. Nuestro traslado privado a Tulum fue cómodo y sin estrés. La comunicación con el equipo fue excelente, y fueron increíblemente complacientes con nuestros cambios de horario. ¡Gracias por hacer que nuestro viaje fuera sin complicaciones!.</p>
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
                            <p>My friends and I opted for the small group service with Tulum Airport Cab, and it perfectly suited our needs. The vehicle was clean and comfortable, and our driver, Omar, was fantastic. He even gave us some excellent recommendations for restaurants and activities in Tulum. Overall, a fantastic experience from start to finish!.</p>
                        @else
                            <p>Mis amigos y yo optamos por el servicio de grupo pequeño con Tulum Airport Cab, y se adaptó perfectamente a nuestras necesidades. El vehículo estaba limpio y cómodo, y nuestro conductor, Omar, fue fantástico. Incluso nos dio algunas excelentes recomendaciones para restaurantes y actividades en Tulum. En general, ¡una experiencia fantástica de principio a fin!.</p>
                        @endif                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_destinations">
        <div class="top">
            @if(app()->getLocale() == "en")
                <h2>Experience Seamless Exploration of the Riviera Maya</h2>
                <p>Embark on a journey of enchantment as you traverse the diverse and captivating destinations along the Riviera Maya with Tulum Airport Cab. From the pristine beaches of Tulum to the bustling streets of Playa del Carmen, our transportation services provide seamless access to the region's most iconic attractions.</p>
            @else
                <h2>Experimenta una exploración sin problemas de la Riviera Maya</h2>
                <p>Embárcate en un viaje de encanto mientras atraviesas los diversos y cautivadores destinos a lo largo de la Riviera Maya con Tulum Airport Cab. Desde las playas prístinas de Tulum hasta las bulliciosas calles de Playa del Carmen, nuestros servicios de transporte proporcionan un acceso sin problemas a las atracciones más icónicas de la región.</p>
            @endif
        </div>
        <div class="bottom">
            <div>
                <a href="#" title="{{ __('destinations/cancun.destination_tulum_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/tulum.webp" type="image/webp" />
                        <img src="/assets/img/destinations/tulum.jpg" alt="{{ __('destinations/cancun.destination_tulum_alt') }}" title="{{ __('destinations/cancun.destination_tulum_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Tulum</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Tulum, ciudad costera de la Riviera Maya, deslumbra con sus antiguas ruinas mayas frente al mar. Sus playas de arena blanca y aguas turquesas crean un escenario impresionante digno de admirar.</p>
                @else
                    <p>Tulum, coastal city in the Riviera Maya, dazzles with its ancient seaside Mayan ruins. Its white sandy beaches and turquoise waters create a stunning backdrop.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/cancun.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'MXN') / 8),0) }} MXN</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/cancun.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/cancun.view_rates') }}" title="{{ __('destinations/cancun.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/cancun.destination_cancun_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/cancun.webp" type="image/webp" />
                        <img src="/assets/img/destinations/cancun.jpg" alt="{{ __('destinations/cancun.destination_cancun_alt') }}" title="{{ __('destinations/cancun.destination_cancun_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Cancún</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Cancun, a gem in the Mexican Caribbean, dazzles with its white sandy beaches and turquoise waters. This tropical paradise offers a vibrant nightlife, exquisite cuisine, and thrilling water activities.</p>
                @else
                    <p>Cancún, joya del Caribe mexicano, deslumbra con playas de arena blanca y aguas turquesas. Este paraíso tropical ofrece una vibrante vida nocturna, exquisita gastronomía y emocionantes actividades acuáticas.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/cancun.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(1, 1, 'MXN') / 8),0) }} MXN</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/cancun.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/cancun.view_rates') }}" title="{{ __('destinations/cancun.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/cancun.destination_pdc_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/playa-del-carmen.webp" type="image/webp" />
                        <img src="/assets/img/destinations/playa-del-carmen.jpg" alt="{{ __('destinations/cancun.destination_pdc_alt') }}" title="{{ __('destinations/cancun.destination_pdc_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Playa del Carmen</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Playa del Carmen, with its coastal charm, captivates with soft sandy beaches and crystal-clear waters. Its bustling Fifth Avenue hosts shops and restaurants, while nearby Mayan ruins provide a historical connection.</p>
                @else
                    <p>Playa del Carmen, con su encanto costero, cautiva con playas de arena suave y aguas cristalinas. Su Quinta Avenida bulliciosa alberga tiendas y restaurantes, mientras que las ruinas mayas cercanas ofrecen una conexión histórica.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/cancun.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(6, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(6, 1, 'MXN') / 8),0) }} MXN</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/cancun.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/cancun.view_rates') }}" title="{{ __('destinations/cancun.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/cancun.destination_akumal_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/akumal.webp" type="image/webp" />
                        <img src="/assets/img/destinations/akumal.jpg" alt="{{ __('destinations/cancun.destination_akumal_alt') }}" title="{{ __('destinations/cancun.destination_akumal_title') }}" loading="lazy" width="150" height="100"/>
                    </picture>
                    <p>Akumal</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Akumal, a marine paradise in the Riviera Maya, invites you to discover its serene beaches and crystal-clear waters. Known for turtle sightings, this coastal haven offers unforgettable snorkeling experiences.</p>
                @else
                    <p>Akumal, paraíso marino en la Riviera Maya, invita a descubrir sus playas serenas y aguas cristalinas. Conocido por el avistamiento de tortugas, este refugio costero ofrece experiencias de snorkel inolvidables.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/cancun.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(9, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(9, 1, 'MXN') / 8),0) }} MXN</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/cancun.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/cancun.view_rates') }}" title="{{ __('destinations/cancun.view_rates') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_five">
        <div class="left faqs_section">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Cancun Airport Transportation Service FAQs</h2>
                    <p>Experience Seamless Cancun Transportation: Your Questions Answered</p>
                @else
                    <h2>Servicio de Transporte desde el Aeropuerto de Cancún: Preguntas Frecuentes</h2>
                    <p>Experimenta un transporte sin complicaciones en Cancún: respondemos tus preguntas</p>
                @endif
            </div>
            <div class="bottom">
                @if(app()->getLocale() == "en")
                    <div>
                        <h3>What is the best time to visit Cancun and why?</h3>
                        <div>
                            <p>The best time to visit Cancun is during the months of December to April, when the weather is drier and the temperatures are warm and pleasant. During these months, days are typically sunny and nights are cool, making it ideal for enjoying the beaches and outdoor activities. Additionally, this season coincides with the high tourist season, meaning there are plenty of entertainment options, restaurants, and activities available for visitors.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are some of the best beaches in Cancun and what makes them special?</h3>
                        <div>
                            <p>Cancun is famous for its stunning white-sand beaches and crystal-clear waters. Some of the best beaches include Playa Delfines, known for its spectacular sunsets and perfect waves for surfing; Playa Norte in Isla Mujeres, with its calm, shallow waters ideal for swimming and snorkeling; and Playa Tortugas, which offers a variety of exciting water sports like parasailing and jet skiing. What makes these beaches special is their natural beauty and the wide range of activities and amenities available for visitors.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are the top cultural and natural attractions not to be missed in Cancun?</h3>
                        <div>
                            <p>Among the top cultural attractions in Cancun is the archaeological site of El Rey, which offers a fascinating glimpse into Mayan history; Xcaret Park, where you can explore Mexican nature and culture through shows, activities, and exhibits; and the Cancun Maya Museum, which houses an impressive collection of Mayan artifacts and art. As for natural attractions, the Nichupté Lagoon offers the opportunity to explore wildlife and mangroves by kayak or boat tour, while the Sian Ka'an Biosphere Reserve is an ecological paradise with stunning landscapes of jungle, mangroves, and cenotes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What nightlife options does Cancun offer for visitors?</h3>
                        <div>
                            <p>Cancun is known for its vibrant nightlife, offering a wide variety of options for all tastes. From nightclubs and bars in the Hotel Zone, such as Coco Bongo and Mandala, which offer live shows and DJ music to more relaxed beach clubs where you can enjoy cocktails at sunset. Additionally, the famous Avenida Tulum street in downtown is packed with local bars, restaurants, and nightclubs offering a more authentic experience of Cancun nightlife.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are some exciting activities to do in Cancun beyond the beaches?</h3>
                        <div>
                            <p>In addition to enjoying the beaches, Cancun offers a wide range of exciting activities for visitors. You can explore the stunning coral reefs and marine life while diving or snorkeling in the second largest coral reef system in the world. You can also embark on an exciting jungle adventure through zip lines, ATV rides, and cenote swimming. Other highlights include whale and dolphin watching, deep-sea fishing, and golfing on world-class courses with breathtaking views.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What sets Tulum Airport Cab apart from other transportation services for Cancun Airport Transportation?</h3>
                        <div>
                            <p>Tulum Airport Cab stands out for its unparalleled commitment to customer satisfaction, offering personalized service tailored to each traveler's needs. From the moment you land at Cancun Airport, Tulum Airport Cab ensures a seamless and stress-free experience, providing reliable transfers to your destination in Cancun and beyond.</p>
                        </div>
                    </div>
                    <div>
                        <h3>How does Tulum Airport Cab ensure a comfortable and secure journey for passengers?</h3>
                        <div>
                            <p>Tulum Airport Cab prioritizes passenger comfort and safety by providing modern, well-maintained vehicles and professional drivers trained in safe driving practices. Whether you're traveling solo, with family, or in a group, you can relax and enjoy the journey knowing that Tulum Airport Cab has your safety and comfort in mind.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What types of transportation options does Tulum Airport Cab offer for Cancun Airport Transportation?</h3>
                        <div>
                            <p>Tulum Airport Cab offers a variety of transportation options to suit different preferences and group sizes. From private transfers for a personalized experience to shared shuttles for budget-conscious travelers, Tulum Airport Cab ensures that every passenger's needs are met.</p>
                        </div>
                    </div>
                    <div>
                        <h3>How does Tulum Airport Cab handle scheduling and communication with passengers?</h3>
                        <div>
                            <p>Tulum Airport Cab prides itself on its efficient scheduling and clear communication with passengers. Whether you're booking in advance or arranging transportation on the spot, Tulum Airport Cab ensures prompt pick-ups and drop-offs and keeps passengers informed every step of the way.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What do customers have to say about their experience with Tulum Airport Cab for Cancun Airport Transportation?</h3>
                        <div>
                            <p>Customers rave about the exceptional service and reliability of Tulum Airport Cab for Cancun Airport Transportation. From convenient booking processes to comfortable transfers, travelers consistently praise Tulum Airport Cab for making their journey to and from Cancun Airport hassle-free and enjoyable.</p>
                        </div>
                    </div>
                @else
                    <div>
                        <h3>¿Cuál es la mejor época para visitar Cancún y por qué?</h3>
                        <div>
                            <p>La mejor época para visitar Cancún es durante los meses de diciembre a abril, cuando el clima es más seco y las temperaturas son cálidas y agradables. Durante estos meses, los días suelen ser soleados y las noches frescas, lo que lo hace ideal para disfrutar de las playas y actividades al aire libre. Además, esta temporada coincide con la temporada alta de turismo, lo que significa que hay una amplia gama de opciones de entretenimiento, restaurantes y actividades disponibles para los visitantes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son algunas de las mejores playas en Cancún y qué las hace especiales?</h3>
                        <div>
                            <p>Cancún es famoso por sus impresionantes playas de arena blanca y aguas cristalinas. Algunas de las mejores playas incluyen Playa Delfines, conocida por sus espectaculares puestas de sol y olas perfectas para el surf; Playa Norte en Isla Mujeres, con sus aguas tranquilas y poco profundas ideales para nadar y hacer snorkel; y Playa Tortugas, que ofrece una variedad de emocionantes deportes acuáticos como parasailing y jet ski. Lo que hace que estas playas sean especiales es su belleza natural y la amplia gama de actividades y servicios disponibles para los visitantes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son las principales atracciones culturales y naturales que no te puedes perder en Cancún?</h3>
                        <div>
                            <p>Entre las principales atracciones culturales en Cancún se encuentra el sitio arqueológico de El Rey, que ofrece una fascinante visión de la historia maya; Xcaret Park, donde puedes explorar la naturaleza y la cultura mexicana a través de espectáculos, actividades y exhibiciones; y el Museo Maya de Cancún, que alberga una impresionante colección de artefactos y arte maya. En cuanto a las atracciones naturales, la Laguna Nichupté ofrece la oportunidad de explorar la vida silvestre y los manglares en kayak o en un paseo en bote, mientras que la Reserva de la Biosfera de Sian Ka'an es un paraíso ecológico con impresionantes paisajes de selva, manglares y cenotes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué opciones de vida nocturna ofrece Cancún para los visitantes?</h3>
                        <div>
                            <p>Cancún es conocido por su animada vida nocturna, que ofrece una amplia variedad de opciones para todos los gustos. Desde discotecas y bares en la Zona Hotelera, como Coco Bongo y Mandala, que ofrecen espectáculos en vivo y música de DJ hasta clubes de playa más relajados donde puedes disfrutar de cócteles al atardecer. Además, la famosa calle Avenida Tulum en el centro de la ciudad está repleta de bares locales, restaurantes y discotecas que ofrecen una experiencia más auténtica de la vida nocturna en Cancún.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son algunas actividades emocionantes para realizar en Cancún más allá de las playas?</h3>
                        <div>
                            <p>Además de disfrutar de las playas, Cancún ofrece una amplia gama de actividades emocionantes para los visitantes. Puedes explorar los impresionantes arrecifes de coral y la vida marina mientras buceas o haces snorkel en el segundo sistema de arrecifes de coral más grande del mundo. También puedes embarcarte en una emocionante aventura en la jungla a través de tirolesas, paseos en ATV y nado en cenotes. Otros puntos destacados incluyen la observación de ballenas y delfines, la pesca deportiva en alta mar y el golf en campos de clase mundial con vistas impresionantes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué distingue a Tulum Airport Cab de otros servicios de transporte para el Aeropuerto de Cancún?</h3>
                        <div>
                            <p>Tulum Airport Cab se destaca por su compromiso inigualable con la satisfacción del cliente, ofreciendo un servicio personalizado adaptado a las necesidades de cada viajero. Desde el momento en que aterrizas en el Aeropuerto de Cancún, Tulum Airport Cab asegura una experiencia sin problemas y sin estrés, proporcionando traslados confiables a tu destino en Cancún y más allá.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cómo garantiza Tulum Airport Cab un viaje cómodo y seguro para los pasajeros?</h3>
                        <div>
                            <p>Tulum Airport Cab prioriza la comodidad y la seguridad de los pasajeros al proporcionar vehículos modernos y bien mantenidos y conductores profesionales capacitados en prácticas seguras de conducción. Ya sea que viajes solo, con familia o en grupo, puedes relajarte y disfrutar del viaje sabiendo que Tulum Airport Cab tiene tu seguridad y comodidad en mente.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué tipos de opciones de transporte ofrece Tulum Airport Cab para el transporte desde el Aeropuerto de Cancún?</h3>
                        <div>
                            <p>Tulum Airport Cab ofrece una variedad de opciones de transporte para adaptarse a diferentes preferencias y tamaños de grupo. Desde traslados privados para una experiencia personalizada hasta traslados compartidos para viajeros conscientes del presupuesto, Tulum Airport Cab asegura que se satisfagan las necesidades de cada pasajero.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cómo maneja Tulum Airport Cab la programación y comunicación con los pasajeros?</h3>
                        <div>
                            <p>Tulum Airport Cab se enorgullece de su programación eficiente y comunicación clara con los pasajeros. Ya sea que reserves con anticipación o arregles el transporte en el momento, Tulum Airport Cab asegura recogidas y entregas rápidas y mantiene informados a los pasajeros en cada paso del camino.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué opinan los clientes sobre su experiencia con Tulum Airport Cab para el transporte desde el Aeropuerto de Cancún?</h3>
                        <div>
                            <p>Los clientes elogian el excepcional servicio y la confiabilidad de Tulum Airport Cab para el transporte desde el Aeropuerto de Cancún. Desde procesos de reserva convenientes hasta traslados cómodos, los viajeros elogian consistentemente a Tulum Airport Cab por hacer que su viaje desde y hacia el Aeropuerto de Cancún sea libre de problemas y agradable.</p>
                        </div>
                    </div>
                @endif
            </div>            
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/faqs/faqs-client.webp" type="image/webp" />
                <img src="/assets/img/faqs/faqs-client.jpg" alt="{{ __('destinations/cancun.faqs_client_alt') }}" title="{{ __('destinations/cancun.faqs_client_title') }}" loading="lazy" width="60" height="60" />
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection