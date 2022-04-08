<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;

use App\Http\Controllers\Dashboard\Postcontroller;

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
// Route::get('/llamame', function () {
    
//     return view('contacto');
// })->name('contacto');

// Route::get('/customs', function () {
//     $msj = "Mesaje desde el servidor";
//     /** Retornamos una vista con multiples parametros */
//     return view('custom', ['msj'=>$msj, "flag"=> true]);
// });

// Route::get('/test',[App\Http\Controllers\Dashboard\TestController::class, 'test'])->name("prueba");

/**
 * Rutas de tipo recurso
 * es mejor esta ya que implementa todas las rutas tradicionales y evitamos
 * escribir en sinfin de codigo
 */
Route::resource('post', Postcontroller::class );


/**
 * Rutas tradicionales
 */
Route::get('post', [Postcontroller::class, 'index']);
// Route::get('post/{post}', [Postcontroller::class, 'show']);
//Route::get('post/create', [Postcontroller::class, 'create']);
// Route::get('post/{post}/edit', [Postcontroller::class, 'edit']);

// Route::post('post', [Postcontroller::class, 'store']);
// Route::put('post/{post}', [Postcontroller::class, 'update']);
// Route::delete('post/{post}', [Postcontroller::class, 'destroy']);