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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/validation', function (){
	return view('usuarios.fragment.form');
});
Route::DELETE('/eliminar-producto/{id}','HomeController@destroyProduct')->name('destroyProduct');
Route::resource('usuarios','UsuarioController');
