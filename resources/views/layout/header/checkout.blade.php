<header class="header_full_width_container">
    <nav class="navbar">
        <a class="navbar-brand" href="@lang('link.home')" title="Taxi Riviera Maya">
            <picture>
                <source srcset="/assets/img/logo.webp" type="image/webp">
                <img src="/assets/img/logo.png" width="150" height="50" loading="lazy" alt="Logo | Taxi Riviera Maya" title="Logo | Taxi Riviera Maya">
            </picture>
        </a>
        <ul class="list-menu-right">            
            <li>
                <a href="tel:+529983870234" class="phone" title="Llámanos">
                    <svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                </a>
            </li>            
            <li>
                @if(app()->getLocale() == "es")
                    <a href="{{ $link }}" class="language btn" title="Change to english"> Language: <strong>EN</strong> </a>
                @else
                    <a href="{{ $link }}" class="language btn" title="Cambiar a español"> Language: <strong>ES</strong> </a>
                @endif   
            </li>
        </ul>
    </nav>
</header>