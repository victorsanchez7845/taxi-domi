@extends('layout.master')

@push("push-top")

    {{-- =========================================================
        CSS PRINCIPAL
    ========================================================== --}}
    <link href="{{ mix('/assets/css/hotels/destination.min.css') }}" rel="preload" as="style">
    <link href="{{ mix('/assets/css/hotels/destination.min.css') }}" rel="stylesheet">

    <style>

        /* =====================================================
           BLOG LAYOUT
        ====================================================== */

        .blog-index{
            background:#f5f5f3;
            padding:36px 0 60px;
        }

        /* =====================================================
           HERO SECTION
        ====================================================== */

        .blog-intro{
            display:grid;
            grid-template-columns:1.1fr 1.4fr;
            gap:40px;
            align-items:center;
            margin-bottom:56px;
        }

        .blog-intro-copy h1{
            font-size:64px;
            line-height:.95;
            color:#2f3550;
            margin-bottom:28px;
        }

        .blog-intro-copy p{
            max-width:320px;
            line-height:1.8;
            color:#4d5567;
        }

        .blog-intro-image img{
            width:100%;
            height:520px;
            object-fit:cover;
            display:block;
        }

        /* =====================================================
           FEATURED ARTICLE
        ====================================================== */

        .blog-featured{
            display:grid;
            grid-template-columns:1.1fr 1.8fr;
            gap:28px;
            align-items:start;
            margin-bottom:42px;
        }

        .blog-featured-left img{
            width:100%;
            height:360px;
            object-fit:cover;
            display:block;
        }

        .blog-featured-right{
            padding-top:12px;
        }

        .blog-featured-right h2{
            font-size:52px;
            line-height:1.05;
            color:#3a3450;
            margin-bottom:18px;
        }

        .blog-featured-right p{
            color:#4d5567;
            line-height:1.8;
            margin-bottom:18px;
            max-width:720px;
        }

        .blog-read-more{
            font-size:14px;
            border-bottom:1px solid #3a3450;
            display:inline-block;
            padding-bottom:4px;
            text-decoration:none;
            color:#2f3550;
        }

        /* =====================================================
           FEATURED GRID
        ====================================================== */

        .blog-featured-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:18px;
            margin-bottom:48px;
        }

        .blog-card-small{
            display:flex;
            flex-direction:column;
            text-decoration:none;
            height:100%;
        }

        .blog-card-small img{
            width:100%;
            height:190px;
            object-fit:cover;
            display:block;
            margin-bottom:14px;
        }

        .blog-card-small h3{
            font-size:18px;
            line-height:1.35;
            color:#2f3550;
            margin-bottom:10px;

            /* Altura uniforme */
            min-height:48px;
        }

        .blog-card-small p{
            font-size:14px;
            line-height:1.7;
            color:#5f6776;

            /* Altura uniforme */
            min-height:72px;
        }

        /* =====================================================
           GRID POSTS
        ====================================================== */

        .blog-grid-title{
            font-size:28px;
            color:#2f3550;
            margin-bottom:20px;
        }

        .blog-grid-posts{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:22px;
        }

        .blog-grid-post{
            display:flex;
            flex-direction:column;
            text-decoration:none;
            height:100%;
        }

        .blog-grid-post img{
            width:100%;
            height:220px;
            object-fit:cover;
            display:block;
            margin-bottom:12px;
        }

        .blog-grid-post h4{
            font-size:18px;
            line-height:1.35;
            color:#2f3550;
            margin-bottom:10px;

            /* Uniformidad visual */
            min-height:52px;
        }

        .blog-grid-post p{
            font-size:14px;
            line-height:1.7;
            color:#5f6776;

            /* Uniformidad visual */
            min-height:80px;
        }

        /* =====================================================
           LINKS
        ====================================================== */

        .blog-link{
            color:inherit;
            text-decoration:none;
        }

        .blog-link:hover{
            opacity:.8;
        }

        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media(max-width:1024px){

            .blog-intro,
            .blog-featured{
                grid-template-columns:1fr;
            }

            .blog-featured-grid,
            .blog-grid-posts{
                grid-template-columns:repeat(2,1fr);
            }

            .blog-intro-copy h1,
            .blog-featured-right h2{
                font-size:42px;
            }
        }

        @media(max-width:640px){

            .blog-featured-grid,
            .blog-grid-posts{
                grid-template-columns:1fr;
            }

            .blog-intro-copy h1,
            .blog-featured-right h2{
                font-size:34px;
            }

            .blog-intro-image img{
                height:320px;
            }
        }

    </style>
@endpush

