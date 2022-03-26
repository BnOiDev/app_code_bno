<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes -> HTTP
|--------------------------------------------------------------------------
|http: get , post , put ,patch, delete, options
|
*/

/*@Start -> Minhas rotas => para controller*/

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/produtos', [App\Http\Controllers\ProdutoController::class, 'produtos']);
Route::get('/carrinho', [App\Http\Controllers\CarrinhoController::class, 'carrinho']);
Route::get('/sobre', [App\Http\Controllers\SobreController::class, 'sobre']);
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato']);


/*@End*/
