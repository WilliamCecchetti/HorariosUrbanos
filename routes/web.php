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




Route::group(['prefix'=>    'empresas','where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>   'empresas', 'uses'=>'EmpresasController@index']);
    Route::get('create',['as'=>'empresas.create', 'uses'=>'EmpresasController@create']);
    Route::get('{id}/destroy',['as'=>'empresas.destroy', 'uses'=>'EmpresasController@destroy']);

    Route::post('store', ['as'=>'empresas.store', 'uses'=>'EmpresasController@store']);
    Route::get('{id}/edit',['as'=>'empresas.edit', 'uses'=>'EmpresasController@edit']);
    Route::put('{id}/update',['as'=>'empresas.update', 'uses'=>'EmpresasController@update']);


});
Route::group(['prefix'=>    'linhas','where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>   'linhas', 'uses'=>'LinhasController@index']);
    Route::get('create',['as'=>'linhas.create', 'uses'=>'LinhasController@create']);
    Route::get('{id}/destroy',['as'=>'linhas.destroy', 'uses'=>'LinhasController@destroy']);

    Route::post('store', ['as'=>'linhas.store', 'uses'=>'LinhasController@store']);
    Route::get('{id}/edit',['as'=>'linhas.edit', 'uses'=>'LinhasController@edit']);
    Route::put('{id}/update',['as'=>'linhas.update', 'uses'=>'LinhasController@update']);


});

Route::group(['prefix'=>    'horarios','where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>   'horarios', 'uses'=>'HorariosController@index']);
    Route::get('create',['as'=>'horarios.create', 'uses'=>'HorariosController@create']);
    Route::get('{id}/destroy',['as'=>'horarios.destroy', 'uses'=>'HorariosController@destroy']);

    Route::post('store', ['as'=>'horarios.store', 'uses'=>'HorariosController@store']);
    Route::get('{id}/edit',['as'=>'horarios.edit', 'uses'=>'HorariosController@edit']);
    Route::put('{id}/update',['as'=>'horarios.update', 'uses'=>'HorariosController@update']);


});

Route::group(['prefix'=>    'rotas','where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>   'rotas', 'uses'=>'RotasController@index']);
    Route::get('create',['as'=>'rotas.create', 'uses'=>'RotasController@create']);
    Route::get('{id}/destroy',['as'=>'rotas.destroy', 'uses'=>'RotasController@destroy']);

    Route::post('store', ['as'=>'rotas.store', 'uses'=>'RotasController@store']);
    Route::get('{id}/edit',['as'=>'rotas.edit', 'uses'=>'RotasController@edit']);
    Route::put('{id}/update',['as'=>'rotas.update', 'uses'=>'RotasController@update']);


});

Route::group(['prefix'=>    '','where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>   'menu', 'uses'=>'MenuController@index']);



});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
