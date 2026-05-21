<footer>
    <div class="container">
        <div class="top">
            <div>
                <picture>
                    <source srcset="/assets/img/logo.webp" type="image/webp">
                    <img src="/assets/img/logo.png" alt="Taxi Dominicana" title="Taxi Dominicana" loading="lazy" width="150" height="50">
                </picture>

                @if(app()->getLocale() == "es")
                    <p>Taxi Dominicana ofrece transporte privado seguro, cómodo y confiable en República Dominicana, con servicio principal en Punta Cana y traslados a los destinos más populares del país.</p>
                @else
                    <p>Taxi Dominicana offers safe, comfortable and reliable private transportation in the Dominican Republic, with main service in Punta Cana and transfers to the country’s most popular destinations.</p>
                @endif
            </div>

            <div>
                @if(app()->getLocale() == "es")
                    <h4>Información</h4>
                    <a href="/es/contacto" title="Contacto">Contacto</a>
                    <a href="/es/reserva" title="Consulta tu reservación">Consulta tu reservación</a>
                    <a href="/es/blog" title="Blog">Blog</a>
                    <a href="/es/terminos-y-condiciones" title="Términos y condiciones">Términos y condiciones</a>
                    <a href="/es/privacidad" title="Política de privacidad">Política de privacidad</a>
                @else
                    <h4>Information</h4>
                    <a href="/contact" title="Contact">Contact</a>
                    <a href="/booking" title="Check your reservation">Check your reservation</a>
                    <a href="/blog" title="Blog">Blog</a>
                    <a href="/terms-and-conditions" title="Terms and conditions">Terms and conditions</a>
                    <a href="/privacy" title="Privacy policy">Privacy policy</a>
                @endif
            </div>

            <div>
                @if(app()->getLocale() == "es")
                    <h4>Servicios y rutas</h4>
                    <a href="/es/traslados-aeropuerto-punta-cana">Traslados Aeropuerto Punta Cana</a>
                    <a href="/es/traslados-aeropuerto-santo-domingo">Traslados Aeropuerto Santo Domingo</a>
                    <a href="/es/precio-traslado-punta-cana">Tarifas de traslado</a>
                    <a href="/es/destinos">Destinos</a>
                    <a href="/es/aeropuerto-punta-cana-a-bavaro">Punta Cana a Bávaro</a>
                    <a href="/es/aeropuerto-punta-cana-a-cap-cana">Punta Cana a Cap Cana</a>
                    <a href="/es/aeropuerto-punta-cana-a-uvero-alto">Punta Cana a Uvero Alto</a>
                    <a href="/es/aeropuerto-punta-cana-a-bayahibe">Punta Cana a Bayahíbe</a>
                @else
                    <h4>Services and routes</h4>
                    <a href="/punta-cana-airport-transfers">Punta Cana Airport Transfers</a>
                    <a href="/santo-domingo-airport-transfers">Santo Domingo Airport Transfers</a>
                    <a href="/transportation-price-punta-cana">Transfer Rates</a>
                    <a href="/destinations">Destinations</a>
                    <a href="/punta-cana-airport-to-bavaro">Punta Cana to Bavaro</a>
                    <a href="/punta-cana-airport-to-cap-cana">Punta Cana to Cap Cana</a>
                    <a href="/punta-cana-airport-to-uvero-alto">Punta Cana to Uvero Alto</a>
                    <a href="/punta-cana-airport-to-bayahibe">Punta Cana to Bayahibe</a>
                @endif
            </div>
        </div>

        <hr>

        <div class="bottom">
            <p>&copy; {{ date("Y") }} Taxi Dominicana. All rights reserved.</p>

            <p>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone(config('services.phone.DO')) }}" title="{{ config('services.phone.DO') }}">
                    {{ config('services.phone.DO') }}
                </a>
            </p>

            <a href="mailto:{{ config('services.email') }}">{{ config('services.email') }}</a>
        </div>
    </div>
</footer>