<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Traits\ApiTrait;
use App\Traits\SeoTrait;

class AdsController extends Controller{
    use ApiTrait, SeoTrait;
    public $seo = [];

    public function lastminute(){
        $this->seoData("lastminute");
        $this->seo['nofollow'] = true;
        return view('ads.last-minute', [ 'seo' => $this->seo ]);
    }
}