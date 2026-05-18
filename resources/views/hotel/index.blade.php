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

        .hotel-card .rating {
            color: #f5c518;
            font-size: 18px;
            margin-bottom: 4px;
        }

        .hotel-card .reviews {
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 10px;
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
            margin-top: 34px;
            display: flex;
            justify-content: center;
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
        }
    </style>
@endpush

@push("push-bottom")
@endpush

@section('content')
    @include('layout.header.general', ['link' => \App\Traits\GeneralTrait::getAlternate($seo)])

    <div class="heading">
        <div class="container">
            <div class="top">
                <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                <h1>Hotels</h1>
            </div>
        </div>
    </div>

    <section class="hotels-page">
        <div class="container">
            <div class="intro">
                <h2>Find the best hotels in Dominican Republic and nearby destinations</h2>
                <p>
                    Explore recommended stays, compare options, and find the right hotel for your trip.
                    Browse our curated selection with location, price range, tag, and rating details.
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

                        <a href="{{ route('hotel.show', ltrim($hotel->slug, '/')) }}">
                            <img
                                src="{{ $hotelImage }}"
                                alt="{{ $hotel->title }}"
                            >
                        </a>

                        @if($hotel->address)
                            <div class="eyebrow">{{ $hotel->address }}</div>
                        @else
                            <div class="eyebrow">Dominican Republic</div>
                        @endif

                        <h3>
                            <a
                                href="{{ route('hotel.show', ltrim($hotel->slug, '/')) }}"
                                style="color: inherit; text-decoration: none;"
                            >
                                {{ $hotel->title }}
                            </a>
                        </h3>

                        <div class="rating">★★★★☆</div>
                        <div class="reviews">4.5 / 5 - 1114 reviews</div>

                        @if($hotel->excerpt)
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($hotel->excerpt), 95) }}</p>
                        @endif

                        @if($hotel->price_range)
                            <p class="price">
                                Price from <span>{{ $hotel->price_range }}</span>
                            </p>
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
                <p>No hotels available.</p>
            @endif
        </div>
    </section>

    @include('layout.footer.general')
@endsection