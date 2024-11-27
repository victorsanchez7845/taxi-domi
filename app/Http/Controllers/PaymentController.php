<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ApiTrait;
use App\Traits\SeoTrait;

class PaymentController extends Controller{
    use ApiTrait, SeoTrait;
    public $seo = [];

    public function payment(){
        $this->seoData("card-payment-mifel");

        $rez = session()->get('reservation');
        if( $rez == NULL ):
            return redirect()->route('login.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;
        
        $payment_data = [
            "type" => 'MIFEL',
            "id" => $rez['config']['id'],
            "language" => app()->getLocale(),
            "success_url" => trans('link.quote_thank_you'),
            "cancel_url" => trans('link.quote_cancel')
        ];
        
        $mifel = ApiTrait::paymentLink($payment_data);

        return view('process.card-payment-mifel', ['seo' => $this->seo, 'rez' => $rez, 'mifel' => $mifel]);
    }

    public function santander(){
        $this->seoData("card-payment-mifel");

        $rez = session()->get('reservation');
        if( $rez == NULL ):
            return redirect()->route('login.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;
        
        $payment_data = [
            "type" => 'SANTANDER',
            "id" => $rez['config']['id'],
            "language" => app()->getLocale(),
            "success_url" => trans('link.quote_thank_you'),
            "cancel_url" => trans('link.quote_cancel')
        ];
        
        $bank = ApiTrait::paymentLink($payment_data);        

        return view('process.card-payment-santander', ['seo' => $this->seo, 'rez' => $rez, 'bank' => $bank]);
    }
}