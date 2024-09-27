<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\RacesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

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