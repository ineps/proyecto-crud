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

Route::post('crear', '\App\Http\Controllers\EmpleadosController@crear');
Route::post('eliminar', '\App\Http\Controllers\EmpleadosController@eliminar');
Route::get('lista', '\App\Http\Controllers\EmpleadosController@listar');
Route::post('empleado', '\App\Http\Controllers\EmpleadosController@empleado');
