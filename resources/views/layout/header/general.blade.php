<header class="header_full_width_container">
    <nav class="navbar">
        <a class="navbar-brand" href="@lang('link.home')" title="Taxi Dominicana">
            <picture>
                <source srcset="/assets/img/logo.webp" type="image/webp">
                <img src="/assets/img/logo.png" width="150" height="50" loading="lazy" alt="Logo | Taxi Dominicana" title="Logo | Taxi Dominicana">
            </picture>
        </a>

        <ul class="list-menu">
            @if(app()->getLocale() == "en")
                <li>
                    <a href="/punta-cana-airport-transfers" title="Punta Cana Airport Transfers" class="{{ ((isset($active) && $active == 2)?'active':'') }}">
                        Punta Cana Airport Transfers
                    </a>
                </li>
                <li>
                    <a href="/santo-domingo-airport-transfers" title="Santo Domingo Airport Transfers" class="{{ ((isset($active) && $active == 3)?'active':'') }}">
                        Santo Domingo Airport Transfers
                    </a>
                </li>
                <li>
                    <a href="/destinations" title="Destinations" class="{{ ((isset($active) && $active == 4)?'active':'') }}">
                        Destinations
                    </a>
                </li>
                <li>
                    <a href="/about-us" title="About us" class="{{ ((isset($active) && $active == 5)?'active':'') }}">
                        About us
                    </a>
                </li>
            @else
                <li>
                    <a href="/es/traslados-aeropuerto-punta-cana" title="Traslados Aeropuerto Punta Cana" class="{{ ((isset($active) && $active == 2)?'active':'') }}">
                        Traslados Punta Cana
                    </a>
                </li>
                <li>
                    <a href="/es/traslados-aeropuerto-santo-domingo" title="Traslados Aeropuerto Santo Domingo" class="{{ ((isset($active) && $active == 3)?'active':'') }}">
                        Traslados Santo Domingo
                    </a>
                </li>
                <li>
                    <a href="/es/destinos" title="Destinos" class="{{ ((isset($active) && $active == 4)?'active':'') }}">
                        Destinos
                    </a>
                </li>
                <li>
                    <a href="/es/sobre-nosotros" title="Sobre nosotros" class="{{ ((isset($active) && $active == 5)?'active':'') }}">
                        Sobre nosotros
                    </a>
                </li>
            @endif
        </ul>

        <ul class="list-menu-right">
            <li>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone(config('services.phone.DO')) }}" class="phone" title="Taxi Dominicana phone">
                    <svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                </a>
            </li>

            <li>
                <button id="openMenuButton" aria-label="Open menu">
                    <img src="/assets/img/svg/bars.svg" alt="Menu | Taxi Dominicana" title="Menu | Taxi Dominicana" width="35" height="35" loading="lazy">
                </button>
            </li>

            <li>
                @if(app()->getLocale() == "es")
                    <a href="{{ $link }}" class="language" title="Change to English">Language: <strong>EN</strong></a>
                @else
                    <a href="{{ $link }}" class="language" title="Cambiar a español">Language: <strong>ES</strong></a>
                @endif
            </li>
        </ul>
    </nav>

    <div class="mobile-menu">
        <div class="top">
            <div>
                <img src="/assets/img/svg/bars.svg" alt="Menu | Taxi Dominicana" title="Menu | Taxi Dominicana" width="25" height="25" loading="lazy">
                @lang('menu.menu')
            </div>

            <button id="closeMenuButton" aria-label="Close menu">
                <img src="/assets/img/svg/close.svg" width="35" height="35" alt="@lang('menu.close')" title="@lang('menu.close')" loading="lazy">
            </button>
        </div>

        <div class="content">
            <div class="items">
                @if(app()->getLocale() == "en")
                    <a href="/" title="Taxi Dominicana">Home</a>
                    <a href="/punta-cana-airport-transfers" title="Punta Cana Airport Transfers">Punta Cana Airport Transfers</a>
                    <a href="/santo-domingo-airport-transfers" title="Santo Domingo Airport Transfers">Santo Domingo Airport Transfers</a>
                    <a href="/destinations" title="Destinations">Destinations</a>
                    <a href="/about-us" title="About us">About us</a>
                    <a href="/contact" title="Contact">Contact</a>
                @else
                    <a href="/es" title="Taxi Dominicana">Inicio</a>
                    <a href="/es/traslados-aeropuerto-punta-cana" title="Traslados Aeropuerto Punta Cana">Traslados Punta Cana</a>
                    <a href="/es/traslados-aeropuerto-santo-domingo" title="Traslados Aeropuerto Santo Domingo">Traslados Santo Domingo</a>
                    <a href="/es/destinos" title="Destinos">Destinos</a>
                    <a href="/es/sobre-nosotros" title="Sobre nosotros">Sobre nosotros</a>
                    <a href="/es/contacto" title="Contacto">Contacto</a>
                @endif
            </div>

            <div class="items">
                <div class="info">
                    <p>@lang('menu.translate')</p>
                </div>

                @if(app()->getLocale() == "en")
                    <a href="{{ $link }}" title="Cambiar a español">Español</a>
                @else
                    <a href="{{ $link }}" title="Change to English">English</a>
                @endif
            </div>

            <div class="items">
                <div class="info">
                    @if(app()->getLocale() == "en")
                        <p>Customer service</p>
                        <p>For information about your reservation, contact us. We will be happy to help you.</p>
                    @else
                        <p>Atención a clientes</p>
                        <p>Para más información sobre tu reservación, comunícate con nosotros. Te ayudaremos.</p>
                    @endif
                </div>

                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone(config('services.phone.DO')) }}" title="Phone | Taxi Dominicana">
                    {{ config('services.phone.DO') }}
                </a>
            </div>

            <div class="items">
                <a href="@lang('link.reservation')" class="my-booking" title="@lang('menu.my_reservation')">
                    @lang('menu.my_reservation')
                </a>
            </div>
        </div>
    </div>
</header>