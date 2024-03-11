@php
    use App\Traits\PricesTrait;
@endphp
@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/playa-del-carmen.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/playa-del-carmen.min.css') }}" rel="stylesheet">
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
            <img src="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.png" alt="{{ __('destinations/pdc.banner_alt') }}" title="{{ __('website/home.banner_title') }}" width="2160" height="400">
        </picture>
    </div>

    <div class="container main-content">
        <div class="left">
            <x-bookingbox/>
        </div>
        <div class="right">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
            @if(app()->getLocale() == "en")
                <h1>Transportation from Cancun to Playa del Carmen</h1>
                <h2>Shuttle from Cancun to Playa del Carmen at Best Prices</h2>
                <p>Looking for reliable transportation from Cancun to Playa del Carmen? Tulum Airport Cab is your best choice! Our company specializes in providing quality transfers, ensuring a comfortable and hassle-free journey from Cancun airport to the heart of Playa del Carmen. With our shuttle service, you can rest assured that you will arrive at your destination on time and without complications.</p>
                <p>At Tulum Airport Cab, we understand the importance of peace of mind and confidence when traveling. That's why we have professional drivers and modern, well-maintained vehicles to ensure the safety of our passengers at all times. Our priority is to provide a pleasant and worry-free travel experience so you can relax and enjoy the beautiful scenery of the Riviera Maya during your shuttle to Playa del Carmen.</p>
                <p>In addition to our reputation as a reliable and safe company, we pride ourselves on offering competitive rates that fit any budget. With Tulum Airport Cab, you not only get quality service but also enjoy the lowest prices on the market for your transportation from Cancun to Playa del Carmen. Trust us to take you safely, comfortably, and affordably to your destination in Playa del Carmen!</p>
            @else
                <h1>Transporte desde Cancún a Playa del Carmen</h1>
                <h2>Traslado en Shuttle desde Cancún a Playa del Carmen a los Mejores Precios</h2>
                <p>&iquest;Est&aacute;s buscando un transporte confiable desde Canc&uacute;n a Playa del Carmen? &iexcl;Tulum Airport Cab es tu mejor opci&oacute;n! Nuestra empresa se especializa en proporcionar traslados de calidad, asegurando un viaje c&oacute;modo y sin complicaciones desde el aeropuerto de Canc&uacute;n hasta el coraz&oacute;n de Playa del Carmen. Con nuestro servicio de shuttle, puedes estar seguro de que llegar&aacute;s a tu destino a tiempo y sin complicaciones.</p>
                <p>En Tulum Airport Cab, entendemos la importancia de la tranquilidad y la confianza al viajar. Es por eso que contamos con conductores profesionales y veh&iacute;culos modernos y bien mantenidos para garantizar la seguridad de nuestros pasajeros en todo momento. Nuestra prioridad es brindar una experiencia de viaje placentera y sin preocupaciones para que puedas relajarte y disfrutar del hermoso paisaje de la Riviera Maya durante tu traslado a Playa del Carmen.</p>
                <p>Adem&aacute;s de nuestra reputaci&oacute;n como una empresa confiable y segura, nos enorgullece ofrecer tarifas competitivas que se adaptan a cualquier presupuesto. Con Tulum Airport Cab, no solo obtienes un servicio de calidad, sino que tambi&eacute;n disfrutas de los precios m&aacute;s bajos del mercado para tu transporte desde Canc&uacute;n a Playa del Carmen. &iexcl;Conf&iacute;a en nosotros para llevarte de manera segura, c&oacute;moda y asequible a tu destino en Playa del Carmen!</p>
            @endif
        </div>
    </div>

    <div class="bg_blue_one">
        <div class="container content_one">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>The Advantages of Private Transfers from Playa del Carmen to Cancun</h2>
                    <p>Reserving a private transfer service from Playa del Carmen to Cancun offers unparalleled convenience, comfort, and peace of mind for your journey. Here's why booking a private transfer is the ideal choice:</p>
                @else
                    <h2>Las Ventajas de los Traslados Privados desde Playa del Carmen a Cancún</h2>
                    <p>Reservar un servicio de traslado privado desde Playa del Carmen a Cancún ofrece una conveniencia, comodidad y tranquilidad incomparables para tu viaje. Aquí te explicamos por qué reservar un traslado privado es la elección ideal:</p>
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
                            <p>With a private transfer, you'll enjoy a personalized experience tailored to your schedule and preferences.</p>
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
                            <p>Traveling in a private vehicle means you'll have the space and privacy to relax and unwind during your journey.</p>
                        @else
                            <p>Comodidad y Privacidad</p>
                            <p>Viajar en un vehículo privado significa que tendrás el espacio y la privacidad para relajarte y descansar durante tu viaje.</p>
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
                            <p>Private transfer services prioritize your safety and security, providing professional drivers who are trained to navigate the routes safely.</p>
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
                <h2>Getting from Cancun to Playa del Carmen</h2>
                <p>When traveling from Cancun to Playa del Carmen, there are several transportation options to consider. Here are some ways to go from Cancun to Playa del Carmen:</p>
            @else
                <h2>Cómo Ir de Cancún a Playa del Carmen</h2>
                <p>Cuando viajas de Cancún a Playa del Carmen, hay varias opciones de transporte que considerar. Aquí tienes algunas formas de ir de Cancún a Playa del Carmen:</p>
            @endif
        </div>
        <div class="bottom">
            <div>
                @if(app()->getLocale() == "en")
                    <p>One of the most convenient options is to book a private transfer service. With private transfers, you can enjoy a hassle-free door-to-door experience, avoiding the need to navigate public transportation systems or negotiate with taxi drivers.</p>
                    <p>Alternatively, you can opt for shared shuttle services operating between Cancun and Playa del Carmen. While travel time may be slightly longer compared to private transfers, shared shuttles offer a cost-effective solution without sacrificing comfort.</p>
                    <p>For travelers seeking flexibility, renting a car is a viable option. Cancun has various car rental agencies at the airport, making it easy to pick up a vehicle upon arrival and drive to Playa del Carmen via well-maintained highways.</p>
                    <p>Lastly, taking a public bus from Cancun to Playa del Carmen is an adventurous option. ADO buses are popular for long-distance travel in Mexico, providing comfortable seating and air-conditioned cabins, albeit with longer travel times compared to other options.</p>
                    <p>No matter which transportation method you choose, getting from Cancun to Playa del Carmen is straightforward, allowing you to focus on enjoying all that this beautiful region of Mexico has to offer.</p>
                @else
                    <p>Una de las opciones m&aacute;s convenientes es reservar un servicio de traslado privado. Con los traslados privados, puedes disfrutar de una experiencia puerta a puerta sin complicaciones, evitando la necesidad de navegar por los sistemas de transporte p&uacute;blico o negociar con los taxistas.</p>
                    <p>Alternativamente, puedes optar por servicios de shuttle compartido que operan entre Canc&uacute;n y Playa del Carmen. Aunque el tiempo de viaje puede ser ligeramente m&aacute;s largo en comparaci&oacute;n con los traslados privados, los shuttles compartidos ofrecen una soluci&oacute;n econ&oacute;mica sin sacrificar la comodidad.</p>
                    <p>Para los viajeros que buscan flexibilidad, alquilar un coche es una opci&oacute;n viable. Canc&uacute;n cuenta con varias agencias de alquiler de coches en el aeropuerto, lo que facilita recoger un veh&iacute;culo al llegar y conducir a Playa del Carmen a trav&eacute;s de autopistas bien mantenidas.</p>
                    <p>Por &uacute;ltimo, tomar un autob&uacute;s p&uacute;blico de Canc&uacute;n a Playa del Carmen es una opci&oacute;n aventurera. Los autobuses de ADO son populares para viajes de larga distancia en M&eacute;xico, ofreciendo asientos c&oacute;modos y cabinas con aire acondicionado, aunque con tiempos de viaje m&aacute;s largos en comparaci&oacute;n con otras opciones.</p>
                    <p>Independientemente del m&eacute;todo de transporte que elijas, ir de Canc&uacute;n a Playa del Carmen es sencillo, lo que te permite concentrarte en disfrutar de todo lo que esta hermosa regi&oacute;n de M&eacute;xico tiene para ofrecer.</p>
                @endif
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57163.93391680891!2d-86.86595496768744!3d21.067088348122944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e81bb49b57809%3A0xe7f7d44da1f07a06!2sAeropuerto%20Internacional%20de%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1709055310971!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="faqs-accordion">
                <div>
                    @if(app()->getLocale() == "en")
                        <h3>Private transportation:</h3>
                    @else
                        <h3>Transporte privado:</h3>
                    @endif
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>If you are looking for the most convenient way to get around Playa del Carmen, private transportation is the ideal choice. It offers comfort, security and takes you directly to the door of your hotel, without complications or delays.</p>
                        @else
                            <p>Si estás buscando la forma más conveniente de trasladarte a Playa del Carmen, el transporte privado es la elección ideal. Ofrece comodidad, seguridad y te lleva directamente a la puerta de tu hotel, sin complicaciones ni demoras.</p>
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
                            <p>If you prefer a more economical option, you can consider the ADO bus. However, keep in mind that this service only connects between stations, so you will need to take additional cabs to reach specific destinations within Playa del Carmen.</p>
                        @else
                            <p>Si prefieres una opción más económica, puedes considerar el autobús ADO. Sin embargo, ten en cuenta que este servicio solo conecta entre estaciones, por lo que necesitarás tomar taxis adicionales para llegar a destinos específicos dentro de Playa del Carmen.</p>
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
                            <p>If you want maximum freedom to explore the Riviera Maya, renting a car may be the best option. However, if your plan is to stay at an all-inclusive resort or if you don't plan to travel much in the region, this option may not be the most advisable.</p>
                        @else
                            <p>Si deseas tener la máxima libertad para explorar la Riviera Maya, alquilar un coche puede ser la mejor opción. Sin embargo, si tu plan es quedarte en un resort todo incluido o si no planeas viajar mucho por la región, esta opción podría no ser la más recomendable.</p>
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
                    <h2>Transportation Services from Cancun to Playa del Carmen</h2>
                    <p>When traveling from Playa del Carmen to Cancun, explore a variety of customized transportation options tailored to your preferences and group size.</p>
                @else
                    <h2>Servicios de Transporte de Cancún a Playa del Carmen</h2>
                    <p>Cuando viajes de Playa del Carmen a Cancún, explora una variedad de opciones de transporte personalizadas adaptadas a tus preferencias y al tamaño de tu grupo.</p>
                @endif
            </div>
            <div class="bottom">
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/van.webp" type="image/webp" />
                            <img src="/assets/img/services/van.jpg" alt="{{ __('destinations/pdc.services_van_alt') }}" title="{{ __('destinations/pdc.services_van_title') }}" loading="lazy" width="150" height="100"/>
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
                        <p>{{ __('destinations/pdc.passengers',['quantity' => 8]) }}</p>
                        <p>{{ __('destinations/pdc.suitcase',['quantity' => 7]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/pdc.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ number_format((PricesTrait::price(6, 1, 'USD') / 8), 2) }} USD</p>
                                @else
                                    <p>${{ number_format((PricesTrait::price(6, 1, 'MXN') / 8), 2) }} MXN</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/pdc.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/pdc.view_rates') }}" title="{{ __('destinations/pdc.view_rates') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/suburban.webp" type="image/webp" />
                            <img src="/assets/img/services/suburban.jpg" alt="{{ __('destinations/pdc.services_suburban_alt') }}" title="{{ __('destinations/pdc.services_suburban_title') }}" loading="lazy" width="150" height="100"/>
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
                        <p>{{ __('destinations/pdc.passengers',['quantity' => 5]) }}</p>
                        <p>{{ __('destinations/pdc.suitcase',['quantity' => 5]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/pdc.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ number_format((PricesTrait::price(6, 2, 'USD') / 5), 2) }} USD</p>
                                @else
                                    <p>${{ number_format((PricesTrait::price(6, 2, 'MXN') / 5), 2) }} MXN</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/pdc.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/pdc.view_rates') }}" title="{{ __('destinations/pdc.view_rates') }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="vehicles">
                        <picture>
                            <source srcset="/assets/img/services/crafter.webp" type="image/webp" />
                            <img src="/assets/img/services/crafter.jpg" alt="{{ __('destinations/pdc.services_crafter_alt') }}" title="{{ __('destinations/pdc.services_crafter_title') }}" loading="lazy" width="150" height="100"/>
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
                        <p>{{ __('destinations/pdc.passengers',['quantity' => 15]) }}</p>
                        <p>{{ __('destinations/pdc.suitcase',['quantity' => 14]) }}</p>
                        <div>
                            <div>
                                <p>{{ __('destinations/pdc.price') }}</p>
                                @if(app()->getLocale() == "en")
                                    <p>${{ number_format((PricesTrait::price(6, 2, 'USD') / 15), 2) }} USD</p>
                                @else
                                    <p>${{ number_format((PricesTrait::price(6, 2, 'MXN') / 15), 2) }} MXN</p>
                                @endif
                            </div>
                            <div>
                                <p>{{ __('destinations/pdc.per_person') }}</p>
                                <a href="#" class="btn" alt="{{ __('destinations/pdc.view_rates') }}" title="{{ __('destinations/pdc.view_rates') }}"></a>
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
                <h2>Transportation Rates from Playa del Carmen to Cancun</h2>
                <p>Explore our competitive pricing options for your journey from Playa del Carmen to Cancun, ensuring affordability without compromising on quality or comfort.</p>
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
                    <h2>Testimonials for Playa del Carmen Airport Shuttle</h2>
                    <p>Join the chorus of satisfied travelers who have discovered the unparalleled service of Tulum Airport Cab, and let us elevate your journey to new heights of comfort and satisfaction.</p>
                @else
                    <h2>Testimonios para Tulum Airport Cab en Playa del Carmen</h2>
                    <p>Únete al coro de viajeros satisfechos que han descubierto el servicio insuperable de Tulum Airport Cab, y permítenos elevar tu viaje a nuevas alturas de comodidad y satisfacción.</p>
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
                            <p>Booking with Tulum Airport Cab was the best decision I made for my trip to Playa del Carmen. The private transfer was incredibly convenient, and our driver, Miguel, was friendly and professional. The luxury service truly exceeded my expectations, and I will definitely be using them again on my next visit to Mexico.</p>
                        @else
                            <p>Reservar con Tulum Airport Cab fue la mejor decisión que tomé para mi viaje a Playa del Carmen. El traslado privado fue increíblemente conveniente, y nuestro conductor, Miguel, fue amable y profesional. El servicio de lujo realmente superó mis expectativas, ¡y definitivamente los usaré de nuevo en mi próxima visita a México!.</p>
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
                            <p>I cannot recommend Tulum Airport Cab enough! From the moment we landed in Cancun, everything was seamless. Our private transfer to Playa del Carmen was comfortable and stress-free. The communication with the team was excellent, and they were very accommodating to our schedule changes. Thank you for making our trip hassle-free!.</p>
                        @else
                            <p>¡No puedo recomendar lo suficiente a Tulum Airport Cab! Desde el momento en que aterrizamos en Cancún, todo fue impecable. Nuestro traslado privado a Playa del Carmen fue cómodo y sin estrés. La comunicación con el equipo fue excelente, y fueron muy complacientes con nuestros cambios de horario. ¡Gracias por hacer que nuestro viaje fuera libre de problemas!</p>
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
                            <p>My friends and I opted for the small groups service with Tulum Airport Cab, and it was perfect for our needs. The vehicle was clean and comfortable, and our driver, Alejandro, was fantastic. He even provided us with some great recommendations for restaurants and activities in Playa del Carmen. Overall, a fantastic experience from start to finish!.</p>
                        @else
                            <p>Mis amigos y yo optamos por el servicio para grupos pequeños con Tulum Airport Cab, y fue perfecto para nuestras necesidades. El vehículo estaba limpio y cómodo, y nuestro conductor, Alejandro, fue fantástico. Incluso nos proporcionó algunas recomendaciones excelentes para restaurantes y actividades en Playa del Carmen. En general, ¡una experiencia fantástica de principio a fin!.</p>
                        @endif                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_destinations">
        <div class="top">
            @if(app()->getLocale() == "en")
                <h2>Exploring Playa del Carmen and Beyond with Seamless Transfers</h2>
                <p>Get ready to be enchanted as you discover the diverse and captivating destinations along the Riviera Maya with Tulum Airport Cab. From the pristine beaches of Tulum to the vibrant streets of Playa del Carmen, our transportation services provide effortless access to the region's most iconic attractions.</p>
            @else
                <h2>Explorando Playa del Carmen y Más Allá con Traslados Sin Problemas</h2>
                <p>Prepárate para ser encantado mientras descubres los destinos diversos y cautivadores a lo largo de la Riviera Maya con Tulum Airport Cab. Desde las playas vírgenes de Tulum hasta las calles vibrantes de Playa del Carmen, nuestros servicios de transporte ofrecen acceso sin esfuerzo a las atracciones más emblemáticas de la región.</p>
            @endif
        </div>
        <div class="bottom">
            <div>
                <a href="#" title="{{ __('destinations/pdc.destination_tulum_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/tulum.webp" type="image/webp" />
                        <img src="/assets/img/destinations/tulum.jpg" alt="{{ __('destinations/pdc.destination_tulum_alt') }}" title="{{ __('destinations/pdc.destination_tulum_title') }}" loading="lazy" width="150" height="100"/>
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
                        <p>{{ __('destinations/pdc.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'MXN') / 8),0) }} MXN</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/pdc.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/pdc.view_rates') }}" title="{{ __('destinations/pdc.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/pdc.destination_cancun_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/cancun.webp" type="image/webp" />
                        <img src="/assets/img/destinations/cancun.jpg" alt="{{ __('destinations/pdc.destination_cancun_alt') }}" title="{{ __('destinations/pdc.destination_cancun_title') }}" loading="lazy" width="150" height="100"/>
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
                        <p>{{ __('destinations/pdc.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(1, 1, 'MXN') / 8),0) }} MXN</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/pdc.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/pdc.view_rates') }}" title="{{ __('destinations/pdc.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/pdc.destination_pdc_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/playa-del-carmen.webp" type="image/webp" />
                        <img src="/assets/img/destinations/playa-del-carmen.jpg" alt="{{ __('destinations/pdc.destination_pdc_alt') }}" title="{{ __('destinations/pdc.destination_pdc_title') }}" loading="lazy" width="150" height="100"/>
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
                        <p>{{ __('destinations/pdc.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(6, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(6, 1, 'MXN') / 8),0) }} MXN</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/pdc.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/pdc.view_rates') }}" title="{{ __('destinations/pdc.view_rates') }}"></a>
                    </div>
                </div>
            </div>
            <div>
                <a href="#" title="{{ __('destinations/pdc.destination_akumal_title') }}" class="image">
                    <div class="mask"></div>
                    <picture>
                        <source srcset="/assets/img/destinations/akumal.webp" type="image/webp" />
                        <img src="/assets/img/destinations/akumal.jpg" alt="{{ __('destinations/pdc.destination_akumal_alt') }}" title="{{ __('destinations/pdc.destination_akumal_title') }}" loading="lazy" width="150" height="100"/>
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
                        <p>{{ __('destinations/pdc.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(9, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(9, 1, 'MXN') / 8),0) }} MXN</p>
                        @endif
                    </div>
                    <div>
                        <p>{{ __('destinations/pdc.per_person') }}</p>
                        <a href="#" class="btn" alt="{{ __('destinations/pdc.view_rates') }}" title="{{ __('destinations/pdc.view_rates') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_five">
        <div class="left faqs_section">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Cancun to Playa del Carmen Shuttle FAQs</h2>
                    <p>Experience Seamless Playa del Carmen Shuttle: Your Questions Answered</p>
                @else
                    <h2>Preguntas frecuentes sobre el servicio de traslado de Cancún a Playa del Carmen</h2>
                    <p>Experimenta un traslado sin inconvenientes en Playa del Carmen: ¡Respondemos tus preguntas!</p>
                @endif
            </div>
            <div class="bottom">
                @if(app()->getLocale() == "en")
                    <div>
                        <h3>What are some of the main attractions in Playa del Carmen?</h3>
                        <div>
                            <p>Playa del Carmen boasts a plethora of attractions, making it a must-visit destination in the Riviera Maya. One of its main draws is the vibrant Fifth Avenue (La Quinta Avenida), a bustling pedestrian street lined with an array of shops, boutiques, restaurants, and bars. Visitors can immerse themselves in the lively atmosphere, sampling local cuisine, shopping for souvenirs, and enjoying the vibrant nightlife. Additionally, Playa del Carmen's stunning beaches, with their powdery white sands and crystal-clear turquoise waters, offer endless opportunities for relaxation and water-based activities such as swimming, snorkeling, and diving.</p>
                        </div>
                    </div>
                    <div>
                        <h3>When is the best time to visit Playa del Carmen?</h3>
                        <div>
                            <p>The optimal time to visit Playa del Carmen is generally during the dry season, which spans from November to April. During these months, the weather is typically sunny and pleasant, with minimal rainfall and comfortable temperatures ranging from the mid-70s to mid-80s Fahrenheit (around 24-29 degrees Celsius). This period also coincides with the peak tourist season, attracting visitors seeking to escape colder climates and enjoy the region's warm tropical climate. However, it's essential to note that accommodation prices and crowds tend to be higher during this time. Alternatively, travelers can consider visiting during the shoulder seasons of May to June or September to October when the weather is still favorable, and tourist numbers are lower.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What water activities can be enjoyed in Playa del Carmen?</h3>
                        <div>
                            <p>Playa del Carmen's idyllic location along the Caribbean coast provides an abundance of water-based activities for visitors to enjoy. Snorkeling enthusiasts can explore the vibrant underwater world of the Mesoamerican Reef, the second-largest barrier reef system globally, which lies just offshore. Additionally, diving excursions to renowned sites such as the underwater caverns (cenotes) and coral reefs offer unforgettable experiences for both beginner and experienced divers alike. For those seeking adventure above the surface, activities such as kayaking, paddleboarding, and jet skiing are readily available along the coastline. Furthermore, leisurely catamaran cruises and fishing charters provide opportunities to soak up the sun and admire the scenic beauty of the Caribbean Sea.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What nightlife options does Playa del Carmen offer?</h3>
                        <div>
                            <p>Playa del Carmen's nightlife scene is renowned for its diversity and vibrancy, catering to a wide range of tastes and preferences. As the sun sets, the streets come alive with an array of bars, nightclubs, and entertainment venues, ensuring that visitors have ample opportunities to experience the city's vibrant after-dark ambiance. The iconic Fifth Avenue (La Quinta Avenida) is a hub of activity, offering an eclectic mix of bars, pubs, and live music venues where revelers can enjoy everything from traditional Mexican music to international DJ sets. For those seeking a more upscale experience, beach clubs and rooftop bars provide the perfect setting to sip cocktails while taking in panoramic views of the Caribbean coastline. Whether you're in the mood for dancing the night away or enjoying a leisurely drink by the sea, Playa del Carmen offers nightlife options to suit every taste and preference.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are some popular excursions from Playa del Carmen?</h3>
                        <div>
                            <p>Playa del Carmen serves as an ideal base for exploring the diverse array of attractions and landmarks scattered throughout the Riviera Maya region. One of the most popular day trips is a visit to the ancient Mayan ruins of Tulum, situated atop seaside cliffs overlooking the turquoise waters of the Caribbean Sea. Here, visitors can immerse themselves in the rich history and culture of the Mayan civilization while marveling at the stunning coastal scenery. Another must-visit destination is the eco-archaeological park of Xcaret, where visitors can delve into Mexico's natural and cultural heritage through a variety of activities, including snorkeling in underground rivers, exploring jungle trails, and attending traditional performances. Additionally, adventurous travelers can embark on excursions to explore the region's vast network of underground rivers and caverns (cenotes), zip-line through the jungle canopy, or take a ferry to the nearby island of Cozumel for snorkeling, diving, and beach relaxation. With its abundance of attractions and activities, Playa del Carmen offers endless opportunities for memorable excursions and adventures.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What types of transfer services does Tulum Airport Cab offer in Playa del Carmen?</h3>
                        <div>
                            <p>Tulum Airport Cab provides a wide range of transfer services in Playa del Carmen to meet diverse needs and preferences. Options include private transfers for those seeking comfort and privacy, shared transfers for travelers looking to save money and travel in groups, and small group transfers offering a combination of convenience and affordability for smaller passenger groups.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are the advantages of choosing a private transfer with Tulum Airport Cab in Playa del Carmen?</h3>
                        <div>
                            <p>Opting for a private transfer with Tulum Airport Cab in Playa del Carmen offers several exclusive benefits. In addition to enjoying a door-to-door service, passengers can customize their itinerary according to their preferences and schedules, avoiding unnecessary waits and detours. Private transfers also ensure maximum privacy and comfort as passengers travel in a vehicle exclusively for them and their group, without sharing it with strangers.</p>
                        </div>
                    </div>
                    <div>
                        <h3>How is passenger safety ensured during transfers with Tulum Airport Cab in Playa del Carmen?</h3>
                        <div>
                            <p>Passenger safety is a top priority for Tulum Airport Cab during all transfers in Playa del Carmen. The company carefully selects professional and experienced drivers who have a solid training and impeccable record in the transportation industry. Furthermore, all vehicles used for transfers undergo rigorous inspections and regular maintenance, ensuring they are in optimal condition to provide a safe and smooth journey.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What is included in transfers with Tulum Airport Cab in Playa del Carmen?</h3>
                        <div>
                            <p>Transfers with Tulum Airport Cab in Playa del Carmen offer a complete and worry-free experience for passengers. In addition to transportation in comfortable and well-equipped vehicles, transfer services include luggage assistance, ensuring passengers can enjoy a hassle-free journey from the moment they arrive at the airport or their point of origin. Private transfers may also include optional extras, such as additional stops along the way to stretch your legs or take photos, as well as the provision of child seats to ensure the safety of younger passengers.</p>
                        </div>
                    </div>
                    <div>
                        <h3>How can passengers book a transfer with Tulum Airport Cab in Playa del Carmen?</h3>
                        <div>
                            <p>Booking a transfer with Tulum Airport Cab in Playa del Carmen is quick, easy, and convenient. Customers can make their reservation online through the company's official website, where they can select the desired service type, provide their travel details, and receive instant confirmation of their booking. Alternatively, they can contact the customer service team by phone or email to receive personalized assistance in booking their transfer. With flexible booking options and responsive customer service, Tulum Airport Cab ensures a hassle-free booking experience for its customers in Playa del Carmen.</p>
                        </div>
                    </div>
                @else
                    <div>
                        <h3>¿Cuáles son algunas de las principales atracciones en Playa del Carmen?</h3>
                        <div>
                            <p>Playa del Carmen cuenta con una gran cantidad de atracciones, lo que la convierte en un destino imprescindible en la Riviera Maya. Uno de sus principales atractivos es la vibrante Quinta Avenida, una bulliciosa calle peatonal bordeada por una variedad de tiendas, boutiques, restaurantes y bares. Los visitantes pueden sumergirse en la animada atmósfera, degustar la cocina local, comprar recuerdos y disfrutar de la animada vida nocturna. Además, las impresionantes playas de Playa del Carmen, con su arena blanca y aguas turquesas cristalinas, ofrecen infinitas oportunidades para relajarse y disfrutar de actividades acuáticas como nadar, hacer snorkel y bucear.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuál es el mejor momento para visitar Playa del Carmen?</h3>
                        <div>
                            <p>El momento óptimo para visitar Playa del Carmen suele ser durante la temporada seca, que va de noviembre a abril. Durante estos meses, el clima suele ser soleado y agradable, con lluvias mínimas y temperaturas cómodas que oscilan entre los 70 y 80 grados Fahrenheit (alrededor de 24-29 grados Celsius). Este período también coincide con la temporada turística alta, atrayendo a visitantes que buscan escapar de climas más fríos y disfrutar del cálido clima tropical de la región. Sin embargo, es importante tener en cuenta que los precios de alojamiento y la cantidad de turistas tienden a ser más altos durante este tiempo. Alternativamente, los viajeros pueden considerar visitar durante las temporadas intermedias de mayo a junio o de septiembre a octubre, cuando el clima sigue siendo favorable y hay menos turistas.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué actividades acuáticas se pueden disfrutar en Playa del Carmen?</h3>
                        <div>
                            <p>La ubicación idílica de Playa del Carmen a lo largo de la costa caribeña ofrece una abundancia de actividades acuáticas para que los visitantes disfruten. Los entusiastas del snorkel pueden explorar el vibrante mundo submarino del Arrecife Mesoamericano, el segundo sistema de arrecifes de barrera más grande del mundo, que se encuentra justo frente a la costa. Además, las excursiones de buceo a sitios famosos como las cavernas submarinas (cenotes) y arrecifes de coral ofrecen experiencias inolvidables tanto para buceadores principiantes como experimentados. Para aquellos que buscan aventuras sobre la superficie, actividades como kayak, paddleboarding y jet ski están disponibles a lo largo de la costa. Además, los cruceros en catamarán y las excursiones de pesca ofrecen oportunidades para disfrutar del sol y admirar la belleza escénica del mar Caribe.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué opciones de vida nocturna ofrece Playa del Carmen?</h3>
                        <div>
                            <p>La escena nocturna de Playa del Carmen es conocida por su diversidad y vitalidad, atendiendo a una amplia gama de gustos y preferencias. Al caer el sol, las calles cobran vida con una variedad de bares, discotecas y locales de entretenimiento, asegurando que los visitantes tengan amplias oportunidades de experimentar la vibrante atmósfera nocturna de la ciudad. La icónica Quinta Avenida es un centro de actividad, ofreciendo una mezcla ecléctica de bares, pubs y locales de música en vivo donde los festejantes pueden disfrutar desde música mexicana tradicional hasta sets de DJ internacionales. Para aquellos que buscan una experiencia más exclusiva, los clubes de playa y bares en la azotea ofrecen el entorno perfecto para disfrutar de cócteles mientras se disfruta de vistas panorámicas de la costa caribeña. Ya sea que estés de humor para bailar toda la noche o para disfrutar de una bebida junto al mar, Playa del Carmen ofrece opciones de vida nocturna para todos los gustos y preferencias.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son algunas excursiones populares desde Playa del Carmen?</h3>
                        <div>
                            <p>Playa del Carmen sirve como una base ideal para explorar la diversa variedad de atracciones y lugares emblemáticos dispersos por toda la región de la Riviera Maya. Una de las excursiones de un día más populares es una visita a las antiguas ruinas mayas de Tulum, ubicadas en lo alto de acantilados junto al mar con vistas a las aguas turquesas del mar Caribe. Aquí, los visitantes pueden sumergirse en la rica historia y cultura de la civilización maya mientras se maravillan con el impresionante paisaje costero. Otro destino imprescindible es el parque eco-arqueológico de Xcaret, donde los visitantes pueden adentrarse en el patrimonio natural y cultural de México a través de una variedad de actividades, incluido el snorkel en ríos subterráneos, explorar senderos en la jungla y asistir a espectáculos tradicionales. Además, los viajeros aventureros pueden embarcarse en excursiones para explorar la vasta red de ríos subterráneos y cavernas (cenotes) de la región, hacer tirolesa a través del dosel de la selva o tomar un ferry a la cercana isla de Cozumel para hacer snorkel, buceo y relajarse en la playa. Con su abundancia de atracciones y actividades, Playa del Carmen ofrece infinitas oportunidades para excursiones y aventuras memorables.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué tipos de servicios de traslado ofrece Tulum Airport Cab en Playa del Carmen?</h3>
                        <div>
                            <p>Tulum Airport Cab ofrece una amplia gama de servicios de traslado en Playa del Carmen para satisfacer diversas necesidades y preferencias. Las opciones incluyen traslados privados para aquellos que buscan comodidad y privacidad, traslados compartidos para viajeros que desean ahorrar dinero y viajar en grupos, y traslados en grupos pequeños que ofrecen una combinación de conveniencia y asequibilidad para grupos de pasajeros más pequeños.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son las ventajas de elegir un traslado privado con Tulum Airport Cab en Playa del Carmen?</h3>
                        <div>
                            <p>Optar por un traslado privado con Tulum Airport Cab en Playa del Carmen ofrece varios beneficios exclusivos. Además de disfrutar de un servicio puerta a puerta, los pasajeros pueden personalizar su itinerario según sus preferencias y horarios, evitando esperas innecesarias y desvíos. Los traslados privados también garantizan la máxima privacidad y comodidad, ya que los pasajeros viajan en un vehículo exclusivamente para ellos y su grupo, sin compartirlo con extraños.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cómo se garantiza la seguridad de los pasajeros durante los traslados con Tulum Airport Cab en Playa del Carmen?</h3>
                        <div>
                            <p>La seguridad de los pasajeros es una prioridad máxima para Tulum Airport Cab durante todos los traslados en Playa del Carmen. La empresa selecciona cuidadosamente conductores profesionales y experimentados que tienen una sólida formación y un historial impecable en la industria del transporte. Además, todos los vehículos utilizados para los traslados pasan por rigurosas inspecciones y mantenimiento regular, asegurando que estén en óptimas condiciones para proporcionar un viaje seguro y sin problemas.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué está incluido en los traslados con Tulum Airport Cab en Playa del Carmen?</h3>
                        <div>
                            <p>Los traslados con Tulum Airport Cab en Playa del Carmen ofrecen una experiencia completa y sin preocupaciones para los pasajeros. Además del transporte en vehículos cómodos y bien equipados, los servicios de traslado incluyen asistencia con el equipaje, asegurando que los pasajeros puedan disfrutar de un viaje sin problemas desde el momento en que llegan al aeropuerto o su punto de origen. Los traslados privados también pueden incluir extras opcionales, como paradas adicionales en el camino para estirar las piernas o tomar fotos, así como la provisión de asientos para niños para garantizar la seguridad de los pasajeros más jóvenes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cómo pueden los pasajeros reservar un traslado con Tulum Airport Cab en Playa del Carmen?</h3>
                        <div>
                            <p>Reservar un traslado con Tulum Airport Cab en Playa del Carmen es rápido, fácil y conveniente. Los clientes pueden hacer su reserva en línea a través del sitio web oficial de la empresa, donde pueden seleccionar el tipo de servicio deseado, proporcionar sus detalles de viaje y recibir confirmación instantánea de su reserva. Alternativamente, pueden ponerse en contacto con el equipo de atención al cliente por teléfono o correo electrónico para recibir asistencia personalizada en la reserva de su traslado. Con opciones de reserva flexibles y un servicio al cliente receptivo, Tulum Airport Cab garantiza una experiencia de reserva sin complicaciones para sus clientes en Playa del Carmen.</p>
                        </div>
                    </div>
                @endif
            </div>            
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/faqs/faqs-client.webp" type="image/webp" />
                <img src="/assets/img/faqs/faqs-client.jpg" alt="{{ __('destinations/pdc.faqs_client_alt') }}" title="{{ __('destinations/pdc.faqs_client_title') }}" loading="lazy" width="60" height="60" />
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection