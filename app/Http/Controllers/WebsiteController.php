<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Traits\SeoTrait;
use App\Traits\GeneralTrait;

class WebsiteController extends Controller
{
    use SeoTrait, GeneralTrait;

    public $seo = [];

    public function index()
    {
        $this->seoData("home");

        $this->seo['alternate'] = [
            'es' => '/es',
            'en' => '/',
        ];

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url') . __('link.home'),
            "name" => ((app()->getLocale() == "es") ? 'Inicio' : 'Home')
        ];

        return view('website.index', [
            'seo' => $this->seo,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function contact()
    {
        $this->seoData("contact");

        $this->seo['alternate'] = [
            'es' => '/es/contacto',
            'en' => '/contact',
        ];

        return view('website.contact', ['seo' => $this->seo]);
    }

    public function privacy()
    {
        $this->seoData("privacy");

        $this->seo['alternate'] = [
            'es' => '/es/privacidad',
            'en' => '/privacy',
        ];

        $terms = GeneralTrait::getTerms('privacy');

        return view('website.privacy', [
            'seo' => $this->seo,
            'terms' => $terms
        ]);
    }

    public function terms()
    {
        $this->seoData("terms");

        $this->seo['alternate'] = [
            'es' => '/es/terminos-y-condiciones',
            'en' => '/terms-and-conditions',
        ];

        $terms = GeneralTrait::getTerms();

        return view('website.terms', [
            'seo' => $this->seo,
            'terms' => $terms
        ]);
    }

    public function services()
    {
        $this->seoData("services");

        $this->seo['alternate'] = [
            'es' => '/es/servicios',
            'en' => '/services',
        ];

        return view('website.services', ['seo' => $this->seo]);
    }

    public function quotes()
    {
        $this->seoData("quotes");

        $this->seo['alternate'] = [
            'es' => '/es/cotizaciones',
            'en' => '/quotations',
        ];

        return view('website.quotes', ['seo' => $this->seo]);
    }

    public function pricing()
    {
        $this->seoData("pricing");

        $this->seo['alternate'] = [
            'es' => '/es/precio-traslado-punta-cana',
            'en' => '/transportation-price-punta-cana',
        ];

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url') . __('link.home'),
            "name" => ((app()->getLocale() == "es") ? 'Inicio' : 'Home')
        ];

        $breadcrumbs[2] = [
            "name" => ((app()->getLocale() == "es") ? 'Tarifas de traslado' : 'Transfer Rates')
        ];

        return view('website.pricing', [
            'seo' => $this->seo,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function puntaCanaAirportTransfers()
    {
        $this->seoData("destination-tulum");

        $this->seo['alternate'] = [
            'es' => '/es/traslados-aeropuerto-punta-cana',
            'en' => '/punta-cana-airport-transfers',
        ];

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url') . __('link.home'),
            "name" => ((app()->getLocale() == "es") ? 'Inicio' : 'Home')
        ];

        $breadcrumbs[2] = [
            "name" => ((app()->getLocale() == "es")
                ? 'Traslados Aeropuerto Punta Cana'
                : 'Punta Cana Airport Transfers')
        ];

        return view('destinations.tulum', [
            'seo' => $this->seo,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function santoDomingoAirportTransfers()
    {
        $this->seoData("destination-cancun");

        $this->seo['alternate'] = [
            'es' => '/es/traslados-aeropuerto-santo-domingo',
            'en' => '/santo-domingo-airport-transfers',
        ];

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url') . __('link.home'),
            "name" => ((app()->getLocale() == "es") ? 'Inicio' : 'Home')
        ];

        $breadcrumbs[2] = [
            "name" => ((app()->getLocale() == "es")
                ? 'Traslados Aeropuerto Santo Domingo'
                : 'Santo Domingo Airport Transfers')
        ];

        return view('destinations.cancun', [
            'seo' => $this->seo,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function puntaCanaToBavaro()
    {
        return $this->routePage(
            'punta-cana-to-bavaro',
            'Punta Cana to Bavaro',
            'Punta Cana a Bávaro'
        );
    }

    public function puntaCanaToCapCana()
    {
        return $this->routePage(
            'punta-cana-to-cap-cana',
            'Punta Cana to Cap Cana',
            'Punta Cana a Cap Cana'
        );
    }

    public function puntaCanaToUveroAlto()
    {
        return $this->routePage(
            'punta-cana-to-uvero-alto',
            'Punta Cana to Uvero Alto',
            'Punta Cana a Uvero Alto'
        );
    }

    public function puntaCanaToBayahibe()
    {
        return $this->routePage(
            'punta-cana-to-bayahibe',
            'Punta Cana to Bayahibe',
            'Punta Cana a Bayahíbe'
        );
    }

    public function puntaCanaToLaRomana()
    {
        return $this->routePage(
            'punta-cana-to-la-romana',
            'Punta Cana to La Romana',
            'Punta Cana a La Romana'
        );
    }

    private function routePage($seoCode, $nameEn, $nameEs)
    {
        $this->seoData($seoCode);

        $alternates = [
            'punta-cana-to-bavaro' => [
                'es' => '/es/aeropuerto-punta-cana-a-bavaro',
                'en' => '/punta-cana-airport-to-bavaro',
            ],

            'punta-cana-to-cap-cana' => [
                'es' => '/es/aeropuerto-punta-cana-a-cap-cana',
                'en' => '/punta-cana-airport-to-cap-cana',
            ],

            'punta-cana-to-uvero-alto' => [
                'es' => '/es/aeropuerto-punta-cana-a-uvero-alto',
                'en' => '/punta-cana-airport-to-uvero-alto',
            ],

            'punta-cana-to-bayahibe' => [
                'es' => '/es/aeropuerto-punta-cana-a-bayahibe',
                'en' => '/punta-cana-airport-to-bayahibe',
            ],

            'punta-cana-to-la-romana' => [
                'es' => '/es/aeropuerto-punta-cana-a-la-romana',
                'en' => '/punta-cana-airport-to-la-romana',
            ],
        ];

        if (isset($alternates[$seoCode])) {
            $this->seo['alternate'] = $alternates[$seoCode];
        }

        $breadcrumbs = [];

        $breadcrumbs[1] = [
            "URL" => config('app.url') . __('link.home'),
            "name" => ((app()->getLocale() == "es") ? 'Inicio' : 'Home')
        ];

        $breadcrumbs[2] = [
            "name" => ((app()->getLocale() == "es") ? $nameEs : $nameEn)
        ];

        return view('website.route', [
            'seo' => $this->seo,
            'breadcrumbs' => $breadcrumbs,
            'routeNameEn' => $nameEn,
            'routeNameEs' => $nameEs,
        ]);
    }
}