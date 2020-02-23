<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*
Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('usuarios','Api\ApiController@usuarios')->name('usuarios');
    Route::get('obras','Api\ApiController@obras')->name('obras');
});
*/

//Route::post('login', 'Api\ApiController@authenticate')->name('login');


Route::post('login', 'Api\ApiController@login');

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('obras','Api\ApiController@obras')->name('obras');
    Route::get('almacen','Api\ApiController@almacen')->name('almacen');
    Route::get('pedidos','Api\ApiController@pedidos')->name('pedidos');
    Route::get('det_pedido','Api\ApiController@det_pedido')->name('det_pedido');


    Route::post('logout', 'Api\ApiController@logout')->name('logout');
});

Route::middleware('jwt.refresh')->get('/token/refresh', 'Api\ApiController@refresh');