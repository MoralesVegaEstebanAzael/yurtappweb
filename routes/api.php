<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


<<<<<<< HEAD
Route::middleware('auth:api')->get('/obras','Api\ApiController@getObras');


//Route::get('usuario/{id}','Api\ApiController@getUser');
//Route::get('usuarios','Api\ApiController@getUsers')->name('getAllUsers');



=======
Route::get('usuario/{id}','Api\ApiController@getUser');
Route::get('usuarios','Api\ApiController@getUsers')->name('getAllUsers');
>>>>>>> ramitapedidos
