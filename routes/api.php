<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Shop\ShopController;
use App\Http\Controllers\API\Order\OrderController;
use App\Http\Controllers\API\Location\AreaController;
use App\Http\Controllers\API\Location\CityController;
use App\Http\Controllers\API\Shop\ShopTypeController;
use App\Http\Controllers\API\Location\FloorController;
use App\Http\Controllers\API\Location\MarketController;
use App\Http\Controllers\API\Product\Base\ColorController;
use App\Http\Controllers\API\General\Brand\BrandController;
use App\Http\Controllers\API\Product\Base\WeightController;
use App\Http\Controllers\API\UserManagement\AuthController;
use App\Http\Controllers\API\General\Menu\AppMenuController;
use App\Http\Controllers\API\Interaction\CommentController;
use App\Http\Controllers\Api\UserManagement\StaffController;
use App\Http\Controllers\API\Interaction\InteractionController;
use App\Http\Controllers\API\General\Category\CategoryController;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/menus', [AppMenuController::class, 'index']);;
Route::get('/areas', [AreaController::class, 'index']);
Route::get('/areas-by-city/{id}', [AreaController::class, 'areaByCity']);



Route::prefix('cities')->namespace('City')->group(function(){
    Route::get('', [CityController::class, 'index']);
    Route::get('{id}/markets', [CityController::class, 'cityMarkets']);
});

Route::prefix('markets')->namespace('Market')->group(function(){
    Route::get('', [MarketController::class, 'index']);
    Route::get('/all-market-by-city/{id}', [MarketController::class, 'allMarketsByCity']);
    Route::get('/top-market-by-city/{id}', [MarketController::class, 'topMarketsByCity']);
    Route::get('/all-market-by-area/{id}', [MarketController::class, 'allMarketsByArea']);
    Route::get('/top-market-by-area/{id}', [MarketController::class, 'topMarketsByArea']);
    Route::get('{id}', [MarketController::class, 'singleMarket']);
});

Route::get('/floors', [FloorController::class, 'index']);
Route::get('/shop-types', [ShopTypeController::class, 'index']);

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('/users', [AuthController::class, 'dusers']);
    Route::get('/users', [AuthController::class, 'dusers']);
    Route::get('/staffs', [StaffController::class, 'index']);
    Route::post('/staffs', [StaffController::class, 'store']);
    Route::post('/staff/{id}', [StaffController::class, 'destroy']);

    // shop related
    Route::prefix('shops')->namespace('Shop')->group(function(){
        Route::get('', [ShopController::class, 'index']);
        Route::post('', [ShopController::class, 'store']);
        Route::get('{id}/edit', [ShopController::class, 'edit']);
        Route::get('self', [ShopController::class, 'myShop']);
        Route::post('update/{id}', [ShopController::class, 'update']);
    });

    // general topic
    Route::get('brands', [BrandController::class, 'index']);
    Route::get('categories', [CategoryController::class, 'index']);

    // product related
    Route::get('colors', [ColorController::class, 'index']);
    Route::get('weights', [WeightController::class, 'index']);

    // oder related
    Route::prefix('orders')->namespace('Order')->group(function(){
        Route::get('', [OrderController::class, 'index']);
        Route::get('self/{id}', [OrderController::class, 'selfOrder']);
        Route::get('{id}', [OrderController::class, 'show']);
        Route::post('', [OrderController::class, 'store']);
    });

    Route::prefix('templates')->namespace('Template')->group(function(){
        Route::get('', [InteractionController::class, 'templates']);
        Route::post('/create', [InteractionController::class, 'storeTemplate']);
    });

    Route::prefix('videos')->namespace('Video')->group(function(){
        Route::get('', [InteractionController::class, 'videos']);
        Route::post('/create', [InteractionController::class, 'storeVideo']);
        Route::get('/{id}', [InteractionController::class, 'showVideo']);
        Route::post('/{id}/update', [InteractionController::class, 'updateVideo']);
    });

    Route::prefix('comments')->namespace('Comment')->group(function(){
        Route::get('', [CommentController::class, 'index']);
        Route::get('/{interaction_id}', [CommentController::class, 'show']);
        Route::post('/create', [CommentController::class, 'store']);
        Route::get('/delete/{id}', [CommentController::class, 'destroy']);
    });

});



