<?php

use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/es');

Route::prefix('{locale}')
    ->middleware([LocaleMiddleware::class])
    ->group(function () {

        Route::get('/', function () {
            return view('welcome');
        })->name('welcome');

        Route::get('historia', function () {
            return view('historia');
        })->name('historia');

        Route::get('calidad', function () {
            return view('calidad');
        })->name('calidad');

        Route::get('productos', function () {
            return view('productos');
        })->name('productos');

        Route::get('unete', function () {
            return view('unete');
        })->name('unete');

        Route::get('contacto', function () {
            return view('contacto');
        })->name('contacto');

    });
