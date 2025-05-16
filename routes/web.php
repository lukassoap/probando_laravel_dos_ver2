<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploProyectoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("project", EjemploProyectoController::class); // podemos usar el nombre que queramos en project



