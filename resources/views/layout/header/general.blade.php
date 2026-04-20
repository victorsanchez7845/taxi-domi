<header class="header_full_width_container">
    <nav class="navbar">
        <a class="navbar-brand" href="@lang('link.home')" title="Tulum Airport Cab">
            <picture>
                <source srcset="/assets/img/logo.webp" type="image/webp">
                <img src="/assets/img/logo.png" width="150" height="50" loading="lazy" alt="Logo | Tulum Airport Cab" title="Logo | Tulum Airport Cab">
            </picture>
        </a>
        <ul class="list-menu">
            <li><a href="@lang('link.home')" title="@lang('menu.home')" class="{{ ((isset($active) && $active == 1)?'active':'') }}">@lang('menu.home')</a></li>
            <li><a href="@lang('link.how_to_get')" title="@lang('menu.how_to_get')" class="{{ ((isset($active) && $active == 2)?'active':'') }}">@lang('menu.how_to_get')</a></li>            
            <li><a href="@lang('link.pricing')" title="@lang('menu.pricing')" class="{{ ((isset($active) && $active == 3)?'active':'') }}">@lang('menu.pricing')</a></li>
            <li><a href="@lang('link.blog')" title="@lang('menu.blog')" class="{{ ((isset($active) && $active == 4)?'active':'') }}">@lang('menu.blog')</a></li>
        </ul>
        <ul class="list-menu-right">            
            <li>
                @if(app()->getLocale() == "en")
                    <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" class="phone" title="@lang('menu.phone')"><svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg></a>
                @else
                    <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" class="phone" title="@lang('menu.phone')"><svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg></a>
                @endif
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
                <img src="/assets/img/svg/bars.svg" alt="Menu | Tulum Airport Cab" title="Menu | Tulum Airport Cab" width="25" height="25" loading="lazy">
                @lang('menu.menu')
            </div>
            <button id="closeMenuButton">
                <img src="/assets/img/svg/close.svg" width="35" height="35" alt="@lang('menu.close')" title="@lang('menu.close')" loading="lazy"/>
            </button>
        </div>
        <div class="content">
            <div class="items">
                @if(app()->getLocale() == "en")
                    <a href="@lang('link.tulum')" title="Cancun to Tulum Shuttle">Cancun to Tulum Shuttle</a>
                    <a href="@lang('link.cancun')" title="Cancun Airport Transportation">Cancun Airport Transportation</a>
                    <a href="@lang('link.pdc')" title="Transportation from Cancun to Playa del Carmen">Transportation from Cancun to Playa del Carmen</a>
                    <a href="@lang('link.blog')" title="Blog">Blog</a>
                @else
                    <a href="@lang('link.tulum')" title="Traslado de Cancún a Tulum">Traslado de Cancún a Tulum</a>
                    <a href="@lang('link.cancun')" title="Traslado Aeropuerto Cancún">Traslado Aeropuerto Cancún</a>
                    <a href="@lang('link.pdc')" title="Transporte de Cancún a Playa del Carmen">Transporte de Cancún a Playa del Carmen</a>
                    <a href="@lang('link.blog')" title="Blog">Blog</a>
                @endif
            </div>
            <div class="items">
                <div class="info">
                    <p>@lang('menu.translate')</p>
                </div>
                @if(app()->getLocale() == "en")
                    <a href="{{ $link }}" title="Cambiar a español">Español</a>
                @else
                    <a href="{{ $link }}" title="Change to english">English</a>
                @endif
            </div>
            <div class="items">
                <div class="info">
                    @if(app()->getLocale() == "en")
                        <p>Customer service</p>
                        <p>For more information about your reservation, please contact us, we will help you!</p>                        
                    @else
                        <p>Atención a clientes</p>
                        <p>Para más información sobre tu reservación, comunícate con nosotros. ¡Te ayudaremos!</p>
                    @endif
                </div>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.MX') ) }}" title="@lang('menu.mex_phone') | Tulum Airport Cab">{{ config('services.phone.MX') }}</a>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone( config('services.phone.US') ) }}" title="@lang('menu.usa_phone') | Tulum Airport Cab">{{ config('services.phone.US') }}</a>
            </div>
            <div class="items">
                @if(false)
                <a href="https://api.whatsapp.com/send?phone=5219982942389&amp;text=Hola%2C%20me%20gustar%C3%ADa%20cotizar%20un%20servicio" class="whatsapp">
                    <svg width="30" height="30"><use xlink:href="/assets/img/svg/icons.svg#social-whatsapp"></use></svg>
                    Whatsapp
                </a>
                @endif
                <a href="@lang('link.reservation')" class="my-booking" title="@lang('menu.my_reservation')">@lang('menu.my_reservation')</a>
            </div>
        </div>        
    </div>
</header>
