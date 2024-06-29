<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\PaymentController;
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
    Route::get('/destinations', [HotelsController::class, 'index'])->name('destinations.en');
    Route::get('/tulum', [HotelsController::class, 'destinationTulum'])->name('destinations.tulum.en');
    Route::get('/shuttle-to-{slug}', [HotelsController::class, 'hotel'])->name('destinations.hotel.en');

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

        //Route::get('/payment', [ProcessController::class, 'paymentPaypal'])->name('reservation.payment.paypal.en');
        Route::get('/payment', [PaymentController::class, 'payment'])->name('reservation.payment.en');
        Route::post('/payment-create-order', [ProcessController::class, 'paymentPayPalOrder'])->name('reservation.payment.paypal.order.en');
        Route::post('/payment-execute-order', [ProcessController::class, 'paymentPayPalCreate'])->name('reservation.payment.paypal.create.en');
    });

    Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->group(function () {
        Route::get('/', [WebsiteController::class, 'index'])->name('home.es');
        Route::get('/como-llegar-a-tulum', [WebsiteController::class, 'howToGet'])->name('how_to_get.es');
        Route::get('/precio-traslado', [WebsiteController::class, 'pricing'])->name('pricing.es');
        Route::get('/traslado-de-cancun-a-tulum', [WebsiteController::class, 'destinationTulum'])->name('destination.tulum.es');
        Route::get('/traslado-cancun-aeropuerto', [WebsiteController::class, 'destinationCancun'])->name('destination.cancun.es');
        Route::get('/transporte-de-cancun-a-playa-del-carmen', [WebsiteController::class, 'destinationPDC'])->name('destination.pdc.es');
        Route::get('/destinos', [HotelsController::class, 'index'])->name('destinations');
        Route::get('/tulum', [HotelsController::class, 'destinationTulum'])->name('destinations.tulum.es');
        Route::get('/traslado-a-{slug}', [HotelsController::class, 'hotel'])->name('destinations.hotel.es');

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
            Route::get('/pago', [PaymentController::class, 'payment'])->name('reservation.payment.es');
            //Route::get('/pago', [ProcessController::class, 'paymentPaypal'])->name('reservation.payment.paypal.es');
        });
    });
});

