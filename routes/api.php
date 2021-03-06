<?php

use App\Models\Product\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Shop\ShopController;
use App\Http\Controllers\API\Order\OrderController;
use App\Http\Controllers\API\UserManagement\VerificationController;
use App\Http\Controllers\API\Location\AreaController;
use App\Http\Controllers\API\Location\CityController;
use App\Http\Controllers\API\Shop\ShopTypeController;
use App\Http\Controllers\API\Location\FloorController;
use App\Http\Controllers\API\Location\MarketController;
use App\Http\Controllers\API\Product\ProductController;
use App\Http\Controllers\API\Interaction\LikeController;
use App\Http\Controllers\API\Interaction\ShareController;
use App\Http\Controllers\API\Product\Base\SizeController;
use App\Http\Controllers\API\Product\Base\ColorController;
use App\Http\Controllers\API\General\Brand\BrandController;
use App\Http\Controllers\API\Interaction\CommentController;
use App\Http\Controllers\API\Product\Base\WeightController;
use App\Http\Controllers\API\UserManagement\AuthController;
use App\Http\Controllers\API\General\Menu\AppMenuController;
use App\Http\Controllers\Api\UserManagement\VendorController;
use App\Http\Controllers\API\Interaction\InteractionController;
use App\Http\Controllers\API\General\Category\CategoryController;

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);

Route::get('menus', [AppMenuController::class, 'index']);;
Route::get('areas', [AreaController::class, 'index']);
Route::get('areas-by-city/{id}', [AreaController::class, 'areaByCity']);

Route::prefix('cities')->namespace('City')->group(function () {
    Route::get('', [CityController::class, 'index']);
    Route::get('{id}/markets', [CityController::class, 'cityMarkets']);
});

Route::prefix('markets')->namespace('Market')->group(function () {
    Route::get('', [MarketController::class, 'index']);
    Route::get('all-market-by-city/{id}', [MarketController::class, 'allMarketsByCity']);
    Route::get('top-market-by-city/{id}', [MarketController::class, 'topMarketsByCity']);
    Route::get('all-market-by-area/{id}', [MarketController::class, 'allMarketsByArea']);
    Route::get('top-market-by-area/{id}', [MarketController::class, 'topMarketsByArea']);
    Route::get('{id}', [MarketController::class, 'singleMarket']);
});

Route::get('floors', [FloorController::class, 'index']);

// shop related
Route::prefix('shops')->namespace('Shop')->group(function () {
    Route::get('shop-types', [ShopTypeController::class, 'index']);
    Route::get('all-shops-by-market/{id}', [ShopController::class, 'shopByMarket']);
    Route::get('{id}', [ShopController::class, 'show']);
    Route::get('shops-by-market-by-floor/{id}', [ShopController::class, 'shopByMarketByFloor']);
});

Route::any('products-by-shop/{shop_id}', [ProductController::class, 'productsByShop']);
Route::post('search/products', [ProductController::class, 'searchProducts']);
Route::get('products/{id}', [ProductController::class, 'show']);

Route::prefix('categories')->namespace('Category')->group(function () {
    Route::get('', [CategoryController::class, 'index']);
    Route::get('base', [CategoryController::class, 'baseCategories']);
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('user', [AuthController::class, 'getAuthUser']);
    Route::get('staffs', [VendorController::class, 'index']);
    Route::post('staffs', [VendorController::class, 'store']);
    Route::get('staff/{id}', [VendorController::class, 'show']);
    Route::post('staff/update/{id}', [VendorController::class, 'update']);
    Route::post('staff/{id}', [VendorController::class, 'destroy']);

    // my shop related
    Route::prefix('my-shops')->namespace('Shop')->group(function () {
        Route::get('', [ShopController::class, 'index']);
        Route::post('', [ShopController::class, 'store']);
        Route::get('pending/{id}', [ShopController::class, 'checkApproveShop']);
        Route::get('{id}/edit', [ShopController::class, 'edit']);
        Route::get('self', [ShopController::class, 'myShops']);
        Route::get('{id}', [ShopController::class, 'myShop']);
        Route::post('update/{id}', [ShopController::class, 'update']);
        Route::get('delete/{id}', [ShopController::class, 'destroy']);
    });

    // general topic
    Route::get('brands', [BrandController::class, 'index']);

    // product related
    Route::get('colors', [ColorController::class, 'index']);
    Route::get('sizes', [SizeController::class, 'index']);
    Route::get('weights', [WeightController::class, 'index']);

    //Product
    Route::prefix('products')->namespace('Product')->group(function () {
        Route::get('', [ProductController::class, 'index']);
        Route::get('self/{id}', [ProductController::class, 'selfProduct']);
        Route::post('', [ProductController::class, 'store']);
        Route::post('update/{id}', [ProductController::class, 'update']);
        Route::get('delete/{id}', [ProductController::class, 'destroy']);
    });

    // oder related
    Route::prefix('orders')->namespace('Order')->group(function () {
        Route::get('', [OrderController::class, 'index']);
        Route::get('self/{id}', [OrderController::class, 'selfOrder']);
        Route::get('{id}', [OrderController::class, 'show']);
        Route::post('', [OrderController::class, 'store']);
    });

    Route::prefix('templates')->namespace('Template')->group(function () {
        Route::get('', [InteractionController::class, 'templates']);
        Route::post('/create', [InteractionController::class, 'storeTemplate']);
    });

    Route::prefix('videos')->namespace('Video')->group(function () {
        Route::get('', [InteractionController::class, 'videos']);
        Route::post('/create', [InteractionController::class, 'storeVideo']);
        Route::get('/{id}', [InteractionController::class, 'showVideo']);
        Route::post('/{id}/update', [InteractionController::class, 'updateVideo']);
    });

    Route::prefix('comments')->namespace('Comment')->group(function () {
        Route::get('', [CommentController::class, 'index']);
        Route::get('/{interaction_id}', [CommentController::class, 'show']);
        Route::post('/create', [CommentController::class, 'store']);
        Route::post('/{id}/update', [CommentController::class, 'update']);
        Route::get('/delete/{id}', [CommentController::class, 'destroy']);
    });

    Route::prefix('likes')->namespace('Like')->group(function () {
        Route::get('/{interaction_id}', [LikeController::class, 'getLikes']);
        Route::post('/create', [LikeController::class, 'store']);
        Route::get('/delete/{id}', [LikeController::class, 'destroy']);
    });

    Route::prefix('shares')->namespace('Share')->group(function () {
        Route::get('/{interaction_id}', [ShareController::class, 'getShares']);
        Route::post('/create', [ShareController::class, 'store']);
    });
});
