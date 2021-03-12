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

Route::get('/', function(){
    return view('auth.login');
});
Route::post('/iniciar.sesion', 'AutenticacionController@iniciarSesion');
Route::auth();

// Rutas Clientes
Route::get('/clientes', 'ClienteController@listarClientes')->name('cliente.listar');
Route::get('/detalleCliente/{id}', 'ClienteController@detalleCliente')->name('cliente.detalle');
Route::get('/agregarCliente', 'ClienteController@agregarCliente')->name('agregarCliente');
Route::post('/agregarCliente', 'ClienteController@store')->name('agregarCliente');
Route::get('/editarCliente/{id}', 'ClienteController@edit')->name('cliente.editar');
Route::put('/editarCliente/{id}', 'ClienteController@update')->name('cliente.update');
Route::delete('/eliminarCliente/{id}', 'ClienteController@destroy')->name('cliente.destroy');
Route::get('/pdfClientes', 'ClienteController@pdfClientes')->name('PdfClientes');


// Rutas Usuarios
Route::get('usuarios', 'UsuarioController@listarUsuario')->name('usuario.listar');
Route::get('/detalleUser/{id}', 'UsuarioController@detalleUsuario')->name('usuario.detalle');
Route::get('/editarUser/{id}', 'UsuarioController@edit')->name('usuario.editar');
Route::put('/editarUser/{id}', 'UsuarioController@update')->name('usuario.update');
Route::get('/agregarUsuario', 'UsuarioController@agregarUsuario')->name('agregarUsuario');
Route::post('/agregarUsuario', 'UsuarioController@store')->name('agregarUsuario');
Route::get('/pdfUsuarios', 'UsuarioController@pdfUsuarios')->name('PdfUsuarios');
Route::get('/habilitarUser/{id}', 'UsuarioController@habilitar')->name('usuario.habilitacion');
Route::get('/inhabilitarUser/{id}', 'UsuarioController@inhabilitar')->name('usuario.inhabilitacion');

// Rutas categorias
Route::get('/categorias', 'CategoriaController@listarCategorias')->name('categoria.listar');
Route::get('/detalleCategoria/{id}', 'CategoriaController@detalleCategoria')->name('categorias.detalle');
Route::get('/agregarCategoria', 'CategoriaController@agregarCategoria')->name('agregarCategoria');
Route::get('/editarCategoria/{id}', 'CategoriaController@edit')->name('categorias.editar');
Route::put('/editarCategoria/{id}', 'CategoriaController@update')->name('categoria.update');
Route::post('/agregarCategoria', 'CategoriaController@store')->name('agregarCategoria');
Route::get('/habilitarCategoria/{id}', 'CategoriaController@habilitar')->name('categoria.habilitacion');
Route::get('/inhabilitarCategria/{id}', 'CategoriaController@inhabilitar')->name('categoria.inhabilitacion');
Route::get('/pdfCategorias', 'CategoriaController@pdfCategorias')->name('PdfCategorias');

// Rutas del Producto
Route::get('productos', 'ProductoController@listarProductos')->name('producto.listar');
Route::get('/detalleProducto/{id}', 'ProductoController@detalleProducto')->name('producto.detalle');
Route::get('/agregarProducto', 'ProductoController@agregarProducto')->name('agregarProducto');
Route::get('/editarProducto/{id}', 'ProductoController@edit')->name('producto.editar');
Route::put('/editarProducto/{id}', 'ProductoController@update')->name('producto.update');
Route::post('/agregarProducto', 'ProductoController@store')->name('agregarProducto');
Route::get('/habilitarProducto/{id}', 'ProductoController@habilitar')->name('producto.habilitacion');
Route::get('/inhabilitarProducto/{id}', 'ProductoController@inhabilitar')->name('producto.inhabilitacion');
Route::get('/pdfProductos', 'ProductoController@pdfProductos')->name('PdfProductos');

// Rutas compras
Route::get('/compras', 'CompraController@listarCompras')->name('compra.listar');
Route::get('/detalleCompra/{id}', 'CompraController@detalleCompra')->name('compras.detalle');
Route::get('/agregaCompra', 'PagesController@agregarCompra')->name('agregarCompra');
Route::post('/agregarCompra', 'CompraController@store')->name('agregarCompra');
Route::get('/pdfCompras', 'CompraController@pdfCompras')->name('PdfCompras');

// Rutas ventas
Route::get('/ventas', 'PagesController@listarVentas')->name('venta.listar');
Route::get('/detalleVenta/{id}', 'PagesController@detalleVenta')->name('ventas.detalle');
Route::get('/agregarVenta', 'PagesController@agregarVenta')->name('agregarVenta');
Route::post('/agregarVenta', 'VentaController@store')->name('agregarVenta');