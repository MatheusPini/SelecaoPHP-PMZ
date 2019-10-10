<?php

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
use App\Aparelho;
use App\Usuario;
use App\Usuario_Aparelho;

Route::get('/', function () {
    $dev = Aparelho::with('usuarios')->paginate();
    return view('welcome', compact('dev'));
});
Route::get('/usuarios/novo', 'UsuarioController@create')->name('usuarios.novo');
Route::post('/usuarios', 'UsuarioController@store')->name('usuarios');
Route::get('/usuarios/editar/{id}', 'UsuarioController@edit');
Route::post('/usuarios/{id}', 'UsuarioController@update');
Route::get('/usuarios', 'UsuarioController@index')->name('usuarios.listar');
