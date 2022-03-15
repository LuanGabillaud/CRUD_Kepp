<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

// empresas
Route::get('/empresas', function () {
    return view('empresas');
})->middleware(['auth'])->name('dashboard');

Route::get('/clientes', function () {
    return view('clientes');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function (){
    return view('home');
})->middleware(['auth'])->name('dashboard');

Route::get('/empresa_form', function(){
    return view('empresa_form');
})->middleware(['auth'])->name('dashboard');

Route::get('/cliente_form', function() {
    return view('cliente_form');
})->middleware(['auth'])->name('dashboard');
   

require __DIR__.'/auth.php';



    