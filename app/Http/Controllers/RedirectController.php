<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function homeEn(){ return Redirect::to('/es', 301); }
    public function homeEs(){ return Redirect::to('/', 301); }
    public function redirect1(){ return Redirect::to('/shuttle-to-secrets-tulum-resort-and-beach-club', 301); }
    public function redirect2(){ return Redirect::to('/es/traslado-a-secrets-tulum-resort-and-beach-club', 301); }
    public function redirect3(){ return Redirect::to('/shuttle-to-wakax-hacienda', 301); }
    public function redirect4(){ return Redirect::to('/shuttle-to-hotel-sun-caribbean-dreams', 301); }
    public function redirect5(){ return Redirect::to('/shuttle-to-the-yellow-nest', 301); }
    public function redirect6(){ return Redirect::to('/shuttle-to-hotel-bardo', 301); }
    public function redirect7(){ return Redirect::to('/es/traslado-a-the-yellow-nest', 301); }
    public function redirect8(){ return Redirect::to('/shuttle-to-casa-malca-tulum', 301); }
    public function redirect9(){ return Redirect::to('/shuttle-to-maxanab-hotel-tulum', 301); }
    public function redirect10(){ return Redirect::to('/shuttle-to-jade-tulum-hotel', 301); }
    public function redirect11(){ return Redirect::to('/shuttle-to-cabanas-playa-condesa', 301); }
    public function redirect12(){ return Redirect::to('/shuttle-to-la-zebra-tulum', 301); }
    public function redirect13(){ return Redirect::to('/shuttle-to-selina-tulum', 301); }
    public function redirect14(){ return Redirect::to('/es/traslado-a-kai-tulum', 301); }
    public function redirect15(){ return Redirect::to('/es/traslado-a-selina-tulum', 301); }
    public function redirect16(){ return Redirect::to('/es/traslado-a-wakax-hacienda', 301); }
    public function redirect17(){ return Redirect::to('/shuttle-to-jashita-tulum-luxury-villas', 301); }
    public function redirect18(){ return Redirect::to('/es/traslado-a-casa-malca-tulum', 301); }
    public function redirect19(){ return Redirect::to('/es/traslado-a-villa-las-estrellas', 301); }
    public function redirect20(){ return Redirect::to('/es/traslado-a-azulik-tulum', 301); }
    public function redirect21(){ return Redirect::to('/es/traslado-a-zamas-hotel', 301); }
    public function redirect22(){ return Redirect::to('/es/traslado-a-maka-hotel-boutique', 301); }
    public function redirect23(){ return Redirect::to('/es/traslado-a-una-vida-tulum', 301); }
    public function redirect24(){ return Redirect::to('/es/traslado-a-jashita-tulum-luxury-villas', 301); }
    public function redirect25(){ return Redirect::to('/es/traslado-a-hotelito-azul-tulum', 301); }
    public function redirect26(){ return Redirect::to('/shuttle-to-la-valise-tulum', 301); }
    public function redirect27(){ return Redirect::to('/shuttle-to-xperience-tulum', 301); }
    public function redirect28(){ return Redirect::to('/es/traslado-a-maxanab-hotel-tulum', 301); }
    public function redirect29(){ return Redirect::to('/shuttle-to-azulik-tulum', 301); }
    public function redirect30(){ return Redirect::to('/shuttle-to-orchid-house-tulum', 301); }
    public function redirect31(){ return Redirect::to('/shuttle-to-hotelito-azul-tulum', 301); }
    public function redirect32(){ return Redirect::to('/es/traslado-a-ana-y-jose-hotel-and-spa', 301); }
    public function redirect33(){ return Redirect::to('/shuttle-to-una-vida-tulum', 301); }
    public function redirect34(){ return Redirect::to('/shuttle-to-zamas-hotel', 301); }
    public function redirect35(){ return Redirect::to('/es/traslado-a-jade-tulum-hotel', 301); }
    public function redirect36(){ return Redirect::to('/shuttle-to-ana-y-jose-hotel-and-spa', 301); }
}
