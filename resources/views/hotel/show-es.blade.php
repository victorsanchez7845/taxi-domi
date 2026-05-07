@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="preload" as="style">
    <link href="{{ mix('/assets/css/destinations/tulum.min.css') }}" rel="stylesheet">

    <style>


        .hotel-editor-content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px auto;
            border-radius: 10px;
        }

        .hotel-editor-content figure {
            margin: 24px 0;
        }

        .hotel-editor-content a {
            word-break: break-word;
        }

        .hotel-editor-content figcaption {
            font-size: 13px;
            color: #6b7280;
            margin-top: 8px;
            text-align: center;
        }

        .hotel-single {
            padding: 40px 0 60px;
            background: #f5f5f3;
        }

        .hotel-single .content-wrap {
            display: grid;
            grid-template-columns: minmax(0, 2fr) minmax(300px, 380px);
            gap: 36px;
            align-items: start;
        }

        .hotel-single .main {
            background: #fff;
            padding: 28px;
            border-radius: 12px;
        }

        .hotel-single .main img.hero {
            width: 100%;
            height: 420px;
            object-fit: cover;
            display: block;
            margin-bottom: 22px;
            border-radius: 10px;
        }

        .hotel-single .main h1 {
            font-size: 42px;
            line-height: 1.05;
            color: #2f3550;
            margin-bottom: 12px;
        }

        .hotel-single .meta {
            font-size: 14px;
            color: #5f6776;
            margin-bottom: 18px;
        }

        .hotel-single .rating {
            color: #f5c518;
            font-size: 20px;
            margin-bottom: 6px;
        }

        .hotel-single .reviews {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 18px;
        }

        .hotel-single .excerpt {
            font-size: 16px;
            line-height: 1.8;
            color: #4d5567;
            margin-bottom: 22px;
        }

        .hotel-single .content {
            color: #3f4656;
            line-height: 1.85;
        }

        .hotel-single .sidebar {
            display: grid;
            gap: 24px;
        }

        .hotel-widget {
            background: #fff;
            border-radius: 12px;
            padding: 22px;
        }

        .hotel-widget h3 {
            font-size: 20px;
            color: #2f3550;
            margin-bottom: 16px;
        }

        .hotel-search-form {
            display: grid;
            gap: 10px;
        }

        .hotel-search-form input {
            width: 100%;
            border: 1px solid #d7dce5;
            border-radius: 8px;
            padding: 12px 14px;
        }

        .hotel-search-form button {
            border: 0;
            border-radius: 8px;
            padding: 12px 16px;
            background: #2f3550;
            color: #fff;
            cursor: pointer;
        }

        .related-hotels {
            display: grid;
            gap: 18px;
        }

        .related-hotel {
            display: grid;
            grid-template-columns: 88px 1fr;
            gap: 12px;
            text-decoration: none;
            color: inherit;
        }

        .related-hotel img {
            width: 88px;
            height: 88px;
            object-fit: cover;
            border-radius: 8px;
        }

        .related-hotel h4 {
            font-size: 16px;
            line-height: 1.35;
            color: #2f3550;
            margin-bottom: 6px;
        }

        .related-hotel p {
            font-size: 13px;
            color: #6b7280;
            line-height: 1.5;
        }

        @media (max-width: 1024px) {
            .hotel-single .content-wrap {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush

@section('content')
    @include('layout.header.general', ['link' => $link, 'active' => 0])

    <div class="heading">
        <div class="container">
            <div class="top">
                <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
            </div>
        </div>
    </div>

    <section class="hotel-single">
        <div class="container">
            <div class="content-wrap">

                {{-- MAIN --}}
                <div class="main">

                    <img
                        class="hero"
                        src="{{ $hotel->image ? asset('storage/' . $hotel->image) : '/assets/img/hotels/client.jpg' }}"
                        alt="{{ $hotel->image_alt ?: $hotel->title }}"
                    >

                    <h1>{{ $hotel->title }}</h1>

                    <div class="rating">★★★★☆</div>
                    <div class="reviews">4.5 / 5 - 1114 reseñas</div>

                    <div class="meta">
                        @if($hotel->price_range)
                            <strong>Precio:</strong> {{ $hotel->price_range }}
                        @endif

                        @if($hotel->tag)
                            &nbsp; | &nbsp;<strong>Etiqueta:</strong> {{ ucfirst($hotel->tag) }}
                        @endif

                        @if($hotel->address)
                            &nbsp; | &nbsp;<strong>Ubicación:</strong> {{ $hotel->address }}
                        @endif
                    </div>

                    @if($hotel->excerpt)
                        <div class="excerpt">{{ $hotel->excerpt }}</div>
                    @endif

                    @if($hotel->latitude && $hotel->longitude)
                        <div style="margin-bottom: 24px;">
                            <iframe
                                width="100%"
                                height="320"
                                style="border:0;border-radius:10px;"
                                loading="lazy"
                                allowfullscreen
                                src="https://www.google.com/maps?q={{ $hotel->latitude }},{{ $hotel->longitude }}&output=embed">
                            </iframe>
                        </div>
                    @endif

                    @if($hotel->content)
                        <div class="content hotel-editor-content">
                           {!! $hotel->content !!}
                        </div>
                    @endif
                </div>

                {{-- SIDEBAR --}}
                <aside class="sidebar">

                    {{-- SEARCH --}}
                    <div class="hotel-widget">
                        <h3>Buscar</h3>

                        <form class="hotel-search-form" action="{{ route('hotel.index.es') }}" method="GET">
                            <input type="text" name="q" placeholder="Buscar hoteles...">
                            <button type="submit">Buscar</button>
                        </form>
                    </div>

                    {{-- RELATED --}}
                    <div class="hotel-widget">
                        <h3>Hoteles relacionados</h3>

                        @if($relatedHotels->count())
                            <div class="related-hotels">
                                @foreach($relatedHotels as $item)
                                    <a class="related-hotel" href="{{ route('hotel.show.es', ltrim($item->slug, '/')) }}">
                                            <img
                                                src="{{ $item->image ? asset('storage/' . $item->image) : '/assets/img/hotels/client.jpg' }}"
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
                        @endif
                    </div>

                </aside>

            </div>
        </div>
    </section>

    @include('layout.footer.general')
@endsection