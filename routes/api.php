<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', 'LogeoController@logeo_sistema');
Route::get('login', 'LogeoController@salir_sistema');

Route::get('menu', 'menuController@listar_menu');


Route::get('categoria1', 'categoria1Controller@listar_categorias1');
Route::get('categoria1/{id}', 'categoria1Controller@listar_catagoria1');
Route::post('categoria1', 'categoria1Controller@registrar_categoria1');
Route::put('categoria1/{id}', 'categoria1Controller@editar_categoria1');
Route::delete('categoria1/{id}', 'categoria1Controller@eliminar_categoria1');

Route::get('categoria2', 'categoria2Controller@listar_categorias2');
Route::get('categoria2/{id}', 'categoria2Controller@listar_catagoria2');
Route::post('categoria2', 'categoria2Controller@registrar_categoria2');
Route::put('categoria2/{id}', 'categoria2Controller@editar_categoria2');
Route::delete('categoria2/{id}', 'categoria2Controller@eliminar_categoria2');

Route::get('categoria3', 'categoria3Controller@listar_categorias3');
Route::get('categoria3/{id}', 'categoria3Controller@listar_catagoria3');
Route::post('categoria3', 'categoria3Controller@registrar_categoria3');
Route::put('categoria3/{id}', 'categoria3Controller@editar_categoria3');
Route::delete('categoria3/{id}', 'categoria3Controller@eliminar_categoria3');

Route::get('categoria4', 'categoria4Controller@listar_categorias4');
Route::get('categoria4/{id}', 'categoria4Controller@listar_catagoria4');
Route::post('categoria4', 'categoria4Controller@registrar_categoria4');
Route::put('categoria4/{id}', 'categoria4Controller@editar_categoria4');
Route::delete('categoria4/{id}', 'categoria4Controller@eliminar_categoria4');

Route::get('categoria5', 'categoria5Controller@listar_categorias5');
Route::get('categoria5/{id}', 'categoria5Controller@listar_catagoria5');
Route::post('categoria5', 'categoria5Controller@registrar_categoria5');
Route::put('categoria5/{id}', 'categoria5Controller@editar_categoria5');
Route::delete('categoria5/{id}', 'categoria5Controller@eliminar_categoria5');

Route::get('unidad-medida', 'unidadMedidaController@listar_unidades_medida');
Route::get('unidad-medida/{id}', 'unidadMedidaController@listar_unidad_medida');
Route::post('unidad-medida', 'unidadMedidaController@registrar_unidad_medida');
Route::put('unidad-medida/{id}', 'unidadMedidaController@editar_unidad_medida');
Route::delete('unidad-medida/{id}', 'unidadMedidaController@eliminar_unidad_medida');


Route::get('articulo-estado', 'articuloEstadoController@listar_estados_articulo');
Route::get('articulo-estado/{id}', 'articuloEstadoController@listar_articulo_estado');
Route::post('articulo-estado', 'articuloEstadoController@registrar_articulo_estado');
Route::put('articulo-estado/{id}', 'articuloEstadoController@editar_articulo_estado');
Route::delete('articulo-estado/{id}', 'articuloEstadoController@eliminar_articulo_estado');

Route::get('ubigeo', 'ubigeoController@listar_ubigeos');
Route::get('ubigeo/{id}', 'ubigeoController@listar_ubigeo');
Route::post('ubigeo', 'ubigeoController@registrar_ubigeo');
Route::put('ubigeo/{id}', 'ubigeoController@editar_ubigeo');
Route::delete('ubigeo/{id}', 'ubigeoController@eliminar_ubigeo');

Route::get('tipo-producto', 'tipoProductoController@listar_tipo_productos');
Route::get('tipo-producto/{id}', 'tipoProductoController@listar_tipo_producto');
Route::post('tipo-producto', 'tipoProductoController@registrar_tipo_producto');
Route::put('tipo-producto/{id}', 'tipoProductoController@editar_tipo_producto');
Route::delete('tipo-producto/{id}', 'tipoProductoController@eliminar_tipo_producto');

Route::get('oficina', 'oficinaController@listar_oficinas');
Route::get('oficina/{id}', 'oficinaController@listar_oficina');
Route::post('oficina', 'oficinaController@registrar_oficina');
Route::put('oficina/{id}', 'oficinaController@editar_oficina');
Route::delete('oficina/{id}', 'oficinaController@eliminar_oficina');


Route::get('rol', 'rolController@listar_roles');
Route::get('rol/{id}', 'rolController@listar_rol');
Route::post('rol', 'rolController@registrar_rol');
Route::put('rol/{id}', 'rolController@editar_rol');
Route::delete('rol/{id}', 'rolController@eliminar_rol');


Route::get('almacen', 'almacenController@listar_almacenes');
Route::get('almacen/{id}', 'almacenController@listar_almacen');
Route::post('almacen', 'almacenController@registrar_almacen');
Route::put('almacen/{id}', 'almacenController@editar_almacen');
Route::delete('almacen/{id}', 'almacenController@eliminar_almacen');

Route::get('articulo', 'articuloController@listar_articulos');
Route::get('articulo/{id}', 'articuloController@listar_articulo');
Route::post('articulo', 'articuloController@registrar_articulo');
Route::put('articulo/{id}', 'articuloController@editar_articulo');
Route::delete('articulo/{id}', 'articuloController@eliminar_articulo');


Route::get('proveedor', 'proveedorController@listar_proveedores');



//Route::get('rol/{id}', 'rolController@listar_rol');
//Route::post('rol', 'rolController@registrar_rol');
//Route::put('rol/{id}', 'rolController@editar_rol');
//Route::delete('rol/{id}', 'rolController@eliminar_rol');







