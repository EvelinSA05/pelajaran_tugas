<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZodiakController;
use App\Http\Controllers\KalkulatorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tugas');
});

Route::get('zodiak', [ZodiakController::class,'index']);
Route::post('zodiac', [ZodiakController::class,'zodiak']);
Route::get('kalkulator', [KalkulatorController::class,'index']);
Route::post('calculator', [KalkulatorController::class,'kalkulator']);
