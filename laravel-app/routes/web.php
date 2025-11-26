<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

// ROTAS DO CRUD DE CATEGORIAS
Route::resource('categorias', CategoriaController::class);
