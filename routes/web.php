<?php


/*
Route::get('/', function () {
    return view('welcome');
});
/*en la ruta se coloca dentro de llaves para tener un parámetro dinámicrotime
ejemplo {id} y esto se coloca en el parámetro de function ($id) con el símbolo de dólar
*/
//Esto es de abogado
Route::get('/abogado/nuevo', 'AbogadoController@create');
Route::post('/abogado/guardar', 'AbogadoController@store');

//Esto es de Cliente

Route::get('/cliente/nuevo', 'ClienteController@create');
Route::post('/cliente/guardar', 'ClienteController@store');
Route::get('clientes', 'ClienteController@index');
Route::get('clientes/editar/{id}','ClienteController@edit');
Route::post('clientes/actualizar/{id}','ClienteController@update');
Route::post('clientes/eliminar/{id}','ClienteController@delete');

// Expedientes
Route::get('/','ExpedienteController@index');
Route::get('casos/libres','ExpedienteController@index');
Route::get('casos/ocupados','ExpedienteController@ocupados');
Route::get('casos/finalizados','ExpedienteController@finalizados');
Route::get('caso/nuevo','ExpedienteController@create');
Route::post('caso/guardar', 'ExpedienteController@store');
Route::get('caso/editar/{id}','ExpedienteController@edit');
Route::post('caso/actualizar/{id}','ExpedienteController@abogado');
