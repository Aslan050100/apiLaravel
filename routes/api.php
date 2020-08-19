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

Route::get('/getProducts','ProductController@getProducts');
Route::get('/getProductById/{id}','ProductController@getProductById')->middleware('cors');
Route::get('/getCategories','ProductController@getCategories')->middleware('cors');
Route::get('/getItemTypes','ProductController@getItemTypes')->middleware('cors');
Route::post('/feedback','ProductController@store')->middleware('cors');
Route::match(['post','get'],'/like/{id}','ProductController@addlike')->middleware('cors');

