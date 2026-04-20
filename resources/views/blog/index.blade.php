@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="stylesheet">
    <style>
        .blog-list { margin-top: 50px; }
        .post-card { margin-bottom: 30px; border-bottom: 1px solid #eee; padding-bottom: 20px; }
        .post-card img { max-width: 100%; height: auto; border-radius: 8px; }
        .post-card h2 { margin-top: 15px; }
        .post-card .meta { color: #888; font-size: 0.9em; margin-bottom: 10px; }
        .post-card .excerpt { margin-bottom: 15px; }
        .read-more { color: #007bff; text-decoration: none; font-weight: bold; }
    </style>
@endpush

@section('content')
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo ), 'active' => 4])

    <div class="container main-content">
        <div class="left">
             <x-bookingbox/>
        </div>
        <div class="right">
            <x-breadcrumb :breadcrumbs="$breadcrumbs"/>
            <h1>Blog</h1>

            <div class="blog-list">
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                        <div class="post-card">
                            @if($post->image)
                                <img src="{{ $post->image }}" alt="{{ app()->getLocale() == 'es' ? $post->title_es : $post->title_en }}">
                            @endif
                            <h2>{{ app()->getLocale() == 'es' ? $post->title_es : $post->title_en }}</h2>
                            <div class="meta">
                                {{ $post->published_at->format('M d, Y') }}
                            </div>
                            <div class="excerpt">
                                {{ Str::limit(strip_tags(app()->getLocale() == 'es' ? $post->content_es : $post->content_en), 200) }}
                            </div>
                            @php
                                $params = ['slug' => $post->slug];
                                if(app()->getLocale() == 'es') $params['locale'] = 'es';
                            @endphp
                            <a href="{{ route('blog.show.' . app()->getLocale(), $params) }}" class="read-more">
                                {{ app()->getLocale() == 'es' ? 'Leer más' : 'Read more' }}
                            </a>
                        </div>
                    @endforeach

                    {{ $posts->links() }}
                @else
                    <p>{{ app()->getLocale() == 'es' ? 'No hay posts publicados.' : 'No posts published.' }}</p>
                @endif
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection
