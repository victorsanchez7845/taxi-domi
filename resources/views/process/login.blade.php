@extends('layout.master')

@push("push-top")
    <link href="{{ mix('/assets/css/process/login.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/login.min.css') }}" rel="stylesheet">   
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.general',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])
    @php
        $item = [
            "error" => false,
            "code" => (( isset($data['code']) )? $data['code'] :''),
            "email" => (( isset($data['email']) )? $data['email'] :''),
        ];
        if( isset($data['code']) || isset($data['email']) ):
            $item['error'] = true;
        endif;
    @endphp
    <div class="blue-container">
        <div class="container">
            @if(app()->getLocale() == "es")
                <h1>DATOS DE RESERVACIÓN</h1>
            @else
                <h1>RESERVATION DATA</h1>
            @endif            
        </div>
    </div>

    <div class="container elements">
        <form action="@lang('link.reservation')" method="POST">
            @if(app()->getLocale() == "es")
                <h2>MI RESERVACIÓN</h2>
            @else
                <h2>MY RESERVATION</h2>
            @endif            
            <div>
                @if(app()->getLocale() == "es")
                    <label>CÓDIGO DE RESERVACIÓN:</label>
                @else
                    <label>RESERVATION CODE:</label>
                @endif
                <input type="text" class="form-control" name="code" value="{{ $item['code'] }}" required>
            </div>
            <div>
                <label>EMAIL:</label>
                <input type="email" class="form-control" name="email" value="{{ $item['email'] }}" required>
            </div>
            @csrf
            <button type="submit">
                @if(app()->getLocale() == "es")
                    BUSCAR
                @else
                    SEARCH
                @endif
            </button>
            @if($item['error'] == true)
                <div class="badge-error">
                    @if(app()->getLocale() == "es")
                        <p>Código de reservación o email incorrectos</p>
                    @else
                        <p>Incorrect reservation code or email</p>
                    @endif
                </div>
            @endif
        </form>
    </div>

    @include('layout.footer.general')
@endsection