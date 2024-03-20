<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    public function redirectOne(){
        return Redirect::to('/shuttle-to-secrets-tulum-resort-and-beach-club', 301);
    }
}
