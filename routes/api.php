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
use App\Http\Controllers\API\General\ApiTemplateController;
use App\Http\Controllers\API\General\Menu\ApiAppMenuController;
use App\Http\Controllers\API\General\Video\ApiVideoController;
use App\Http\Controllers\API\Order\ApiOrderController;


Route::post('/login', [ApiAuthController::class, 'login']);
Route::post('/register', [ApiAuthController::class, 'register']);


Route::get('/menus', [ApiAppMenuController::class, 'index']);
Route::get('/cities', [ApiCityController::class, 'index']);
Route::get('/areas', [ApiAreaController::class, 'index']);
Route::get('/thanas', [ApiThanaController::class, 'index']);
Route::get('/markets', [ApiMarketController::class, 'index']);
Route::get('/floors', [ApiFloorController::class, 'index']);
Route::get('/shops-type', [ApiShopTypeController::class, 'index']);
Route::get('/shop-types', [ApiShopTypeController::class, 'index']);
Route::get('/shops', [ApiShopController::class, 'index']);

Route::prefix('orders')->namespace('Order')->group(function(){
    Route::get('', [ApiOrderController::class, 'index']);
    Route::get('self/{id}', [ApiOrderController::class, 'selfOrder']);
    Route::get('{id}', [ApiOrderController::class, 'show']);
    Route::post('', [ApiOrderController::class, 'store']);
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/users', [ApiAuthController::class, 'dusers']);
});

Route::prefix('templates')->namespace('Template')->group(function(){
    Route::get('', [ApiTemplateController::class, 'index']);
    Route::get('{id}', [ApiTemplateController::class, 'show']);
    Route::post('', [ApiTemplateController::class, 'store']);
});

Route::prefix('videos')->namespace('Video')->group(function(){
    Route::get('', [ApiVideoController::class, 'index']);
    Route::get('{id}', [ApiVideoController::class, 'show']);
});
