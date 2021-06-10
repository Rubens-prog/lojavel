<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerProdutos;



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




//ROUTAS PARA PRODUTOS
Route::get('/produtos', [ControllerProdutos::class,'lista']);
Route::get('/produtos/adicionar',[ControllerProdutos::class, 'adicionaProduto']);
Route::post('/produtos/salva-produto',[ControllerProdutos::class, 'salvaProduto']);
Route::get('/produtos/edita',[ControllerProdutos::class, 'editaProduto']);
Route::get('/produtos/delete',[ControllerProdutos::class, 'deleteProduto']);