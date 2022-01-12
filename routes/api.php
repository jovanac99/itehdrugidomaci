<?php

use App\Http\Controllers\AutentifikacijaController;
use App\Http\Controllers\ControllerDoktor;
use App\Http\Controllers\ControllerUstanova;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AutentifikacijaController::class, 'register']);
Route::post('login', [AutentifikacijaController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('ustanova', [ControllerUstanova::class, 'index']);
    Route::get('ustanova/{ustanova}', [ControllerUstanova::class, 'show']);
    Route::post('ustanova', [ControllerUstanova::class, 'store']);
    Route::delete('ustanova/{ustanova}', [ControllerUstanova::class, 'destroy']);
    Route::get('doktor', [ControllerDoktor::class, 'index']);
    Route::get('doktor/{doktor}', [ControllerDoktor::class, 'show']);
    Route::post('logout', [AutentifikacijaController::class, 'logout']);
});
