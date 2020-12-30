<?php

use Illuminate\Http\Request;
use Modules\ShopProperty\Http\Controllers\API\ApiAreaController;
use Modules\ShopProperty\Http\Controllers\API\ApiCityController;
use Modules\ShopProperty\Http\Controllers\API\ApiShopController;
use Modules\ShopProperty\Http\Controllers\API\ApiThanaController;
use Modules\ShopProperty\Http\Controllers\API\ApiAppMenuController;
use Modules\ShopProperty\Http\Controllers\API\ApiMarketPlaceController;

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

Route::middleware('auth:api')->get('/shopproperty', function (Request $request) {
    return $request->user();
});

Route::get('/api-menus', 'API\ApiAppMenuController@index');
Route::get('/api-cities', 'API\ApiCityController@index');
Route::get('/api-areas', 'API\ApiAreaController@index');
Route::get('/api-thanas', 'API\ApiThanaController@index');
Route::get('/api-markets', 'API\ApiMarketPlaceController@index');
Route::get('/api-floors', 'API\ApiFloorController@index');
Route::get('/api-shops', 'API\ApiShopController@index');