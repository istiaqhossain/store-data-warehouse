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

Route::get('stores', 'StoreController@index'); // api/stores
Route::post('stores', 'StoreController@store'); // api/stores
Route::get('stores/{store}', 'StoreController@show'); // api/stores/{store}
Route::get('stores/{store}/properties', 'PropertyController@index'); // api/stores/{store}/properties
Route::post('stores/{store}/properties', 'PropertyController@store'); // api/stores/{store}/properties
Route::get('stores/{store}/properties/{property}', 'PropertyController@show'); // api/stores/{store}/properties/{property}
Route::get('stores/{store}/properties/{property}/schemas', 'SchemaController@index'); // api/stores/{store}/properties
// api/stores/{store}/properties/{property}/schemas
// api/stores/{store}/properties/{property}/metas