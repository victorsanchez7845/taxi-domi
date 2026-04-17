<?php
namespace App\Traits;
use Illuminate\Support\Facades\File;

trait PricesTrait{
    public $json;

    public static function setPrice($items = []){
        $data = self::curlGetPrices();
        self::savePrice($data);
        return true;
    }

    public static function price($zone, $vehicle, $currency = "MXN", $round_trip = false){
        $json = @file_get_contents(public_path().'/assets/json/rates/rates.json');
        if( $json ){
            $json = json_decode($json, true);
        }else{
            return 999999;
        }

        if( isset( $json[ $zone ] ) ):

            $item = array_filter( $json[ $zone ]['rates'], function ($element) use ($vehicle) {
                return $element['id'] === $vehicle;
            });
            if($item == false) return 999999;
            $item = reset($item);
                        
            return (( $round_trip == true )? $item[$currency]['RT'] : $item[$currency]['OW'] );
        else:
            return 999999;
        endif;
    }

    public static function getVehiclesPrices($id){
        $json = @file_get_contents(public_path().'/assets/json/rates/rates.json');
        if( $json ){
            $json = json_decode($json, true);                
        }else{
            return [];
        }

        if( isset( $json[ $id ] ) ):
            return $json[ $id ]['rates'];
        else:
            return [];
        endif;
    }

    public static function getDefaultPrice($id, $currency = "USD"){
        $json = @file_get_contents(public_path().'/assets/json/rates/rates.json');
        
        if( $json ){
            $json = json_decode($json, true);                
        }else{
            return 9999;
        }
        
        if( isset( $json[ $id ] ) ):
            if(isset( $json[ $id ]['rates'][0][ $currency ] )):
                return $json[ $id ]['rates'][0][ $currency ]['OW'];
            else:
                return 9999;
            endif;
        else:
            return 9999;
        endif;
    }
    
    public static function savePrice($data){
        $route = public_path('/assets/json/rates/rates.json');
        File::put($route, json_encode($data) );
    }
    
    public static function curlGetPrices(){
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, "https://api.taxidominicana.com/api/v1/rates");
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $ch );
        if ($response === false) exit();
        return json_decode($response, true);
    }

}