<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Autocomplete\AutocompleteController;
use App\Http\Controllers\Api\Contact\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/autocomplete', [AutocompleteController::class,'index']);
Route::post('/make-contact', [ContactController::class,'index']);
Route::post('/make-quote', [ContactController::class,'quote']);