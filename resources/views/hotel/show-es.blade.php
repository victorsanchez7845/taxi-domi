@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="preload" as="style">
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="stylesheet">

    <style>
        .hotel-single {
            padding: 40px 0 60px;
            background: #f7f8fb;
        }

        .hotel-single .content-wrap {
            display: grid;
            grid-template-columns: minmax(0, 2fr) 340px;
            gap: 32px;
            align-items: start;
        }

        .hotel-single .main {
            background: #fff;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(16, 24, 40, 0.06);
        }

        .hotel-single .sidebar {
            position: sticky;
            top: 110px;
            display: grid;
            gap: 24px;
        }

        .hotel-booking-box {
            background: #fff;
            border-radius: 16px;
            padding: 18px;
            box-shadow: 0 10px 30px rgba(16, 24, 40, 0.06);
            border: 1px solid #edf1f7;
        }

        .hotel-back-link {
            display: inline-block;
            margin-bottom: 16px;
            font-size: 14px;
            font-weight: 600;
        }

        .hotel-single .main h1 {
            font-size: 46px;
            line-height: 1.08;
            margin-bottom: 16px;
            color: #243b5a;
        }

        .hotel-category-row {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            font-size: 13px;
            margin-bottom: 18px;
            color: #5f6b7a;
        }

        .hotel-single .main img.hero {
            width: 100%;
            height: auto;
            border-radius: 16px;
            display: block;
            margin: 20px 0 26px;
        }

        .hotel-info-box {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            padding: 16px 18px;
            border-radius: 14px;
            background: #f8fafc;
            margin-bottom: 24px;
            border: 1px solid #e8edf5;
            color: #5f6b7a;
            font-size: 14px;
        }

        .hotel-excerpt-box {
            background: #f2f5fb;
            border-left: 4px solid #2a8cff;
            border-radius: 12px;
            padding: 18px;
            margin: 24px 0 28px;
            color: #31445f;
        }

        .hotel-excerpt-box strong {
            display: block;
            margin-bottom: 8px;
            color: #243b5a;
        }

        .hotel-map {
            margin: 24px 0;
        }

        .hotel-map iframe {
            width: 100%;
            height: 320px;
            border: 0;
            border-radius: 16px;
        }

        .hotel-editor-content {
            color: #31445f;
            font-size: 18px;
            line-height: 1.9;
        }

        .hotel-editor-content h2,
        .hotel-editor-content h3,
        .hotel-editor-content h4 {
            color: #243b5a;
            margin-top: 34px;
            margin-bottom: 14px;
            line-height: 1.2;
        }

        .hotel-editor-content h2 {
            font-size: 34px;
        }

        .hotel-editor-content h3 {
            font-size: 28px;
        }

        .hotel-editor-content p {
            margin-bottom: 18px;
        }

        .hotel-editor-content img {
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            margin: 18px 0;
        }

        .hotel-editor-content figure {
            margin: 24px 0;
        }

        .hotel-editor-content figcaption {
            font-size: 13px;
            color: #6b7280;
            margin-top: 8px;
            text-align: center;
        }

        .hotel-editor-content a {
            word-break: break-word;
        }

        .hotel-editor-content ul,
        .hotel-editor-content ol {
            margin: 0 0 18px 22px;
        }

        .hotel-editor-content li {
            margin-bottom: 8px;
        }

        .hotel-editor-content blockquote {
            margin: 24px 0;
            padding: 18px 20px;
            background: #f8fafc;
            border-left: 4px solid #2a8cff;
            border-radius: 12px;
            color: #243b5a;
        }

        .hotel-widget {
            background: #fff;
            border-radius: 16px;
            padding: 22px;
            box-shadow: 0 10px 30px rgba(16, 24, 40, 0.06);
            border: 1px solid #edf1f7;
        }

        .hotel-widget h3 {
            font-size: 20px;
            margin-bottom: 18px;
            color: #243b5a;
        }

        .related-hotels {
            display: grid;
            gap: 18px;
        }

        .related-hotel {
            display: block;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(16, 24, 40, 0.06);
            border: 1px solid #edf1f7;
            transition: .25s ease;
        }

        .related-hotel:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(16, 24, 40, .12);
        }

        .related-hotel img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .related-hotel div {
            padding: 16px;
        }

        .related-hotel h4 {
            font-size: 22px;
            line-height: 1.2;
            color: #243b5a;
            margin-bottom: 12px;
        }

        .related-hotel p {
            font-size: 13px;
            color: #5f6b7a;
            line-height: 1.5;
        }

        @media (max-width: 1024px) {
            .hotel-single .content-wrap {
                grid-template-columns: 1fr;
            }

            .hotel-single .sidebar {
                position: static;
            }
        }

        @media (max-width: 767px) {
            .hotel-single {
                padding: 24px 0 40px;
            }

            .hotel-single .main {
                padding: 18px;
                border-radius: 14px;
            }

            .hotel-single .main h1 {
                font-size: 34px;
            }

            .related-hotel img {
                height: 180px;
            }
        }
    </style>
