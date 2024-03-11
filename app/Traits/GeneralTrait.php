<?php
namespace App\Traits;

trait GeneralTrait
{
    public static function clearPhone($phone){
        $phone = str_replace("-", "", $phone);
        $phone = str_replace("(", "", $phone);
        $phone = str_replace(")", "", $phone);
        $phone = str_replace(" ", "", $phone);
        $phone = str_replace("-", "", $phone);
        return $phone;
    }

    public static function validateCaptcha($gRecaptchaResp){
        $cu = curl_init();        
        curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($cu, CURLOPT_POST, true);
        curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query([
            "secret" => config('services.captcha.secret'), "response" => $gRecaptchaResp
        ]));
        curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cu, CURLOPT_SSL_VERIFYPEER, FALSE);   
        $captchaResp = curl_exec($cu);
        curl_close($cu);
        $captchaResp = json_decode($captchaResp, true);        
        return ($captchaResp["success"] == true && $captchaResp["score"] > 0.5 ) ? true : false;
    }

    public static function rep($string, $data = []){
        if(sizeof($data) >= 1){
            foreach($data as $claveD => $valorD){
                $string = str_replace($claveD, $valorD, $string);
            }
        }
        return $string;
    }

    public static function getTerms($type = 'terms'){
        $url = 'https://api.caribbean-transfers.com/api/v1/terms-and-conditions';
        if( $type == 'privacy' ):
            $url = 'https://api.caribbean-transfers.com/api/v1/privacy-policy';
        endif;
                
        $data = array (
            'language' => app()->getLocale(),
            'brand' => urlencode(config('app.name')),
            'email' => urlencode(config('services.email')),
            'phoneUS' => urlencode(config('services.phone.US')),
            'phoneMX' => urlencode(config('services.phone.MX')),
        );
        
            $params = '';
        foreach($data as $key=>$value)
                    $params .= $key.'='.$value.'&';
            
            $params = trim($params, '&');

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
        curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public static function getAlternate($data){
        if(app()->getLocale() == "en"):
            if( isset( $data['alternate']['es'] ) ):
                return $data['alternate']['es'];
            else:
                return "/en";
            endif;
        endif;
        if(app()->getLocale() == "es"):
            if( isset( $data['alternate']['en'] ) ):
                return $data['alternate']['en'];
            else:
                return "/";
            endif;
        endif;        
    }
}