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

        .blog-breadcrumbs {
            margin-bottom: 16px;
        }

        .blog-category-row {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            font-size: 13px;
            margin-bottom: 18px;
            color: #5f6b7a;
        }

        .blog-title {
            font-size: 46px;
            line-height: 1.08;
            margin-bottom: 16px;
            color: #243b5a;
        }

        .blog-excerpt-box {
            background: #f2f5fb;
            border-left: 4px solid #2a8cff;
            border-radius: 12px;
            padding: 18px 18px;
            margin: 24px 0 28px;
        }

        .blog-excerpt-box strong {
            display: block;
            margin-bottom: 8px;
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

        .blog-author-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 16px 18px;
            border-radius: 14px;
            background: #f8fafc;
            margin-bottom: 24px;
            border: 1px solid #e8edf5;
        }

        .blog-author-box .left p:first-child {
            margin: 0 0 6px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            color: #243b5a;
        }

        .blog-author-box .left p:last-child {
            margin: 0;
            color: #5f6b7a;
            font-size: 14px;
        }

        .blog-language-link {
            font-size: 14px;
            font-weight: 600;
        }

        .blog-content {
            color: #31445f;
            font-size: 18px;
            line-height: 1.9;
        }

        .blog-content h2,
        .blog-content h3,
        .blog-content h4 {
            color: #243b5a;
            margin-top: 34px;
            margin-bottom: 14px;
            line-height: 1.2;
        }

        .blog-content h2 {
            font-size: 34px;
        }

        .blog-content h3 {
            font-size: 28px;
        }

        .blog-content p {
            margin-bottom: 18px;
        }

        .blog-content ul,
        .blog-content ol {
            margin: 0 0 18px 22px;
        }

        .blog-content li {
            margin-bottom: 8px;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            margin: 18px 0;
        }

        .blog-content blockquote {
            margin: 24px 0;
            padding: 18px 20px;
            background: #f8fafc;
            border-left: 4px solid #2a8cff;
            border-radius: 12px;
            color: #243b5a;
        }

        .blog-sidebar-title {
            font-size: 20px;
            margin-bottom: 18px;
            color: #243b5a;
        }

        .related-list {
            display: grid;
            gap: 18px;
        }

        .related-card {
            display: block;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            text-decoration: none;
            box-shadow: 0 10px 30px rgba(16, 24, 40, 0.06);
            border: 1px solid #edf1f7;
        }

        .related-card-image img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .related-card-body {
            padding: 16px;
        }

        .related-card-label {
            display: inline-block;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .04em;
            text-transform: uppercase;
            color: #d39b00;
            margin-bottom: 10px;
        }

        .related-card-title {
            font-size: 22px;
            line-height: 1.2;
            color: #243b5a;
            margin-bottom: 12px;
        }

        .related-card-meta {
            font-size: 13px;
            color: #5f6b7a;
        }

        .blog-back-link {
            display: inline-block;
            margin-bottom: 16px;
            font-size: 14px;
            font-weight: 600;
        }

        @media (max-width: 1024px) {
            .blog-single-grid {
                grid-template-columns: 1fr;
            }

            .blog-single-sidebar {
                position: static;
            }
        }

        @media (max-width: 767px) {
            .blog-single {
                padding: 24px 0 40px;
            }

            .blog-single-main {
                padding: 18px;
                border-radius: 14px;
            }

            .blog-title {
                font-size: 34px;
            }

            .related-card-image img {
                height: 180px;
            }
        }
    </style>
@endpush

@section('content')
    @include('layout.header.general', ['link' => $link, 'active' => 0])

    <section class="blog-single">
        <div class="container">
            <div class="blog-single-grid">
                <article class="blog-single-main">
                    <div class="blog-breadcrumbs">
                        @if(isset($breadcrumbs))
                            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
                        @endif
                    </div>

                    <a class="blog-back-link" href="{{ route('blog.index') }}">← Back to blog</a>

                    <h1 class="blog-title">{{ $post->title }}</h1>

                    <div class="blog-category-row">
                        <span>Travel Guide</span>
                        <span>5 minutes</span>
                        <span>Best for: Travel, culture</span>
                    </div>

                    @if($post->featured_image)
                        <div class="blog-featured">
                            <img 
                                src="{{ $post->featured_image }}"
                                alt="{{ $post->title }}"
                                title="{{ $post->title }}"
                            >
                        </div>
                    @endif

                    <div class="blog-author-box">
                        <div class="left">
                            <p>Written by Taxi Dominicana</p>
                            <p>Discover the way, connect with nature.</p>
                        </div>

                        @if($translation)
                            <a class="blog-language-link" href="{{ route('blog.show.es', ltrim($translation->slug, '/')) }}">
                                Ver en Español
                            </a>
                        @endif
                    </div>

                    @if($post->excerpt)
                        <div class="blog-excerpt-box">
                            <strong>Article Summary</strong>
                            <p style="margin:0;">{{ $post->excerpt }}</p>
                        </div>
                    @endif

                    <div class="blog-content">
                        {!! $post->content !!}
                    </div>
                </article>

                <aside class="blog-single-sidebar">
                    <h2 class="blog-sidebar-title">Related Articles</h2>

                    <div class="related-list">
                        @forelse(($relatedPosts ?? collect()) as $related)
                            <a class="related-card" href="{{ route('blog.show', ltrim($related->slug, '/')) }}">
                                <div class="related-card-image">
                                    @if($related->featured_image)
                                        <img src="{{ $related->featured_image }}" alt="{{ $related->title }}">
                                    @else
                                        <img src="/assets/img/hotels/client.jpg" alt="{{ $related->title }}">
                                    @endif
                                </div>

                                <div class="related-card-body">
                                    <span class="related-card-label">Travel Guide</span>
                                    <div class="related-card-title">{{ $related->title }}</div>
                                    <div class="related-card-meta">Best for: Information, activities</div>
                                </div>
                            </a>
                        @empty
                            <div class="related-card">
                                <div class="related-card-body">
                                    <div class="related-card-title">More articles coming soon</div>
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