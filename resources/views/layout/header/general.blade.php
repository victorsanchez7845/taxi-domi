<header class="header_full_width_container">
    <nav class="navbar">
        <a class="navbar-brand" href="@lang('link.home')" title="Taxi Riviera Maya">
            <picture>
                <source srcset="/assets/img/logo.webp" type="image/webp">
                <img src="/assets/img/logo.png" width="150" height="50" loading="lazy" alt="Logo | Taxi Riviera Maya" title="Logo | Taxi Riviera Maya">
            </picture>
        </a>
        <ul class="list-menu">
            <li><a href="@lang('link.home')" title="@lang('menu.home')" class="{{ ((isset($active) && $active == 1)?'active':'') }}">@lang('menu.home')</a></li>
            <li><a href="@lang('link.how_to_get')" title="@lang('menu.how_to_get')" class="{{ ((isset($active) && $active == 2)?'active':'') }}">@lang('menu.how_to_get')</a></li>            
            <li><a href="@lang('link.pricing')" title="@lang('menu.pricing')" class="{{ ((isset($active) && $active == 3)?'active':'') }}">@lang('menu.pricing')</a></li>
        </ul>
        <ul class="list-menu-right">            
            <li>
                <a href="tel:+529983870234" class="phone" title="Llámanos">
                    <svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                </a>
            </li>
            <li>
                <button id="openMenuButton">
                    <img src="/assets/img/svg/bars.svg" alt="Menu | Tulum Airport Cab" title="Menu | Tulum Airport Cab" width="35" height="35" loading="lazy">
                </button>
            </li>
            <li>
                @if(app()->getLocale() == "es")
                    <a href="{{ $link }}" class="language" title="Change to english"> Language: <strong>EN</strong> </a>
                @else
                    <a href="{{ $link }}" class="language" title="Cambiar a español"> Language: <strong>ES</strong> </a>
                @endif   
            </li>
        </ul>
    </nav>
    <div class="mobile-menu">
        <div class="top">
            <div>
                <img src="/assets/img/svg/bars.svg" alt="Menu | Taxi Riviera Maya" title="Menu | Taxi Riviera Maya" width="25" height="25" loading="lazy">
                Menú
            </div>
            <button id="closeMenuButton">
                <img src="/assets/img/svg/close.svg" width="35" height="35" alt="close" title="close" loading="lazy"/>
            </button>
        </div>
        <div class="content">
            <div class="items">
                <a href="/" title="Inicio">Inicio</a>
                <a href="/taxi-aeropuerto-cancun" title="Traslado a Cancún">Traslado a Cancún</a>
                <a href="/traslado-de-cancun-tulum" title="Traslado a Tulum">Traslado a Tulum</a>
                <a href="/transporte-cancun-a-playa-del-carmen" title="Traslado a Playa del Carmen">Traslado a Playa del Carmen</a>
                <a href="/transporte-cancun-a-akumal" title="Transporte de Cancún a Akumal">Transporte de Cancún a Akumal</a>
                <a href="/cotizaciones" title="Cotizaciones">Cotizaciones</a>
            </div>
            <div class="items">
                <div class="info">
                    <p>Traducir sitio</p>
                </div>
                <a href="/en" title="View in english">English</a>
            </div>
            <div class="items">
                <div class="info">
                    <p>Atención a clientes</p>
                    <p>Para más información sobre tu reservación, comunícate con nosotros. ¡Te ayudaremos!</p>
                </div>
                <a href="tel:+529983870234" title="Teléfono México | Taxi Riviera Maya">+52 (998) 387 0234</a>
                <a href="tel:+13237635379" title="Teléfono USA &amp; Canada | Taxi Riviera Maya">+1 (323) 763-5379</a>
            </div>
            <div class="items">
                <a href="https://api.whatsapp.com/send?phone=5219982942389&amp;text=Hola%2C%20me%20gustar%C3%ADa%20cotizar%20un%20servicio" class="whatsapp">
                    <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#social-whatsapp"></use></svg>
                    Whatsapp
                </a>
                <a href="/reserva" class="my-booking" title="Mi reserva">Mi reserva</a>
            </div>
        </div>        
    </div>
</header>