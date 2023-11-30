<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PersonnesController;
use App\Http\Controllers\ActeursController;
use App\Http\Controllers\UsagersController;


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
[FilmsController::class, 'index'])->name('Netflix.index')->middleware('auth');

Route::get('/choose',
[UsagersController::class, 'choose'])->name('chooseUser');

Route::get('Netflix.personne',
[PersonnesController::class, 'index'])->name('Netflix.personne')->middleware('auth');

Route::get('Netflix.acteur',
[ActeursController::class, 'index'])->name('Netflix.acteur')->middleware('auth');




/****************Les routes pour formulaire créer****************/
Route::get('/films/creation',
[FilmsController::class, 'create'])->name('Netflix.createFilm')->middleware(['auth', 'admin']);

Route::post('/films',
[FilmsController::class, 'store'])->name('Netflix.store')->middleware(['auth', 'admin']);

Route::post('/personnes',
[PersonnesController::class, 'store'])->name('Personne.store')->middleware(['auth', 'admin']);

Route::get('/personnes/creation',
[PersonnesController::class, 'create'])->name('Personne.createPersonnes')->middleware(['auth', 'admin']);

Route::post('/acteurs',
[ActeursController::class, 'store'])->name('Acteur.store')->middleware(['auth', 'admin']);

Route::get('/acteurs/creation',
[ActeursController::class, 'create'])->name('Acteur.createActeur')->middleware(['auth', 'admin']);

Route::post('/usagers',
[UsagersController::class, 'store'])->name('Usager.store');

Route::get('/usagers/creation',
[UsagersController::class, 'create'])->name('Usager.createUsager');




/****************Les routes pour modifier****************/
Route::get('/films/modifier/{film}', 
[FilmsController::class, 'edit'])->name('Netflix.modifierFilm')->middleware(['auth', 'admin']);

Route::patch('/films/modifier/{film}',
[FilmsController::class, 'update'])->name('Netflix.updateFilm')->middleware(['auth', 'admin']);

Route::get('/personnes/modifier/{personne}', 
[PersonnesController::class, 'edit'])->name('Netflix.modifierPersonne')->middleware(['auth', 'admin']);

Route::patch('/personnes/modifier/{personne}',
[PersonnesController::class, 'update'])->name('Netflix.updatePersonne')->middleware(['auth', 'admin']);

Route::get('/acteurs/modifier/{acteur}', 
[ActeursController::class, 'edit'])->name('Netflix.modifierActeur')->middleware(['auth', 'admin']);

Route::patch('/acteurs/modifier/{acteur}',
[ActeursController::class, 'update'])->name('Netflix.updateActeur')->middleware(['auth', 'admin']);

Route::get('/usagers/modifier/{usager}', 
[UsagersController::class, 'edit'])->name('Netflix.modifierUsager')->middleware(['auth', 'admin']);

Route::patch('/usagers/modifier/{usager}',
[UsagersController::class, 'update'])->name('Netflix.updateUsager')->middleware(['auth', 'admin']);




/****************Les routes pour zoomer****************/
Route::get('Netflix/{film}',
[FilmsController::class, 'show'])->name('Netflix.show')->middleware('auth');

Route::get('Netflix.personne/{personne}',
[PersonnesController::class, 'show'])->name('Netflix.zoom')->middleware('auth');

Route::get('Netflix.acteur/{acteur}',
[ActeursController::class, 'show'])->name('Netflix.zoomActeur')->middleware('auth');




/****************Les routes pour delete****************/
Route::delete('/films/{id}',
[FilmsController::class, 'destroy'])->name('films.destroy')->middleware(['auth', 'admin']);

Route::delete('/personnes/{id}',
[PersonnesController::class, 'destroy'])->name('Personne.destroy')->middleware(['auth', 'admin']);

Route::delete('/acteurs/{id}',
[ActeursController::class, 'destroy'])->name('Acteurs.destroy')->middleware(['auth', 'admin']);



/************************Login*****************************/
Route::get('/login',
[UsagersController::class, 'showLoginForm'])->name('login');

Route::post('/login',
[UsagersController::class, 'login']);

Route::post('/logout',
[UsagersController::class, 'logout'])->name('logout');

Route::get('/register',
[UsagersController::class, 'showRegisterForm'])->name('Register');