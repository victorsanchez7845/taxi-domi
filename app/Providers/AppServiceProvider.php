<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
public function boot(): void
{
    if (app()->environment('production')) {
        URL::forceScheme('https');
    }

    Livewire::setScriptRoute(function ($handle) {
        return Route::get('/livewire/livewire.js', $handle);
    });
}
    
}