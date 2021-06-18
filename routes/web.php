<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerProdutos;
use App\Http\Controllers\ControllerCategorias;
use App\Http\Controllers\ControllerUsers;



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



Route::middleware(['auth'])->group(function () {


//ROUTAS PARA PRODUTOS
Route::get('/produtos/adicionar',[ControllerProdutos::class, 'formProduto']);
Route::get('/produtos', [ControllerProdutos::class,'lista']);
Route::post('/produtos/salva-produto',[ControllerProdutos::class, 'salvaProduto']);
Route::get('/produtos/edita',[ControllerProdutos::class,'editaProduto']);
Route::post('/produtos-edita',[ControllerProdutos::class,'updateProduto']);
Route::get('/produtos/delete',[ControllerProdutos::class, 'deleteProduto']);

//ROTAS CATEGORIAS
Route::get('/categorias',[ControllerCategorias::class,'index']);
Route::get('/categorias/novo/', function(){
    return view('categorias.novo');
 });
Route::post('/categorias/salvar',[ControllerCategorias::class,'salvar']);
Route::get('categorias/delete',[ControllerCategorias::class,'delete']);
Route::get('/categorias/edit/{id}',[ControllerCategorias::class,'edit']);
Route::post('/categorias/update/{id}',[ControllerCategorias::class,'update']);

//ROTAS USUÁRIOS

Route::get('/usuarios',[ControllerUsers::class,'users']);
Route::get('/usuarios/form',[ControllerUsers::class,'formUser']);
Route::post('/usuarios/salvar',[ControllerUsers::class,'saveUser']);
Route::get('usuarios/delete/',[ControllerUsers::class,'destroy']);
Route::get('/usuarios/edit/',[ControllerUsers::class,'edit']);
Route::post('/usuarios/update',[ControllerUsers::class,'updateUsers']);
   



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


});

require __DIR__.'/auth.php';

//Rotas "sobre"
Route::get('/sobre', function () {
    return view('sobre.about');
});