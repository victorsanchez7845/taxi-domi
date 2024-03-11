@extends('layout.master')

@push("push-top")    
    <link href="{{ mix('/assets/css/ads/last-minute.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/ads/last-minute.min.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
@endpush
@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/lastminute.min.js') }}"></script>
    <x-analytics/>    
    <script>
        var typed = new Typed('#typed-output', {
            strings: ["<strong>30% OFF</strong> en Traslado del <strong>Aeropuerto de Cancún</strong> al destino de tus <strong>sueños</strong>"],
            typeSpeed: 50,  // Velocidad de escritura en milisegundos
            backSpeed: 25,  // Velocidad de borrado en milisegundos
            startDelay: 4500, // Retardo antes de comenzar la animación en milisegundos
            backDelay: 2000, // Retardo después de borrar el texto en milisegundos
            loop: false,  // Repite la animación
            showCursor: false,
    });
  </script>
@endpush

@section('content')    
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="container heading-content">
       <div class="top"></div>
       <div class="bottom">
            <div class="left_">
                <div>
                    <p>+ 16,500 <span>Clientes satisfechos</span></p>
                    <img src="/assets/img/campaigns/clients.png" alt="" title="" width="160" height="55" loading="lazy">
                </div>                
                <h1 id="typed-output">¿<strong>Viajando a Cancún</strong> y necesitas transporte? Reserva ahora y <strong>obtén</strong>...</h1>
                <p>Reserva ahora y obtén la tarifa más baja de traslados en el Aeropuerto de Cancún. Transporte cómodo, seguro y siempre listo para llevarte a cualquier destino en la <strong>Riviera Maya</strong>.</p>
                <img src="/assets/img/campaigns/suburban.png" alt="" title="" width="376" height="131" loading="lazy">
            </div>
            <div class="right_">
                <div class="background"></div>
                <div class="bookingbox">
                    <div class="options">
                        <button type="button" class="aff-toggle-type active" data-type="OW">Viaje de ida</button>
                        <button type="button" class="aff-toggle-type" data-type="RT">Viaje redondo</button>
                    </div>
                    <div class="currency">
                        <button class="aff-toggle-currency active" data-currency="USD">USD</button>
                        <button class="aff-toggle-currency" data-currency="MXN">MXN</button>
                    </div>
                    <div class="items">
                        <input type="hidden" id="aff-input-pickup-date" value="{{ date("Y-m-d") }}">
                        <div class="one">
                            <label>Del aeropuerto de Cancún a...</label>
                            <input type="text" class="form-control" id="aff-input-to" placeholder="Indica el destino" autocomplete="off">
                            <div id="aff-input-to-elements"></div>
                        </div>
                        <div class="two">
                            <div>
                                <label>Pasajeros</label>
                                <select class="form-control" id="aff-input-passengers">
                                    @for($i=1; $i<=25; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div>
                                <label>Hora de llegada</label>
                                <input type="time" class="form-control" id="aff-input-pickup-time" value="00:00">
                            </div>                            
                        </div>
                        <div class="two hidden" id="aff-round-trip-element">
                            <div>
                                <label>Fecha de regreso</label>
                                <input type="date" class="form-control" id="aff-input-to-pickup-date">
                            </div>
                            <div>
                                <label>Hora de regreso</label>
                                <input type="time" class="form-control" id="aff-input-to-pickup-time" value="00:00">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn" id="aff-button-send">RESERVAR AHORA</button>                    
                    <p>Siempre Disponibles en el <strong>Aeropuerto de Cancún</strong> | Tarifas Económicas | Seguro y Confiable</p>
                    <div id="aff-error-list"></div>
                </div>
            </div>
       </div>
    </div>

    <div class="container highlights-items">
        <div>
            <div>
                <img src="/assets/img/svg/ads/availability.svg" alt="" title="" width="30" height="30" loading="lazy">
            </div>
            <div>
                <h3>Servicio Disponible 24/7</h3>
                <p>Estamos en el Aeropuerto de Cancún disponibles las 24 horas del día. Por lo que no tardaremos más de 5 minutos en llevarte a cualquier destino en la Riviera Maya.</p>
            </div>
        </div>
        <div>
            <div>
                <img src="/assets/img/svg/ads/suitcase.svg" alt="" title="" width="30" height="30" loading="lazy">
            </div>
            <div>
                <h3>Seguro y Confiable</h3>
                <p>Nuestra empresa cuenta con todos los permisos para operar en el aeropuerto de Cancún, además de brindarte seguro de viajero durante tu traslado. Te garantizamos un traslado seguro y sin complicaciones.</p>
            </div>
        </div>
        <div>
            <div>
                <img src="/assets/img/svg/ads/drivers.svg" alt="" title="" width="30" height="30" loading="lazy">
            </div>
            <div>
                <h3>Conductores Profesionales</h3>
                <p>Nuestros conductores profesionales están capacitados para brindarte correctamente el servicio de Traslado, son respetuosos, amables y con actitud de servicio.</p>
            </div>
        </div>
    </div>

    <div class="container why-book-items">
        <div class="left_">
            <img src="/assets/img/campaigns/why-book-with-us.png" alt="" title="" width="160" height="55" loading="lazy">
        </div>
        <div class="right_">
            <h2>¿Por qué <strong>reservar</strong> con nosotros?</h2>
            <h3>La mejor transportación de la Riviera Maya</h3>
            <hr>
            <ul>
                <li><strong>Tarifas Fijas:</strong> Nosotros no cambiamos la tarifa según el horario, la tarifa con la que reserves a través de nuestra página se respeta, no hay más cargos ni pagos sorpresa.</li>
                <li><strong>Seguridad:</strong> Garantizamos un servicio de traslado seguro a cualquier destino de la Riviera Maya, monitoreamos tu viaje para garantizar que tu traslado se llevará a cabo sin complicaciones ni inconvenientes.</li>
                <li><strong>Precios Bajos:</strong> No hay precios tan bajos como los nuestros en el Aeropuerto de Cancún, la mayoría de empresas de taxi en el aeropuerto cobran una fortuna, pero nosotros queremos brindarte precios justos para que tu estancia en la Riviera Maya sea excepcional.</li>
                <li><strong>Confiabilidad:</strong> Ten la confianza de que estaremos siempre listos en el Aeropuerto de Cancún para llevarte con tranquilidad a tu destino en la Riviera Maya.</li>
            </ul>
        </div>
    </div>

    <div class="reviews_information">
        <div class="mask"></div>
        <div class="container">
            <div class="top">
                <h2>Comentarios de nuestros clientes</h2>
                <h3>Descubra por qué nos eligen nuestros clientes</h3>
            </div>
            <div class="bottom">
                <div class="write_review">
                    <div>
                        <p class="rating">Rating</p>
                        <p class="rating_count">4.7 <span>4107 comentarios</span></p>
                    </div>
                    <a title="Escribir comentario" target="_blank" href="https://g.page/r/CaJOK2AW7uT6EB0/review">Escribir comentario</a>                  
                </div>
                <div class="items">

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/1.webp" type="image/webp">
                                <img src="/assets/img/reviews/1.jpg" alt="Cliente de Taxi Riviera Maya" title="SARA M." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>SARA M.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>El chofer llegó puntual por nosotras, la camioneta limpia y los asientos muy cómodos, lo mejor de todo es el precio tan bajo</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/2.webp" type="image/webp">
                                <img src="/assets/img/reviews/2.jpg" alt="Cliente de Taxi Riviera Maya" title="LAURA S." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>LAURA S.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>20/10, son honestos, olvidé un bolso en la cabina y se contactaron rápidamente conmigo y me la llevaron hasta mi hotel</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/3.webp" type="image/webp">
                                <img src="/assets/img/reviews/3.jpg" alt="Cliente de Taxi Riviera Maya" title="ANDREA T." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>ANDREA T.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>Me sentí segura en todo momento, fué muy fácil encontrarlos en el aeropuerto, sin duda es de las mejores empresas de traslado</p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                    <div class="item">
                        <div class="top">
                            <picture>
                                <source srcset="/assets/img/reviews/4.webp" type="image/webp">
                                <img src="/assets/img/reviews/4.jpg" alt="Cliente de Taxi Riviera Maya" title="ANDREA T." loading="lazy" width="60" height="60">
                            </picture>
                            <div>
                                <p>ANDREA T.</p>
                                <p>{{ date("M") }} {{ date("Y") }}</p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="rating_stars"></div>
                            <p>¡Gran servicio! Esta fue la única compañía que tenía disponibilidad el mismo día de recogida en el aeropuerto. Fue fácil comunicarse por chat. </p>
                            <a class="read_more" title="Leer más" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Leer más</a>
                            <a class="posted_on" title="Posteado en" target="_blank" href="https://maps.app.goo.gl/5xoswtczNDpwdEBQ8">Posteado en <span>Google</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @if(false)
    <div class="container">
        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-a0873db1-d63d-4998-ad62-a781ddb86e7c" data-elfsight-app-lazy></div>
    </div>
    @endif

    <div class="container faqs_section">
        <div class="top">
            <h2>Preguntas frecuentes sobre el servicio de traslados</h2>
            <p>Te ayudamos a despejar tus dudas sobre el servicio de Traslados en Cancún</p>
        </div>
        <div class="bottom">
            <div>
                <h3>¿Puedo contratar el servicio de Taxi Riviera Maya directamente en el Aeropuerto de Cancún?</h3>
                <div>
                    <p>S&iacute;, puedes contratar nuestros servicios en el mismo aeropuerto. Nuestros representantes estar&aacute;n disponibles para asistirte en el lugar. Ll&aacute;manos para que nos encuentres de manera m&aacute;s f&aacute;cil.</p>
                </div>
            </div>
            <div>
                <h3>¿Cuáles son las ventajas de elegir Taxi Riviera Maya en lugar de otros servicios de taxi disponibles?</h3>
                <div>
                    <p>Al optar por Taxi Riviera Maya en el aeropuerto, disfrutas de tarifas competitivas, conductores confiables y la conveniencia de un servicio directo sin necesidad de buscar alternativas en el lugar.</p>
                </div>
            </div>
            <div>
                <h3>¿Cómo identifico a los representantes de Taxi Riviera Maya en el Aeropuerto de Cancún?</h3>
                <div>
                    <p>Nuestros representantes llevar&aacute;n identificaci&oacute;n de la empresa y estar&aacute;n claramente identificados con el logotipo de Taxi Riviera Maya. Tambi&eacute;n puedes preguntar a trav&eacute;s de nuestras l&iacute;neas telef&oacute;nicas para obtener asistencia.</p>
                </div>
            </div>
            <div>
                <h3>¿Existen diferencias tarifas al contratar un taxi directamente en el aeropuerto en comparación con reservar en línea con Taxi Riviera Maya?</h3>
                <div>
                    <p>Las tarifas de los taxis que se contratan directamente en el aeropuerto muchas veces son excesivas y hay costos ocultos. No obstante, al reservar en l&iacute;nea con Taxi Riviera Maya, obtendr&aacute;s la tarifa m&aacute;s baja, adem&aacute;s de transparente y as&iacute; evitar posibles incrementos que podr&iacute;an ocurrir al contratar en el lugar.</p>
                </div>
            </div>
            <div>
                <h3>¿Puedo pagar en efectivo al contratar el servicio directamente en el Aeropuerto de Cancún?</h3>
                <div>
                    <p>S&iacute;, aceptamos pagos en efectivo en el aeropuerto. Tambi&eacute;n ofrecemos opciones de pago con tarjeta o PayPal para mayor comodidad.</p>
                </div>
            </div>
            <div>
                <h3>¿Qué información debo proporcionar al contratar el servicio para garantizar un traslado eficiente?</h3>
                <div>
                    <p>Proporciona detalles b&aacute;sicos como nombre, n&uacute;mero telef&oacute;nico, tu destino, n&uacute;mero de pasajeros y cualquier requisito especial al contratar el servicio en el aeropuerto. Esto asegura un traslado personalizado y eficiente.</p>
                </div>
            </div>
            <div>
                <h3>¿Puedo reservar el servicio de Taxi Riviera Maya directamente hablando con un asesor mientras estoy en el aeropuerto?</h3>
                <div>
                    <p>S&iacute;, puedes reservar tu servicio de traslado hablando con uno de nuestros asesores disponibles en el aeropuerto. Tambi&eacute;n puedes hacerlo c&oacute;modamente a trav&eacute;s de nuestra p&aacute;gina web. En el momento que recibimos tu solicitud no pasar&aacute;n ni 5 minutos para que nos reunamos contigo en el Aeropuerto de Canc&uacute;n.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection