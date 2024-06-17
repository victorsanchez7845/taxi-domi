<?php
namespace App\Traits;

trait PayPalTrait
{
    private static $env = 'live';
    private $URL = [
        "dev" => "https://api-m.sandbox.paypal.com",
        "live" => "https://api.paypal.com",
    ];

    private static $credentials = [
        "dev" => [
            "client_id" => "ASGgN8z0Yc7y1F0e5E9wd46AEg1eLYrlo2DjeNVC5y4CeV2AeEoEcMJs9Wa3EabanstiseLJNZ3FK6KE",
            "client_secret" => "EL4BFw-Swl9ksIO4ADhNjQNBXz59g0K5-sjGqtWX0fMH9eZcHwsPGP625rlOYbQAASodqJdpzezxvW7S",
        ],
        "live" => [
            "client_id" => "Aacc8BRd5x4b_Z15PzS9akxCnNqF-Da0Qqwjy9CkFMKR2oNJDN3kTU7MU5zU3j5E22z7b05FjYPvTHJV",
            "client_secret" => "ELp9L4fuHaJ1GWcrb1txEx7HCF2VPSbq95IzrHK2IfCZO_ll_OSeJ1_4bU4EpejamyPrAaXAUBgfmXN8",
        ]
    ];

    public static function getCredentials(){
        return self::$credentials[ self::$env ];
    }

    public static function getEnviroment(){
        if(self::$env == "live"):
            return 'live';
        else:
            return 'sandbox';
        endif;
    }

    public function getPayPalToken() {
        $key =  base64_encode( self::$credentials[ self::$env ]['client_id'] . ":" . self::$credentials[ self::$env ]['client_secret'] );        

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $this->URL[ self::$env ].'/v1/oauth2/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
        CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Basic '.$key
            ),
        ));

        $response = curl_exec($curl);
        $token = json_decode($response);
        curl_close($curl);

        if(isset( $token->access_token )):
            return $token->access_token;    
        endif;

        return false;
                

    }

    public function createPayPalOrder($rez){            

	        $url =  $URL = $this->URL[ self::$env ] . '/v2/checkout/orders';

            //URL's
	        $return_url = 'https://tulumairportcab.com/thank-you';
            $cancel_url = 'https://tulumairportcab.com/cancel';
            if(app()->getLocale() == "en"):
	            $return_url = 'https://tulumairportcab.com/es/gracias';
                $cancel_url = 'https://tulumairportcab.com/es/cancelar';
            endif;

	        //Information
	        $info = "Transportation service #(".$rez['config']['id'].")";
            if(app()->getLocale() == "es"):
                $info = "Servicio de transporte #(".$rez['config']['id'].")";
            endif;

            //Totals
            if($rez['payments']['total'] >= $rez['sales']['total']):
                return false;
            endif;

            $total = $rez['sales']['total'] - $rez['payments']['total'];
        
            if($rez['config']['currency'] == "USD"):
                $total = $total * $rez['config']['payment_exchange_rate']['USD_MXN'];
            endif;
            $lang = "en-US";
            if($rez['config']['language'] == "es"):
                $lang = "es-MX";
            endif;

            $payment = '{
                "intent": "CAPTURE",
                "purchase_units": [
                    {
                        "reference_id": "'. $rez['config']['id'] .'",
                        "invoice_id": "'. $rez['config']['id'] .'",
                        "items": [
                            {
                                "name": "'.$info.'",
                                "description": "'.$info.'",
                                "quantity": "1",
                                "unit_amount": {
                                    "currency_code": "MXN",
                                    "value": "'. number_format($total, 2, '.', '') .'"
                                }
                            }
                        ],
                        "amount": {
                            "currency_code": "MXN",
                            "value": "'. number_format($total, 2, '.', '') .'",
                            "breakdown": {
                                "item_total": {
                                    "currency_code": "MXN",
                                    "value": "'. number_format($total, 2, '.', '') .'"
                                }
                            }
                        }
                    }
                ],
                "application_context": {                    
                    "user_action": "PAY_NOW",
                    "locale": "' . $lang . '",
                    "return_url": "'.$return_url.'",
                    "cancel_url": "'.$cancel_url.'"
                }
            }';

	        
	        $data = $this->makePayPal($url, $payment);

            if(!isset( $data['id'] )):
                return false;
            endif;

            return $data;
    }

    public function makePayPal($url, $data = NULL) {
        $token = $this->getPayPalToken();

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_SSL_CIPHER_LIST,'TLSv1');
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Authorization: Bearer '.$token,
                    'Accept: application/json',
                    'Content-Type: application/json'
                    ));
        
        if(!empty($data)):
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        endif;
        
        $response = curl_exec($curl);
        
        $data = json_decode($response, true);
        return $data;
    }

    public function executePayPalOrder($id){
        $URL = $this->URL[ self::$env ]."/v2/checkout/orders/{$id}/capture";        
        return $this->makePayPal( $URL );
    }

}