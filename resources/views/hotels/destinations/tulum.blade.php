@extends('layout.master')

@push("push-top")
    <link rel="preload" as="image" href="/assets/img/banners/home/home-mobile.webp" media="(max-width: 767px)">
    <link href="{{ mix('/assets/css/hotels/destination.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/hotels/destination.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>    
@endpush

@section('content')    
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="heading">
        <div class="container">
            <div class="top">                
                <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                @if(app()->getLocale() == "es")
                    <h1>El precio más bajo en traslados seguros desde y hacia Tulum con Taxi Riviera Maya</h1>
                @else
                    <h1>The lowest price for safe transfers to and from Tulum with Taxi Riviera Maya.</h1>
                @endif                
            </div>
        </div>
    </div>

    <div class="container information-clients">
        <div class="left_">
            @if(app()->getLocale() == "es")
                <h2>&iexcl;Bienvenido a Taxi Riviera Maya, tu puerta de acceso a la aventura en Tulum!</h2>
                <p>Sum&eacute;rgete en la experiencia &uacute;nica que Tulum tiene reservada para ti con nuestro servicio exclusivo de transporte. Descubre la magia de esta joya en la Riviera Maya con comodidad, seguridad y estilo.</p>
                <p>Con Taxi Riviera Maya, tu viaje comienza desde el momento en que subes a bordo. Nuestros conductores expertos te llevar&aacute;n a trav&eacute;s de las maravillas naturales y culturales de Tulum, mientras te relajas y disfrutas del paisaje impresionante.</p>
                <p>Ya sea que busques explorar las playas de arena suave, sumergirte en las aguas cristalinas o descubrir los secretos de la rica historia y cultura de Tulum, estamos aqu&iacute; para asegurarnos de que tu viaje sea inolvidable.</p>
                <p>Nuestro compromiso es brindar un servicio personalizado y eficiente que se adapte a tus necesidades y preferencias. En Taxi Riviera Maya, nos enorgullece ser tu socio de confianza en tu viaje por Tulum.</p>
                <p><strong>Descubre el Encanto de Tulum con Taxi Riviera Maya</strong></p>
                <p>En el coraz&oacute;n de la Riviera Maya, Tulum se despliega como un destino m&aacute;gico lleno de posibilidades. Con Taxi Riviera Maya, te invitamos a explorar cada rinc&oacute;n de este para&iacute;so caribe&ntilde;o de manera c&oacute;moda y llena de estilo. Nuestros conductores expertos est&aacute;n listos para llevarte a las playas de arena blanca, los tesoros arqueol&oacute;gicos y los vibrantes puntos culturales que hacen de Tulum un lugar &uacute;nico en el mundo.</p>
                <p>Reserva ahora tu <a href="@lang('link.tulum')" title="Traslado de Cancún a Tulum">Traslado de Cancún a Tulum</a> ¡Descubre la mejor empresa de traslados con Taxi Riviera Maya!</p>
            @else
                <h2>Welcome to Taxi Riviera Maya, your gateway to adventure in Tulum!</h2>
                <p>Immerse yourself in the unique experience that Tulum has in store for you with our exclusive transportation service. Discover the magic of this jewel in the Riviera Maya with comfort, safety, and style.</p>
                <p>With Taxi Riviera Maya, your journey begins the moment you step on board. Our expert drivers will take you through the natural and cultural wonders of Tulum, allowing you to relax and enjoy the breathtaking scenery.</p>
                <p>Whether you're looking to explore the soft sandy beaches, dive into crystal-clear waters, or uncover the secrets of Tulum's rich history and culture, we are here to ensure that your trip is unforgettable.</p>
                <p>Our commitment is to provide personalized and efficient service that caters to your needs and preferences. At Taxi Riviera Maya, we take pride in being your trusted partner in your journey through Tulum.</p>                
                <h3>Discover the Charm of Tulum with Taxi Riviera Maya</h3>
                <p>At the heart of the Riviera Maya, Tulum unfolds as a magical destination full of possibilities. With Taxi Riviera Maya, we invite you to explore every corner of this Caribbean paradise in comfort and style. Our expert drivers are ready to take you to the white sandy beaches, archaeological treasures, and vibrant cultural spots that make Tulum a unique place in the world.</p>
                <p>Book your <a href="@lang('link.tulum')" title="Transfer to Tulum">Transfer to Tulum</a> now! Discover the best transfer company with Taxi Riviera Maya!</p>
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
                    <h2>Ventajas de Usar Nuestro Servicio de Traslado desde/ hacia Tulum</h2>
                @else
                    <h2>Advantages of Using Our Transfer Service to/from Tulum</h2>
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
                            <p>La seguridad de nuestros clientes es nuestra máxima prioridad. En Taxi Riviera Maya, implementamos rigurosas medidas de seguridad para garantizar viajes sin contratiempos. Desde vehículos bien mantenidos hasta procedimientos de seguridad, puedes confiar en nosotros para que tu experiencia sea segura, confiable y sin preocupaciones.</p>
                        @else
                            <h3>Safety and Trust</h3>
                            <p>The safety of our customers is our top priority. At Taxi Riviera Maya, we implement rigorous safety measures to ensure seamless journeys. From well-maintained vehicles to security procedures, you can trust us to make your experience safe, reliable, and worry-free.</p>
                        @endif
                    </div>
                </div>
                <div class="items">
                    <div class="left_">
                        <img src="/assets/img/svg/hotels/drivers.svg" loading="lazy" alt="Choferes Profesionales" title="Choferes Profesionales" width="20" height="20">
                    </div>
                    <div class="right_">
                        @if(app()->getLocale() == "es")
                            <h3>Choferes Profesionales</h3>
                            <p>En Taxi Riviera Maya, nos enorgullece contar con choferes altamente capacitados y profesionales. Nuestro equipo se distingue por su amabilidad, conocimiento local y habilidades de conducción expertas, asegurando que tu viaje sea seguro, cómodo y en manos confiables.</p>
                        @else
                            <h3>Professional Drivers</h3>
                            <p>At Taxi Riviera Maya, we take pride in having highly trained and professional drivers. Our team stands out for their friendliness, local knowledge, and expert driving skills, ensuring that your journey is safe, comfortable, and in reliable hands.</p>
                        @endif
                    </div>
                </div>
                <div class="items">
                    <div class="left_">
                        <img src="/assets/img/svg/hotels/trusted-organization.svg" loading="lazy" alt="Tarifas Bajas" title="Tarifas Bajas" width="20" height="20">
                    </div>
                    <div class="right_">
                        @if(app()->getLocale() == "es")
                            <h3>Tarifas Bajas</h3>
                            <p>Enfocados en brindar una experiencia accesible, en Taxi Riviera Maya ofrecemos tarifas competitivas y transparentes. Creemos que explorar Bahía Principe no debería ser costoso, por lo que nos esforzamos por proporcionar opciones económicas sin comprometer la calidad del servicio.</p>
                        @else
                            <h3>Low Rates</h3>
                            <p>Focused on providing an affordable experience, at Taxi Riviera Maya, we offer competitive and transparent rates. We believe that exploring Tulum should not be expensive, so we strive to provide economical options without compromising the quality of service.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container hotels-listing">
        <div class="top">
            @if(app()->getLocale() == "es")
                <h2>Todos nuestros destino cercanos y en Tulum</h2>
            @else
                <h2>All our nearby destinations and in Tulum</h2>
            @endif            
        </div>
        <div class="bottom">
            @foreach ($hotels as $key => $item)
                <p>{{ $key }}</p>
                <div>
                    @foreach ($item as $itemData)
                        @if(app()->getLocale() == "es")
                            <a href="@lang('link.hotels',['slug' => $itemData['slug']])" title="Traslado a Hotel {{ $itemData['name'] }}">{{ $itemData['name'] }}</a>
                        @endif
                        @if(app()->getLocale() == "en")
                            <a href="@lang('link.hotels',['slug' => $itemData['slug']])" title="Traslado a Hotel {{ $itemData['name'] }}">{{ $itemData['name'] }}</a>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    @include('layout.footer.general')
@endsection