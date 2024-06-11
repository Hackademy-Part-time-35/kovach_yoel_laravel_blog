<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articoli', function () {
    return view('articoli');
});


Route::get('/contatti', function () {
    return view('contatti');
});


Route::get('/chiSiamo', function () {
    return view('chi siamo');
});