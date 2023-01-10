<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ListeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PhaseController;
use App\Models\nom_projet;

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
Route::get('/FormeProjet', [ProjetController::class, 'lister']);
Route::post('/FormeProjet', [ProjetController::class, 'ajoutProjet']);
Route::get('/ViewProjet', [ListeController::class, 'viewP'])->name("projet");
Route::get('/DetailProjet', [DetailController::class, 'DetailP']);
Route::post('/DetailProjet', [DetailController::class, 'detailProjet']);
Route::get('/PhaseProjet', [PhaseController::class, 'PhaseP'])->name("phase");


//Route::get('/ViewProjet', [ListeController::class, 'viewP'])->name("projet");
