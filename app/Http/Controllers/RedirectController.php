<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function redirectLocalBusinessImage(){
        return Redirect::to('/assets/img/website/logo.webp', 301);
    }
    public function redirectFacebookImage(){
        return Redirect::to('/assets/img/website/fb_logo.png', 301);
    }
    public function redirectVanBanner(){
        return Redirect::to('/assets/img/home/taxi-cancun-aeropuerto-banner.webp', 301);
    }
    public function redirectClientImageOne(){
        return Redirect::to('/assets/img/home/taxirivi-cliente.webp', 301);
    }
    public function redirectClientImageTwo(){
        return Redirect::to('/assets/img/home/client.webp', 301);
    }
    public function redirectServicesOne(){
        return Redirect::to('/assets/img/services/van.webp', 301);
    }
    public function redirectServicesTwo(){
        return Redirect::to('/assets/img/services/suburban.webp', 301);
    }
    public function redirectServicesThree(){
        return Redirect::to('/assets/img/services/crafter.webp', 301);
    }
}
