@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/services.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/services.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="parallax-container">
        <div class="container">
            @if(app()->getLocale() == "es")
                <h1>SERVICIOS</h1>
            @else
                <h1>SERVICES</h1>
            @endif
        </div>
    </div>

    <div class="container offer-items">
        <div class="top">
            @if(app()->getLocale() == "es")
                <h3>Taxi Riviera Maya le ofrece</h3>
            @else
                <h3>Why Choose Taxi Riviera Maya</h3>
            @endif            
        </div>
        <div class="bottom">
            @if(app()->getLocale() == "es")
                <div class="left">
                    <p>Nuestros servicios de traslados son ideales para parejas, familias, grupos, y ejecutivos empresariales, incluso para cualquier persona que desee llegar a su destino sin problemas, sin espera, sin paradas, sin compartir con otros, es por eso que <strong>nosotros somos su mejor opción.</strong></p>
                </div>
                <div class="right">
                    Reserve con confianza en nuestro sitio web o enviando un mensaje a nuestro Teléfono Móvil de Reservas con WhatsApp, Messenger o por teléfono dentro de Mexico
                </div>
            @else
                <div class="left">
                    <p>Whether you're embarking on a vacation or a business trip, T is your go-to partner for reliable, certified, and customer-focused transportation services. Our goal is to ensure your journey from the airport to your destination is not just a transfer but an enjoyable and memorable part of your travel experience.</p>
                </div>
                <div class="right">
                    Embark on a journey with Taxi Riviera Maya, where professionalism, friendliness, and top-notch services come together to make every ride with us a pleasant and satisfying adventure in the stunning Riviera Maya. Book with us and experience the difference in transportation excellence!
                </div>
            @endif
        </div>
    </div>

    <div class="gray">
        <div class="container vehicle-items">
            <div class="top">
                @if(app()->getLocale() == "es")
                    <h2>OFRECEMOS...</h2>
                    <p>Taxi Riviera Maya - Quintana Roo</p>
                @else
                    <h2>Our Services: Explore Tailored Transportation Options with Taxi Riviera Maya</h2>
                    <p>Taxi Riviera Maya - Quintana Roo</p>
                @endif
            </div>
            <div class="bottom">
                <div class="left">
                    <picture>
                        <source srcset="/assets/img/services/transporter-taxi-riviera-maya.webp" type="image/webp">
                        <img src="/assets/img/services/transporter-taxi-riviera-maya.jpg" alt="Taxi Riviera Maya" title="Taxi Riviera Maya" loading="lazy" width="573" height="374">
                    </picture>
                </div>
                <div class="right">
                    @if(app()->getLocale() == "es")
                        <ul>
                            <li>Precios en USD o MXN</li>
                            <li>Servicios de transporte y traslados más seguro del Aeropuerto Internacional de Cancún a cualquier hotel de Cancún y la Riviera Maya.</li>
                            <li>Traslados a Cancun Centro de Convenciones desde todos los puntos de Riviera Maya - Traslados Sencillo o Redondo - Lujo o Regular.</li>
                            <li>Traslados hacia y desde el Aeropuerto de Cancún para vuelos nacionales e internacionales y a todos los destinos de la Riviera Maya.</li>
                            <li>Traslados a los tours y actividades más emocionantes de la Riviera Maya como Chichen Itza, Xcaret, Xel-Ha.</li>
                            <li>Bodas o eventos especiales? - Viaje de lujo o en grupo sin preocuparse del trafico o estacionamientos.</li>
                            <li>Viaje de negocios? - Viaje de lujo como Ejecutivo a todas sus reuniones.</li>
                            <li>Seguimos vuelos en tiempo real y responder en consecuencia para asegurar su transferencia exitosa.</li>
                            <li>Somos un servicio de traslados autorizado por los autoridades del Aeropuerto Cancun ASUR.</li>
                        </ul>
                    @else
                        <p>At Taxi Riviera Maya, we take pride in offering a range of transportation services designed to cater to the unique needs of every traveler. Our array of options ensures you find the perfect solution for your transfer in the Riviera Maya.</p>
                        <p><strong>Hotel-to-Hotel Transfer:&nbsp;</strong>Enjoy a seamless transition between hotels with our specialized transfer service. With punctuality and comfort, we bring the essence of Taxi Riviera Maya directly to your destination.</p>
                        <p><strong>Private Transportation:&nbsp;</strong>Experience privacy and luxury with our private transportation service. A dedicated driver awaits at the airport to take you directly to your destination, without any additional stops.</p>
                        <p><strong>Group Transfers:&nbsp;</strong>Perfect for group trips, our group transfer service ensures everyone arrives together and comfortably at their destination in the Riviera Maya.</p>
                        <p><strong>Transfer to Tourist Attractions:&nbsp;</strong>Discover the wonders of the Riviera Maya in comfort. We offer direct transfers to tourist attractions, ensuring your adventure begins from the moment you step on board.</p>
                        <p><strong>Open-Service:&nbsp;</strong>Want to explore the region at your own pace? With our open-service, you can use the van unlimitedly for a specified time, giving you the freedom to uncover the Riviera Maya on your terms.</p>
                        <p><strong>Wedding Transfers:&nbsp;</strong>Celebrate your special day in style. Our wedding transfer service ensures that the bride, groom, and guests arrive with elegance and punctuality at the ceremony venue.&nbsp;</p>
                        <p><strong>Corporate Events and Conferences:&nbsp;</strong>We facilitate transportation for corporate events and conferences. Whether for business meetings or conferences, our team handles logistics to ensure a seamless experience.</p>
                        <p>At Taxi Riviera Maya, we are committed to providing transportation options that suit your needs. Book with us and discover the comfort, reliability, and exceptional service that sets us apart in the Riviera Maya.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container badges-items">
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#drivers"></use></svg>
            </div>
            @if(app()->getLocale() == "es")
                <h3>OPERADORES CALIFICADOS</h3>
                <p>Nuestros conductores son experimentados y responsables con licencias federales</p>
            @else
                <h3>QUALIFIED OPERATORS</h3>
                <p>Our drivers bring a wealth of experience and responsibility, holding federal licenses to ensure your safety and comfort throughout your journey.</p>
            @endif
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#van"></use></svg>
            </div>
            @if(app()->getLocale() == "es")
                <h3>VEHÍCULOS DE CALIDAD</h3>
                <p>Nuestras unidades tienen un estricto mantanimiento en nuestro propio taller</p>
            @else
                <h3>QUALITY VEHICLES</h3>
                <p>Our fleet undergoes strict maintenance in our dedicated workshop, ensuring that each vehicle meets the highest standards of quality and safety.</p>
            @endif
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#world"></use></svg>
            </div>
            @if(app()->getLocale() == "es")
                <h3>RASTREO GPS</h3>
                <p>Todos nuestros vehículos están equipados con localización por GPS en tiempo real para garantizar su seguridad</p>
            @else
                <h3>GPS TRACKING</h3>
                <p>For added security, all our vehicles are equipped with real-time GPS tracking, allowing us to monitor your journey and promptly respond to any needs that may arise.</p>
            @endif
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#cash"></use></svg>
            </div>
            @if(app()->getLocale() == "es")
                <h3>PAGOS EN FECTIVO</h3>
                <p>Aceptamos pagos en efectivo llegando al Aeropuerto con nuestros agentes</p>
            @else
                <h3>CASH PAYMENTS</h3>
                <p>Convenience is paramount. You can make cash payments upon arrival at the airport by coordinating with our agents, providing you with flexibility and ease of transaction.</p>
            @endif
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#like"></use></svg>
            </div>
            @if(app()->getLocale() == "es")
                <h3>PAGOS EN OXXO</h3>
                <p>Aceptamos pagos a tarjeta en cualquier OXXO de México</p>
            @else
                <h3>STRIPE PAYMENTS</h3>
                <p>We offer the convenience of card payments with stripe secure payments, providing you with a widely accessible and secure payment option.</p>
            @endif
        </div>
        <div>
            <div>
                <svg width="50" height="50"><use xlink:href="/assets/img/svg/services.svg#paypal"></use></svg>
            </div>
            @if(app()->getLocale() == "es")
                <h3>PAGOS CON PAYPAL</h3>
                <p>Aceptamos pagos con PayPal con acreditación inmediata</p>
            @else
                <h3>PAYPAL PAYMENTS</h3>
                <p>Embracing modern payment solutions, we accept PayPal payments for immediate and secure transactions, adding a layer of flexibility to your payment choices.</p>
            @endif
        </div>
    </div>

    @include('layout.footer.general')
@endsection