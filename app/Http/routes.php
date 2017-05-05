<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('tarea');
});

Route::get('tarea', 'TareaController@index');
Route::get('tarea/crear', 'TareaController@crear');
Route::post('almacenar', [
    'as' => 'tarea.almacenar', 'uses' => 'TareaController@almacenar'
]);

Route::get('tarea/{tarea}/editar', [
    'as' => 'tarea.editar', 'uses' => 'TareaController@editar'
]);

Route::put('tarea/{tarea}', [
    'as' => 'tarea.actualizar', 'uses' => 'TareaController@actualizar'
]);

Route::patch('tarea/{tarea}', 'TareaController@actualizar');
