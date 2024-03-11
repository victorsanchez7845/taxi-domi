@php
    use App\Traits\PricesTrait;
@endphp
@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="stylesheet">
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
                <h1>Cancun to Tulum Shuttle</h1>
                <h2>Shuttle from Cancun to Tulum at Best Prices</h2>
                <p>Looking for a reliable, safe, and affordable service to travel from Cancun to Tulum? Tulum Airport Cab is your best choice! Our company specializes in providing quality transfers, ensuring a comfortable and hassle-free journey from Cancun airport to the heart of Tulum. With our shuttle service, you can rest assured that you will arrive at your destination on time and without complications.</p>
                <p>At Tulum Airport Cab, we understand the importance of peace of mind and confidence when traveling. That's why we have professional drivers and modern, well-maintained vehicles to ensure the safety of our passengers at all times. Our priority is to provide a pleasant and worry-free travel experience so you can relax and enjoy the beautiful scenery of the Riviera Maya during your transfer from Cancun to Tulum.</p>
                <p>In addition to our reputation as a reliable and safe company, we pride ourselves on offering competitive rates that fit any budget. With Tulum Airport Cab, you not only get quality service but also enjoy the lowest prices on the market for your Cancun to Tulum shuttle journey. Trust us to take you safely, comfortably, and affordably to your destination in Tulum!</p>
            @else
                <h1>Traslado de Cancún a Tulum</h1>
                <h2>Traslado desde Cancún a Tulum a los Mejores Precios</h2>
                <p>&iquest;Buscas un servicio confiable, seguro y asequible para viajar de Canc&uacute;n a Tulum? &iexcl;Tulum Airport Cab es tu mejor opci&oacute;n! Nuestra empresa se especializa en ofrecer traslados de calidad, garantizando un viaje c&oacute;modo y sin complicaciones desde el aeropuerto de Canc&uacute;n hasta el coraz&oacute;n de Tulum. Con nuestro servicio de traslado, puedes estar seguro de que llegar&aacute;s a tu destino a tiempo y sin complicaciones.</p>
                <p>En Tulum Airport Cab entendemos la importancia de la tranquilidad y la confianza al viajar. Es por eso que contamos con conductores profesionales y veh&iacute;culos modernos y bien mantenidos para garantizar la seguridad de nuestros pasajeros en todo momento. Nuestra prioridad es brindar una experiencia de viaje placentera y sin preocupaciones para que puedas relajarte y disfrutar del hermoso paisaje de la Riviera Maya durante tu traslado de Canc&uacute;n a Tulum.</p>
                <p>Adem&aacute;s de nuestra reputaci&oacute;n como una empresa confiable y segura, nos enorgullece ofrecer tarifas competitivas que se adaptan a cualquier presupuesto. Con Tulum Airport Cab, no solo obtienes un servicio de calidad, sino que tambi&eacute;n disfrutas de los precios m&aacute;s bajos del mercado para tu viaje en traslado de Canc&uacute;n a Tulum. &iexcl;Conf&iacute;a en nosotros para llevarte de manera segura, c&oacute;moda y asequible a tu destino en Tulum!</p>
            @endif
        </div>
    </div>

    <div class="bg_blue_one">
        <div class="container content_one">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>The Advantages of Private Transfers from Tulum to Cancun</h2>
                    <p>Reserving a private transfer service from Tulum to Cancun offers unparalleled convenience, comfort, and peace of mind for your journey. Here's why booking a private transfer is the ideal choice:</p>
                @else
                    <h2>Las ventajas de los traslados privados de Tulum a Cancún</h2>
                    <p>Reservar un servicio de traslado privado de Tulum a Cancún ofrece una comodidad, confort y tranquilidad sin igual para tu viaje. Aquí te explicamos por qué reservar un traslado privado es la opción ideal:</p>
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
                <h2>How to Get from Cancun to Tulum</h2>
                <p>When traveling from Cancun to Tulum, there are several transportation options to consider, here are some of the ways to go from Cancun to Tulum.</p>
            @else
                <h2>Cómo llegar de Cancún a Tulum</h2>
                <p>Cuando viajas de Cancún a Tulum, hay varias opciones de transporte para considerar, aquí tienes algunas formas de ir de Cancún a Tulum.</p>
            @endif
        </div>
        <div class="bottom">
            <div>
                @if(app()->getLocale() == "en")
                    <p>One of the most convenient and hassle-free ways to make this journey is by booking a private transfer service. With private transfers, you can enjoy a seamless door-to-door experience, eliminating the need to navigate unfamiliar public transportation systems or haggle with taxi drivers.</p>
                    <p>Alternatively, if you prefer a more budget-friendly option, you can opt for shared shuttle services that operate between Cancun and Tulum. These shuttles typically make stops at various hotels and destinations along the route, so the travel time may be slightly longer compared to a private transfer. However, shared shuttles offer a cost-effective solution for those looking to save money without sacrificing comfort or convenience.</p>
                    <p>For travelers seeking a bit more flexibility and independence, renting a car is another viable option. Cancun has several car rental agencies located at the airport, making it easy to pick up a vehicle upon arrival. Driving from Cancun to Tulum is relatively straightforward, with well-maintained highways connecting the two destinations. Plus, having your own car gives you the freedom to explore nearby attractions and beaches at your own pace.</p>
                    <p>Lastly, for those looking to experience a bit of adventure, taking a public bus from Cancun to Tulum is an option. ADO buses are the most popular choice for long-distance travel in Mexico, offering comfortable seating and air-conditioned cabins. While the bus journey may take longer compared to other transportation methods, it's a budget-friendly option that allows you to soak in the scenery along the way.</p>
                    <p>No matter which transportation option you choose, rest assured that getting from Cancun to Tulum is relatively straightforward, allowing you to focus on enjoying all that this beautiful region of Mexico has to offer.</p>
                @else
                    <p>Una de las formas m&aacute;s convenientes y libres de problemas de realizar este viaje es reservando un servicio de traslado privado. Con los traslados privados, puedes disfrutar de una experiencia sin interrupciones de puerta a puerta, eliminando la necesidad de navegar por sistemas de transporte p&uacute;blico desconocidos o regatear con taxistas.</p>
                    <p>Alternativamente, si prefieres una opci&oacute;n m&aacute;s econ&oacute;mica, puedes optar por servicios de traslado compartido que operan entre Canc&uacute;n y Tulum. Estos traslados compartidos suelen hacer paradas en varios hoteles y destinos a lo largo de la ruta, por lo que el tiempo de viaje puede ser ligeramente m&aacute;s largo en comparaci&oacute;n con un traslado privado. Sin embargo, los traslados compartidos ofrecen una soluci&oacute;n econ&oacute;mica para aquellos que buscan ahorrar dinero sin sacrificar comodidad o conveniencia.</p>
                    <p>Para los viajeros que buscan un poco m&aacute;s de flexibilidad e independencia, alquilar un coche es otra opci&oacute;n viable. Canc&uacute;n cuenta con varias agencias de alquiler de coches ubicadas en el aeropuerto, lo que facilita recoger un veh&iacute;culo al llegar. Conducir de Canc&uacute;n a Tulum es relativamente sencillo, con autopistas bien mantenidas que conectan los dos destinos. Adem&aacute;s, tener tu propio coche te da la libertad de explorar atracciones y playas cercanas a tu propio ritmo.</p>
                    <p>Por &uacute;ltimo, para aquellos que buscan experimentar un poco de aventura, tomar un autob&uacute;s p&uacute;blico de Canc&uacute;n a Tulum es una opci&oacute;n. Los autobuses de ADO son la opci&oacute;n m&aacute;s popular para viajes de larga distancia en M&eacute;xico, ofreciendo asientos c&oacute;modos y cabinas con aire acondicionado. Aunque el viaje en autob&uacute;s puede llevar m&aacute;s tiempo en comparaci&oacute;n con otros m&eacute;todos de transporte, es una opci&oacute;n econ&oacute;mica que te permite disfrutar del paisaje durante el trayecto.</p>
                    <p>Sin importar qu&eacute; opci&oacute;n de transporte elijas, ten la seguridad de que llegar de Canc&uacute;n a Tulum es relativamente sencillo, lo que te permite concentrarte en disfrutar de todo lo que esta hermosa regi&oacute;n de M&eacute;xico tiene para ofrecer.</p>
                @endif
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57163.93391680891!2d-86.86595496768744!3d21.067088348122944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e81bb49b57809%3A0xe7f7d44da1f07a06!2sAeropuerto%20Internacional%20de%20Canc%C3%BAn!5e0!3m2!1ses-419!2smx!4v1709055310971!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="faqs-accordion">
                <div>
                    <h3>Private Transportation</h3>
                    <div>
                        <p>
                            Después de un largo vuelo, lo último que quiere hacer es lidiar con costosos taxis o tarifas de última hora para los servicios de transporte.
                        </p>
                    </div>
                </div>
                <div class="hidden">
                    <h3>ADO Bus</h3>
                    <div>
                        <p>
                            Después de un largo vuelo, lo último que quiere hacer es lidiar con costosos taxis o tarifas de última hora para los servicios de transporte. Para evitar todo eso, se recomienda organizar antes de viajar, una opción de
                            transporte seguro y eficiente desde el aeropuerto hasta su hotel en Cancún, Playa del Carmen, Tulum y el resto de la Riviera Maya.
                        </p>
                    </div>
                </div>
                <div class="hidden">
                    <h3>Renting a Car</h3>
                    <div>
                        <p>
                            Después de un largo vuelo, lo último que quiere hacer es lidiar con costosos taxis o tarifas de última hora para los servicios de transporte. Para evitar todo eso, se recomienda organizar antes de viajar, una opción de
                            transporte seguro y eficiente desde el aeropuerto hasta su hotel en Cancún, Playa del Carmen, Tulum y el resto de la Riviera Maya.
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
                    <h2>Transportation Services from Tulum to Cancun</h2>
                    <p>When journeying from Tulum to Cancun, indulge in a selection of tailored transportation experiences catering to your preferences and party size.</p>
                @else
                    <h2>Servicios de transporte de Tulum a Cancún</h2>
                    <p>Al viajar de Tulum a Cancún, disfruta de una selección de experiencias de transporte personalizadas que se adaptan a tus preferencias y al tamaño de tu grupo.</p>
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
                            <p>From/To Tulum Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Tulum</p>
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
                                    <p>${{ (PricesTrait::price(22, 1, 'MXN') / 8) }} MXN</p>
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
                            <p>From/To Tulum Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Tulum</p>
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
                                    <p>$1216 MXN</p>
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
                            <p>From/To Tulum Airport</p>
                            <p>Airport Shuttle</p>
                        @else
                            <p>Desde/hacia el aeropuerto de Tulum</p>
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
                                    <p>$434.52 MXN</p>
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
                <h2>Transportation Rates from Tulum to Cancun</h2>
                <p>Explore our competitive pricing options for your journey from Tulum to Cancun, ensuring affordability without compromising on quality or comfort.</p>
            @else
                <h2>Tarifas de transporte de Tulum a Cancún</h2>
                <p>Explora nuestras opciones de precios competitivos para tu viaje de Tulum a Cancún, garantizando la asequibilidad sin comprometer la calidad o la comodidad.</p>
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
                    <h2>What or Customers say about out Tulum Service</h2>
                    <p>Join the chorus of satisfied travelers who have discovered the unparalleled service of Tulum Airport Cab, and let us elevate your journey to new heights of comfort and satisfaction.</p>
                @else
                    <h2>Lo que dicen nuestros clientes sobre nuestro servicio en Tulum</h2>
                    <p>Únete al coro de viajeros satisfechos que han descubierto el servicio incomparable de Tulum Airport Cab y permítenos elevar tu viaje a nuevas alturas de comodidad y satisfacción.</p>
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
                            <p>Booking with Tulum Airport Cab was the best decision I made for my trip to Tulum. The private transfer was incredibly convenient, and our driver, Carlos, was friendly and professional. The luxury service truly exceeded my expectations, and I will definitely be using them again on my next visit to Mexico.</p>
                        @else
                            <p>Reservar con Tulum Airport Cab fue la mejor decisión que tomé para mi viaje a Tulum. El traslado privado fue increíblemente conveniente y nuestro conductor, Carlos, fue amable y profesional. El servicio de lujo realmente superó mis expectativas y definitivamente los usaré de nuevo en mi próxima visita a México.</p>
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
                            <p>I cannot recommend Tulum Airport Cab enough! From the moment we landed in Cancun, everything was seamless. Our private transfer to Tulum was comfortable and stress-free. The communication with the team was excellent, and they were very accommodating to our schedule changes. Thank you for making our trip hassle-free!.</p>
                        @else
                            <p>¡No puedo recomendar Tulum Airport Cab lo suficiente! Desde el momento en que aterrizamos en Cancún, todo fue perfecto. Nuestro traslado privado a Tulum fue cómodo y sin estrés. La comunicación con el equipo fue excelente y fueron muy complacientes con nuestros cambios de horario. ¡Gracias por hacer que nuestro viaje fuera sin problemas!.</p>
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
                            <p>My friends and I opted for the small groups service with Tulum Airport Cab, and it was perfect for our needs. The vehicle was clean and comfortable, and our driver, Juan, was fantastic. He even provided us with some great recommendations for restaurants and activities in Tulum. Overall, a fantastic experience from start to finish!</p>
                        @else
                            <p>Mis amigos y yo optamos por el servicio de grupos pequeños con Tulum Airport Cab, y fue perfecto para nuestras necesidades. El vehículo estaba limpio y cómodo, y nuestro conductor, Juan, fue fantástico. Incluso nos proporcionó excelentes recomendaciones de restaurantes y actividades en Tulum. En general, una experiencia fantástica de principio a fin.</p>
                        @endif                         
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_destinations">
        <div class="top">
            @if(app()->getLocale() == "en")
                <h2>Exploring the Riviera Maya with Seamless Transfers</h2>
                <p>Prepare to be enchanted as you explore the diverse and captivating destinations along the Riviera Maya with Tulum Airport Cab. From the pristine beaches of Tulum to the bustling streets of Playa del Carmen, our transportation services offer seamless access to the region's most iconic attractions.</p>
            @else
                <h2>Explorando la Riviera Maya con Traslados sin Problemas</h2>
                <p>Prepárate para ser encantado mientras exploras los diversos y cautivadores destinos a lo largo de la Riviera Maya con Tulum Airport Cab. Desde las playas vírgenes de Tulum hasta las bulliciosas calles de Playa del Carmen, nuestros servicios de transporte ofrecen un acceso sin problemas a las atracciones más icónicas de la región.</p>
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
                    <p>Tulum</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Tulum, ciudad costera de la Riviera Maya, deslumbra con sus antiguas ruinas mayas frente al mar. Sus playas de arena blanca y aguas turquesas crean un escenario impresionante digno de admirar.</p>
                @else
                    <p>Tulum, coastal city in the Riviera Maya, dazzles with its ancient seaside Mayan ruins. Its white sandy beaches and turquoise waters create a stunning backdrop.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/tulum.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format( (PricesTrait::price(22, 1, 'MXN') / 8),0) }} MXN</p>
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
                    <p>Cancún</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Cancun, a gem in the Mexican Caribbean, dazzles with its white sandy beaches and turquoise waters. This tropical paradise offers a vibrant nightlife, exquisite cuisine, and thrilling water activities.</p>
                @else
                    <p>Cancún, joya del Caribe mexicano, deslumbra con playas de arena blanca y aguas turquesas. Este paraíso tropical ofrece una vibrante vida nocturna, exquisita gastronomía y emocionantes actividades acuáticas.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/tulum.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(1, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(1, 1, 'MXN') / 8),0) }} MXN</p>
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
                    <p>Playa del Carmen</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Playa del Carmen, with its coastal charm, captivates with soft sandy beaches and crystal-clear waters. Its bustling Fifth Avenue hosts shops and restaurants, while nearby Mayan ruins provide a historical connection.</p>
                @else
                    <p>Playa del Carmen, con su encanto costero, cautiva con playas de arena suave y aguas cristalinas. Su Quinta Avenida bulliciosa alberga tiendas y restaurantes, mientras que las ruinas mayas cercanas ofrecen una conexión histórica.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/tulum.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(6, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(6, 1, 'MXN') / 8),0) }} MXN</p>
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
                    <p>Akumal</p>
                </a>
                @if(app()->getLocale() == "en")
                    <p>Akumal, a marine paradise in the Riviera Maya, invites you to discover its serene beaches and crystal-clear waters. Known for turtle sightings, this coastal haven offers unforgettable snorkeling experiences.</p>
                @else
                    <p>Akumal, paraíso marino en la Riviera Maya, invita a descubrir sus playas serenas y aguas cristalinas. Conocido por el avistamiento de tortugas, este refugio costero ofrece experiencias de snorkel inolvidables.</p>
                @endif
                <div class="information">
                    <div>
                        <p>{{ __('destinations/tulum.price') }}</p>
                        @if(app()->getLocale() == "en")
                            <p>${{ number_format((PricesTrait::price(9, 1, 'USD') / 8),0) }} USD</p>
                        @else
                            <p>${{ number_format((PricesTrait::price(9, 1, 'MXN') / 8),0) }} MXN</p>
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
                    <h2>Cancun to Tulum Shuttle FAQs</h2>
                    <p>Experience Seamless Tulum Shuttle: Your Questions Answered</p>
                @else
                    <h2>Preguntas frecuentes sobre el servicio de transporte de Cancún a Tulum</h2>
                    <p>Experimenta un traslado sin problemas a Tulum: Respuestas a tus preguntas</p>
                @endif
            </div>
            <div class="bottom">
                @if(app()->getLocale() == "en")
                    <div>
                        <h3>What are some popular hotels in Tulum?</h3>
                        <div>
                            <p>Tulum boasts a variety of popular hotels catering to different preferences and budgets. Among them are Azulik, renowned for its eco-luxury accommodations nestled in the jungle; Be Tulum, offering upscale beachfront villas and a serene atmosphere; Nomade Tulum, known for its bohemian-chic design and holistic wellness offerings; Ahau Tulum, featuring beachfront cabanas and a laid-back vibe; and Papaya Playa Project, offering eco-friendly accommodations and a vibrant beach club scene.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What notable tourist attractions can be visited in Tulum?</h3>
                        <div>
                            <p>Tulum is home to several captivating attractions, including the ancient ruins of Tulum, perched on a cliff overlooking the Caribbean Sea, providing insight into the region's rich history. Visitors can also explore the Tulum National Park, which encompasses lush jungle and pristine beaches. Additionally, the area is renowned for its stunning cenotes, such as Gran Cenote and Cenote Dos Ojos, offering opportunities for swimming, snorkeling, and cave exploration amidst crystal-clear waters.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are some recommended restaurants in Tulum?</h3>
                        <div>
                            <p>Tulum boasts a vibrant culinary scene with a plethora of dining options to suit every palate. Highly recommended restaurants include Hartwood, celebrated for its farm-to-table cuisine and rustic ambiance; Arca Tulum, known for its innovative dishes prepared with locally sourced ingredients; Gitano Tulum, offering delicious modern Mexican fare and craft cocktails in a lush jungle setting; Rosa Negra, serving up Latin American-inspired dishes with a contemporary twist; and Casa Jaguar, known for its eclectic menu and bohemian atmosphere.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What transportation options are available for getting around Tulum?</h3>
                        <div>
                            <p>Tulum offers various transportation options to explore the area's attractions and amenities. Travelers can utilize taxi services for convenient point-to-point transfers, rent bicycles to navigate the town and beach areas at a leisurely pace, utilize public transportation such as colectivos for affordable travel between Tulum and nearby destinations, or opt for private transfer services like Tulum Airport Cab for enhanced comfort and convenience.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What outdoor activities can be enjoyed in Tulum?</h3>
                        <div>
                            <p>Tulum's natural beauty and diverse landscape provide ample opportunities for outdoor recreation and adventure. Visitors can partake in activities such as diving and snorkeling in the area's vibrant coral reefs, exploring the mangroves and wildlife of the Sian Ka'an Biosphere Reserve on a guided tour, kayaking or stand-up paddleboarding along the tranquil waters of Tulum's lagoon, or practicing yoga and meditation on the beach while soaking in the breathtaking Caribbean views.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What distinguishes Tulum Airport Cab from other transportation services in the region?</h3>
                        <div>
                            <p>Tulum Airport Cab stands out as a premier choice for travelers seeking reliable, comfortable, and affordable transportation solutions in the Riviera Maya. What sets us apart is our unwavering commitment to excellence in customer service, ensuring that every passenger receives personalized attention and a seamless journey from start to finish. Whether you're arriving at the airport or exploring the sights of Tulum, our dedicated team goes above and beyond to exceed expectations, making us the preferred option for discerning travelers.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What types of vehicles does Tulum Airport Cab offer for transfers?</h3>
                        <div>
                            <p>At Tulum Airport Cab, we understand that every traveler has unique needs and preferences. That's why we offer a diverse fleet of vehicles to accommodate various group sizes and travel requirements. From luxury sedans and spacious vans to comfortable SUVs, our well-maintained and modern vehicles ensure a smooth and enjoyable ride for all passengers, no matter the destination or occasion.</p>
                        </div>
                    </div>
                    <div>
                        <h3>How does Tulum Airport Cab prioritize safety during transfers?</h3>
                        <div>
                            <p>Safety is our utmost priority at Tulum Airport Cab. We go to great lengths to ensure the well-being of our passengers and drivers at all times. Our team of professional drivers undergoes rigorous training and adheres to strict safety protocols to guarantee a secure journey for every passenger. Additionally, our vehicles are regularly inspected and equipped with modern safety features, providing peace of mind for travelers throughout their transfer experience.</p>
                        </div>
                    </div>
                    <div>
                        <h3>Can Tulum Airport Cab accommodate special requests or customized itineraries?</h3>
                        <div>
                            <p>Absolutely! At Tulum Airport Cab, we understand that every traveler has unique needs and preferences. Whether you require a specific vehicle arrangement, assistance with luggage, or a customized route to your destination, our team is dedicated to accommodating your requests. We pride ourselves on delivering personalized service tailored to your individual requirements, ensuring that your transfer experience with us is seamless, stress-free, and exactly as you envisioned.</p>
                        </div>
                    </div>
                    <div>
                        <h3>How can travelers book a transfer with Tulum Airport Cab?</h3>
                        <div>
                            <p>Booking a transfer with Tulum Airport Cab is simple and convenient. Travelers can make reservations effortlessly through our user-friendly online booking platform, accessible via our website. Alternatively, our dedicated customer service team is available to assist with bookings and inquiries via phone or email. Whether you're planning in advance or need immediate assistance, our team is here to make the booking process as smooth and hassle-free as possible, ensuring that you can focus on enjoying your trip to the fullest.</p>
                        </div>
                    </div>
                @else
                    <div>
                        <h3>¿Cuáles son algunos hoteles populares en Tulum?</h3>
                        <div>
                            <p>Tulum cuenta con una variedad de hoteles populares que satisfacen diferentes preferencias y presupuestos. Entre ellos se encuentran Azulik, conocido por sus lujosas instalaciones ecol&oacute;gicas ubicadas en la selva; Be Tulum, que ofrece villas de lujo frente al mar y una atm&oacute;sfera serena; Nomade Tulum, conocido por su dise&ntilde;o bohemio-chic y sus ofertas de bienestar hol&iacute;stico; Ahau Tulum, que ofrece caba&ntilde;as frente a la playa y un ambiente relajado; y Papaya Playa Project, que ofrece alojamientos ecol&oacute;gicos y una animada escena de clubes de playa.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué atracciones turísticas destacadas se pueden visitar en Tulum?</h3>
                        <div>
                            <p>Tulum alberga varias atracciones cautivadoras, como las antiguas ruinas de Tulum, situadas en un acantilado con vista al Mar Caribe, que ofrecen una visi&oacute;n de la rica historia de la regi&oacute;n. Los visitantes tambi&eacute;n pueden explorar el Parque Nacional de Tulum, que abarca exuberante selva y playas v&iacute;rgenes. Adem&aacute;s, la zona es conocida por sus impresionantes cenotes, como Gran Cenote y Cenote Dos Ojos, que ofrecen oportunidades para nadar, hacer snorkel y explorar cuevas en aguas cristalinas.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son algunos restaurantes recomendados en Tulum?</h3>
                        <div>
                            <p>Tulum cuenta con una vibrante escena culinaria con una gran cantidad de opciones gastron&oacute;micas para satisfacer todos los paladares. Algunos restaurantes altamente recomendados incluyen Hartwood, c&eacute;lebre por su cocina de la granja a la mesa y su ambiente r&uacute;stico; Arca Tulum, conocido por sus platos innovadores preparados con ingredientes locales; Gitano Tulum, que ofrece deliciosa comida mexicana moderna y c&oacute;cteles artesanales en un exuberante entorno selv&aacute;tico; Rosa Negra, que sirve platos inspirados en Am&eacute;rica Latina con un toque contempor&aacute;neo; y Casa Jaguar, conocido por su men&uacute; ecl&eacute;ctico y su ambiente bohemio.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué opciones de transporte están disponibles para moverse por Tulum?</h3>
                        <div>
                            <p>Tulum ofrece diversas opciones de transporte para explorar las atracciones y comodidades de la zona. Los viajeros pueden utilizar servicios de taxi para traslados convenientes de punto a punto, alquilar bicicletas para recorrer la ciudad y las &aacute;reas de playa a un ritmo tranquilo, utilizar el transporte p&uacute;blico como colectivos para viajes econ&oacute;micos entre Tulum y destinos cercanos, o optar por servicios de traslado privado como Tulum Airport Cab para una mayor comodidad y conveniencia.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué actividades al aire libre se pueden disfrutar en Tulum?</h3>
                        <div>
                            <p>La belleza natural y el paisaje diverso de Tulum ofrecen amplias oportunidades para la recreaci&oacute;n y la aventura al aire libre. Los visitantes pueden participar en actividades como buceo y snorkel en los vibrantes arrecifes de coral de la zona, explorar los manglares y la vida silvestre de la Reserva de la Biosfera de Sian Ka'an en un recorrido guiado, hacer kayak o paddleboarding en las tranquilas aguas de la laguna de Tulum, o practicar yoga y meditaci&oacute;n en la playa mientras disfrutan de las impresionantes vistas del Caribe.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué distingue a Tulum Airport Cab de otros servicios de transporte en la región?</h3>
                        <div>
                            <p>Tulum Airport Cab se destaca como la opción principal para los viajeros que buscan soluciones de transporte confiables, cómodas y asequibles en la Riviera Maya. Lo que nos diferencia es nuestro compromiso inquebrantable con la excelencia en el servicio al cliente, asegurando que cada pasajero reciba atención personalizada y un viaje sin problemas de principio a fin. Ya sea que estés llegando al aeropuerto o explorando los lugares de interés de Tulum, nuestro equipo dedicado va más allá para superar las expectativas, convirtiéndonos en la opción preferida para viajeros exigentes.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué tipos de vehículos ofrece Tulum Airport Cab para los traslados?</h3>
                        <div>
                            <p>En Tulum Airport Cab entendemos que cada viajero tiene necesidades y preferencias &uacute;nicas. Por eso, ofrecemos una flota diversa de veh&iacute;culos para adaptarnos a diferentes tama&ntilde;os de grupo y requisitos de viaje. Desde sedanes de lujo y vans espaciosas hasta SUVs c&oacute;modos, nuestros veh&iacute;culos modernos y bien mantenidos garantizan un viaje suave y agradable para todos los pasajeros, sin importar el destino u ocasi&oacute;n.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cómo prioriza Tulum Airport Cab la seguridad durante los traslados?</h3>
                        <div>
                            <p>La seguridad es nuestra m&aacute;xima prioridad en Tulum Airport Cab. Nos esforzamos al m&aacute;ximo para garantizar el bienestar de nuestros pasajeros y conductores en todo momento. Nuestro equipo de conductores profesionales recibe una rigurosa formaci&oacute;n y sigue estrictos protocolos de seguridad para garantizar un viaje seguro para cada pasajero. Adem&aacute;s, nuestros veh&iacute;culos se inspeccionan regularmente y est&aacute;n equipados con caracter&iacute;sticas de seguridad modernas, brindando tranquilidad a los viajeros durante su experiencia de traslado.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Puede Tulum Airport Cab satisfacer solicitudes especiales o itinerarios personalizados?</h3>
                        <div>
                            <p>&iexcl;Absolutamente! En Tulum Airport Cab entendemos que cada viajero tiene necesidades y preferencias &uacute;nicas. Ya sea que necesites un arreglo de veh&iacute;culos espec&iacute;fico, ayuda con el equipaje o una ruta personalizada a tu destino, nuestro equipo est&aacute; dedicado a satisfacer tus solicitudes. Nos enorgullece ofrecer un servicio personalizado adaptado a tus requisitos individuales, garantizando que tu experiencia de traslado con nosotros sea fluida, sin estr&eacute;s y exactamente como lo imaginaste.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cómo pueden los viajeros reservar un traslado con Tulum Airport Cab?</h3>
                        <div>
                            <p>Reservar un traslado con Tulum Airport Cab es simple y conveniente. Los viajeros pueden hacer reservas f&aacute;cilmente a trav&eacute;s de nuestra plataforma de reserva en l&iacute;nea f&aacute;cil de usar, accesible desde nuestro sitio web. Alternativamente, nuestro dedicado equipo de atenci&oacute;n al cliente est&aacute; disponible para ayudar con reservas e inquietudes por tel&eacute;fono o correo electr&oacute;nico. Ya sea que est&eacute;s planeando con anticipaci&oacute;n o necesites asistencia inmediata, nuestro equipo est&aacute; aqu&iacute; para hacer que el proceso de reserva sea lo m&aacute;s fluido y sin problemas posible, asegurando que puedas concentrarte en disfrutar al m&aacute;ximo tu viaje.</p>
                        </div>
                    </div>
                @endif
            </div>            
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