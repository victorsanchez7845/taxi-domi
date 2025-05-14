<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Traits\ApiTrait;
use App\Traits\SeoTrait;
use App\Traits\PayPalTrait;

class ProcessController extends Controller{
    use ApiTrait, SeoTrait, PayPalTrait;
    public $seo = [];

    public function handler(Request $request){
        $this->seoData("search-result");

        $validator = Validator::make($request->all(), [
            'type' => 'required|in:OW,RT',
            'currency' => 'required|in:USD,MXN',
            'language' => 'required|in:en,es',

            'from' => 'required|max:150',
            'from_latitude' => 'required',
            'from_longitude' => 'required',
            'from_pickup_date' => 'required|date_format:Y-m-d H:i',
            
            'to' => 'required|max:150',
            'to_latitude' => 'required',
            'to_longitude' => 'required',
            'to_pickup_date' => [
                'required_if:type,RT',
                'date_format:Y-m-d H:i',
            ],
            
            'passengers' => 'required|integer|min:1|max:35',
            'service' => 'integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('home.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        }
        
        Session::put( 'quote', $request->all() );
        
        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect()->route('home.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;

        $data = ApiTrait::quote($quote);

        return view('process.search', ['data' => $data, 'seo' => $this->seo]);
    }

    public function search(){
        $this->seoData("search-result");

        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect()->route('home.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;

        $data = ApiTrait::quote($quote);
        return view('process.search', ['data' => $data, 'seo' => $this->seo]);
    }

    public function handlerCheckout(Request $request){
        $this->seoData("checkout");

        $validator = Validator::make($request->all(), [
            'id' => 'integer',
        ]);

        if ($validator->fails()) {            
            return redirect()->route('step.one.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        }
        
        Session::put( 'quote_id', $request->id );

        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect()->route('home.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;

        $data = ApiTrait::quote($quote);
        if(isset( $data['error'] )):
            return redirect()->route('home.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;

        $id = $request->id;
        $item = array_filter($data['items'], function ($item) use ( $id ) {
            return $item['id'] == $id;
        });
        
        $item = array_values($item);

        if( !isset($item[0]) ):
            return redirect()->route('step.one.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;

        $data['items'] = $item[0];
        
        $form = session()->get('client_data');

        $payment_elements = ApiTrait::paymentElements($data['items']);
        if(isset( $payment_elements['id'] )):
            $payments['status'] = true;
            $payments['data'] = $payment_elements['id'];
        endif;
        // Fin de identificador de Payment Elements de Stripe
        
        return view('process.checkout', ['quote' => $quote, 'data' => $data, 'form' => $form, 'seo' => $this->seo, 'payments' => $payments]);
    }

    public function checkout(){
        $this->seoData("checkout");
        
        $quote = session()->get('quote');
        if( $quote == NULL ):
            return redirect()->route('home.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;

        $id = session()->get('quote_id');
        if( $id == NULL ):
            return redirect()->route('home.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;

        $data = ApiTrait::quote($quote);
        if(isset( $data['error'] )):
            return redirect()->route('home.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;
        
        $item = array_filter($data['items'], function ($item) use ( $id ) {
            return $item['id'] == $id;
        });

        $item = array_values($item);

        if( !isset($item[0]) ):
            return redirect()->route('step.one.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;

        $data['items'] = $item[0];
        
        $form = session()->get('client_data');

        $payment_elements = ApiTrait::paymentElements($data['items']);
        if(isset( $payment_elements['id'] )):
            $payments['status'] = true;
            $payments['data'] = $payment_elements['id'];
        endif;
        // Fin de identificador de Payment Elements de Stripe

        return view('process.checkout', ['quote' => $quote, 'data' => $data, 'form' => $form, 'seo' => $this->seo, 'payments' => $payments]);
    }

    public function processingHandler(Request $request){
        
        $this->seoData("processing");

        $validator = Validator::make($request->all(), [
            'type' => 'required|in:OW,RT',            
            'first_name' => 'required|max:75',
            'last_name' => 'max:75',
            'email' => 'required|email|max:80',
            'phone' => 'max:25',
            'special_request' => 'max:150',
            //'payment_type' => 'required|in:paypal,credit_card,cash',
            'token' => 'required', 
            
            'arrival_airline' => 'max:25',
            'arrival_flight_number' => 'max:25',
        ]);

        Session::put( 'client_data', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'special_request' => $request->special_request,
            'arrival_airline' => (( isset( $request->arrival_airline ) )? $request->arrival_airline : ''),
            'arrival_flight_number' => (( isset($request->arrival_flight_number) )? $request->arrival_flight_number : ''),
        ] );

        if ($validator->fails()) {            
            return redirect()->route('step.two.' . app()->getLocale(), ['locale' => app()->getLocale(), "error" => implode(",", $validator->errors()->all()) ]);
        }

        $data = ApiTrait::create($request);

        if(isset( $data['error'] )):
            return redirect()->route('step.two', ['code' => $data['error']['code'], 'message' => $data['error']['message'][0] ]);
        endif;

        Session::put( 'reservation', $data);
        
        $payment_link = trans('link.quote_thank_you');

        if( in_array( $request->payment_type, ['paypal', 'credit_card'] ) ):
            $payment_link = trans('link.payment', ['uuid' => $data['config']['uuid'] ]);
        endif;

        return view('process.processing', [ 'payment' => $payment_link, 'seo' => $this->seo, 'data' => $data ]);
    }

    public function success(){
        $this->seoData("thank-you");
        return view('process.thank-you', ['seo' => $this->seo]);
    }

    public function error(){
        $this->seoData("cancel");
        return view('process.cancel', ['seo' => $this->seo]);
    }

    public function login(){
        $this->seoData("login");
        return view('process.login', ['seo' => $this->seo]);
    }

    public function loginHandler(Request $request){        
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:75',
            'email' => 'required|email|max:75',
        ]);

        if ($validator->fails()) {            
            return redirect()->route('login.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        }

        $item = [
            "code" => $request->code,
            "email" => $request->email,
            "language" => 'es'
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

        return redirect( trans('link.quote_reservation_detail', ['uuid' => $rez['config']['uuid'] ]) );        
    }

    public function reservationDetail(Request $request, ...$args){
        $uuid = $args[0];
        if (count($args) > 1) $uuid = $args[1];

        $this->seoData("reservation-detail");

        $this->seo['alternate']['en'] = str_replace("{uuid}", $uuid, $this->seo['alternate']['en']);
        $this->seo['alternate']['es'] = str_replace("{uuid}", $uuid, $this->seo['alternate']['es']);
        
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

        return view('process.reservation-detail', ['rez' => $rez, 'seo' => $this->seo]);
    }

    public function paymentPaypal(Request $request){
        $this->seoData("payment");

        $rez = session()->get('reservation');
        if( $rez == NULL ):
            return redirect()->route('login.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        endif;
        
        return view('process.card-payment', ['rez' => $rez, 'seo' => $this->seo ]);
    }

    public function paymentPayPalOrder(Request $request){
        
        $rez = session()->get('reservation');
        if( $rez == NULL ):
            return response()->json([
                'error' => [
                    'code' => 'required_params',
                    'message' =>  "Login in to your account"
                ]
            ], 404);
        endif;
        
        $order_data = $this->createPayPalOrder($rez);
        if($order_data == false):
            return response()->json([
                'error' => [
                    'code' => 'paypal_error',
                    'message' =>  "Error making the Order"
                ]
            ], 404);
        endif;

        return response()->json($order_data, 200);
    }

    public function paymentPayPalCreate(Request $request){

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
                
        $response = $this->executePayPalOrder($request->id);        

        return response()->json($response, 200);     
    }
}