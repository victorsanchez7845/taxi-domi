@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/hotels/destination.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/hotels/destination.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')    
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="heading">
        <div class="container">
            <div class="top">                
                <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                @if(app()->getLocale() == "es")
                    <h1>Todo lo que debe saber antes de visitar Tulum</h1>
                @else
                    <h1>Everything you need to know before visiting Tulum</h1>
                @endif                
            </div>
        </div>
    </div>

    <div class="container information-clients">
        <div class="left_">
            @if(app()->getLocale() == "es")
                <h2>Información sobre Tulum</h2>
                <p>Tulum, es una joya del Caribe mexicano, cuenta con 10 km de playas v&iacute;rgenes de arena blanca y aguas turquesas. Dividida en dos zonas, el centro de Tulum ofrece alojamiento econ&oacute;mico y un ambiente animado, mientras que la zona hotelera de Tulum alberga hoteles, restaurantes y tiendas de lujo. Entre los lugares de inter&eacute;s cercanos se encuentran Punta Laguna, Laguna Bacalar y la Reserva de Sian Ka'an.</p>
                <p>Explore las playas de Tulum para practicar snorkel y actividades acu&aacute;ticas, deleite con diversas delicias culinarias y eche un vistazo a las boutiques en busca de hallazgos &uacute;nicos. No se pierda las emblem&aacute;ticas ruinas de Tulum y la impresionante Reserva de la Biosfera de Sian Ka'an, repleta de maravillas naturales.</p>
                <h2>¿Cómo llegar a Tulum?</h2>
                <p>Para viajar c&oacute;modamente a Tulum, elija entre opciones como taxis, alquiler de coches, traslados privados o autobuses ADO. Si llega al Aeropuerto Internacional de Canc&uacute;n o al Aeropuerto Internacional de Tulum, opte por un traslado privado a Tulum para mayor comodidad y eficiencia. Tenga en cuenta su itinerario al seleccionar las opciones de transporte, ya sean autobuses ADO para viajes de larga distancia, transporte privado para viajes directos o alquiler de coches para mayor flexibilidad a la hora de moverse en la ciudad.</p>                
                <p>Reserva ahora tu <a href="@lang('link.tulum')" title="Traslado de Cancún a Tulum">Traslado de Cancún a Tulum</a> ¡Descubre la mejor empresa de traslados con Tulum Airport Cab!</p>
            @else
                <h2>Information about Tulum</h2>
                <p>Tulum, a jewel of the Mexican Caribbean, boasts 10 km of pristine white sand beaches and turquoise waters. Divided into two zones, Tulum Town offers budget-friendly accommodations and a bustling atmosphere, while Tulum Beach hosts upscale hotels, restaurants, and shops. Nearby attractions include Punta Laguna, Laguna Bacalar, and the Sian Ka'an Reserve.</p>
                <p>Explore Tulum's beaches for snorkeling and water activities, indulge in diverse culinary delights, and peruse boutiques for unique finds. Don miss the iconic Tulum ruins and the breathtaking Sian Ka'an Biosphere Reserve, brimming with natural wonders.</p>
                <h2>How to get aroun Tulum?</h2>
                <p>For convenient travel within Tulum, choose from options like cabs, car rentals, private transfers, or ADO buses. If arriving at Cancun International Airport or Tulum International Airport opt for a Tulum Private Transfer for comfort and efficiency. Consider your itinerary when selecting transportation options, whether it's ADO buses for long-distance travel, private transportation for direct trips, or car rentals for flexibility.</p>        
                <p>Book your <a href="@lang('link.tulum')" title="Transfer to Tulum">Transfer to Tulum</a> now! Discover the best transfer company with Tulum Airport Cab!</p>
            @endif
        </div>
        <div class="right_">
            <picture>
                <source srcset="/assets/img/hotels/client.webp" type="image/webp" />
                <img src="/assets/img/hotels/client.jpg" alt="Taxi Riviera Maya | Tulum" title="Taxi Riviera Maya | Tulum" loading="lazy" width="500" height="500" />
            </picture>            
        </div>
    </div>

    <div class="gray-background">
        <div class="container highlights-elements">
            <div class="top">
                @if(app()->getLocale() == "es")
                    <h2>Ventajas de utilizar el servicio de traslado desde/hacia Tulum</h2>
                @else
                    <h2>Advantages of Using Transfer Service to/from Tulum</h2>
                @endif                
            </div>
            <div class="bottom">
                <div class="items">
                    <div class="left_">
                        <img src="/assets/img/svg/hotels/24-7.svg" loading="lazy" alt="Seguridad y Confianza" title="Seguridad y Confianza" width="20" height="20">
                    </div>
                    <div class="right_">
                        @if(app()->getLocale() == "es")
                            <h3>Seguridad y Confianza</h3>
                            <p>En Tulum Airport Cab, su seguridad es nuestra prioridad. Mantenemos estrictos protocolos de seguridad para garantizar viajes sin problemas y seguros. Desde vehículos meticulosamente mantenidos a las medidas de seguridad establecidas, puede estar seguro, su experiencia con nosotros será segura, confiable y libre de estrés.</p>
                        @else
                            <h3>Safety and Trust</h3>
                            <p>At Tulum Airport Cab, your safety is our priority. We uphold stringent safety protocols to guarantee smooth and secure journeys. From meticulously maintained vehicles to comprehensive security measures, rest assured, your experience with us will be safe, dependable, and stress-free.</p>
                        @endif
                    </div>
                </div>
                <div class="items">
                    <div class="left_">
                        <img src="/assets/img/svg/hotels/drivers.svg" loading="lazy" alt="Choferes Profesionales" title="Choferes Profesionales" width="20" height="20">
                    </div>
                    <div class="right_">
                        @if(app()->getLocale() == "es")
                            <h3>Conductores Profesionales</h3>
                            <p>En Tulum Airport Cab, estamos orgullosos de emplear a un equipo de conductores altamente capacitados y profesionales. Reconocidos por su amabilidad, amplio conocimiento local, y excepcional experiencia de conducción, nuestros conductores garantizan un viaje seguro, cómodo y fiable para cada pasajero.</p>
                        @else
                            <h3>Professional Drivers</h3>
                            <p>At Tulum Airport Cab, we are proud to employ a team of highly trained and professional drivers. Renowned for their friendliness, extensive local knowledge, and exceptional driving expertise, our drivers guarantee a safe, comfortable, and reliable journey for every passenger.</p>
                        @endif
                    </div>
                </div>
                <div class="items">
                    <div class="left_">
                        <img src="/assets/img/svg/hotels/trusted-organization.svg" loading="lazy" alt="Tarifas Bajas" title="Tarifas Bajas" width="20" height="20">
                    </div>
                    <div class="right_">
                        @if(app()->getLocale() == "es")
                            <h3>Tarifas económicas</h3>
                            <p>Comprometidos a ofrecer soluciones asequibles, en Tulum Airport Cab, ofrecemos tarifas competitivas y transparentes. Creemos firmemente que disfrutar de Tulum debe ser asequible a todos, por lo que nos esforzamos por ofrecer opciones económicas sin comprometer la calidad del servicio.</p>
                        @else
                            <h3>Low Rates</h3>
                            <p>Committed to offering cost-effective solutions, at Tulum Airport Cab, we provide competitive and transparent rates. We firmly believe that exploring Tulum should be accessible to all, which is why we endeavor to offer budget-friendly options without compromising on service quality.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container hotels-listing">
        <div class="top">
            @if(app()->getLocale() == "es")
                <h2>Destinos alrededor de Tulum</h2>
            @else
                <h2>All the destinations around Tulum</h2>
            @endif            
        </div>
        <div class="bottom">
            @foreach ($hotels as $key => $item)
                <p>{{ $key }}</p>
                <div>
                    @foreach ($item as $itemData)
                        @if(app()->getLocale() == "es")
                            <a href="@lang('link.hotels',['slug' => $itemData['slug']])" title="Traslado a {{ $itemData['name'] }}">{{ $itemData['name'] }}</a>
                        @endif
                        @if(app()->getLocale() == "en")
                            <a href="@lang('link.hotels',['slug' => $itemData['slug']])" title="Shutle to {{ $itemData['name'] }}">{{ $itemData['name'] }}</a>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    @include('layout.footer.general')
@endsection