<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Funcionario;
use App\Models\Pedido;
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
Route::get('/clientes/destroy/{id_cliente}', 'ClienteController@destroyConfirm')->name('clientes.destroy-confirm');

Route::resource('produtos', ProdutoController::class);
Route::resource('/produtos', ProdutoController::class);
Route::get('/produtos/destroy/{cod_produto}', 'ProdutoController@destroyConfirm')->name('produtos.destroy-confirm');


Route::resource('/funcionarios', FuncionarioController::class);
Route::get('/funcionarios/destroy/{cod_funcionario}', 'FuncionarioController@destroyConfirm')->name('funcionarios.destroy-confirm');