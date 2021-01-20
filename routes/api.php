<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\Shop\ShopController;
use App\Http\Controllers\API\Order\OrderController;
use App\Http\Controllers\API\Location\AreaController;
use App\Http\Controllers\API\Location\CityController;
use App\Http\Controllers\API\Shop\ShopTypeController;
use App\Http\Controllers\API\Location\FloorController;
use App\Http\Controllers\API\Location\ThanaController;
use App\Http\Controllers\API\Location\MarketController;
use App\Http\Controllers\API\General\Menu\AppMenuController;
use App\Http\Controllers\API\General\Interaction\InteractionController;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/menus', [AppMenuController::class, 'index']);
Route::get('/cities', [CityController::class, 'index']);
Route::get('/areas', [AreaController::class, 'index']);
Route::get('/thanas', [ThanaController::class, 'index']);
Route::get('/markets', [MarketController::class, 'index']);
Route::get('/floors', [FloorController::class, 'index']);
Route::get('/shop-types', [ShopTypeController::class, 'index']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/users', [AuthController::class, 'dusers']);
    // shop related
    Route::get('/shops', [ShopController::class, 'index']);
    Route::post('/shops', [ShopController::class, 'store']);

    Route::prefix('orders')->namespace('Order')->group(function(){
        Route::get('', [OrderController::class, 'index']);
        Route::get('self/{id}', [OrderController::class, 'selfOrder']);
        Route::get('{id}', [OrderController::class, 'show']);
        Route::post('', [OrderController::class, 'store']);
    });

    Route::prefix('templates')->namespace('Template')->group(function(){
        Route::get('', [InteractionController::class, 'templates']);
        Route::post('/create', [InteractionController::class, 'templateStore']);
    });
    Route::prefix('videos')->namespace('Video')->group(function(){
        Route::get('', [InteractionController::class, 'videos']);
        Route::post('/create', [InteractionController::class, 'videoStore']);
    });

});



