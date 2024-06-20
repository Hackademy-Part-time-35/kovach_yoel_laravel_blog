<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;



Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/articoli', [PageController::class, 'articoli'])->name('articoli');

Route::get('/articolo/{id}', [PageController::class, 'articolo'])->name('articolo');

Route::get('/chi-siamo', [PageController::class, 'chiSiamo'])->name('chi-siamo');




Route::get('/contatti', [ContactController::class, 'contatti'])->name('contatti');
Route::post('/contatti/invia', [ContactController::class, 'invia'])->name('contatti.invia');