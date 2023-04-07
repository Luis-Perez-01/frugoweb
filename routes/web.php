<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/calidad', function () {
    return view('calidad');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/unete', function () {
    return view('unete');
});

Route::get('/contacto', function () {
    return view('contacto');
});
