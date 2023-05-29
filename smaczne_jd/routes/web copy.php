<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodstawowyKontroler;


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
    return view('welcome');
});
Route::get('/home', [PodstawowyKontroler::class,'zwrocStroneDomowa']);
Route::get('/koszyk', [PodstawowyKontroler::class,'zwrocStroneKoszyk']);
Route::get('/restauracje', [PodstawowyKontroler::class,'zwrocStroneRestauracje']);
Route::get('/loguj', [PodstawowyKontroler::class,'Loguj']);
Route::get('/rejestruj', [PodstawowyKontroler::class,'Rejestruj']);
Route::get('/restauracje/{id}', [PodstawowyKontroler::class,'strona_menu']);
