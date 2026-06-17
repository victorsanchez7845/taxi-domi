<?php

namespace App\Traits;

use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

trait ApiTrait
{
    /*
    |--------------------------------------------------------------------------
    | CONFIGURACIÓN DEL SITIO
    |--------------------------------------------------------------------------
    */

    public static $site_id = 19;

    public static $api_key = 'bb65be85-82f9-492f-bbd6-4a698509106a';

    public static $user = 'taxi-riviera-maya';

    public static $password = 'u92xSp0mT8qlF9t';

    /*
    |--------------------------------------------------------------------------
    | TIPOS DE SERVICIO
    |--------------------------------------------------------------------------
    */

    public static $types = [
        "OW" => "one-way",
        "RT" => "round-trip",
    ];

    /*
    |--------------------------------------------------------------------------
    | AUTOCOMPLETE
    |--------------------------------------------------------------------------
    |
    | Ahora soporta múltiples destinos.
    |
    | destination_id:
    |
    | 1 = Cancún
    | 2 = Los Cabos
    | 3 = Punta Cana
    |
    */

    public static function autocomplete(
        $keyword,
        $destination_id = 3
    ) {

        $headers[] = 'app-key: ' . self::$api_key;

        return self::sendRequest(
            '/api/v1/autocomplete-affiliates',
            'POST',
            [
                'keyword' => $keyword,
                'destination_id' => $destination_id
            ],
            $headers
        );
    }

    /*
    |--------------------------------------------------------------------------
    | DATOS VACÍOS POR DEFECTO
    |--------------------------------------------------------------------------
    */

    public static function empty()
    {
        $tpv = [

            "type" => "one-way",

            /*
            |--------------------------------------------------------------------------
            | ORIGEN DEFAULT
            |--------------------------------------------------------------------------
            | Punta Cana International Airport
            */

            "start" => [
                "place" => "Punta Cana International Airport",
                "lat" => "18.567367",
                "lng" => "-68.363431",
                "pickup" => date("Y-m-d H:i"),
            ],

            /*
            |--------------------------------------------------------------------------
            | DESTINO DEFAULT
            |--------------------------------------------------------------------------
            | Barceló Punta Cana
            */

            "end" => [
                "place" => "Barceló Punta Cana",
                "lat" => "18.715946",
                "lng" => "-68.450338",
                "pickup" => NULL,
            ],

            "language" => "en",

            "passengers" => 1,

            "currency" => "USD",

            // Grupo tarifa default
            "rate_group" => "xLjDl18",
        ];

        return $tpv;
    }

    /*
    |--------------------------------------------------------------------------
    | LOGIN API
    |--------------------------------------------------------------------------
    */

    public static function init()
    {
        $response = [
            "status" => false
        ];

        $data = self::sendRequest(
            '/api/v1/oauth',
            'POST',
            [
                'user' => self::$user,
                'secret' => self::$password
            ]
        );

        if (isset($data['error'])) {

            $response['code'] = $data['error']['code'];

            $response['message'] = $data['error']['message'];

            return $response;
        }

        $response['status'] = true;

        $response['data'] = $data;

        return $response;
    }

    /*
    |--------------------------------------------------------------------------
    | TOKEN SESSION
    |--------------------------------------------------------------------------
    */

    public static function checkToken()
    {
        if (!Session::has('tpv')) {

            $token = self::init();

            $tpv['token'] = [
                "token" => $token['data']['token'],
                "expires_in" => date(
                    "Y-m-d H:i:s",
                    strtotime(
                        date("Y-m-d H:i:s") .
                            " + " .
                            $token['data']['expires_in'] .
                            " seconds"
                    )
                )
            ];

            Session::put('tpv', $tpv);

        } else {

            $tpv = Session::get('tpv');

            if (isset($tpv['token']['expires_in'])) {

                $nowDate = date(
                    'Y-m-d H:i:s',
                    strtotime(date("Y-m-d H:i:s") . ' - 1440 minutes')
                );

                if ($nowDate <= $tpv['token']['expires_in']) {

                    $token = self::init();

                    $tpv['token'] = [
                        "token" => $token['data']['token'],
                        "expires_in" => date(
                            "Y-m-d H:i:s",
                            strtotime(
                                date("Y-m-d H:i:s") .
                                    " + " .
                                    $token['data']['expires_in'] .
                                    " seconds"
                            )
                        )
                    ];

                    Session::put('tpv', $tpv);
                }
            }
        }
    }

    /*
    |--------------------------------------------------------------------------
    | QUOTE
    |--------------------------------------------------------------------------
    */

