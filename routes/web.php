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
Route::view('/prueba', 'prueba');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('vista','UsuarioController@index')->name('usuarios_m');

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'welcome');
/*USUARIOS*/
Route::get('/agregar_usuario','UsuarioController@agregar')->name('usuarios>agregar');
Route::post('/agregar_usuario','UsuarioController@add')->name('usuarios.add');
Route::get('/mostrar_usuarios','UsuarioController@inicio')->name('usuarios');
Route::get('/editar_usuario/{id}','UsuarioController@editar')->name('usuarios>editar');

Route::put('/editar_usuario/{id}','UsuarioController@update')->name('usuarios.update');
Route::delete('/eliminar_usuario/{id}','UsuarioController@eliminar')->name('usuarios.eliminar');
Route::get('/edit_user/{id}','UsuarioController@edit');
Route::post('/update_user','UsuarioController@update1')->name('users.update');

Route::get('/residentes','UsuarioController@residentes');
Route::get('/perfil','UsuarioController@perfil')->name('perfil');
Route::put('/config_update/{id}','UsuarioController@configUpdate')->name('config_update');



/*PROVEEDORES*/
Route::get('/mostrar_proveedor','ProveedorController@mostrar')->name('proveedores');
Route::get('/agregar_proveedor','ProveedorController@agregar')->name('proveedor>agregar');
Route::post('/agregar_proveedor','ProveedorController@crear_proveedores')->name('crear_proveedor');
Route::get('/editar_proveedor/{id}', 'ProveedorController@editar' )->name('proveedor>editar');
Route::put('/editar_proveedor/{id}','ProveedorController@update')->name('update_proveedor');
Route::delete('/eliminar_proveedor/{id}','ProveedorController@eliminar')->name('eliminar_proveedor');
//---
Route::get('/edit_proveedor/{id}','ProveedorController@edit');
Route::post('/update_proveedor','ProveedorController@updateProveedor')->name('proveedor_update');

Route::get('/proveedores','ProveedorController@proveedores');



//TIPOS DE OBRA//
Route::get('/mostrar_tipo_obras','TipoObraController@mostrar')->name('tipo_obras.mostrar');
Route::post('/agregar_tipo_obra','TipoObraController@agregar')->name('tipo_obra.agregar');
Route::get('/editar_tipo_obra{id}', 'TipoObraController@editar' )->name('tipo_obra.editar');
Route::put('/editar_tipo_obra/{id}','TipoObraController@update')->name('tipo_obra.update');
Route::delete('/eliminar_tipo_obra/{id}','TipoObraController@eliminar')->name('tipo_obra.eliminar');
Route::get('/tipos','TipoObraController@tipos');



/*MATERIAL*/  
Route::get('/mostrar_material','MaterialController@mostrar')->name('materiales');
Route::get('/agregar_material','MaterialController@agregar')->name('material_agregar');
Route::post('/agregar_material','MaterialController@crear_material')->name('material_add'); 
Route::get('/editar_material/{id}','MaterialController@editar')->name('material_editar');
Route::put('/editar_material/{id}','MaterialController@update')->name('materiales_update');
Route::delete('/eliminar_material/{id}','MaterialController@eliminar')->name('material_eliminar');

Route::get('/unidades','MaterialController@unidades');
Route::get('/tipos','MaterialController@tipos');
//--


Route::get('/edit_material/{id}','MaterialController@edit');
Route::post('/update_material','MaterialController@updateMaterial')->name('material_update');

/*OBRAS*/
Route::get('/mostrar_obras','ObraController@mostrar')->name('obras');
Route::get('/agregar_obra','ObraController@agregar')->name('obra.agregar');
Route::post('/agregar_obra','ObraController@add')->name('obra>add');

Route::get('/editar_obra/{id}','ObraController@editar')->name('obra_editar');
Route::put('/editar_obra/{id}','ObraController@update')->name('obra_update');
Route::delete('/eliminar_obra/{id}','ObraController@eliminar')->name('obra.eliminar');
Route::get('/agregar_material_obra{id}','ObraController@material')->name('obra.material');
Route::post('/agregar_material_obra{id}','ObraController@agregarMaterial')->name('obra.agregar.material');



Route::get('/presupuesto','ObraController@presupuesto')->name('obra.presupuesto');
Route::get('/materialPresupuesto/{id}', 'ObraController@materialObra')->name('presupuesto.materialObra');



Route::get('/edit_obra/{id}','ObraController@edit');
Route::post('/update_obra','ObraController@updateObra');
Route::get('/find_obra','ObraController@find_obra');

Route::get('/obras_ubicacion','ObraController@ubicacion');

Route::get('/detalle_obra','ObraController@detalle')->name('obra.detalle');

Route::get('/detail{id}', 'ObraController@detail' )->name('detail');

//Route::put('/editar_obra/{id}','ObraControlle@update')->name('obra>update');
//material-obras
Route::get('/agregar_material_obra','ObraController@agregar_material')->name('agregar_material_obra');
Route::post('/agregar_material_obra','ObraController@crear_material_obra')->name('material_obra_add');
Route::get('/mostrar_material_obra/{id}','ObraController@mostrar_material_obra')->name('mostrar_material_obra');

//Pedidos
Route::get('/mostrar_pedidos','PedidosController@mostrar')->name('pedidos');  
Route::get('/agregar_pedido','PedidosController@agregar')->name('agregar_pedido');
Route::post('/agregar_pedido','PedidosController@crear_pedido')->name('crear_pedido');
Route::get('/editar/{id}','PedidosController@editar')->name('editar_pedido');
Route::put('/editar/{id}','PedidosController@update')->name('update_pedido');
Route::delete('/editar/{id}','PedidosController@eliminar')->name('eliminar_pedido');
Route::get('/editar_obra/{id}','ObraController@editar')->name('obra>editar');
Route::put('/editar_obra/{id}','ObraController@update')->name('obra_update');

Route::get('/detalle_pedido{id}', 'PedidosController@detalle' )->name('pedido.detalle'); 
Route::post('/confirmar_material', 'PedidosController@confirmarMaterial' )->name('confirmar.material'); 
Route::post('/confirmar_pedido', 'PedidosController@confirmarPedido' )->name('confirmar.pedido'); 

/*rutas prueba*/

Route::get('/pruebas/view','PedidosController@view');