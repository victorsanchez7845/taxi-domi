@extends('layout.master')
@push("push-top")
    <link href="{{ mix('/assets/css/process/card-payment-mifel.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/process/card-payment-mifel.min.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.js" type="text/javascript"></script>

    <script>                
        const promotions = JSON.parse('{{ json_encode($mifel["promotions"]["months"]) }}');

        var wpwlOptions = {
            locale: "{{ app()->getLocale() }}",
            maskCvv: true,
            billingAddress: {},
            brandDetection: true,
            mandatoryBillingFields:{
                country: true,
                state: true,
                city: true,
                postcode: true,
                street1: true,
                street2: false
            },
            onReady: function(e){
                $('.wpwl-form-card').find('.wpwl-button-pay').on('click', function(e){
                    validateHolder(e);
                });
                
                
                if (promotions.length > 0) {

                    function buildSelectOptions(promotions) {
                        return promotions.map(promotion => `<option value="${promotion}">${promotion}</option>`).join('');
                    }
                    
                    var numberOfInstallmentsHtml = `
                        <div class="wpwl-label wpwl-label-custom" style="display:inline-block">Number of Installments</div>
                        <div class="wpwl-wrapper wpwl-wrapper-custom" style="display:inline-block">
                            <select name="recurring.numberOfInstallments">
                                ${buildSelectOptions(promotions)}
                            </select>
                        </div>
                    `;

                    /*$('form.wpwl-form-card').find('.wpwl-button').before(numberOfInstallmentsHtml);*/
                }
            },
            onBeforeSubmitCard: function(e){
                return validateHolder(e);
            }
        }
        function validateHolder(e){
            var holder = $('.wpwl-control-cardHolder').val();
            if (holder.trim().length < 2){
                $('.wpwl-control-cardHolder').addClass('wpwl-has-error').after('<div class="wpwl-hint wpwl-hint-cardHolderError">Invalid card holder</div>');
                return false;
            }
            return true;
        }

    </script>
    <script src="https://eu-prod.oppwa.com/v1/paymentWidgets.js?checkoutId={{ $mifel['url'] }}"></script>
@endpush
@push("push-bottom")
    <x-analytics/>
    <x-hotjar/>
@endpush

@section('content')
    @include('layout.header.checkout',['link' => \App\Traits\GeneralTrait::getAlternate( $seo )])
    
    <div class="container payment-container">
        <div class="left">
            <div class="top">
                <h1>@lang('quote/payment.title') <span>{{ $rez['status'] }}</span></h1>
                <h2>@lang('quote/payment.hi'), {{ $rez['client']['first_name'] }}</h2>
                <div>
                    <p><strong>@lang('quote/payment.phone')</strong>: {{ $rez['client']['phone'] }}</p>
                    <p><strong>E-mail</strong>: {{ $rez['client']['email'] }}</p>
                </div>
            </div>
    
            <div class="resume">
                <p>Total</p>
                <p>${{ $mifel['promotions']['default']['price'] }} {{ $mifel['promotions']['default']['currency'] }}</p>
            </div>
    
            <div class="items">
                @foreach ($rez['items'] as $key => $value)                    
                <div class="item">
                    <div class="one">
                        <h2>@lang('quote/payment.travel_information')</h2>
                        <h3>@lang('quote/payment.reservation_code'): <strong>{{ $key }}</strong></h3>
                    </div>
                    <div class="two">
                        <div>
                            <img src="/assets/img/svg/location.svg">
                            <p>@lang('quote/payment.type_of_service') <span>{{ (( $value['is_round_trip'] == 0 )? __('quote/payment.one_way') : __('quote/payment.round_trip') ) }}</span></p>
                        </div>
                        <div>
                            <img src="/assets/img/svg/location-tick.svg">
                            <p>@lang('quote/payment.passengers') <span>{{ $value['passengers'] }} Pax</span></p>
                        </div>
                    </div>
                    <div class="three">
                        <div class="one">
                            <p>@lang('quote/payment.leaving_from')</p>
                            <p>{{ $value['from']['name'] }}</p>
                        </div>
                        <div class="two">
                            <img src="/assets/img/svg/loader-points.svg" width="20" height="20" alt="" title="" loading="lazy">
                        </div>
                        <div class="three">
                            <p>@lang('quote/payment.going_to')</p>
                            <p>{{ $value['to']['name'] }}</p>
                        </div>
                    </div>
                    <div class="four">
                        @if(!empty( $value['flight_number'] ))
                            <p>@lang('quote/payment.flight_number') <span>{{ $value['flight_number'] }}</span></p>
                        @endif
                        <p>@lang('quote/payment.pickup') <span>{{ date("Y-m-d", strtotime($value['pickup'])) }} @ {{ date("H:i", strtotime( $value['pickup'] )) }}</span></p>
                        @if( !empty( $value['departure_pickup'] ) )
                            <p>@lang('quote/payment.departure') <span>{{ date("Y-m-d", strtotime($value['departure_pickup'])) }} @ {{ date("H:i", strtotime( $value['departure_pickup'] )) }}</span></p>
                        @endif
                    </div>
                    <div class="five"></div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="right">
            @if(isset( $mifel['promotions']['table'] ))
                <table>
                    <caption>
                        @if(app()->getLocale() == "es")
                            El plan de pagos fijos sólo aplica con tarjetas de crédito méxicanas*.
                        @else
                            The fixed payment plan only applies to Mexican credit cards*.
                        @endif
                    </caption>
                    <tbody>
                        <tr>
                            <th class="a-text-left a-nowrap">
                                @if(app()->getLocale() == "es")
                                    Plazo
                                @else
                                    Time
                                @endif
                            </th>
                            <th class="a-text-right">
                                @if(app()->getLocale() == "es")
                                    Por mes
                                @else
                                    By month
                                @endif
                            </th>
                            <th class="a-text-right">
                                @if(app()->getLocale() == "es")
                                    Costo de financiamiento
                                @else
                                    Financing cost
                                @endif
                            </th>
                            <th class="a-text-right"><span class="a-text-caps">Total</span></th>
                        </tr>
                        @foreach( $mifel['promotions']['table'] as $key => $value )
                            <tr>
                                <td class="a-text-left a-nowrap">
                                    @if( $value['months'] == 1 )
                                        @if(app()->getLocale() == "es")
                                            Una vez
                                        @else
                                            One time
                                        @endif 
                                    @else
                                        {{ $value['months'] }} {{ (( app()->getLocale() == "es" )?'meses':'months') }}
                                    @endif    
                                </td>
                                <td class="a-text-right">${{ $value['monthly'] }}*</td>
                                <td class="a-text-right">
                                    @if( $value['months'] == 1 )
                                        @if(app()->getLocale() == "es")
                                            GRATIS
                                        @else
                                            FREE
                                        @endif                                        
                                    @endif
                                    @if( $value['months'] > 1 )
                                        ${{ $value['financing'] }}
                                    @endif
                                </td>
                                <td class="a-text-right">${{ $value['total'] }}</td>
                            </tr>         
                        @endforeach
                    </tbody>
                </table>
            @endif

            
            <form action="https://tulumairportcab.com{{__('link.quote_thank_you')}}" class="paymentWidgets" data-brands="VISA MASTER"></form>
            <img src="/assets/img/payments/card-options.png">
        </div>
    </div>
    
    
    @include('layout.footer.checkout')
@endsection