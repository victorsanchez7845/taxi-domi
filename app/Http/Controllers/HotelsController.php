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

    public function destinationHotels(){
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
    }

    public function index(){
        $this->seoData("silos-index");
        return view('hotels.index', ['seo' => $this->seo]);
    }    

    public function destinationAkumal(){
        $this->seoData("silos-destination-akumal");

        $items = HotelTrait::get(["akumal"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Akumal'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.akumal', ['seo' => $this->seo, 'hotels' => $items ]);
    }    
    public function destinationBahiaPrincipe(){
        $this->seoData("silos-destination-bahia-principe");

        $items = HotelTrait::get(["bahia-principe"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Bahía Principe'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.bahia-principe', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationBocaPaila(){
        $this->seoData("silos-destination-boca-paila");

        $items = HotelTrait::get(["boca-paila"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Boca Paila'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.boca-paila', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationCancun(){
        $this->seoData("silos-destination-cancun");

        $items = HotelTrait::get(["cancun-airport", "cancun", "bonfil"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Cancún'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.cancun', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationChetumal(){
        $this->seoData("silos-destination-chetumal");

        $items = HotelTrait::get(["chetumal"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Chetumal'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.chetumal', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationChichenItza(){
        $this->seoData("silos-destination-chichen-itza");

        $items = HotelTrait::get(["chichen-itza"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Chichén Itzá'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.chichen-itza', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationChikila(){
        $this->seoData("silos-destination-chiquila");

        $items = HotelTrait::get(["chiquila"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Chiquilá'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.chiquila', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationCostaMujeres(){
        $this->seoData("silos-destination-costa-mujeres");

        $items = HotelTrait::get(["costa-mujeres"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Costa Mujeres'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.costa-mujeres', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationMerida(){
        $this->seoData("silos-destination-merida");

        $items = HotelTrait::get(["merida"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Mérida'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.merida', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationPlayaDelCarmen(){
        $this->seoData("silos-destination-playa-del-carmen");

        $items = HotelTrait::get(["playa-del-carmen"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Playa del Carmen'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.playa-del-carmen', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationPlayaMujeres(){
        $this->seoData("silos-destination-playa-mujeres");

        $items = HotelTrait::get(["playa-mujeres"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Playa Mujeres'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.playa-mujeres', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationPlayaParaiso(){
        $this->seoData("silos-destination-playa-paraiso");

        $items = HotelTrait::get(["playa-paraiso"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Playa Paraíso'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.playa-paraiso', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationPuertoAventuras(){
        $this->seoData("silos-destination-puerto-aventuras");

        $items = HotelTrait::get(["puerto-aventuras"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Puerto Aventuras'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.puerto-aventuras', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationPuertoJuarez(){
        $this->seoData("silos-destination-puerto-juarez");

        $items = HotelTrait::get(["puerto-juarez"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Puerto Juarez'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.puerto-juarez', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationPuertoMorelos(){
        $this->seoData("silos-destination-puerto-morelos");

        $items = HotelTrait::get(["puerto-morelos"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Puerto Morelos'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.puerto-morelos', ['seo' => $this->seo, 'hotels' => $items ]);
    }
    public function destinationRutaDeLosCenotes(){
        $this->seoData("silos-destination-ruta-cenotes");

        $items = HotelTrait::get(["ruta-de-los-cenotes"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Ruta de los Cenotes'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.ruta-de-los-cenotes', ['seo' => $this->seo, 'hotels' => $items ]);
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
    public function destinationValladolid(){
        $this->seoData("silos-destination-valladolid");

        $items = HotelTrait::get(["valladolid"]);
        $items = HotelTrait::order($items);

        $replace = [
            "\$destination" => 'Valladolid'
        ];    

        $this->seo['meta']['title'] = GeneralTrait::rep( $this->seo['meta']['title'], $replace );
        $this->seo['meta']['description'] = GeneralTrait::rep( $this->seo['meta']['description'], $replace );

        return view('hotels.destinations.valladolid', ['seo' => $this->seo, 'hotels' => $items ]);
    }

    public function hotel($one_slug, $two_slug = null){
        $slug = $one_slug;
        if($one_slug == "en"):
            $slug = $two_slug;
        endif;

        $this->seoData("silos-destination-hotel");

        $items = HotelTrait::get(["akumal","bahia-principe","boca-paila","bonfil","cancun-airport","cancun","chetumal","chichen-itza","chiquila","costa-mujeres","merida","playa-del-carmen","playa-mujeres","playa-paraiso","puerto-aventuras","puerto-juarez","puerto-morelos","ruta-de-los-cenotes","tulum-airport","tulum-downtown","tulum-hotel-zone","valladolid"]);
        
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
            "name" => (( app()->getLocale() == "es" )?'Transporte Cancún Aeropuerto':'Cancun Airport Transportation')
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url').__('link.destinations'),
            "name" => (( app()->getLocale() == "es" )?'Destinos':'Destinations')
        ];      

        $data['default_price'] = PricesTrait::getDefaultPrice($data['zone']['id'], $data['currency']);
        $data['vehicles'] = PricesTrait::getVehiclesPrices($data['zone']['id']);        

        switch ($data['zone']['id']) {
            case 9: //Akumal                
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_akumal'),
                    "name" => "Akumal"
                ];
            break;
            case 12: //Bahía principe
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_bahia_principe'),
                    "name" => "Bahía Principe"
                ];
            break;
            case 15: //Boca Paila
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_boca_paila'),
                    "name" => "Boca Paila"
                ];
            break;
            case 7: //Bonfil, Cancún Airport, Cancun
            case 1:
            case 2:
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_cancun'),
                    "name" => "Cancún"
                ];
            break;
            case 20: //Chetumal
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_chetumal'),
                    "name" => "Chetumal",
                ];
            break;
            case 18: //Chichén Itzá
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_chichen'),
                    "name" => "Chichén Itzá",
                ];
            break;
            case 17: //Chiquila
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_chiquila'),
                    "name" => "Chiquilá",
                ];
            break;
            case 4: //Costa Mujeres
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_costa_mujeres'),
                    "name" => "Costa Mujeres",
                ];
            break;
            case 19: //Mérida
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_merida'),
                    "name" => "Mérida",
                ];
            break;
            case 6: //Playa del Carmen
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_playa_del_carmen'),
                    "name" => "Playa del Carmen",
                ];
            break;
            case 21: //Playa Mujeres
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_playa_mujeres'),
                    "name" => "Playa Mujeres",
                ];
            break;
            case 13: //Playa Paraíso
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_playa_paraiso'),
                    "name" => "Playa Paraíso",
                ];
            break;
            case 8: //Puerto Aventuras
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_puerto_aventuras'),
                    "name" => "Puerto Aventuras",
                ];
            break;
            case 3: //Puerto Juarez
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_puerto_juarez'),
                    "name" => "Puerto Juarez",
                ];
            break;
            case 5: //Puerto Morelos
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_puerto_morelos'),
                    "name" => "Puerto Morelos",
                ];
            break;
            case 14: //Ruta de los Cenotes
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_ruta_cenotes'),
                    "name" => "Ruta de los Cenotes",
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
            case 16:
                $breadcrumbs[] = [
                    "URL" => config('app.url').__('link.silos_valladolid'),
                    "name" => "Valladolid",
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