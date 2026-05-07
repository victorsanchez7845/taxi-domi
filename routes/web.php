<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\JobsController;

Route::middleware('locale')->group(function () {

    // HOME
    Route::get('/', [WebsiteController::class, 'index'])->name('home.en');

    // MAIN PUNTA CANA PAGES
    Route::get('/punta-cana-airport-transfers', [WebsiteController::class, 'puntaCanaAirportTransfers'])->name('punta-cana-airport-transfers.en');
    Route::get('/santo-domingo-airport-transfers', [WebsiteController::class, 'santoDomingoAirportTransfers'])->name('santo-domingo-airport-transfers.en');
    Route::get('/transportation-price-punta-cana', [WebsiteController::class, 'pricing'])->name('pricing.en');
    Route::get('/how-to-get-to-punta-cana', [WebsiteController::class, 'howToGet'])->name('how-to-get.en');

    // MAIN ROUTES
    Route::get('/punta-cana-airport-to-bavaro', [WebsiteController::class, 'puntaCanaToBavaro'])->name('punta-cana-to-bavaro.en');
    Route::get('/punta-cana-airport-to-cap-cana', [WebsiteController::class, 'puntaCanaToCapCana'])->name('punta-cana-to-cap-cana.en');
    Route::get('/punta-cana-airport-to-uvero-alto', [WebsiteController::class, 'puntaCanaToUveroAlto'])->name('punta-cana-to-uvero-alto.en');
    Route::get('/punta-cana-airport-to-bayahibe', [WebsiteController::class, 'puntaCanaToBayahibe'])->name('punta-cana-to-bayahibe.en');
    Route::get('/punta-cana-airport-to-la-romana', [WebsiteController::class, 'puntaCanaToLaRomana'])->name('punta-cana-to-la-romana.en');

    // DESTINATIONS / HOTELS
    Route::get('/destinations', [HotelsController::class, 'index'])->name('destinations.en');
    Route::get('/transfers-to-bavaro', [HotelsController::class, 'bavaro'])->name('destinations.bavaro.en');
    Route::get('/transfers-to-cap-cana', [HotelsController::class, 'capCana'])->name('destinations.cap-cana.en');
    Route::get('/transfers-to-uvero-alto', [HotelsController::class, 'uveroAlto'])->name('destinations.uvero-alto.en');
    Route::get('/transfers-to-bayahibe', [HotelsController::class, 'bayahibe'])->name('destinations.bayahibe.en');

    // Dynamic hotel pages
    Route::get('/shuttle-to-{slug}', [HotelsController::class, 'hotel'])->name('destinations.hotel.en');

    // BASIC PAGES
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact.en');
    Route::get('/faq', [WebsiteController::class, 'faq'])->name('faq.en');
    Route::get('/fleet', [WebsiteController::class, 'fleet'])->name('fleet.en');
    Route::get('/terms-and-conditions', [WebsiteController::class, 'terms'])->name('terms.en');
    Route::get('/privacy', [WebsiteController::class, 'privacy'])->name('privacy.en');

    // BOOKING FLOW
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

        Route::get('/my-reservation-detail/{uuid}', [ProcessController::class, 'reservationDetail'])->name('reservation.detail.en');

        Route::get('/payment/{uuid}', [PaymentController::class, 'paymentUUID'])->name('payments.uuid.en');
        Route::get('/payment-capture-order', [PaymentController::class, 'paypalCapture'])->name('reservation.payment.paypal.capture.en');
    });

    // SPANISH
    Route::prefix('es')->group(function () {

        Route::get('/', [WebsiteController::class, 'index'])->name('home.es');

        Route::get('/traslados-aeropuerto-punta-cana', [WebsiteController::class, 'puntaCanaAirportTransfers'])->name('punta-cana-airport-transfers.es');
        Route::get('/traslados-aeropuerto-santo-domingo', [WebsiteController::class, 'santoDomingoAirportTransfers'])->name('santo-domingo-airport-transfers.es');
        Route::get('/precio-traslado-punta-cana', [WebsiteController::class, 'pricing'])->name('pricing.es');
        Route::get('/como-llegar-a-punta-cana', [WebsiteController::class, 'howToGet'])->name('how-to-get.es');

        Route::get('/aeropuerto-punta-cana-a-bavaro', [WebsiteController::class, 'puntaCanaToBavaro'])->name('punta-cana-to-bavaro.es');
        Route::get('/aeropuerto-punta-cana-a-cap-cana', [WebsiteController::class, 'puntaCanaToCapCana'])->name('punta-cana-to-cap-cana.es');
        Route::get('/aeropuerto-punta-cana-a-uvero-alto', [WebsiteController::class, 'puntaCanaToUveroAlto'])->name('punta-cana-to-uvero-alto.es');
        Route::get('/aeropuerto-punta-cana-a-bayahibe', [WebsiteController::class, 'puntaCanaToBayahibe'])->name('punta-cana-to-bayahibe.es');
        Route::get('/aeropuerto-punta-cana-a-la-romana', [WebsiteController::class, 'puntaCanaToLaRomana'])->name('punta-cana-to-la-romana.es');

        Route::get('/destinos', [HotelsController::class, 'index'])->name('destinations.es');
        Route::get('/traslados-a-bavaro', [HotelsController::class, 'bavaro'])->name('destinations.bavaro.es');
        Route::get('/traslados-a-cap-cana', [HotelsController::class, 'capCana'])->name('destinations.cap-cana.es');
        Route::get('/traslados-a-uvero-alto', [HotelsController::class, 'uveroAlto'])->name('destinations.uvero-alto.es');
        Route::get('/traslados-a-bayahibe', [HotelsController::class, 'bayahibe'])->name('destinations.bayahibe.es');

        Route::get('/traslado-a-{slug}', [HotelsController::class, 'hotel'])->name('destinations.hotel.es');

        Route::get('/contacto', [WebsiteController::class, 'contact'])->name('contact.es');
        Route::get('/preguntas-frecuentes', [WebsiteController::class, 'faq'])->name('faq.es');
        Route::get('/flota', [WebsiteController::class, 'fleet'])->name('fleet.es');
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

            Route::get('/mi-reservacion-detalle/{uuid}', [ProcessController::class, 'reservationDetail'])->name('reservation.detail.es');

            Route::get('/pago/{uuid}', [PaymentController::class, 'paymentUUID'])->name('payments.uuid.es');
            Route::get('/payment-capture-order', [PaymentController::class, 'paypalCapture'])->name('reservation.payment.paypal.capture.es');
        });
    });
});

// BLOG
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/es/blog', [BlogController::class, 'indexEs'])->name('blog.index.es');
Route::get('/es/blog/{slug}', [BlogController::class, 'showEs'])->name('blog.show.es');

// HOTEL DIRECTORY
Route::get('/hotels', [HotelController::class, 'index'])->name('hotel.index');
Route::get('/hotels/{slug}', [HotelController::class, 'show'])->name('hotel.show');

Route::prefix('es')->group(function () {
    Route::get('/hoteles', [HotelController::class, 'indexEs'])->name('hotel.index.es');
    Route::get('/hoteles/{slug}', [HotelController::class, 'showEs'])->name('hotel.show.es');
});

// JOBS
Route::get('/jobs/hotels', [JobsController::class, 'hotels']);
Route::get('/jobs/prices', [JobsController::class, 'prices']);