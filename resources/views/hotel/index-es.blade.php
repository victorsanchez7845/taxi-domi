@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/hotels/index.min.css') }}" rel="preload" as="style">
    <link href="{{ mix('/assets/css/hotels/index.min.css') }}" rel="stylesheet">

<style>
    .hotels-page {
        background: #f5f5f3;
        padding: 36px 0 60px;
    }

    .hotels-page .intro {
        max-width: 760px;
        margin-bottom: 38px;
    }

    .hotels-page .intro h2 {
        font-size: 42px;
        line-height: 1.05;
        color: #2f3550;
        margin-bottom: 18px;
    }

    .hotels-page .intro p {
        color: #4d5567;
        line-height: 1.8;
        margin-bottom: 12px;
    }

    .hotels-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 22px;
    }

    .hotel-card {
        display: block;
        text-decoration: none;
        color: inherit;
    }

    .hotel-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        display: block;
        margin-bottom: 12px;
        border-radius: 14px;
    }

    .hotel-card .eyebrow {
        font-size: 13px;
        line-height: 1.5;
        color: #6b7280;
        margin-bottom: 6px;
    }

    .hotel-card h3 {
        font-size: 18px;
        line-height: 1.35;
        color: #2f3550;
        margin-bottom: 10px;
    }

    .hotel-card h3 a {
        color: inherit;
        text-decoration: none;
    }

    .hotel-card p {
        font-size: 14px;
        line-height: 1.7;
        color: #5f6776;
        margin-bottom: 8px;
    }

    .hotel-card .price span {
        font-weight: 700;
        color: #2f3550;
    }

    .hotels-pagination {
        margin-top: 48px;
        display: flex;
        justify-content: center;
    }

    .hotels-pagination nav {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        background: #ffffff !important;
        border-radius: 24px !important;
        padding: 18px 26px !important;
        box-shadow: 0 18px 40px rgba(16, 24, 40, 0.12) !important;
    }

    .hotels-pagination nav > div:first-child {
        display: none !important;
    }

    .hotels-pagination nav > div:last-child {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }

    .hotels-pagination nav > div:last-child > div:first-child {
        display: none !important;
    }

    .hotels-pagination nav > div:last-child > div:last-child {
        display: flex !important;
        align-items: center !important;
        gap: 10px !important;
    }

    .hotels-pagination a,
    .hotels-pagination span {
        min-width: 46px !important;
        height: 46px !important;
        padding: 0 14px !important;
        border-radius: 14px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: 18px !important;
        font-weight: 600 !important;
        line-height: 1 !important;
        text-decoration: none !important;
        border: none !important;
        transition: .2s ease;
    }

    .hotels-pagination a {
        background: #eef0ff !important;
        color: #5146e5 !important;
    }

    .hotels-pagination a:hover {
        background: #5146e5 !important;
        color: #fff !important;
    }

    .hotels-pagination span[aria-current="page"] span {
        background: #5146e5 !important;
        color: #fff !important;
        min-width: 46px !important;
        height: 46px !important;
        border-radius: 14px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
    }

    .hotels-pagination svg {
        width: 18px !important;
        height: 18px !important;
        max-width: 18px !important;
        max-height: 18px !important;
    }

    .hotels-pagination a[rel="prev"],
    .hotels-pagination a[rel="next"] {
        width: auto !important;
        background: transparent !important;
        color: #5146e5 !important;
        font-size: 20px !important;
        gap: 8px !important;
        padding: 0 10px !important;
    }

    .hotels-pagination span[aria-disabled="true"] {
        opacity: .45 !important;
        background: transparent !important;
    }

    .hotels-pagination p {
        display: none !important;
    }

    @media (max-width: 1024px) {
        .hotels-page .intro h2 {
            font-size: 34px;
        }

        .hotels-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .hotels-grid {
            grid-template-columns: 1fr;
        }

        .hotels-page .intro h2 {
            font-size: 28px;
        }

        .hotels-pagination nav {
            padding: 14px 18px !important;
            border-radius: 18px !important;
        }

        .hotels-pagination a,
        .hotels-pagination span {
            min-width: 40px !important;
            height: 40px !important;
            font-size: 16px !important;
        }
    }
</style>
@endpush

@push("push-bottom")
@endpush

@section('content')
    @include('layout.header.general', ['link' => $link, 'active' => 0])

    <div class="heading">
        <div class="container">
            <div class="top">
                <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                <h1>Hoteles</h1>
            </div>
        </div>
    </div>

    <section class="hotels-page">
        <div class="container">
            <div class="intro">
                <h2>Encuentra los mejores hoteles en República Dominicana y destinos cercanos</h2>
                <p>
                    Explora hospedajes recomendados, compara opciones y encuentra el hotel ideal para tu viaje.
                    Revisa ubicación, rango de precio, etiqueta y calificación.
                </p>
            </div>

            @if($hotels->count())
                <div class="hotels-grid">
                    @foreach($hotels as $hotel)

                        @php
                            $hotelImage = $hotel->image ? trim($hotel->image) : null;

                            if ($hotelImage && !\Illuminate\Support\Str::startsWith($hotelImage, ['http://', 'https://'])) {
                                $hotelImage = asset('storage/' . ltrim($hotelImage, '/'));
                            }

                            $hotelImage = $hotelImage ?: '/assets/img/hotels/client.jpg';
                        @endphp

                        <div class="hotel-card">

                            <a href="{{ route('hotel.show.es', ltrim($hotel->slug, '/')) }}">
                                <img
                                    src="{{ $hotelImage }}"
                                    alt="{{ $hotel->title }}"
                                >
                            </a>

                            @if($hotel->address)
                                <div class="eyebrow">{{ $hotel->address }}</div>
                            @else
                                <div class="eyebrow">República Dominicana</div>
                            @endif

                            <h3>
                                <a
                                    href="{{ route('hotel.show.es', ltrim($hotel->slug, '/')) }}"
                                    style="color: inherit; text-decoration: none;"
                                >
                                    {{ $hotel->title }}
                                </a>
                            </h3>

                            @if($hotel->excerpt)
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($hotel->excerpt), 95) }}</p>
                            @endif

                            @if($hotel->price_range)
                                <p class="price">Precio desde <span>{{ $hotel->price_range }}</span></p>
                            @endif

                            @if($hotel->tag)
                                <p>{{ ucfirst($hotel->tag) }}</p>
                            @endif

                        </div>

                    @endforeach
                </div>

                <div class="hotels-pagination">
                    {{ $hotels->links() }}
                </div>
            @else
                <p>No hay hoteles disponibles.</p>
            @endif
        </div>
    </section>

    @include('layout.footer.general')
@endsection