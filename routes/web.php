<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ejemplo práctico: ruta que devuelve un texto propio.
// config('app.name') lee APP_NAME desde .env a través de config/app.php.
Route::get('/hola', function () {
    return 'Mi primera aplicación con Laravel — ' . config('app.name');
});
