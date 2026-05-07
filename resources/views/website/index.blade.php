@php
    use App\Traits\PricesTrait;
@endphp

@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="preload" as="style">
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="stylesheet">
@endpush

@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
    <x-analytics/>
@endpush

@section('content')
    @include('layout.header.general', ['link' => \App\Traits\GeneralTrait::getAlternate($seo), 'active' => 1])

    <div class="banner">
        <picture>
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.webp" type="image/webp">
            <source media="(min-width: 415px)" srcset="/assets/img/banners/home/home-desktop-{{ app()->getLocale() }}.png" type="image/png">
            <source srcset="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.webp" type="image/webp">
            <img src="/assets/img/banners/home/home-mobile-{{ app()->getLocale() }}.png" alt="Taxi Dominicana" title="Taxi Dominicana" width="2160" height="400">
        </picture>
    </div>

    <div class="container main-content">
        <div class="left">
            <x-bookingbox/>
        </div>

        <div class="right">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>

            @if(app()->getLocale() == "en")
                <h1>Taxi Dominicana</h1>
                <h2>Private Transportation Services in Dominican Republic</h2>

                <p>Taxi Dominicana provides safe, reliable and comfortable private transportation for travelers visiting the Dominican Republic. We specialize in airport transfers, hotel transportation and private rides to the most popular destinations in the country.</p>

                <p>Our service is designed for travelers who want a smooth experience from the moment they arrive. With professional drivers, clean vehicles and fixed rates, we make your transfer simple, secure and stress-free.</p>

                <p>Whether you are arriving at Punta Cana Airport, traveling to your resort, visiting another city or booking transportation for a group, Taxi Dominicana is ready to take you there with comfort and confidence.</p>
            @else
                <h1>Taxi Dominicana</h1>
                <h2>Servicios de transporte privado en República Dominicana</h2>

                <p>Taxi Dominicana ofrece transporte privado seguro, confiable y cómodo para viajeros que visitan República Dominicana. Nos especializamos en traslados desde aeropuertos, transporte a hoteles y viajes privados hacia los destinos más importantes del país.</p>

                <p>Nuestro servicio está pensado para quienes desean una experiencia tranquila desde el momento en que llegan. Con conductores profesionales, vehículos limpios y tarifas claras, hacemos que tu traslado sea simple, seguro y sin estrés.</p>

                <p>Ya sea que llegues al Aeropuerto de Punta Cana, viajes a tu resort, visites otra ciudad o necesites transporte para un grupo, Taxi Dominicana está listo para llevarte con comodidad y confianza.</p>
            @endif
        </div>
    </div>

    <div class="bg_blue_one">
        <div class="container content_one">
            <div class="top">
                @if(app()->getLocale() == "en")
                    <h2>Why Choose Taxi Dominicana?</h2>
                    <p>We focus on safety, punctuality and personal service so every ride feels easy from start to finish.</p>
                @else
                    <h2>¿Por qué elegir Taxi Dominicana?</h2>
                    <p>Nos enfocamos en seguridad, puntualidad y atención personalizada para que cada viaje sea cómodo de principio a fin.</p>
                @endif
            </div>

            <div class="bottom">
                <div>
                    <div class="icon">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#booking"></use></svg>
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Personalized Service</p>
                            <p>Private transportation adapted to your schedule, destination and travel needs.</p>
                        @else
                            <p>Servicio personalizado</p>
                            <p>Transporte privado adaptado a tu horario, destino y necesidades de viaje.</p>
                        @endif
                    </div>
                </div>

                <div>
                    <div class="icon">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#standing"></use></svg>
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Punctuality</p>
                            <p>We value your time and coordinate every transfer to make your trip easier.</p>
                        @else
                            <p>Puntualidad</p>
                            <p>Valoramos tu tiempo y coordinamos cada traslado para que tu viaje sea más fácil.</p>
                        @endif
                    </div>
                </div>

                <div>
                    <div class="icon">
                        <svg width="25" height="25"><use xlink:href="/assets/img/svg/icons.svg#comfort"></use></svg>
                    </div>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>Comfort</p>
                            <p>Clean and comfortable vehicles for couples, families and groups.</p>
                        @else
                            <p>Comodidad</p>
                            <p>Vehículos limpios y cómodos para parejas, familias y grupos.</p>
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
                            <p>Professional drivers and reliable transportation throughout your trip.</p>
                        @else
                            <p>Seguridad</p>
                            <p>Conductores profesionales y transporte confiable durante todo tu viaje.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_two">
        <div class="left">
            @if(app()->getLocale() == "en")
                <h2>Transportation for Every Trip</h2>
                <p>Taxi Dominicana offers private airport transfers, hotel pickups, resort transportation and group transfers across the Dominican Republic.</p>
                <p>Our main service area includes Punta Cana, Bávaro, Uvero Alto, Bayahíbe, La Romana, Juan Dolio, Boca Chica, Santo Domingo and other popular destinations.</p>
                <p>From short airport rides to long-distance private transportation, our goal is to provide a simple, safe and comfortable service for every traveler.</p>
            @else
                <h2>Transporte para cada tipo de viaje</h2>
                <p>Taxi Dominicana ofrece traslados privados desde aeropuertos, recogidas en hoteles, transporte a resorts y servicios para grupos en República Dominicana.</p>
                <p>Nuestra zona principal de servicio incluye Punta Cana, Bávaro, Uvero Alto, Bayahíbe, La Romana, Juan Dolio, Boca Chica, Santo Domingo y otros destinos populares.</p>
                <p>Desde traslados cortos hasta viajes privados de larga distancia, nuestro objetivo es ofrecer un servicio simple, seguro y cómodo para cada viajero.</p>
            @endif
        </div>

        <div class="right">
            <picture>
                <source srcset="/assets/img/home/general-client.webp" type="image/webp">
                <img src="/assets/img/home/general-client.jpg" alt="Taxi Dominicana private transportation" title="Taxi Dominicana private transportation" loading="lazy" width="352" height="258">
            </picture>
        </div>
    </div>

    <div class="container content_three">
        <div class="top">
            @if(app()->getLocale() == "en")
                <h2>Private Transfer Rates</h2>
                <p>Clear transportation rates by destination and passenger capacity.</p>
            @else
                <h2>Tarifas de traslados privados</h2>
                <p>Tarifas claras por destino y capacidad de pasajeros.</p>
            @endif
        </div>

        <div class="bottom">
            @if(app()->getLocale() == "es")
                <table class="table table-striped table-responsive">
                    <caption>Tarifas de Taxi Dominicana. Los precios pueden variar según temporada.</caption>
                    <thead>
                        <tr>
                            <th scope="col" class="destino">Destino</th>
                            <th>1 a 6 pasajeros</th>
                            <th>7 a 12 pasajeros</th>
                            <th>13 a 21 pasajeros</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Bávaro ⇄ PUJ</strong></td>
                            <td data-label="1 a 6 pasajeros">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="7 a 12 pasajeros">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="13 a 21 pasajeros">${{ PricesTrait::price(1, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Uvero Alto ⇄ PUJ</strong></td>
                            <td data-label="1 a 6 pasajeros">${{ PricesTrait::price(2, 1, 'USD') }} USD</td>
                            <td data-label="7 a 12 pasajeros">${{ PricesTrait::price(2, 2, 'USD') }} USD</td>
                            <td data-label="13 a 21 pasajeros">${{ PricesTrait::price(2, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bayahíbe ⇄ PUJ</strong></td>
                            <td data-label="1 a 6 pasajeros">${{ PricesTrait::price(3, 1, 'USD') }} USD</td>
                            <td data-label="7 a 12 pasajeros">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="13 a 21 pasajeros">${{ PricesTrait::price(3, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Casa de Campo / La Romana ⇄ PUJ</strong></td>
                            <td data-label="1 a 6 pasajeros">${{ PricesTrait::price(4, 1, 'USD') }} USD</td>
                            <td data-label="7 a 12 pasajeros">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="13 a 21 pasajeros">${{ PricesTrait::price(4, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Juan Dolio ⇄ PUJ</strong></td>
                            <td data-label="1 a 6 pasajeros">${{ PricesTrait::price(5, 1, 'USD') }} USD</td>
                            <td data-label="7 a 12 pasajeros">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="13 a 21 pasajeros">${{ PricesTrait::price(5, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>AILA / Boca Chica ⇄ PUJ</strong></td>
                            <td data-label="1 a 6 pasajeros">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="7 a 12 pasajeros">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="13 a 21 pasajeros">${{ PricesTrait::price(6, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo ⇄ PUJ</strong></td>
                            <td data-label="1 a 6 pasajeros">${{ PricesTrait::price(7, 1, 'USD') }} USD</td>
                            <td data-label="7 a 12 pasajeros">${{ PricesTrait::price(7, 2, 'USD') }} USD</td>
                            <td data-label="13 a 21 pasajeros">${{ PricesTrait::price(7, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Miches ⇄ PUJ</strong></td>
                            <td data-label="1 a 6 pasajeros">${{ PricesTrait::price(8, 1, 'USD') }} USD</td>
                            <td data-label="7 a 12 pasajeros">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="13 a 21 pasajeros">${{ PricesTrait::price(8, 3, 'USD') }} USD</td>
                        </tr>
                    </tbody>
                </table>
            @else
                <table class="table table-striped table-responsive">
                    <caption>Taxi Dominicana rates. Prices may vary depending on season.</caption>
                    <thead>
                        <tr>
                            <th scope="col" class="destino">Destination</th>
                            <th>1 to 6 passengers</th>
                            <th>7 to 12 passengers</th>
                            <th>13 to 21 passengers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Bávaro ⇄ PUJ</strong></td>
                            <td data-label="1 to 6 passengers">${{ PricesTrait::price(1, 1, 'USD') }} USD</td>
                            <td data-label="7 to 12 passengers">${{ PricesTrait::price(1, 2, 'USD') }} USD</td>
                            <td data-label="13 to 21 passengers">${{ PricesTrait::price(1, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Uvero Alto ⇄ PUJ</strong></td>
                            <td data-label="1 to 6 passengers">${{ PricesTrait::price(2, 1, 'USD') }} USD</td>
                            <td data-label="7 to 12 passengers">${{ PricesTrait::price(2, 2, 'USD') }} USD</td>
                            <td data-label="13 to 21 passengers">${{ PricesTrait::price(2, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Bayahibe ⇄ PUJ</strong></td>
                            <td data-label="1 to 6 passengers">${{ PricesTrait::price(3, 1, 'USD') }} USD</td>
                            <td data-label="7 to 12 passengers">${{ PricesTrait::price(3, 2, 'USD') }} USD</td>
                            <td data-label="13 to 21 passengers">${{ PricesTrait::price(3, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Casa de Campo / La Romana ⇄ PUJ</strong></td>
                            <td data-label="1 to 6 passengers">${{ PricesTrait::price(4, 1, 'USD') }} USD</td>
                            <td data-label="7 to 12 passengers">${{ PricesTrait::price(4, 2, 'USD') }} USD</td>
                            <td data-label="13 to 21 passengers">${{ PricesTrait::price(4, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Juan Dolio ⇄ PUJ</strong></td>
                            <td data-label="1 to 6 passengers">${{ PricesTrait::price(5, 1, 'USD') }} USD</td>
                            <td data-label="7 to 12 passengers">${{ PricesTrait::price(5, 2, 'USD') }} USD</td>
                            <td data-label="13 to 21 passengers">${{ PricesTrait::price(5, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>AILA / Boca Chica ⇄ PUJ</strong></td>
                            <td data-label="1 to 6 passengers">${{ PricesTrait::price(6, 1, 'USD') }} USD</td>
                            <td data-label="7 to 12 passengers">${{ PricesTrait::price(6, 2, 'USD') }} USD</td>
                            <td data-label="13 to 21 passengers">${{ PricesTrait::price(6, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Santo Domingo ⇄ PUJ</strong></td>
                            <td data-label="1 to 6 passengers">${{ PricesTrait::price(7, 1, 'USD') }} USD</td>
                            <td data-label="7 to 12 passengers">${{ PricesTrait::price(7, 2, 'USD') }} USD</td>
                            <td data-label="13 to 21 passengers">${{ PricesTrait::price(7, 3, 'USD') }} USD</td>
                        </tr>
                        <tr>
                            <td><strong>Miches ⇄ PUJ</strong></td>
                            <td data-label="1 to 6 passengers">${{ PricesTrait::price(8, 1, 'USD') }} USD</td>
                            <td data-label="7 to 12 passengers">${{ PricesTrait::price(8, 2, 'USD') }} USD</td>
                            <td data-label="13 to 21 passengers">${{ PricesTrait::price(8, 3, 'USD') }} USD</td>
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
                    <h2>What Our Customers Say About Taxi Dominicana</h2>
                    <p>Travelers choose Taxi Dominicana for reliable service, clear communication and comfortable private transportation.</p>
                @else
                    <h2>Lo que dicen nuestros clientes sobre Taxi Dominicana</h2>
                    <p>Los viajeros eligen Taxi Dominicana por su servicio confiable, comunicación clara y transporte privado cómodo.</p>
                @endif

                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/clients-list.webp" type="image/webp">
                        <img src="/assets/img/reviews/clients-list.jpg" alt="Taxi Dominicana reviews" title="Taxi Dominicana reviews" loading="lazy" width="60" height="60">
                    </picture>
                    <div>
                        @if(app()->getLocale() == "en")
                            <p>4.9 Rating</p>
                            <p>+180 Travelers</p>
                        @else
                            <p>4.9 Calificación</p>
                            <p>+180 Viajeros</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="right">
                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/1.webp" type="image/webp">
                        <img src="/assets/img/reviews/1.jpg" alt="Jennifer S." title="Jennifer S." loading="lazy" width="60" height="60">
                    </picture>
                    <div>
                        <p>Jennifer S. <span>4.5</span></p>
                        @if(app()->getLocale() == "en")
                            <p>Booking with Taxi Dominicana was the best decision for our trip. The private transfer was comfortable, on time and the driver was very professional.</p>
                        @else
                            <p>Reservar con Taxi Dominicana fue la mejor decisión para nuestro viaje. El traslado privado fue cómodo, puntual y el conductor fue muy profesional.</p>
                        @endif
                    </div>
                </div>

                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/2.webp" type="image/webp">
                        <img src="/assets/img/reviews/2.jpg" alt="Karla J." title="Karla J." loading="lazy" width="60" height="60">
                    </picture>
                    <div>
                        <p>Karla J. <span>4.5</span></p>
                        @if(app()->getLocale() == "en")
                            <p>Everything was easy from the airport pickup to the hotel drop-off. Communication was clear and the vehicle was clean and comfortable.</p>
                        @else
                            <p>Todo fue fácil desde la recogida en el aeropuerto hasta la llegada al hotel. La comunicación fue clara y el vehículo estaba limpio y cómodo.</p>
                        @endif
                    </div>
                </div>

                <div>
                    <picture>
                        <source srcset="/assets/img/reviews/3.webp" type="image/webp">
                        <img src="/assets/img/reviews/3.jpg" alt="Sarah W." title="Sarah W." loading="lazy" width="60" height="60">
                    </picture>
                    <div>
                        <p>Sarah W. <span>4.5</span></p>
                        @if(app()->getLocale() == "en")
                            <p>We booked transportation for our group and everything was perfect. The driver was friendly and the ride was smooth from start to finish.</p>
                        @else
                            <p>Reservamos transporte para nuestro grupo y todo fue perfecto. El conductor fue amable y el viaje fue cómodo de principio a fin.</p>
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
                    <h2>Frequently Asked Questions</h2>
                    <p>Answers to common questions about our private transportation services.</p>
                @else
                    <h2>Preguntas frecuentes</h2>
                    <p>Respuestas a dudas comunes sobre nuestros servicios de transporte privado.</p>
                @endif
            </div>

            <div class="bottom">
                @if(app()->getLocale() == "en")
                    <div>
                        <h3>What services does Taxi Dominicana offer?</h3>
                        <div>
                            <p>We offer private airport transfers, hotel transportation, private rides between cities and group transportation in the Dominican Republic.</p>
                        </div>
                    </div>

                    <div>
                        <h3>Do you offer transfers from Punta Cana Airport?</h3>
                        <div>
                            <p>Yes. Punta Cana Airport transfers are one of our main services, with transportation to Bávaro, Uvero Alto, Cap Cana, Bayahibe, La Romana, Santo Domingo and more.</p>
                        </div>
                    </div>

                    <div>
                        <h3>Are the prices fixed?</h3>
                        <div>
                            <p>Yes. Our rates are clear and based on destination and passenger capacity. Prices may vary depending on season or special requests.</p>
                        </div>
                    </div>

                    <div>
                        <h3>Can I book transportation for a group?</h3>
                        <div>
                            <p>Yes. We offer vehicles for small and large groups, including options for 1 to 6, 7 to 12 and 13 to 21 passengers.</p>
                        </div>
                    </div>
                @else
                    <div>
                        <h3>¿Qué servicios ofrece Taxi Dominicana?</h3>
                        <div>
                            <p>Ofrecemos traslados privados desde aeropuertos, transporte a hoteles, viajes privados entre ciudades y transporte para grupos en República Dominicana.</p>
                        </div>
                    </div>

                    <div>
                        <h3>¿Ofrecen traslados desde el Aeropuerto de Punta Cana?</h3>
                        <div>
                            <p>Sí. Los traslados desde el Aeropuerto de Punta Cana son uno de nuestros servicios principales, con transporte hacia Bávaro, Uvero Alto, Cap Cana, Bayahíbe, La Romana, Santo Domingo y más.</p>
                        </div>
                    </div>

                    <div>
                        <h3>¿Las tarifas son fijas?</h3>
                        <div>
                            <p>Sí. Nuestras tarifas son claras y dependen del destino y la capacidad de pasajeros. Los precios pueden variar según temporada o solicitudes especiales.</p>
                        </div>
                    </div>

                    <div>
                        <h3>¿Puedo reservar transporte para un grupo?</h3>
                        <div>
                            <p>Sí. Contamos con opciones para grupos pequeños y grandes, incluyendo transporte para 1 a 6, 7 a 12 y 13 a 21 pasajeros.</p>
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