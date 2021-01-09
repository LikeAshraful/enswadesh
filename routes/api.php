<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiAuthController;
use App\Http\Controllers\API\Shop\ApiShopController;
use App\Http\Controllers\API\Location\ApiAreaController;
use App\Http\Controllers\API\Location\ApiCityController;
use App\Http\Controllers\API\Location\ApiFloorController;
use App\Http\Controllers\API\Location\ApiThanaController;
use App\Http\Controllers\API\Location\ApiMarketController;
use App\Http\Controllers\API\General\Menu\ApiAppMenuController;
use App\Http\Controllers\API\Order\ApiOrderController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/api-login', [ApiAuthController::class, 'login']);
Route::post('/api-register', [ApiAuthController::class, 'register']);

// location and shop api
Route::get('/api-menus', [ApiAppMenuController::class, 'index']);
Route::get('/api-cities', [ApiCityController::class, 'index']);
Route::get('/api-areas', [ApiAreaController::class, 'index']);
Route::get('/api-thanas', [ApiThanaController::class, 'index']);
Route::get('/api-markets', [ApiMarketController::class, 'index']);
Route::get('/api-floors', [ApiFloorController::class, 'index']);
Route::get('/api-shops', [ApiAppMenuController::class, 'index']);
Route::get('/api-menus', [ApiShopController::class, 'index']);

//order apis
Route::get('/api-orders', [ApiOrderController::class, 'index']);
Route::get('/api-order/{id}', [ApiOrderController::class, 'show']);
Route::post('/api-orders', [ApiOrderController::class, 'store']);
Route::get('/api-my-orders/{id}', [ApiOrderController::class, 'myOrders']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/api-users', [ApiAuthController::class, 'dusers']);
});