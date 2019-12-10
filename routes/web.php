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
//Route::resource('/categorias', 'CategoriaController')name('categoria');
Route::resource('/clientes', 'ClienteController');
//Route::resource('/compras', 'CompraController')name('compra');
//Route::resource('/noticias', 'NoticiaController')name('noticia');
//Route::resource('/productos', 'ProductoController')name('producto');
//Route::resource('/promocions', 'PromocionController')name('promocion');
//Route::resource('/proveedores', 'ProveedorController')name('promocion');
//Route::resource('/servicios', 'ServicioController')name('servicio');
//Route::resource('/ventas', 'VentaController')name('venta');

Route::get('/redirect', 'SocialController@redirect')->name('redirect');
Route::get('/callback', 'SocialController@Callback')->name('callback');

