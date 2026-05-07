<header class="header_full_width_container">
    <nav class="navbar">
        <a class="navbar-brand" href="@lang('link.home')" title="Taxi Dominicana">
            <picture>
                <source srcset="/assets/img/logo.webp" type="image/webp">
                <img src="/assets/img/logo.png" width="150" height="50" loading="lazy" alt="Logo | Taxi Dominicana" title="Logo | Taxi Dominicana">
            </picture>
        </a>

        <ul class="list-menu-right">
            <li>
                <a href="tel:{{ App\Traits\GeneralTrait::clearPhone(config('services.phone.DO')) }}" class="phone" title="@lang('menu.phone')">
                    <svg width="15" height="15"><use xlink:href="/assets/img/svg/icons.svg#phone"></use></svg>
                </a>
            </li>

            <li>
                @php
                    $languageLink = app()->getLocale() == 'es'
                        ? '/'
                        : '/es';
                @endphp

                @if(app()->getLocale() == "es")
                    <a href="{{ $languageLink }}" class="language btn" title="Change to English">
                        Language: <strong>EN</strong>
                    </a>
                @else
                    <a href="{{ $languageLink }}" class="language btn" title="Cambiar a español">
                        Language: <strong>ES</strong>
                    </a>
                @endif
            </li>
        </ul>
    </nav>
</header>