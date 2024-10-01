<?php

use App\Http\Controllers\Schedapg;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RacesController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\IncantesimiController;
use App\Http\Controllers\SchedapgController;

Route::get('/', [PublicController::class, 'home'])->name('home');

//! Rotte per la Mail
Route::get('/contact_us', [MailController::class, 'contact_us'])->name('contact_us');
Route::post('/contact_us/send', [MailController::class, "send_email"])->name('send_email');

//! ROTTE CRUD per le card RACES
//* Rotte per le Create
//rotta per la creazione di card book
Route::get('/races/create',[RacesController::class, "create"])->name('races.create');
Route::post('/races/submit',[RacesController::class, "store"])->name('races.store');

//* Rotte per la Read
Route::get('/races',[RacesController::class, "index"])->name('races.index');
Route::get('/dettaglio/race/{race}',[RacesController::class, "show"])->name('races.show');

//* Rotte per l'Update
Route::get('/modifica/race/{race}',[RacesController::class, "edit"])->name('races.edit');
Route::put('/aggiorna/race/{race}',[RacesController::class, "update"])->name('races.update');

//* Rotta per la destroy
Route::delete('/elimina/race/{race}',[RacesController::class, "destroy"])->name('races.delete');

//! Rotte per classes
//rotta per la creazione di card book
Route::get('/classes/create', [ClassesController::class, "create"])->name('classes.create');
Route::post('/classes/submit',[ClassesController::class, "store"])->name('classes.store');

//* Rotte per la Read
Route::get('/classes',[ClassesController::class, "index"])->name('classes.index');
Route::get('/dettaglio/class/{class}',[ClassesController::class, "show"])->name('classes.show');

//* Rotte per l'Update
Route::get('/modifica/class/{class}',[ClassesController::class, "edit"])->name('classes.edit');
Route::put('/aggiorna/class/{class}',[ClassesController::class, "update"])->name('classes.update');

//* Rotta per la destroy
Route::delete('/elimina/class/{class}',[ClassesController::class, "destroy"])->name('classes.delete');

//! Rotta per incantesimi
Route::get('/incantesimi',[IncantesimiController::class, "index"])->name('incantesimi.index');

//! Rotta per Scheda_pg
Route::get('/scheda_pg',[SchedapgController::class, "index"])->name('scheda_pg.index');
