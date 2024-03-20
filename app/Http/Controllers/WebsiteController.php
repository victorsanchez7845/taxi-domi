<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Traits\SeoTrait;
use App\Traits\GeneralTrait;

class WebsiteController extends Controller{

    use SeoTrait, GeneralTrait;
    public $seo = [];

    public function index(){
        $this->seoData("home");

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('link.home'),
            "name" => (( app()->getLocale() == "es" )?'Inicio':'Home')
        ];

        return view('website.index', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs]);
    }
    
    public function contact(){
        $this->seoData("contact");
        return view('website.contact', ['seo' => $this->seo]);
    }

    public function privacy(){
        $this->seoData("privacy");
        $terms = GeneralTrait::getTerms('privacy');
        return view('website.privacy', ['seo' => $this->seo, 'terms' => $terms ]);
    }

    public function terms(){
        $this->seoData("terms");
        $terms = GeneralTrait::getTerms();
        return view('website.terms', ['seo' => $this->seo, 'terms' => $terms ]);
    }

    public function services(){
        $this->seoData("services");
        return view('website.services', ['seo' => $this->seo]);
    }

    public function quotes(){
        $this->seoData("quotes");
        return view('website.quotes', ['seo' => $this->seo]);
    }

    public function howToGet(){
        $this->seoData("how-to-get");

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('link.home'),
            "name" => (( app()->getLocale() == "es" )?'Inicio':'Home')
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url').__('link.how_to_get'),
            "name" => (( app()->getLocale() == "es" )?'Cómo llegar a Tulum':'How to get to Tulum')
        ];


        return view('website.how_to_get', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs]);
    }

    public function pricing(){
        $this->seoData("pricing");

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('link.home'),
            "name" => (( app()->getLocale() == "es" )?'Inicio':'Home')
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url').__('link.pricing'),
            "name" => (( app()->getLocale() == "es" )?'Precio Traslado':'Transportation Price')
        ];


        return view('website.pricing', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs]);
    }

    public function destinationTulum(){
        $this->seoData("destination-tulum");

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('link.home'),
            "name" => (( app()->getLocale() == "es" )?'Inicio':'Home')
        ];
        $breadcrumbs[2] = [
            "name" => (( app()->getLocale() == "es" )?'Tulum':'Tulum')
        ];

        return view('destinations.tulum', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs]);
    }

    public function destinationCancun(){
        $this->seoData("destination-cancun");

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('link.home'),
            "name" => (( app()->getLocale() == "es" )?'Inicio':'Home')
        ];
        $breadcrumbs[2] = [
            "name" => (( app()->getLocale() == "es" )?'Cancun':'Cancún')
        ];

        return view('destinations.cancun', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs]);
    }

    public function destinationPDC(){
        $this->seoData("destination-pdc");

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('link.home'),
            "name" => (( app()->getLocale() == "es" )?'Inicio':'Home')
        ];
        $breadcrumbs[2] = [
            "name" => (( app()->getLocale() == "es" )?'Playa del Carmen':'Playa del Carmen')
        ];

        return view('destinations.playa-del-carmen', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs]);
    }
}