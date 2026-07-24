<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taxi Dominicana</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16596385055"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-16596385055');
    </script>

    @if(app()->getLocale() == "es")
        <script>
            gtag('event', 'conversion', {
                'send_to': 'AW-16596385055/j-1ZCNuYscgZEJ_64uk9',
                'value': `{!! $data['sales']['total'] !!}`,
                'currency': `{!! $data['config']['currency'] !!}`,
                'transaction_id': `{!! $data['config']['id'] !!}`,
            });
        </script>
    @endif
    @if(app()->getLocale() == "en")
        <script>
            gtag('event', 'conversion', {
                'send_to': 'AW-16596385055/jwwWCNG6o7cZEJ_64uk9',
                'value': `{!! $data['sales']['total'] !!}`,
                'currency': `{!! $data['config']['currency'] !!}`,
                'transaction_id': `{!! $data['config']['id'] !!}`,
            });
        </script>
    @endif

    <script>
        (function () {
            let seconds = 1;
            setTimeout(() => window.location.href = `{!! $payment !!}`, seconds * 1000);
        })();
    </script>

    <style>
        body, html {
            width: 100%;
            height: 100%;
        }
        h2 {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
        }
        div {
            display: grid;
            place-content: center;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div>
        <h2>{{ __('quote/processing.timer') }}</h2>
    </div>
</body>
</html>