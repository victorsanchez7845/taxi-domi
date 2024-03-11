<footer>
    <div class="container">
        <div class="top">
            <div>
                <picture>
                    <source srcset="/assets/img/logo.png" type="image/webp">
                    <img src="/assets/img/logo.png" alt="Tulum Airport Cab" title="Tulum Airport Cab" loading="lazy" width="150" height="50">
                </picture>
                @if(app()->getLocale() == "es")
                    <p>Más de una década de experiencia, ofrecemos el traslado más seguro, veloz y confiable en Cancún.</p>
                @else
                    <p>More than a decade of experience, we offer the safest, fastest and most reliable transfer in Cancun.</p>
                @endif
            </div>
            <div>
                @if(app()->getLocale() == "es")
                    <h4>Información</h4>                    
                    <a href="@lang('link.contact')" title="Contacto">Contacto</a>
                    <a href="@lang('link.reservation')" title="Consulta tu reservación">Consulta tu reservación</a>
                    <a href="@lang('link.terms')" title="Términos y condiciones">Términos y condiciones</a>
                    <a href="@lang('link.privacy')" title="Políticas de privacidad">Políticas de privacidad</a>
                @else
                    <h4>Information</h4>                    
                    <a href="@lang('link.contact')" title="Contacto">Contacto</a>                    
                    <a href="@lang('link.reservation')" title="Check your reservation">Check your reservation</a>
                    <a href="@lang('link.terms')" title="Terms and conditions">Terms and conditions</a>
                    <a href="@lang('link.privacy')" title="Privacy policy">Privacy policy</a>
                @endif
            </div>
            <div>
                @if(app()->getLocale() == "en")
                    <h4>Popular destinations</h4>
                    <a href="@lang('link.destinations')" title="Destinations">Destinations</a>
                    <a href="@lang('link.tulum')" title="Cancun to Tulum Shuttle">Cancun to Tulum Shuttle</a>
                    <a href="@lang('link.cancun')" title="Cancun Airport Transportation">Cancun Airport Transportation</a>
                    <a href="@lang('link.pdc')" title="Transportation from Cancun to Playa del Carmen">Transportation from Cancun to Playa del Carmen</a>                                        
                @else
                    <h4>Destinos populares</h4>
                    <a href="@lang('link.destinations')" title="Destinos">Destinos</a>
                    <a href="@lang('link.tulum')" title="Traslado de Cancún a Tulum">Traslado de Cancún a Tulum</a>
                    <a href="@lang('link.cancun')" title="Traslado Aeropuerto Cancún">Traslado Aeropuerto Cancún</a>
                    <a href="@lang('link.pdc')" title="Transporte de Cancún a Playa del Carmen">Transporte de Cancún a Playa del Carmen</a>
                @endif
            </div>
        </div>
        <hr>
        <div class="bottom">
            <p>&copy; {{ date("Y") }} Tulum Airport Cab. All rights reserved.</p>
            <p><a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="{{ config('services.phone.MX') }}">{{ config('services.phone.MX') }}</a> & <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" title="{{ config('services.phone.US') }}">{{ config('services.phone.US') }}</a></p>
            <a href="mailto:{{ config('services.email') }}">{{ config('services.email') }}</a>
        </div>
    </div>    
</footer>