@endpush

@push("push-bottom")
    <script defer src="{{ mix('/assets/js/bookingbox/index.min.js') }}"></script>
@endpush

@section('content')
    @include('layout.header.general', ['link' => $link, 'active' => 0])

    <section class="hotel-single">
        <div class="container">
            <div class="content-wrap">

                <article class="main">

                    @if(isset($breadcrumbs))
                        <div style="margin-bottom: 16px;">
                            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                        </div>
                    @endif

                    <a class="hotel-back-link" href="{{ route('hotel.index.es') }}">← Volver a hoteles</a>

                    <h1>{{ $hotel->title }}</h1>

                    <div class="hotel-category-row">
                        <span>Guía de Hoteles</span>

                        @if($hotel->tag)
                            <span>{{ ucfirst($hotel->tag) }}</span>
                        @endif

                        @if($hotel->price_range)
                            <span>{{ $hotel->price_range }}</span>
                        @endif
                    </div>

                    @php
                        $hotelImage = $hotel->image ? trim($hotel->image) : null;

                        if ($hotelImage && !\Illuminate\Support\Str::startsWith($hotelImage, ['http://', 'https://'])) {
                            $hotelImage = asset('storage/' . ltrim($hotelImage, '/'));
                        }

                        $hotelImage = $hotelImage ?: '/assets/img/hotels/client.jpg';
                    @endphp

                    <img
                        class="hero"
                        src="{{ $hotelImage }}"
                        alt="{{ $hotel->image_alt ?: $hotel->title }}"
                        title="{{ $hotel->title }}"
                    >

                    <div class="hotel-info-box">
                        @if($hotel->price_range)
                            <span><strong>Precio:</strong> {{ $hotel->price_range }}</span>
                        @endif

                        @if($hotel->tag)
                            <span><strong>Etiqueta:</strong> {{ ucfirst($hotel->tag) }}</span>
                        @endif

                        @if($hotel->address)
                            <span><strong>Ubicación:</strong> {{ $hotel->address }}</span>
                        @endif
                    </div>

                    @if($hotel->excerpt)
                        <div class="hotel-excerpt-box">
                            <strong>Resumen del Hotel</strong>
                            <p style="margin:0;">{{ $hotel->excerpt }}</p>
                        </div>
                    @endif

                    @if($hotel->latitude && $hotel->longitude)
                        <div class="hotel-map">
                            <iframe
                                loading="lazy"
                                allowfullscreen
                                src="https://www.google.com/maps?q={{ $hotel->latitude }},{{ $hotel->longitude }}&output=embed">
                            </iframe>
                        </div>
                    @endif

                    @if($hotel->content)
                        <div class="hotel-editor-content">
                            {!! $hotel->content !!}
                        </div>
                    @endif

                </article>

                <aside class="sidebar">

                    <div class="hotel-booking-box">
                        <x-bookingbox/>
                    </div>

                    <div class="hotel-widget">
                        <h3>Hoteles relacionados</h3>

                        @if($relatedHotels->count())
                            <div class="related-hotels">
                                @foreach($relatedHotels as $item)

                                    @php
                                        $relatedImage = $item->image ? trim($item->image) : null;

                                        if ($relatedImage && !\Illuminate\Support\Str::startsWith($relatedImage, ['http://', 'https://'])) {
                                            $relatedImage = asset('storage/' . ltrim($relatedImage, '/'));
                                        }

                                        $relatedImage = $relatedImage ?: '/assets/img/hotels/client.jpg';
                                    @endphp

                                    <a class="related-hotel" href="{{ route('hotel.show.es', ltrim($item->slug, '/')) }}">
                                        <img
                                            src="{{ $relatedImage }}"
                                            alt="{{ $item->image_alt ?: $item->title }}"
                                        >

                                        <div>
                                            <h4>{{ $item->title }}</h4>

                                            @if($item->excerpt)
                                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->excerpt), 75) }}</p>
                                            @endif
                                        </div>
                                    </a>

                                @endforeach
                            </div>
                        @else
                            <p style="margin:0;color:#5f6b7a;">Próximamente más hoteles.</p>
                        @endif
                    </div>

                </aside>

            </div>
        </div>
    </section>

    @include('layout.footer.general')
@endsection