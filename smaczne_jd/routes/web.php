<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PodstawowyKontroler;
use App\Http\Controllers\UserController;


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
    return view('home');
});

//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
   // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 //   
//});

Route::get('/home', [PodstawowyKontroler::class,'zwrocStroneDomowa']);
Route::get('/profil', [PodstawowyKontroler::class,'zwrocStroneProfil']);
Route::get('/restauracje', [PodstawowyKontroler::class,'zwrocStroneRestauracje']);
Route::get('/restauracje/{id}', [PodstawowyKontroler::class,'strona_menu']);
Route::get('/restauracje/{id}/dodaj/{idmenu}', [PodstawowyKontroler::class, 'addKoszyk'])->middleware('auth');
Route::get('/restauracje/{id}/usun/{idmenu}', [PodstawowyKontroler::class, 'deleteKoszyk'])->middleware('auth');
Route::get('/restauracje/{id}/zaplac', [PodstawowyKontroler::class, 'zaplac'])->middleware('auth');

Route::get('/loguj', [PodstawowyKontroler::class,'zmienStanUwierzytelnieniaLog']);
Route::get('/rejestracja', [PodstawowyKontroler::class, 'zmienStanUwierzytelnieniaRej']);
Route::get('/logout', [PodstawowyKontroler::class,'zmienStanUwierzytelnieniaLog']);


require __DIR__.'/auth.php';
