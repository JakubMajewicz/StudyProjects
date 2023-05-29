<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShipModulesController;
use App\Http\Controllers\ModulesCrewController;
use App\Http\Controllers\CrewSkillsController;



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

// SHIP MODULES
Route::get('/shipmodules/list', [ShipModulesController::class, 'index']);
Route::post('')
Route::get('/shipmodules/add', [ShipModulesController::class, 'create']);
Route::post('/shipmodules/save', [ShipModulesController::class, 'store']);
//Edit and Update
Route::get('shipmodules/edit/{id}', [ShipModulesController::class, 'edit']);
Route::post('shipmodules/update/{id}', [ShipModulesController::class, 'update']);
// delete
Route::get('/shipmodules/show/{id}', [ShipModulesController::class, 'show']);
Route::post('/shipmodules/delete/{id}', [ShipModulesController::class, 'destroy']);
//crew
Route::post('/shipmodules/crew/{id}', [ShipModulesController::class, 'crew']);

// MODULES CREW
Route::get('/modulescrew/list', [ModulesCrewController::class, 'index']);
Route::get('/modulescrew/add', [ModulesCrewController::class, 'create']);
Route::post('/modulescrew/save', [ModulesCrewController::class, 'store']);
//Edit and Update
Route::get('modulescrew/edit/{id}', [ModulesCrewController::class, 'edit']);
Route::post('modulescrew/update/{id}', [ModulesCrewController::class, 'update']);
// delete
Route::get('/modulescrew/show/{id}', [ModulesCrewController::class, 'show']);
Route::post('/modulescrew/delete/{id}', [ModulesCrewController::class, 'destroy']);

// CREW SKILLS
Route::get('/crewskills/list', [CrewSkillsController::class, 'index']);
Route::get('/crewskills/add', [CrewSkillsController::class, 'create']);
Route::post('/crewskills/save', [CrewSkillsController::class, 'store']);
//Edit and Update
Route::get('crewskills/edit/{id}', [CrewSkillsController::class, 'edit']);
Route::post('crewskills/update/{id}', [CrewSkillsController::class, 'update']);
// delete
Route::get('/crewskills/show/{id}', [CrewSkillsController::class, 'show']);
Route::post('/crewskills/delete/{id}', [CrewSkillsController::class, 'destroy']);