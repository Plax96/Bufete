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


Route::get('/','ExpedienteController@index');

Route::get('casos/ocupados',function(){
  return "casosocupados";
});

Route::get('clientes', 'ClienteController@index');


Route::get('/casos/terminados',function(){
  return "casosterminados";
});

Route::get('/caso/{id}',function($id){
  return "Mostrando caso especial: {$id}";
})->where('id','\d+');

Route::get('/caso/editar/{id}',function($id){
  return "Mostrando editar caso: {$id}";
})->where('id','\d+');


Route::get('/caso/terminar/{id}',function($id){
  return "Mostrando terminar caso: {$id}";
})->where('id','\d+');
