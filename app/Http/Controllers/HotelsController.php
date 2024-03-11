<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Traits\SeoTrait;
use App\Traits\GeneralTrait;
use App\Traits\HotelTrait;
use App\Traits\PricesTrait;

class HotelsController extends Controller{

    use SeoTrait, GeneralTrait, HotelTrait, PricesTrait;
    public $seo = [];

    public function index(){
        $this->seoData("silos-index");
        return view('hotels.index', ['seo' => $this->seo]);
    }

    public function destinationTulum(){
        $this->seoData("silos-destination-tulum");

        $items = HotelTrait::get(["tulum-airport","tulum-downtown","tulum-hotel-zone"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Tulum'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.tulum', ['seo' => $this->seo, 'hotels' => $items ]);
    }

    /*dpublic function destinationHotels(){
        $this->seoData("silos-index");
        
        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('link.home'),
            "name" => (( app()->getLocale() == "es" )?'Inicio':'Home')
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url').__('link.destinations'),
            "name" => (( app()->getLocale() == "es" )?'Destinos':'Destinations')
        ];
        $breadcrumbs[3] = [
            "URL" => config('app.url').__('link.destinations'),
            "name" => 'Aldea Xaan Tulum'
        ];

        return view('hotels.hotel.index', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs]);
    }*/

    public function hotel($one_slug, $two_slug = null){
        $slug = $one_slug;
        if($one_slug == "es"):
            $slug = $two_slug;
        endif;

        $this->seoData("silos-destination-hotel");

        $items = HotelTrait::get(["bonfil","cancun-airport","cancun","playa-del-carmen","tulum-airport","tulum-downtown","tulum-hotel-zone"]);
        
        $data = array_filter($items, function ($element) use ($slug) {
            return $element["slug"] === $slug;
        });
        
        if(empty($data)){
            return redirect()->route('home.' . app()->getLocale(), ['locale' => app()->getLocale()]);
        }

        $data = reset($data);        
        $data['default_price'] = 9999;
        $data['vehicles'] = [];
        $data['currency'] = (( app()->getLocale() == "es" )? 'MXN':'USD');
        
        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('link.home'),
            "name" => (( app()->getLocale() == "es" )?'Inicio':'Home')
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url').__('link.destinations'),
            "name" => (( app()->getLocale() == "es" )?'Destinos':'Destinations')
        ];      

        $data['default_price'] = PricesTrait::getDefaultPrice($data['zone']['id'], $data['currency']);
        $data['vehicles'] = PricesTrait::getVehiclesPrices($data['zone']['id']);        

        switch ($data['zone']['id']) {
            case 7: //Bonfil, Cancún Airport, Cancun
            case 1:
            case 2:
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_cancun'),
                    "name" => "Cancún"
                ];
            break;
            case 6: //Playa del Carmen
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_playa_del_carmen'),
                    "name" => "Playa del Carmen",
                ];
            break;
            case 10: //Tulum Downtown, Tulum Hotel Zone, Airport Tulum
            case 22:
            case 11:
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_tulum'),
                    "name" => "Tulum",
                ];
            break;
        }

        $breadcrumbs[] = [
            "name" => $data['name']
        ]; 

        $replace = [
            "\$name" => $data['name'],
            "\$price" => number_format( $data['default_price'] ,2),
            "\$currency" => $data['currency'],
            "\$slug" => $slug,
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        $this->seo['alternate']['es'] = GeneralTrait::rep( $this->seo['alternate']['es'], $replace );
        $this->seo['alternate']['en'] = GeneralTrait::rep( $this->seo['alternate']['en'], $replace );


        return view('hotels.hotel.index', ['seo' => $this->seo, 'data' => $data, 'breadcrumbs' => $breadcrumbs ]);
    }    
}