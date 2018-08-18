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

Route::apiResource('pedidos', 'PedidosController');
Route::get('pedidos', 'PedidosController@getLista');
Route::post('pedidos', 'PedidosController@post');
#Route::delete('pedidos', 'PedidosController@Lista');