Route::get('/transfer/taxi-cancun-a-secrets-tulum-resort-beach-club/', [RedirectController::class, 'redirect1']);
Route::get('/es/traslado/secrets-tulum-resort-beach-club/', [RedirectController::class, 'redirect2']);
Route::get('/transfer/wakax-hacienda/', [RedirectController::class, 'redirect3']);
Route::get('/transfer/tulum-resort-spa/', [RedirectController::class, 'redirect4']);
Route::get('/transfer/the-yellow-nest-tulum/', [RedirectController::class, 'redirect5']);
Route::get('/transfer/hotel-bardo/', [RedirectController::class, 'redirect6']);
Route::get('/es/restaurante-estrada/', [RedirectController::class, 'homeEs']);
Route::get('/es/traslado/the-yellow-nest-tulum/', [RedirectController::class, 'redirect7']);
Route::get('/transfer/private-shuttle-casa-malca/', [RedirectController::class, 'redirect8']);
Route::get('/es/como-llegar-a-tulum/', [RedirectController::class, 'homeEs']);
Route::get('/transfer/hotel-maxanab-tulum/', [RedirectController::class, 'redirect9']);
Route::get('/transfer/jade-tulum-hotel/', [RedirectController::class, 'redirect10']);
Route::get('/pt/', [RedirectController::class, 'homeEs']);
Route::get('/pt/como-chegar-a-tulum/', [RedirectController::class, 'homeEs']);
Route::get('/transfer/transportation-to-cabanas-tulum/', [RedirectController::class, 'redirect11']);
Route::get('/transfer/transfer-la-zebra-colibri-boutique-hotel/', [RedirectController::class, 'redirect12']);
Route::get('/transfer/transportation-to-selina-tulum/', [RedirectController::class, 'redirect13']);
Route::get('/es/traslado/kai-tulum/', [RedirectController::class, 'redirect14']);
Route::get('/es/traslado/selina-tulum/', [RedirectController::class, 'redirect15']);
Route::get('/es/traslado/wakax-hacienda/', [RedirectController::class, 'redirect16']);
Route::get('/transfer/transfer-cancun-to-jashita-hotel/', [RedirectController::class, 'redirect17']);
Route::get('/es/traslado/casa-malca/', [RedirectController::class, 'redirect18']);
Route::get('/es/como-encontrarnos/', [RedirectController::class, 'homeEs']);
Route::get('/es/traslado/villa-las-estrellas-tulum/', [RedirectController::class, 'redirect19']);
Route::get('/es/traslado/azulik-tulum/', [RedirectController::class, 'redirect20']);
Route::get('/pt/transportes/wakax-hacienda/', [RedirectController::class, 'redirect3']);
Route::get('/es/traslado/zamas-hotel/', [RedirectController::class, 'redirect21']);
Route::get('/es/traslado/maka-hotel-boutique/', [RedirectController::class, 'redirect22']);
Route::get('/es/traslado/taxi-privado-hotel-una-vida/', [RedirectController::class, 'redirect23']);
Route::get('/es/traslado/jashita-hotel/', [RedirectController::class, 'redirect24']);
Route::get('/es/traslado/hotelito-azul-tulum/', [RedirectController::class, 'redirect25']);
Route::get('/travel-guide/', [RedirectController::class, 'homeEn']);
Route::get('/transfer/la-valise-tulum/', [RedirectController::class, 'redirect26']);
Route::get('/es/traslado/xperience-tulum-hotel/', [RedirectController::class, 'redirect27']);
Route::get('/es/traslado/hotel-maxanab-tulum/', [RedirectController::class, 'redirect28']);
Route::get('/transfer/azulik-tulum/', [RedirectController::class, 'redirect29']);
Route::get('/transfer/orchid-house-tulum/', [RedirectController::class, 'redirect30']);
Route::get('/transfer/hotelito-azul-tulum/', [RedirectController::class, 'redirect31']);
Route::get('/es/traslado/ana-y-jose-hotel-spa-tulum/', [RedirectController::class, 'redirect32']);
Route::get('/transfer/hotel-una-vida/', [RedirectController::class, 'redirect33']);
Route::get('/transfer/cab-from-cancun-to-zamas-hotel/', [RedirectController::class, 'redirect34']);
Route::get('/es/traslado/jade-tulum-hotel/', [RedirectController::class, 'redirect35']);
Route::get('/transfer/transfer-to-ana-y-jose-hotel-spa-tulum/', [RedirectController::class, 'redirect36']);
Route::get('/es/traslado/dreams-tulum-resort-spa/', [RedirectController::class, 'homeEn']);
Route::get('/es/restaurante-estrada/', [RedirectController::class, 'redirect37']);
Route::get('/transfer/cab-from-cancun-to-nomade-tulum/', [RedirectController::class, 'redirect38']);
Route::get('/es/traslado/ambre-epices-jungle-hotel-spa/', [RedirectController::class, 'redirect39']);
Route::get('/el-cayuco-tulum/', [RedirectController::class, 'redirect40']);
Route::get('/transfer/atman-residences-tulum-hotel/', [RedirectController::class, 'redirect41']);
Route::get('/pt/', [RedirectController::class, 'homeEn']);
Route::get('/pt/como-chegar-a-tulum/', [RedirectController::class, 'redirect42']);
Route::get('/restaurante-estrada/', [RedirectController::class, 'redirect43']);
Route::get('/es/traslado/nomade-tulum/', [RedirectController::class, 'redirect44']);
Route::get('/transfer/ophelia-tulum-hotel/', [RedirectController::class, 'redirect45']);
Route::get('/es/el-cayuco-tulum/', [RedirectController::class, 'redirect46']);
Route::get('/es/como-encontrarnos/', [RedirectController::class, 'homeEs']);
Route::get('/curry-by-po-thai/', [RedirectController::class, 'redirect47']);
Route::get('/es/curry-by-po-thai/', [RedirectController::class, 'redirect48']);
Route::get('/transfer/o-tulum-boutique-hotel/', [RedirectController::class, 'homeEn']);
Route::get('/transfer/cancun-airport-to-roc-luxe-tulum/', [RedirectController::class, 'redirect49']);
Route::get('/es/traslado/ophelia-tulum-hotel/', [RedirectController::class, 'redirect50']);
Route::get('/es/guia-de-viaje/', [RedirectController::class, 'homeEs']);
Route::get('/pt/transportes/ophelia-tulum-hotel/', [RedirectController::class, 'redirect45']);
Route::get('/travel-guide/', [RedirectController::class, 'homeEn']);
Route::get('/transfer/tago-tulum/', [RedirectController::class, 'redirect51']);
Route::get('/es/traslado/gramercy-tulum/', [RedirectController::class, 'homeEs']);
Route::get('/transfer/papaya-playa-project/', [RedirectController::class, 'redirect52']);
Route::get('/es/traslado/atman-residences-tulum-hotel/', [RedirectController::class, 'redirect53']);
Route::get('/es/traslado/transporte-privado-kanak-unique-tulum/', [RedirectController::class, 'redirect54']);
Route::get('/es/traslado/tago-tulum/', [RedirectController::class, 'redirect55']);
Route::get('/es/traslado/ujo-condo-boutique/', [RedirectController::class, 'homeEs']);
Route::get('/transfer/studio-11/', [RedirectController::class, 'redirect56']);
Route::get('/caprice-tulum-cabaret-affair-cuisine/', [RedirectController::class, 'homeEn']);
Route::get('/es/traslado/kuukum-tulum-hotel/', [RedirectController::class, 'redirect57']);
Route::get('/transfer/kanak-unique-tulum/', [RedirectController::class, 'redirect58']);
Route::get('/es/traslado/niwa-tulum-luxury-suites/', [RedirectController::class, 'redirect59']);
Route::get('/transfer/traslado-kuukum-tulum-hotel/', [RedirectController::class, 'redirect60']);
Route::get('/transfer/traslado-mezzanine-to-colibri-boutique-hotel/', [RedirectController::class, 'redirect61']);
Route::get('/transfer/cab-from-cancun-to-ambre-epices-jungle-hotel-spa/', [RedirectController::class, 'redirect62']);
Route::get('/transfer/transfer-and-private-cab-cancun-to-the-beach-tulum/', [RedirectController::class, 'redirect63']);
Route::get('/es/traslado/dreams-tulum-resort-spa/', [RedirectController::class, 'redirect64']);

//Jobs
Route::get('/jobs/hotels', [JobsController::class, 'hotels']);
Route::get('/jobs/prices', [JobsController::class, 'prices']);