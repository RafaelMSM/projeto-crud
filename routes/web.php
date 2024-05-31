<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PessoaSepultadaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

Route::resources([
    'cliente' => ClienteController::class,
    'pessoa_sepultada' => PessoaSepultadaController::class,
]);

Route::get('/cliente/delete/{id}', [ClienteController::class, 'delete']);
Route::get('/pessoa_sepultada/delete/{id}', [PessoaSepultadaController::class, 'delete'])->name('pessoa_sepultada.delete');
