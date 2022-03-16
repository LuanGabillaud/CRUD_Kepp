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
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/home', function (){
    return view('home');
});

Route::get('/empresa_form', function(){
    return view('empresa_form');
});

Route::get('/cliente_form', function() {
    return view('cliente_form');
});
   

require __DIR__.'/auth.php';



    