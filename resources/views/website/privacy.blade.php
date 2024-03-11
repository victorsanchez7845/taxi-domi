@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/website/privacy.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/website/privacy.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])

    <div class="parallax-container">
        <div class="container">
            @if(app()->getLocale() == "es")
                <h1>AVISO DE PRIVACIDAD</h1>
            @else
                <h1>PRIVACY POLICY</h1>
            @endif            
        </div>
    </div>

    <div class="container items_privacy">
        {!! $terms !!}
    </div>

    @include('layout.footer.general')
@endsection