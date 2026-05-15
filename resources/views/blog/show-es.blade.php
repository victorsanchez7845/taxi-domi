@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/hotels/destination.min.css') }}" rel="preload" as="style">
    <link href="{{ mix('/assets/css/hotels/destination.min.css') }}" rel="stylesheet">

    <style>
        .blog-single {
            padding: 40px 0 60px;
            background: #f7f8fb;
        }

        .blog-single-grid {
            display: grid;
            grid-template-columns: minmax(0, 2fr) 340px;
            gap: 32px;
            align-items: start;
        }

        .blog-single-main {
            background: #fff;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(16, 24, 40, 0.06);
        }

        .blog-single-sidebar {
            position: sticky;
            top: 110px;
        }

        .blog-title {
            font-size: 46px;
            line-height: 1.08;
            margin-bottom: 16px;
            color: #243b5a;
        }

        .blog-featured {
            margin: 20px 0 26px;
        }

        .blog-featured img {
            width: 100%;
            height: auto;
            border-radius: 16px;
            display: block;
        }

        .blog-content {
            color: #31445f;
            font-size: 18px;
            line-height: 1.9;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            margin: 18px 0;
        }

        .related-card-image img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }
    </style>
@endpush

@section('content')
    @include('layout.header.general', ['link' => $link, 'active' => 0])

    <section class="blog-single">
        <div class="container">
            <div class="blog-single-grid">

                <article class="blog-single-main">

                    @if(isset($breadcrumbs))
                        <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                    @endif

                    <a class="blog-back-link" href="{{ route('blog.index.es') }}">
                        ← Volver al blog
                    </a>

                    <h1 class="blog-title">{{ $post->title }}</h1>

                    @if($post->featured_image)
                        <div class="blog-featured">
                            <img 
                                src="{{ $post->featured_image }}"
                                alt="{{ $post->title }}"
                                title="{{ $post->title }}"
                            >
                        </div>
                    @endif

                    @if($post->excerpt)
                        <div class="blog-excerpt-box">
                            <strong>Resumen del artículo</strong>
                            <p style="margin:0;">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                    @endif

                    <div class="blog-content">
                        {!! $post->content !!}
                    </div>

                </article>

                <aside class="blog-single-sidebar">
                    <h2 class="blog-sidebar-title">
                        Artículos relacionados
                    </h2>

                    <div class="related-list">

                        @forelse(($relatedPosts ?? collect()) as $related)

                            <a 
                                class="related-card" 
                                href="{{ route('blog.show.es', ltrim($related->slug, '/')) }}"
                            >

                                <div class="related-card-image">

                                    @if($related->featured_image)

                                        <img 
                                            src="{{ $related->featured_image }}" 
                                            alt="{{ $related->title }}"
                                        >

                                    @else

                                        <img 
                                            src="/assets/img/hotels/client.jpg" 
                                            alt="{{ $related->title }}"
                                        >

                                    @endif

                                </div>

                                <div class="related-card-body">
                                    <span class="related-card-label">
                                        Guía de viaje
                                    </span>

                                    <div class="related-card-title">
                                        {{ $related->title }}
                                    </div>

                                    <div class="related-card-meta">
                                        Ideal para: Información, actividades
                                    </div>
                                </div>

                            </a>

                        @empty

                            <div class="related-card">
                                <div class="related-card-body">
                                    <div class="related-card-title">
                                        Más artículos próximamente
                                    </div>
                                </div>
                            </div>

                        @endforelse

                    </div>
                </aside>

            </div>
        </div>
    </section>

    @include('layout.footer.general')
@endsection