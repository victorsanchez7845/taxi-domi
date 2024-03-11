<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\JobsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('locale')->group(function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('home.en');
    Route::get('/how-to-get-to-tulum', [WebsiteController::class, 'howToGet'])->name('how_to_get.en');
    Route::get('/transportation-price-tulum', [WebsiteController::class, 'pricing'])->name('pricing.en');
    Route::get('/cancun-to-tulum-shuttle', [WebsiteController::class, 'destinationTulum'])->name('destination.tulum.en');
    Route::get('/cancun-airport-transportation', [WebsiteController::class, 'destinationCancun'])->name('destination.cancun.en');
    Route::get('/transportation-from-cancun-airport-to-playa-del-carmen', [WebsiteController::class, 'destinationPDC'])->name('destination.pdc.en');
    Route::get('/traslado-a-hotel', [HotelsController::class, 'destinationHotels'])->name('destinations.hotel');    

    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact.en');
    Route::get('/terms-and-conditions', [WebsiteController::class, 'terms'])->name('terms.en');
    Route::get('/privacy', [WebsiteController::class, 'privacy'])->name('privacy.en');
    
    Route::get('/thank-you', [ProcessController::class, 'success'])->name('thank-you.en');
    Route::get('/cancel', [ProcessController::class, 'error'])->name('cancel.en');
    Route::get('/booking', [ProcessController::class, 'login'])->name('login.en');
    Route::post('/booking', [ProcessController::class, 'loginHandler'])->name('login.handler.en');

    Route::middleware('ApiChecker')->group(function () {
        Route::get('/results', [ProcessController::class, 'search'])->name('step.one.en');
        Route::post('/results', [ProcessController::class, 'handler'])->name('step.one.handler.en');    
        Route::get('/register', [ProcessController::class, 'checkout'])->name('step.two.en');
        Route::post('/register', [ProcessController::class, 'handlerCheckout'])->name('step.two.handler.en');            
        Route::post('/processing', [ProcessController::class, 'processingHandler'])->name('step.three.handler.en');    
        Route::get('/my-reservation-detail', [ProcessController::class, 'reservationDetail'])->name('reservation.detail.en');        
    });

    Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->group(function () {
        Route::get('/', [WebsiteController::class, 'index'])->name('home.es');
        Route::get('/como-llegar-a-tulum', [WebsiteController::class, 'howToGet'])->name('how_to_get.es');
        Route::get('/precio-traslado', [WebsiteController::class, 'pricing'])->name('pricing.es');
        Route::get('/traslado-de-cancun-a-tulum', [WebsiteController::class, 'destinationTulum'])->name('destination.tulum.es');
        Route::get('/traslado-cancun-aeropuerto', [WebsiteController::class, 'destinationCancun'])->name('destination.cancun.es');
        Route::get('/transporte-de-cancun-a-playa-del-carmen', [WebsiteController::class, 'destinationPDC'])->name('destination.pdc.es');

        Route::get('/contacto', [WebsiteController::class, 'contact'])->name('contact');
        Route::get('/terminos-y-condiciones', [WebsiteController::class, 'terms'])->name('terms.es');
        Route::get('/privacidad', [WebsiteController::class, 'privacy'])->name('privacy.es');
       
        Route::get('/gracias', [ProcessController::class, 'success'])->name('thank-you.es');
        Route::get('/cancelar', [ProcessController::class, 'error'])->name('cancel.es');
        Route::get('/reserva', [ProcessController::class, 'login'])->name('login.es');
        Route::post('/reserva', [ProcessController::class, 'loginHandler'])->name('login.handler.es');

        Route::middleware('ApiChecker')->group(function () {
            Route::get('/resultados', [ProcessController::class, 'search'])->name('step.one.es');
            Route::post('/resultados', [ProcessController::class, 'handler'])->name('step.one.handler.es');
            Route::get('/registro', [ProcessController::class, 'checkout'])->name('step.two.es');
            Route::post('/registro', [ProcessController::class, 'handlerCheckout'])->name('step.two.handler.es');        
            Route::post('/procesando', [ProcessController::class, 'processingHandler'])->name('step.three.handler.es');
            Route::get('/mi-reservacion-detalle', [ProcessController::class, 'reservationDetail'])->name('reservation.detail.es');
        });
    });
    //Destinations
    /*Route::get('/taxi-aeropuerto-cancun', [WebsiteController::class, 'destinationCancun'])->name('destination.cancun');
    Route::get('/traslado-de-cancun-tulum', [WebsiteController::class, 'destinationTulum'])->name('destination.tulum');
    Route::get('/transporte-cancun-a-playa-del-carmen', [WebsiteController::class, 'destinationPDC'])->name('destination.pdc');
    Route::get('/transporte-cancun-a-akumal', [WebsiteController::class, 'destinationAkumal'])->name('destination.akumal');
    Route::get('/traslado-aeropuerto-cancun-a-costa-mujeres', [WebsiteController::class, 'destinationCostaMujeres'])->name('destination.costa-mujeres');
    Route::get('/traslado-cancun-a-puerto-morelos', [WebsiteController::class, 'destinationPuertoMorelos'])->name('destination.puerto-morelos');

    //Silos
    Route::get('/destinos', [HotelsController::class, 'index'])->name('destinations');
    Route::get('/traslado-a-hotel-{slug}', [HotelsController::class, 'hotel'])->name('destinations.hotel');

    Route::get('/contacto', [WebsiteController::class, 'contact'])->name('contact');
    Route::get('/privacidad', [WebsiteController::class, 'privacy'])->name('privacy.es');
    Route::get('/terminos-y-condiciones', [WebsiteController::class, 'terms'])->name('terms.es');
    Route::get('/servicios', [WebsiteController::class, 'services'])->name('services');
    Route::get('/cotizaciones', [WebsiteController::class, 'quotes'])->name('quotes'); 

    Route::get('/lastminute', [AdsController::class, 'lastminute'])->name('ads.lastminute');    

    Route::get('/gracias', [ProcessController::class, 'success'])->name('thank-you.es');
    Route::get('/cancelar', [ProcessController::class, 'error'])->name('cancel.es');
    Route::get('/reserva', [ProcessController::class, 'login'])->name('login.es');
    Route::post('/reserva', [ProcessController::class, 'loginHandler'])->name('login.handler.es');

    Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->group(function () {
        Route::get('/', [WebsiteController::class, 'index'])->name('home.en');
        
        //Destinations
        Route::get('/cancun-airport-transportation', [WebsiteController::class, 'destinationCancun'])->name('destination.cancun.en');
        Route::get('/cancun-to-tulum-shuttle', [WebsiteController::class, 'destinationTulum'])->name('destination.tulum.en');
        Route::get('/transportation-from-cancun-airport-to-playa-del-carmen', [WebsiteController::class, 'destinationPDC'])->name('destination.pdc.en');
        Route::get('/cancun-to-akumal-shuttle', [WebsiteController::class, 'destinationAkumal'])->name('destination.akumal.en');
        Route::get('/shuttle-from-cancun-to-costa-mujeres', [WebsiteController::class, 'destinationCostaMujeres'])->name('destination.costa-mujeres.en');
        Route::get('/shuttle-from-cancun-to-puerto-morelos', [WebsiteController::class, 'destinationPuertoMorelos'])->name('destination.puerto-morelos.en');

        //Silos
        Route::get('/destinations', [HotelsController::class, 'index'])->name('destinations.en');       
        Route::get('/shuttle-to-hotel-{slug}', [HotelsController::class, 'hotel'])->name('destinations.hotel.en');
        
        Route::middleware('ApiChecker')->group(function () {
            Route::get('/results', [ProcessController::class, 'search'])->name('step.one.en');
            Route::post('/results', [ProcessController::class, 'handler'])->name('step.one.handler.en');    
            Route::get('/register', [ProcessController::class, 'checkout'])->name('step.two.en');
            Route::post('/register', [ProcessController::class, 'handlerCheckout'])->name('step.two.handler.en');            
            Route::post('/processing', [ProcessController::class, 'processingHandler'])->name('step.three.handler.en');    
            Route::get('/my-reservation-detail', [ProcessController::class, 'reservationDetail'])->name('reservation.detail.en');
        });

        Route::get('/thank-you', [ProcessController::class, 'success'])->name('thank-you.en');
        Route::get('/cancel', [ProcessController::class, 'error'])->name('cancel.en');
        Route::get('/booking', [ProcessController::class, 'login'])->name('login.en');
        Route::post('/booking', [ProcessController::class, 'loginHandler'])->name('login.handler.en');
        
        Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact.en');
        Route::get('/terms-and-conditions', [WebsiteController::class, 'terms'])->name('terms.en');
        Route::get('/privacy', [WebsiteController::class, 'privacy'])->name('privacy.en');

        Route::get('/services', [WebsiteController::class, 'services'])->name('services.en');
        Route::get('/quotations', [WebsiteController::class, 'quotes'])->name('quotes.en'); 

       

    });*/
});

//Jobs
Route::get('/jobs/hotels', [JobsController::class, 'hotels']);
Route::get('/jobs/prices', [JobsController::class, 'prices']);