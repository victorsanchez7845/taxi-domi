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

    public function paypalCapture(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                    'error' => [
                        'code' => 'required_params',
                        'message' =>  $validator->errors()->all() 
                    ]
                ], 404);
        }
        
        $data = ApiTrait::payPalCaptureOrder($request->id);
        return response()->json($data['data'], 200);
    }

    public function paymentUUID(Request $request, ...$args){
        $uuid = $args[0];
        if (count($args) > 1) $uuid = $args[1];

        $item = [
            "uuid" => $uuid,
            "language" => app()->getLocale()
        ];

        $rez = ApiTrait::checkReservation($item);
        
        if( isset( $rez['error'] ) ):
            return redirect()->to(
                trans('link.reservation') . '?' . http_build_query([
                    'code' => $rez['error']['code'],
                    'message' => $rez['error']['message']
                ])
            );
        endif;
        
        //PayPal
        $payment_data = [
            "type" => 'PAYPAL-V2',
            "id" => $rez['config']['id'],
            "language" => app()->getLocale(),
            "success_url" => trans('link.quote_thank_you'),
            "cancel_url" => trans('link.quote_cancel')
        ];

        $paypal = ApiTrait::paymentLink($payment_data);
        if(!isset( $paypal['url'] )) $paypal['url'] = NULL;   

        //STRIPE ORDER
        $payment_data = [
            "language" => app()->getLocale(),
            "price" => $rez['payments']['pending'],
            "currency" => $rez['config']['currency'],
            "id" => $rez['config']['id']
        ];
        
        $stripe = ApiTrait::paymentElements($payment_data);
        if(!isset( $stripe['id'] )) $stripe['id'] = NULL;

        $this->seoData("payment-all");

        $this->seo['alternate']['en'] = str_replace("{uuid}", $uuid, $this->seo['alternate']['en']);
        $this->seo['alternate']['es'] = str_replace("{uuid}", $uuid, $this->seo['alternate']['es']);
        
        return view('process.payment.index', ['seo' => $this->seo, 'data' => $rez, "paypal_id" => $paypal['url'], "stripe_id" => $stripe['id'], "uuid" => $uuid ]);
    }
}