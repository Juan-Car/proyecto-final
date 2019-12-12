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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuarios', 'UsuarioController@index')->name('usuario');
Route::resource('categorias', 'CategoriaController');
Route::resource('clientes','ClienteController');
Route::resource('proveedors', 'ProveedorController');
Route::resource('medicinas', 'MedicinaController');
Route::resource('servicios', 'ServicioController');
Route::resource('tipos', 'TipoController');
Route::resource('tratamientos', 'TratamientoController');
Route::resource('mascotas', 'MascotaController');
Route::resource('productos', 'ProductoController');
Route::resource('vacunas', 'VacunaController');
Route::resource('boletas', 'BoletaController');

Route::get('/redirect', 'SocialController@redirect')->name('redirect');
Route::get('/callback', 'SocialController@Callback')->name('callback');

