<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('products', 'Api\ProductsController', ['except' => ['create', 'edit']]);


Route::get('/v1/products', 'Api\ProductsController@index');
Route::get('/v1/products/{id}', 'Api\ProductsController@show');
Route::post('/v1/products', 'Api\ProductsController@store');
Route::put('/v1/products/{id}', 'Api\ProductsController@update');
Route::delete('/v1/products/{id}', 'Api\ProductsController@destroy');
