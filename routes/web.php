<?php

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
    
    return view('bienvenido');
});
Route::get('/llamame', function () {
    
    return view('contacto');
})->name('contacto');

Route::get('/customs', function () {
    $msj = "Mesaje desde el servidor";
    /** Retornamos una vista con multiples parametros */
    return view('custom', ['msj'=>$msj, "flag"=> true]);
});