    public static function quote($quote = [])
    {
        $auth = session()->get('auth');

        $headers[] =
            'Authorization: Bearer ' . $auth['token'];

        $data = [

            'destination_id' => 3,        

            'type' => self::$types[$quote['type']],

            'language' => $quote['language'],

            'passengers' => $quote['passengers'],

            'currency' => $quote['currency'],

            'rate_group' => 'xLjDl18',

            'start' => [
                'place' => $quote['from'],
                'lat' => $quote['from_latitude'],
                'lng' => $quote['from_longitude'],
                'pickup' => $quote['from_pickup_date'],
            ],

            'end' => [
                'place' => $quote['to'],
                'lat' => $quote['to_latitude'],
                'lng' => $quote['to_longitude'],
            ]
        ];

        if ($quote['type'] == "RT") {

            $data['end']['pickup'] =
                $quote['to_pickup_date'];
        }

        return self::sendRequest(
            '/api/v1/quote',
            'POST',
            $data,
            $headers
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CREAR RESERVA
    |--------------------------------------------------------------------------
    */

    public static function create($request)
    {
        $data = [

            "site_id" => self::$site_id,

            "service_token" => $request->token,

            "first_name" => $request->first_name,

            "last_name" => $request->last_name,

            "email_address" => $request->email,

            "phone" => $request->phone,

            "special_request" => $request->special_request,

            "flight_number" =>
                $request->arrival_airline .
                " " .
                $request->arrival_flight_number,
        ];

        if ($request->payment_type == "cash") {

            $data['pay_at_arrival'] = 1;
        }

        $auth = session()->get('auth');

        $headers[] =
            'Authorization: Bearer ' . $auth['token'];

        return self::sendRequest(
            '/api/v1/create',
            'POST',
            $data,
            $headers
        );
    }

    /*
    |--------------------------------------------------------------------------
    | PAYMENT LINK
    |--------------------------------------------------------------------------
    */

    public static function paymentLink($data = [])
    {
        $auth = session()->get('auth');

        $headers[] =
            'Authorization: Bearer ' . $auth['token'];

        return self::sendRequest(
            '/api/v1/reservation/payment/handler',
            'GET',
            $data,
            $headers
        );
    }

    /*
    |--------------------------------------------------------------------------
    | PAYPAL / STRIPE ELEMENTS
    |--------------------------------------------------------------------------
    */

    public static function paymentElements($items = [])
    {
        $auth = session()->get('auth');

        $headers[] =
            'Authorization: Bearer ' . $auth['token'];

        $data = [
            "language" => app()->getLocale(),
            "total" => $items['price'],
            "currency" => $items['currency'],
            "id" => $items['id'],
        ];

        return self::sendRequest(
            '/api/v1/reservation/payment/expressCheckoutElements',
            'GET',
            $data,
            $headers
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CHECK RESERVATION
    |--------------------------------------------------------------------------
    */

    public static function checkReservation($data)
    {
        return self::sendRequest(
            '/api/v1/reservation/get',
            'POST',
            $data,
            []
        );
    }

    /*
    |--------------------------------------------------------------------------
    | PAYPAL CAPTURE
    |--------------------------------------------------------------------------
    */

    public static function payPalCaptureOrder($id)
    {
        $data = [
            "id" => $id
        ];

        return self::sendRequest(
            '/api/v1/reservation/payment/paypal/capture-order',
            'GET',
            $data,
            []
        );
    }

    /*
    |--------------------------------------------------------------------------
    | CURL REQUEST
    |--------------------------------------------------------------------------
    */

    public static function sendRequest(
        $end_point,
        $method = 'GET',
        $data = null,
        $headers_merge = []
    ) {

        $headers = [
            'Content-Type: application/json',
        ];

        $headers = array_merge(
            $headers,
            $headers_merge
        );

        $url =
            'https://api.taxidominicana.com' .
            $end_point;

        $ch = curl_init($url);

        /*
        |--------------------------------------------------------------------------
        | POST
        |--------------------------------------------------------------------------
        */

        if ($method == 'POST') {

            curl_setopt($ch, CURLOPT_POST, 1);

            if ($data) {

                curl_setopt(
                    $ch,
                    CURLOPT_POSTFIELDS,
                    json_encode($data)
                );
            }
        }

        /*
        |--------------------------------------------------------------------------
        | GET
        |--------------------------------------------------------------------------
        */

        if ($method == 'GET') {

            if ($data) {

                $url .= '?' . http_build_query($data);
            }
        }

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {

            echo 'Error: ' . curl_error($ch);
        }

        curl_close($ch);

        return json_decode($response, true);
    }
}