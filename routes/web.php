<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

Route::resources([
    'cliente' => ClienteController::class,
    #produtos => ProdutosController::class
]);

Route::get('/cliente/delete/{id}', [ClienteController::class, 'delete']);