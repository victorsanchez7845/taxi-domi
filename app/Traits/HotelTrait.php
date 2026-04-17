<?php
namespace App\Traits;
use Illuminate\Support\Facades\File;

trait HotelTrait{

    protected static $zones = [
        //1 => "cancun-airport",
        //2 => "cancun",
        //3 => "puerto-juarez",
        //4 => "costa-mujeres",
        //5 => "puerto-morelos",
        //6 => "playa-del-carmen",
        //7 => "bonfil",
        //8 => "puerto-aventuras",
        //9 => "akumal",
        10 => "tulum-downtown",
        11 => "tulum-hotel-zone",
        //12 => "bahia-principe",
        //13 => "playa-paraiso",
        //14 => "ruta-de-los-cenotes",
        //15 => "boca-paila",
        //16 => "valladolid",
        //17 => "chiquila",
        //18 => "chichen-itza",
        //19 => "merida",
        //20 => "chetumal",
        //21 => "playa-mujeres",
        22 => "tulum-airport",
    ];

    public static function get($items = []){
        if( sizeof( $items ) <= 0 ) return [];

        $data = [];

        foreach($items as $key => $value):
            $json = @file_get_contents(public_path().'/assets/json/hotels/'.$value.'.json');
            if( $json ){
                $json = json_decode($json, true);                
            }
            $data = array_merge($data, $json);
        endforeach;

        usort($data, function($a, $b) {
            return strcmp($a['name'], $b['name']);
        });

        return $data;
    }

    public static function order($items = []){
        
        $letter_data = [
            "A" => [],
            "B" => [],
            "C" => [],
            "D" => [],
            "E" => [],
            "F" => [],
            "G" => [],
            "H" => [],
            "I" => [],
            "J" => [],
            "K" => [],
            "L" => [],
            "M" => [],
            "N" => [],
            "Ñ" => [],
            "O" => [],
            "P" => [],
            "Q" => [],
            "R" => [],
            "S" => [],
            "T" => [],
            "V" => [],
            "W" => [],
            "X" => [],
            "Y" => [],
            "Z" => [],
            "MORE" => [],
        ];

        foreach ($items as $item) {
            $check = iconv('UTF-8', 'ASCII//TRANSLIT', $item['name']);
            $firstLetter = strtoupper(substr($check, 0, 1));            
            if( isset( $letter_data[$firstLetter] ) ){
                $letter_data[$firstLetter][] = $item;
            }else{
                $letter_data['MORE'][] = $item;
            }
        }

        return $letter_data;
    }

    public static function setHotel(){
        foreach( self::$zones as $key => $name ):
            $data = self::curlGetHotel($key);
            self::saveHotel($data, $name);
        endforeach;
    }

    public static function saveHotel($data, $path){
        $route = public_path('/assets/json/hotels/'. $path .'.json');
        File::put($route, json_encode($data) );
    }

    public static function curlGetHotel($id){
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, "https://api.taxidominicana.com/api/v1/hotels?code=".$id);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $ch );
        if ($response === false) exit();
        return json_decode($response, true);
    }
}