@section('content')

    @include('layout.header.general', ['link' => $link, 'active' => 0])

    <section class="blog-index">

        <div class="container">

            {{-- =================================================
                BREADCRUMBS
            ================================================== --}}
            @if(isset($breadcrumbs))
                <div style="margin-bottom:16px;">
                    <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                </div>
            @endif

            {{-- =================================================
                HERO POST
            ================================================== --}}
            @if($heroPost)

                <div class="blog-intro">

                    <div class="blog-intro-copy">

                        <p style="font-weight:700;letter-spacing:.04em;text-transform:uppercase;margin-bottom:20px;">
                            Travel Blog
                        </p>

                        <h1>
                            <a
                                class="blog-link"
                                href="{{ route('blog.show', ltrim($heroPost->slug, '/')) }}"
                            >
                                {{ $heroPost->title }}
                            </a>
                        </h1>

                        @if($heroPost->excerpt)
                            <p>
                                {{ $heroPost->excerpt }}
                            </p>
                        @endif

                    </div>

                    <div class="blog-intro-image">

                        <a href="{route('blog.show', ltrim($mainFeatured->slug, '/'))">

                            @if($heroPost->featured_image)

                                <img
                                    src="{{ $heroPost->featured_image }}"
                                    alt="{{ $heroPost->title }}"
                                >

                            @else

                                <img
                                    src="/assets/img/hotels/client.jpg"
                                    alt="{{ $heroPost->title }}"
                                >

                            @endif

                        </a>

                    </div>

                </div>

            @endif

            {{-- =================================================
                FEATURED POSTS
            ================================================== --}}
            @if($featuredPosts->count())

                @php
                    $mainFeatured = $featuredPosts->first();
                    $secondaryFeatured = $featuredPosts->slice(1)->values();
                @endphp

                {{-- =============================================
                    MAIN FEATURED
                ============================================== --}}
                @if($mainFeatured)

                    <div class="blog-featured">

                        <div class="blog-featured-left">

                            <a href="{{ route('blog.show', ltrim($mainFeatured->slug, '/')) }}">

                                @if($mainFeatured->featured_image)

                                    <img
                                        src="{{ $mainFeatured->featured_image }}"
                                        alt="{{ $mainFeatured->title }}"
                                    >

                                @else

                                    <img
                                        src="/assets/img/hotels/client.jpg"
                                        alt="{{ $mainFeatured->title }}"
                                    >

                                @endif

                            </a>

                        </div>

                        <div class="blog-featured-right">

                            <h2>
                                <a
                                    class="blog-link"
                                    href="{{ route('blog.show', ltrim($mainFeatured->slug, '/')) }}"
                                >
                                    {{ $mainFeatured->title }}
                                </a>
                            </h2>

                            @if($mainFeatured->excerpt)

                                <p>
                                    {{ $mainFeatured->excerpt }}
                                </p>

                            @endif

                            <a
                                class="blog-read-more"
                                href="{{ route('blog.show', ltrim($mainFeatured->slug, '/')) }}"
                            >
                                Read more
                            </a>

                        </div>

                    </div>

                @endif

                {{-- =============================================
                    SECONDARY FEATURED
                ============================================== --}}
                @if($secondaryFeatured->count())

                    <div class="blog-featured-grid">

                        @foreach($secondaryFeatured as $post)

                            <a
                                class="blog-card-small"
                                href="{{ route('blog.show', ltrim($post->slug, '/')) }}"
                            >

                                @if($post->featured_image)

                                    <img
                                        src="{{ $post->featured_image }}"
                                        alt="{{ $post->title }}"
                                    >

                                @else

                                    <img
                                        src="/assets/img/hotels/client.jpg"
                                        alt="{{ $post->title }}"
                                    >

                                @endif

                                <h3>
                                    {{ $post->title }}
                                </h3>

                                @if($post->excerpt)

                                    <p>
                                        {{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt), 90) }}
                                    </p>

                                @endif

                            </a>

                        @endforeach

                    </div>

                @endif

            @endif

            {{-- =================================================
                GRID POSTS
            ================================================== --}}
            @if($gridPosts->count())

                <h2 class="blog-grid-title">
                    More Articles
                </h2>

                <div class="blog-grid-posts">

                    @foreach($gridPosts as $post)

                        <a
                            class="blog-grid-post"
                            href="{{ route('blog.show', ltrim($post->slug, '/')) }}"
                        >

                            @if($post->featured_image)

                                <img
                                    src="{{ $post->featured_image }}"
                                    alt="{{ $post->title }}"
                                >

                            @else

                                <img
                                    src="/assets/img/hotels/client.jpg"
                                    alt="{{ $post->title }}"
                                >

                            @endif

                            <h4>
                                {{ $post->title }}
                            </h4>

                            @if($post->excerpt)

                                <p>
                                    {{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt), 95) }}
                                </p>

                            @endif

                        </a>

                    @endforeach

                </div>

            @endif

        </div>

    </section>

    @include('layout.footer.general')

@endsection