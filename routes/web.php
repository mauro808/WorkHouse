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



Auth::routes();

// Rutas del Cliente
Route::get('/clientes', 'PagesController@listarClientes')->name('cliente.listar');
Route::get('/detalleCliente/{id}', 'ClienteController@index')->name('cliente.detalle');
Route::get('/agregarCliente', 'PagesController@agregarCliente')->name('agregarCliente');
Route::post('/agregarCliente', 'ClienteController@store')->name('agregarCliente');
Route::get('/editarCliente/{id}', 'ClienteController@edit')->name('cliente.editar');
Route::put('/editarCliente/{id}', 'ClienteController@update')->name('cliente.update');
Route::delete('/eliminarCliente/{id}', 'ClienteController@destroy')->name('cliente.destroy');

// Rutas del Usuario
Route::get('usuarios', 'PagesController@listarUsuario')->name('usuario.listar');
Route::get('/detalleUser/{id}', 'PagesController@detalleUsuario')->name('usuario.detalle');
Route::get('/editarUser/{id}', 'UsuarioController@edit')->name('usuario.editar');
Route::put('/editarUser/{id}', 'UsuarioController@update')->name('usuario.update');
Route::get('/agregarUsuario', 'PagesController@agregarUsuario')->name('agregarUsuario');
Route::post('/agregarUsuario', 'UsuarioController@store')->name('agregarUsuario');
Route::get('/habilitarUser/{id}', 'UsuarioController@habilitar')->name('usuario.habilitacion');
Route::get('/inhabilitarUser/{id}', 'UsuarioController@inhabilitar')->name('usuario.inhabilitacion');

// Rutas categorias
Route::get('/categorias', 'PagesController@listarCategorias')->name('categoria.listar');
Route::get('/detalleCat/{id}', 'PagesController@detalleCategoria')->name('categorias.detalle');
Route::get('/agregarCategoria', 'PagesController@agregarCategoria')->name('agregarCategoria');
Route::post('/agregarCategoria', 'CategoriaController@store')->name('agregarCategoria');

// Rutas del Producto
Route::get('productos', 'PagesController@listarProductos')->name('producto.listar');
Route::get('/detalleProducto/{id}', 'PagesController@detalleProducto')->name('producto.detalle');
Route::get('/editarProducto/{id}', 'ProductoController@edit')->name('producto.editar');
Route::put('/editarProducto/{id}', 'ProductoController@update')->name('producto.update');
Route::get('/agregarProducto', 'PagesController@agregarProducto')->name('agregarProducto');
Route::post('/agregarProducto', 'ProductoController@store')->name('agregarProducto');
Route::get('/habilitarProducto/{id}', 'ProductoController@habilitar')->name('producto.habilitacion');
Route::get('/inhabilitarProducto/{id}', 'ProductoController@inhabilitar')->name('producto.inhabilitacion');

