<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\NetflixController;
use App\Http\Controllers\FilmsController;


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

Route::get('/',
[NetflixController::class, 'index'])->name('Netflix.index');

Route::get('Netflix.create',
[NetflixController::class, 'create'])->name('Netflix.create');

Route::get('Netflix.film',
[NetflixController::class, 'plus'])->name('Netflix.film');