<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\ActeursController;



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

/****************les routes pour voire tout****************/
Route::get('/',
[FilmsController::class, 'index'])->name('Netflix.index');

Route::get('Netflix.personne',
[PersonnesController::class, 'index'])->name('Netflix.personne');

Route::get('Netflix.acteur',
[ActeursController::class, 'index'])->name('Netflix.acteur');

/****************Les routes pour formulaire créer****************/
Route::get('/films/creation',
[FilmsController::class, 'create'])->name('Netflix.createFilm');

Route::post('/films',
[FilmsController::class, 'store'])->name('Netflix.store');

Route::post('/personnes',
[PersonnesController::class, 'store'])->name('Personne.store');

Route::get('/personnes/creation',
[PersonnesController::class, 'create'])->name('Personne.createPersonnes');

Route::post('/acteurs',
[ActeursController::class, 'store'])->name('Acteur.store');

Route::get('/acteurs/creation',
[ActeursController::class, 'create'])->name('Acteur.createActeur');

/****************Les routes pour modifier****************/
Route::get('/films/modifier/{film}', 
[FilmsController::class, 'edit'])->name('Netflix.modifierFilm');

Route::patch('/films/modifier/{film}',
[FilmsController::class, 'update'])->name('Netflix.update');

/****************Les routes pour zoomer****************/
Route::get('Netflix/{film}',
[FilmsController::class, 'show'])->name('Netflix.show');

Route::get('Netflix.personne/{personne}',
[PersonnesController::class, 'show'])->name('Netflix.zoom');

Route::get('Netflix.acteur/{acteur}',
[ActeursController::class, 'show'])->name('Netflix.zoomActeur');

