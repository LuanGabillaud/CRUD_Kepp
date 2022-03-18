<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//clientes
Route::get('/clientes', [ClienteController::class, 'showClientes'])->middleware(['auth'])->name('clientes');
Route::post('/cliente/cadastrar', [ClienteController::class, 'create'])->middleware(['auth'])->name('cadastrar_cliente');
Route::post('/cliente/editar', [ClienteController::class, 'edit'])->middleware(['auth'])->name('editar_cliente');
Route::post('/cliente/atualizar/{id?}', [ClienteController::class, 'update'])->middleware(['auth'])->name('empresa_cliente');
Route::get('/cliente/excluir/{id?}', [ClienteController::class, 'delete'])->middleware(['auth'])->name('excluir_cliente');

//empresas
Route::get('/empresas', [EmpresaController::class, 'showEmpresas'])->middleware(['auth'])->name('empresas');
Route::post('/empresa/cadastrar', [EmpresaController::class, 'create'])->middleware(['auth'])->name('cadastrar_empresa');
Route::get('/empresa/editar/{id}', [EmpresaController::class, 'edit'])->middleware(['auth'])->name('editar_empresa');
Route::post('/empresa/atualizar/{id?}', [EmpresaController::class, 'update'])->middleware(['auth'])->name('atualizar_empresa');
Route::get('/empresa/excluir/{id?}', [EmpresaController::class, 'delete'])->middleware(['auth'])->name('excluir_empresa');

Route::get('/cadastrar_empresa', function () {
    return view('cad_empresa');
})->middleware(['auth'])->name('cad_empresa');

Route::get('/cadastrar_cliente', function () {
    return view('cad_cliente');
})->middleware(['auth'])->name('cad_cliente');



require __DIR__.'/auth.php';
