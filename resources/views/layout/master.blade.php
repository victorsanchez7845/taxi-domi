@php 
    use App\Traits\functionsTrait;
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">        
        <title>{{ $seo['meta']['title'] }}</title>
        <meta name="description" content="{{ $seo['meta']['description'] }}">
        <meta name="keywords" content="{{ $seo['meta']['keywords'] }}">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="application-name" content="Website">
        <meta name="author" content="Tulum Airport Cab">
        @if(config('app.debug') || $seo['nofollow'] == true)
            <meta name="robots" content="noindex,nofollow">
        @else
            <meta name="robots" content="index,follow">
        @endif
        <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
        <link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
        <meta name="csrf-token" content="{{ csrf_token() }}">     
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">   
        @if(sizeof($seo['alternate']) > 0)            
            @foreach($seo['alternate'] as $key => $value)
                <link rel="alternate" hreflang="{{$key}}" href="{{ url('/') }}{{$value}}">
            @endforeach
        @endif
        <link rel="preconnect" href="https://www.googletagmanager.com">
        <link rel="dns-prefetch" href="https://www.googletagmanager.com">
        <meta name="og:url" content="{{ url()->current() }}">
        <meta name="og:type" content="website">
        <meta name="og:title" content="{{ $seo['meta']['title'] }}">
        <meta name="og:description" content="{{ $seo['meta']['description'] }}">
        <meta name="og:image" content="/assets/img/social/facebook.jpg">
        <meta property="og:locale" content="es-MX">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo['meta']['title'] }}">
        <meta name="twitter:description" content="{{ $seo['meta']['description'] }}">
        <meta name="twitter:image" content="/assets/img/social/twitter.jpg">
        
        <link href="{{ mix('/assets/css/base.min.css') }}" rel="preload" as="style" >
        <link href="{{ mix('/assets/css/base.min.css') }}" rel="stylesheet">        
        <script defer src="{{ mix('/assets/js/base/index.min.js') }}"></script>

        @stack('push-top')

        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16596385055"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'AW-16596385055');
        </script>
        
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/682b4275b26df01905316062/1irkfn78h';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
        
        <script>
            const language = `{!! str_replace('_', '-', app()->getLocale()) !!}`;
        </script>
</head>
<body>
    @yield('content')
    @stack('push-bottom')    
</body>
</html>