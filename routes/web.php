<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formulario.horoscopo', function () {
    return view('formulario');
});