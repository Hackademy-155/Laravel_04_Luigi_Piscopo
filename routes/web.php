<?php

use App\Http\Controllers\ControllerContatti;
use App\Http\Controllers\ControllerHome;
use Illuminate\Support\Facades\Route;


// home-page //
Route::get('/', [ControllerHome::class, 'home'])->name('homepage');


// contatti // 
Route::get('/contatti', [ControllerContatti::class, 'contatti'])->name('contatti');


Route::post('/contatti/mail', [ControllerContatti::class, 'invio'])->name('invio_email');