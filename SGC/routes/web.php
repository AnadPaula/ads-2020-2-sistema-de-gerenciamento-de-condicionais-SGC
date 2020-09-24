<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\PedidoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::resource('/clientes', ClienteController::class);
Route::get('/clientes/destroy/{id_cliente}', [ClienteController::class, 'destroyConfirm'])->name('clientes.destroy-confirm');

Route::resource('/produtos', ProdutoController::class);
Route::get('/produtos/destroy/{cod_produto}', [ProdutoController::class,'destroyConfirm'])->name('produtos.destroy-confirm');


Route::resource('/funcionarios', FuncionarioController::class);
Route::get('/funcionarios/destroy/{cod_funcionario}', [FuncionarioController::class,'destroyConfirm'])->name('funcionarios.destroy-confirm');

Route::resource('/pedidos', PedidoController::class);
Route::get('/pedidos/destroy/{id_pedido}', [PedidoController::class,'destroyConfirm'])->name('pedidos.destroy-confirm');

