<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\SuggestionController;


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

/*Route::get('/',
[NetflixController::class, 'index'])->name('Netflix.index');

Route::get('Netflix.film',
[NetflixController::class, 'plus'])->name('Netflix.film');*/

Route::get('/',
[FilmsController::class, 'index'])->name('Netflix.index');

Route::get('Netflix.personne',
[PersonnesController::class, 'index'])->name('Netflix.personne');

Route::get('/films/creation',
[FilmsController::class, 'create'])->name('Netflix.createFilm');

Route::post('/films',
[FilmsController::class, 'store'])->name('Netflix.store');

Route::get('Netflix/{film}',
[FilmsController::class, 'show'])->name('Netflix.show');

Route::get('Netflix.personne/{personne}',
[PersonnesController::class, 'show'])->name('Netflix.zoom');
