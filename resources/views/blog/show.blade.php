@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/index.min.css') }}" rel="stylesheet">
    <style>
        .post-content { margin-top: 30px; line-height: 1.6; }
        .post-content img { max-width: 100%; height: auto; border-radius: 8px; margin-bottom: 20px; }
        .post-meta { color: #888; margin-bottom: 20px; }
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

            <article>
                <h1>{{ app()->getLocale() == 'es' ? $post->title_es : $post->title_en }}</h1>
                <div class="post-meta">
                    {{ $post->published_at->format('M d, Y') }}
                </div>

                @if($post->image)
                    <img src="{{ $post->image }}" alt="{{ app()->getLocale() == 'es' ? $post->title_es : $post->title_en }}">
                @endif

                <div class="post-content">
                    {!! app()->getLocale() == 'es' ? $post->content_es : $post->content_en !!}
                </div>
            </article>

            <div style="margin-top: 50px;">
                <a href="{{ route('blog.index.' . app()->getLocale(), ['locale' => app()->getLocale()]) }}" class="btn-back">
                    &larr; {{ app()->getLocale() == 'es' ? 'Volver al Blog' : 'Back to Blog' }}
                </a>
            </div>
        </div>
    </div>

    @include('layout.footer.general')
@endsection
