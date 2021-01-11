<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiAuthController;
use App\Http\Controllers\API\Shop\ApiShopController;
use App\Http\Controllers\API\Location\ApiAreaController;
use App\Http\Controllers\API\Location\ApiCityController;
use App\Http\Controllers\API\Shop\ApiShopTypeController;
use App\Http\Controllers\API\Location\ApiFloorController;
use App\Http\Controllers\API\Location\ApiThanaController;
use App\Http\Controllers\API\Location\ApiMarketController;
use App\Http\Controllers\API\General\Menu\ApiAppMenuController;
use App\Http\Controllers\API\Order\ApiOrderController;


Route::post('/login', [ApiAuthController::class, 'login']);
Route::post('/register', [ApiAuthController::class, 'register']);


Route::get('/api-menus', [ApiAppMenuController::class, 'index']);
Route::get('/api-cities', [ApiCityController::class, 'index']);
Route::get('/api-areas', [ApiAreaController::class, 'index']);
Route::get('/api-thanas', [ApiThanaController::class, 'index']);
Route::get('/api-markets', [ApiMarketController::class, 'index']);
Route::get('/api-floors', [ApiFloorController::class, 'index']);
Route::get('/api-shops-type', [ApiShopTypeController::class, 'index']);
Route::get('/api-shop-types', [ApiShopTypeController::class, 'index']);
Route::get('/api-shops', [ApiShopController::class, 'index']);

Route::prefix('orders')->namespace('Order')->group(function(){
    Route::get('', [ApiOrderController::class, 'index']);
    Route::get('self/{id}', [ApiOrderController::class, 'selfOrder']);
    Route::get('{id}', [ApiOrderController::class, 'show']);
    Route::post('', [ApiOrderController::class, 'store']);
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/api-users', [ApiAuthController::class, 'dusers']);
});
