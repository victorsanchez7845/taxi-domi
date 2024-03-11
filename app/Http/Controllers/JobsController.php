<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Traits\SeoTrait;
use App\Traits\GeneralTrait;
use App\Traits\HotelTrait;
use App\Traits\PricesTrait;

class JobsController extends Controller{

    use HotelTrait;

    public function hotels(){
        HotelTrait::setHotel();
        return response()->json(["status" => true], 200);
    }

    public function prices(){
        PricesTrait::setPrice();
        return response()->json(["status" => true], 200);
    }
}