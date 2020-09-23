<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/v1/products', 'Api\ProductsController@index');
Route::get('/v1/products/{id}', 'Api\ProductsController@show');
Route::post('/v1/products', 'Api\ProductsController@store');
Route::put('/v1/products/{id}', 'Api\ProductsController@update');
Route::delete('/v1/products/{id}', 'Api\ProductsController@destroy');
