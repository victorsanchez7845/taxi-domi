@php
    use App\Traits\PricesTrait;
@endphp
@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script> 
    <x-analytics/>
@endpush

@section('content')    
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo ), 'active' => 1])

    <div class="banner">
        <picture>
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.webp" type="image/webp">
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.png" type="image/png">
            <source srcset="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" type="image/webp">
            <img src="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.png" alt="{{ __('website/home.banner_alt') }}" title="{{ __('website/home.banner_title') }}" width="2160" height="400">
        </picture>
    </div>

    <div class="container main-content">
        <div class="left">
            <x-bookingbox/>
        </div>
        <div class="right">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
            @if(app()->getLocale() == "en")
                <h1>Taxi Service at Tulum Airport</h1>
                <h2>Transportation from Tulum to the entire Riviera Maya</h2>
                <p>Need a reliable and affordable transportation service from Tulum Airport to any destination in the Riviera Maya? Tulum Airport Cab is the perfect choice for you! We specialize in providing high-quality transfers, ensuring a comfortable and hassle-free journey from Tulum airport to anywhere you want to explore in the Riviera Maya. With our transfer service, you can rest assured that you will arrive at your destination promptly and worry-free.</p>
                <p>At Tulum Airport Cab, we understand the importance of safety and peace of mind while traveling. That's why we have professional drivers and modern, well-maintained vehicles to ensure the protection of our passengers at all times. Our priority is to provide a pleasant and stress-free travel experience, allowing you to fully enjoy your vacation in the Riviera Maya.</p>
                <p>In addition to our reputation as a reliable and safe company, we take pride in offering competitive rates that fit any budget. With Tulum Airport Cab, you not only get high-quality service, but also enjoy the lowest prices in the market for your transfers in the Riviera Maya. Trust us to take you safely, comfortably, and affordably to any destination you choose in the beautiful Riviera Maya!</p>
            @else
                <h1>Servicio de Taxi en el Aeropuerto de Tulum Traslados de Tulum a toda la Riviera Maya</h1>
                <h2>Traslado desde Cancún a Tulum a los Mejores Precios</h2>
                <p>&iquest;Necesitas un servicio de transporte confiable y econ&oacute;mico desde el Aeropuerto de Tulum a cualquier destino en la Riviera Maya? &iexcl;Tulum Airport Cab es la opci&oacute;n perfecta para ti! Nos especializamos en brindar traslados de alta calidad, garantizando un viaje c&oacute;modo y sin complicaciones desde el aeropuerto de Tulum hacia cualquier lugar que desees explorar en la Riviera Maya. Con nuestro servicio de traslado, puedes estar seguro de llegar a tu destino puntualmente y sin preocupaciones.</p>
                <p>En Tulum Airport Cab comprendemos la importancia de la seguridad y la tranquilidad al viajar. Por ello, contamos con conductores profesionales y veh&iacute;culos modernos y bien cuidados para garantizar la protecci&oacute;n de nuestros pasajeros en todo momento. Nuestra prioridad es proporcionar una experiencia de viaje placentera y libre de estr&eacute;s, permiti&eacute;ndote disfrutar al m&aacute;ximo de tus vacaciones en la Riviera Maya.</p>
                <p>Adem&aacute;s de nuestra reputaci&oacute;n como una empresa confiable y segura, nos enorgullece ofrecer tarifas competitivas que se adaptan a cualquier presupuesto. Con Tulum Airport Cab, no solo obtienes un servicio de alta calidad, sino que tambi&eacute;n disfrutas de los precios m&aacute;s bajos del mercado para tus traslados en la Riviera Maya. &iexcl;Conf&iacute;a en nosotros para llevarte de manera segura, c&oacute;moda y asequible a cualquier destino que elijas en la hermosa Riviera Maya!</p>
            @endif
        </div>
    </div>

    <div class="bg_blue_one">
        <div class="container content_one">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Advantages of Private Transfers from Tulum Airport to the Riviera Maya</h2>
                    <p>Booking a private transfer service from Tulum Airport to the Riviera Maya offers a unique experience of comfort, convenience, and tranquility for your journey. Here's why choosing a private transfer is the ideal option:</p>
                @else
                    <h2>Ventajas de los Traslados Privados desde el Aeropuerto de Tulum a la Riviera Maya</h2>
                    <p>Reservar un servicio de traslado privado desde el Aeropuerto de Tulum a la Riviera Maya ofrece una experiencia única de comodidad, confort y tranquilidad para tu viaje. Aquí te explicamos por qué elegir un traslado privado es la opción ideal:</p>
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
                            <p>With a private transfer, you'll enjoy an experience tailored to your schedule and individual preferences, ensuring a custom-made journey within the Riviera Maya.</p>
                        @else
                            <p>Experiencia Personalizada</p>
                            <p>Con un traslado privado, disfrutarás de una experiencia adaptada a tu horario y preferencias individuales, garantizando un viaje a medida dentro de la Riviera Maya.</p>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#standing"></use></svg>
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Efficiency and Punctuality</p>
                            <p>Private transfers prioritize your time, ensuring timely departures and arrivals from Tulum Airport to any destination in the Riviera Maya, optimizing your itinerary and avoiding unnecessary waits.</p>
                        @else
                            <p>Eficiencia y Puntualidad</p>
                            <p>Los traslados privados priorizan tu tiempo, asegurando salidas y llegadas puntuales desde el Aeropuerto de Tulum hacia cualquier destino en la Riviera Maya, optimizando tu itinerario y evitando esperas innecesarias.</p>
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
                            <p>Traveling in a private vehicle provides you with space and privacy to relax and rest throughout the beautiful journey through the Riviera Maya, without distractions or interruptions.</p>
                        @else
                            <p>Comodidad y Privacidad</p>
                            <p>Viajar en un vehículo privado te brinda espacio y privacidad para relajarte y descansar durante todo el trayecto por la hermosa Riviera Maya, sin distracciones ni interrupciones.</p>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="icon">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#private"></use></svg>
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Safety</p>
                            <p>Private transfer services focus on your safety, providing professional and trained drivers who ensure safe navigation through all routes within the Riviera Maya, from Tulum Airport to your desired destination.</p>
                        @else
                            <p>Seguridad</p>
                            <p>Los servicios de traslado privado se centran en tu seguridad, proporcionando conductores profesionales y capacitados que garantizan una navegación segura por todas las rutas dentro de la Riviera Maya, desde el Aeropuerto de Tulum hasta tu destino deseado.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_two">
        <div class="left">
            @if(app()->getLocale() == "en")
                <h2>Discover Cancun International Airport</h2>
                <p>Located on the beautiful Caribbean coast of Mexico, Cancun International Airport is a unique gateway to the fascinating region of the Riviera Maya. This airport, although smaller in size compared to other nearby airports like Cancun's, offers a peaceful and convenient travel experience for those wishing to explore the natural and cultural wonders of the area.</p>
                <p>Despite its smaller size, Cancun International Airport boasts modern facilities and basic services to meet travelers' needs. Its terminals are designed to provide a smooth and hassle-free experience from the moment you arrive until you depart for your final destination.</p>
                <p>One of the main advantages of Cancun International Airport is its strategic location, allowing quick and easy access to numerous points of interest in the Riviera Maya. From here, travelers can explore the beautiful beaches of Tulum, visit the ancient Mayan ruins of Cob&aacute;, or venture into the stunning natural reserves of the region.</p>
                <p>In addition to being a point of arrival for those seeking to discover the beauty of the Riviera Maya, Cancun International Airport also offers a variety of services to ensure passengers' comfort. From car rental and transportation services to restaurant options and duty-free shops, the airport is equipped to cater to the needs of all travelers passing through its doors.</p>
            @else
                <h2>Descubre el Aeropuerto Internacional de Cancún</h2>
                <p>El Aeropuerto Internacional de Tulum, ubicado en la hermosa costa del Caribe mexicano, es una puerta de entrada &uacute;nica a la fascinante regi&oacute;n de la Riviera Maya. Este aeropuerto, aunque de menor tama&ntilde;o en comparaci&oacute;n con otros aeropuertos cercanos como el de Canc&uacute;n, ofrece una experiencia de viaje tranquila y conveniente para aquellos que desean explorar las maravillas naturales y culturales de la zona.</p>
                <p>A pesar de su tama&ntilde;o m&aacute;s reducido, el Aeropuerto de Tulum cuenta con instalaciones modernas y servicios b&aacute;sicos para satisfacer las necesidades de los viajeros. Sus terminales est&aacute;n dise&ntilde;adas para ofrecer una experiencia fluida y sin complicaciones desde el momento en que llegas hasta que partes hacia tu destino final.</p>
                <p>Una de las principales ventajas del Aeropuerto de Tulum es su ubicaci&oacute;n estrat&eacute;gica, que permite un acceso r&aacute;pido y f&aacute;cil a numerosos destinos de inter&eacute;s en la Riviera Maya. Desde aqu&iacute;, los viajeros pueden explorar las hermosas playas de Tulum, visitar las antiguas ruinas mayas de Cob&aacute; o aventurarse en las impresionantes reservas naturales de la regi&oacute;n.</p>
                <p>Adem&aacute;s de ser un punto de llegada para aquellos que buscan descubrir la belleza de la Riviera Maya, el Aeropuerto de Tulum tambi&eacute;n ofrece una variedad de servicios para garantizar la comodidad de los pasajeros. Desde alquiler de coches y servicios de transporte hasta opciones de restaurantes y tiendas duty-free, el aeropuerto est&aacute; equipado para atender las necesidades de todos los viajeros que pasan por sus puertas.</p>
            @endif
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/home/general-client.webp" type="image/webp" />
                <img src="/assets/img/home/general-client.jpg" alt="{{ __('website/home.banner_how_to_get_alt') }}" title="{{ __('website/home.banner_how_to_get_title') }}" loading="lazy" width="352" height="258" />
            </picture>            
        </div>
    </div>

    <div class="container content_three">
        <div class="top">
            @if(app()->getLocale() == "en")
                <h2>Transportation Rates at Tulum Airport</h2>
                <p>Explore our competitive pricing options for your journey from Cancun Airport, ensuring affordability without compromising quality or comfort.</p>
            @else
                <h2>Tarifas de transporte en el Aeropuerto de Tulum </h2>
                <p>Explora nuestras opciones de precios competitivos para tu viaje desde el Aeropuerto de Cancún, garantizando la asequibilidad sin comprometer la calidad o la comodidad.</p>
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
                    <h2>What Our Customers Say About Our Tulum Airport Transfer Service</h2>
                    <p>Join the chorus of satisfied travelers who have discovered the unparalleled service of Tulum Airport Cab and allow us to elevate your journey to new heights of comfort and satisfaction.</p>
                @else
                    <h2>Lo que dicen nuestros clientes sobre nuestro de traslado del Aeropuerto de Tulum</h2>
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
                                <p>Booking with Tulum Airport Cab was the best decision I made for my trip to Tulum. The private transfer was incredibly convenient and our driver, Carlos, was friendly and professional. The luxury service truly exceeded my expectations and I will definitely use them again on my next visit to Mexico.</p>
                            @else
                                <p>Reservar con Tulum Airport Cab fue la mejor decisión que tomé para mi viaje a Tulum. El traslado privado fue increíblemente conveniente y nuestro conductor, Carlos, fue amable y profesional. El servicio de lujo realmente superó mis expectativas y definitivamente los usaré de nuevo en mi próxima visita a México.</p>
                            @endif
                        </div>
                    </div>
                    <div>
                        <picture>
                            <source srcset="/assets/img/reviews/2.webp" type="image/webp" />
                            <img src="/assets/img/reviews/2.jpg" alt="{{ __('website/home.comment_title',['name' => 'Karla J.']) }}" title="{{ __('website/home.comment_title',['name' => 'Karla J.']) }}" loading="lazy" width="60" height="60" />
                        </picture>                        
                        <div>
                            <p>Karla J. <span>4.5</span></p>
                            @if(app()->getLocale() == "en")
                                <p>I can't recommend Tulum Airport Cab enough! From the moment we landed at Tulum Airport, everything was perfect. Our private transfer was comfortable and stress-free. Communication with the team was excellent, and they were very accommodating with our schedule changes. Thank you for making our trip seamless!.</p>
                            @else
                                <p>"¡No puedo recomendar Tulum Airport Cab lo suficiente! Desde el momento en que aterrizamos en el Aeropuerto de Tulum, todo fue perfecto. Nuestro traslado privado fue cómodo y sin estrés. La comunicación con el equipo fue excelente y fueron muy complacientes con nuestros cambios de horario. ¡Gracias por hacer que nuestro viaje fuera sin problemas!.</p>
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
                                <p>My friends and I opted for the small group service with Tulum Airport Cab, and it was perfect for our needs. The vehicle was clean and comfortable, and our driver, Juan, was fantastic. He even provided us with great restaurant and activity recommendations in Tulum. Overall, a fantastic experience from start to finish.</p>
                            @else
                                <p>Mis amigos y yo optamos por el servicio de grupos pequeños con Tulum Airport Cab, y fue perfecto para nuestras necesidades. El vehículo estaba limpio y cómodo, y nuestro conductor, Juan, fue fantástico. Incluso nos proporcionó excelentes recomendaciones de restaurantes y actividades en Tulum. En general, una experiencia fantástica de principio a fin.</p>
                            @endif
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="container content_five">
        <div class="left faqs_section">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>FAQ's from our Customers</h2>
                    <p>Might  be this questions could aswer your doubts</p>
                @else
                    <h2>FAQ's de nuestros clientes</h2>
                    <p>Puede que estas preguntas respondan a sus dudas</p>
                @endif
            </div>
            <div class="bottom">
                @if(app()->getLocale() == "en")
                    <div>
                        <h3>What are the transportation options available from Tulum Airport to any destination in the Riviera Maya?</h3>
                        <div>
                            <p>The transportation options from Tulum Airport to any destination in the Riviera Maya can vary depending on the traveler's needs and preferences. Generally, you can find private transfer services, taxis, buses, and car rentals. Private transfer services are often a popular choice for those seeking comfort and convenience, as they offer direct transportation from the airport to the desired destination without the need for additional stops.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What services does the transfer service from Tulum Airport to the Riviera Maya offer?</h3>
                        <div>
                            <p>Transfer services from Tulum Airport to the Riviera Maya come with a variety of amenities. Tulum Airport Cab includes in its private transfers: modern and comfortable vehicles, airport assistance to receive passengers, private transfer, child seats, and the possibility of making stops at tourist points of interest along the way.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What is the average travel time from Tulum Airport to popular destinations in the Riviera Maya?</h3>
                        <div>
                            <p>The average travel time from Tulum Airport to popular destinations in the Riviera Maya can vary depending on the distance and traffic conditions. However, generally, travel time can range from 30 minutes to 2 hours, depending on the specific location of the destination within the Riviera Maya.</p>
                        </div>
                    </div>
                    <div>
                        <h3>Are private or shared transfers offered from Tulum Airport to the Riviera Maya?</h3>
                        <div>
                            <p>Yes, both private and shared transfers are offered from Tulum Airport to the Riviera Maya. Private transfers offer the advantage of having an exclusive vehicle for the traveler or group of travelers, while shared transfers allow sharing the vehicle with other passengers with similar destinations, which can result in a lower cost but with longer waiting times and less comfort.</p>
                        </div>
                    </div>
                    <div>
                        <h3>How can I book a transfer service from Tulum Airport to my destination in the Riviera Maya?</h3>
                        <div>
                            <p>To book a transfer service from Tulum Airport to a destination in the Riviera Maya, you can do so through the Tulum Airport Cab website. You will need to provide information such as the date and time of the transfer, the number of passengers, the pick-up location, and the final destination, as well as complete the payment process.</p>
                        </div>
                    </div>
                    <div>
                        <h3>Are there transfer options for large groups from Tulum Airport to the Riviera Maya?</h3>
                        <div>
                            <p>Yes, there are transfer options for large groups from Tulum Airport to the Riviera Maya. Tulum Airport Cab offers vehicles with greater capacity, such as Crafter-type vans, which can accommodate numerous groups of passengers. Additionally, we have a large fleet that can meet any travel needs. These options are usually ideal for families, groups of friends, or group trips.</p>
                        </div>
                    </div>
                    <div>
                        <h3>Are transfers from Tulum Airport to the Riviera Maya available 24 hours a day?</h3>
                        <div>
                            <p>Yes, our transfer service from Tulum Airport to the Riviera Maya is available 24 hours a day, 7 days a week, to accommodate the needs of travelers arriving at different times. However, it is advisable to check the availability of the service for the specific travel schedule and make reservations in advance when necessary.</p>
                        </div>
                    </div>
                    <div>
                        <h3>Are additional services offered, such as stops at tourist spots, during the transfer from Tulum Airport to the Riviera Maya?</h3>
                        <div>
                            <p>Yes, some of our transfer services from Tulum Airport to the Riviera Maya may offer the option of making stops at tourist spots or points of interest along the way, depending on the passenger's preferences and time availability. This may include visits to archaeological ruins, beaches, cenotes, or any other destination of interest along the route to the final destination. Speak with an advisor for more information.</p>
                        </div>
                    </div>
                    <div>
                        <h3>What are the approximate rates for transfers from Tulum Airport to different destinations in the Riviera Maya?</h3>
                        <div>
                            <p>The rates for transfers from Tulum Airport to different destinations in the Riviera Maya can vary depending on various factors, such as distance, type of service (private or shared), time of year, and demand. Rates are usually set per trip or per vehicle and can range from a few dollars to higher amounts, depending on the distance and amenities offered in the service. It is advisable to consult with an advisor from our company or get a quote on our website for specific information about rates and make an early reservation to ensure availability and get the best possible rates.</p>
                        </div>
                    </div>
                @else
                    <div>
                        <h3>¿Cuáles son las opciones de transporte disponibles desde el Aeropuerto de Tulum a cualquier destino en la Riviera Maya?</h3>
                        <div>
                            <p>Las opciones de transporte desde el Aeropuerto de Tulum hacia cualquier destino en la Riviera Maya pueden variar según las necesidades y preferencias del viajero. Generalmente, se pueden encontrar servicios de traslado privado, taxis, autobuses y alquiler de coches. Los servicios de traslado privado suelen ser una opción popular para aquellos que buscan comodidad y conveniencia, ya que ofrecen transporte directo desde el aeropuerto hasta el destino deseado, sin necesidad de hacer paradas adicionales.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Qué servicios ofrece el servicio de traslados desde el Aeropuerto de Tulum hacia la Riviera Maya?</h3>
                        <div>
                            <p>Los servicios de traslados desde el Aeropuerto de Tulum hacia la Riviera Maya tienen una variedad de comodidades . Tulum AIrport Cab incluye en sus traslados privados: vehículos modernos y cómodos, asistencia en el aeropuerto para recibir a los pasajeros, traslado privado, asientos para niños, y la posibilidad de realizar paradas en puntos de interés turístico a lo largo del camino.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuál es el tiempo promedio de viaje desde el Aeropuerto de Tulum hasta destinos populares en la Riviera Maya?</h3>
                        <div>
                            <p>El tiempo promedio de viaje desde el Aeropuerto de Tulum hacia destinos populares en la Riviera Maya puede variar dependiendo de la distancia y las condiciones del tráfico. Sin embargo, en general, el tiempo de viaje puede oscilar entre 30 minutos y 2 horas, dependiendo de la ubicación específica del destino dentro de la Riviera Maya.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Se ofrecen traslados privados o compartidos desde el Aeropuerto de Tulum hacia la Riviera Maya?</h3>
                        <div>
                            <p>Sí, se ofrecen tanto traslados privados como compartidos desde el Aeropuerto de Tulum hacia la Riviera Maya. Los traslados privados ofrecen la ventaja de tener un vehículo exclusivo para el viajero o grupo de viajeros, mientras que los traslados compartidos permiten compartir el vehículo con otros pasajeros que tienen destinos similares, lo que puede resultar en un costo más económico, pero con un tiempo mayor de espera y menos comodidad.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cómo puedo reservar un servicio de traslado desde el Aeropuerto de Tulum a mi destino en la Riviera Maya?</h3>
                        <div>
                            <p>Para reservar un servicio de traslado desde el Aeropuerto de Tulum a un destino en la Riviera Maya,se puede hacer a través del sitio web de Tulum Airport Cab, se requerirá proporcionar información como la fecha y hora del traslado, el número de pasajeros, la ubicación de recogida y el destino final, así como completar el proceso de pago.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Existen opciones de traslado para grupos grandes desde el Aeropuerto de Tulum hacia la Riviera Maya?</h3>
                        <div>
                            <p>Sí, existen opciones de traslado para grupos grandes desde el Aeropuerto de Tulum hacia la Riviera Maya. Tulum Airport Cab ofrece vehículos de mayor capacidad, como vans tipo crafter que pueden acomodar a grupos numerosos de pasajeros, además de que contamos con una gran flota que puede satisfacer cualquier necesidad de viaje. Estas opciones suelen ser ideales para familias, grupos de amigos o viajes en grupo.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Los traslados desde el Aeropuerto de Tulum hacia la Riviera Maya están disponibles las 24 horas del día?</h3>
                        <div>
                            <p>Sí, nuestro servicio de traslado desde el Aeropuerto de Tulum hacia la Riviera Maya está disponible las 24 horas del día, los 7 días de la semana, para adaptarse a las necesidades de los viajeros que llegan en diferentes horarios. Sin embargo, es recomendable verificar la disponibilidad del servicio para el horario específico del viaje y realizar la reserva con anticipación cuando sea necesario.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Se ofrecen servicios adicionales, como paradas en puntos turísticos, durante el traslado desde el Aeropuerto de Tulum hacia la Riviera Maya?</h3>
                        <div>
                            <p>Sí, algunos de nuestros servicios de traslado desde el Aeropuerto de Tulum hacia la Riviera Maya pueden ofrecer la opción de realizar paradas en puntos turísticos o lugares de interés a lo largo del camino, dependiendo de las preferencias del pasajero y la disponibilidad del tiempo. Esto puede incluir visitas a ruinas arqueológicas, playas, cenotes o cualquier otro destino de interés en la ruta hacia el destino final, habla con un asesor para más información.</p>
                        </div>
                    </div>
                    <div>
                        <h3>¿Cuáles son las tarifas aproximadas para los traslados desde el Aeropuerto de Tulum a diferentes destinos en la Riviera Maya?</h3>
                        <div>
                            <p>Las tarifas para los traslados desde el Aeropuerto de Tulum a diferentes destinos en la Riviera Maya pueden variar según diversos factores, como la distancia, el tipo de servicio (privado o compartido), la temporada del año y la demanda. Las tarifas suelen establecerse por trayecto o por vehículo y pueden oscilar desde unos pocos dólares hasta cifras más elevadas, dependiendo de la distancia y las comodidades ofrecidas en el servicio. Es recomendable consultar con un asesor de nuestra empresa o cotizar en nuestra pagina para obtener información específica sobre las tarifas y realizar una reserva anticipada para garantizar disponibilidad y obtener las mejores tarifas posibles.</p>
                        </div>
                    </div>
                @endif
            </div>            
        </div>
        <div class="right">
            <picture>
                <source srcset="/assets/img/faqs/faqs-client.webp" type="image/webp" />
                <img src="/assets/img/faqs/faqs-client.jpg" alt="{{ __('website/home.faqs_image_title') }}" title="{{ __('website/home.faqs_image_title') }}" loading="lazy" width="60" height="60" />
            </picture>
        </div>
    </div>

    @include('layout.footer.general')
@endsection