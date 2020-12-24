<?php

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

// Route::prefix('shop')->group(function () {
//     Route::group(['middleware' => ['web']], function () {
//         Route::get('/', 'Backend\ShopController@index');
//         Route::resource('menus', 'Backend\AppMenuController');
//         Route::resource('cities', 'Backend\CityController');
//     });
// });

Route::resource('menus', 'Backend\AppMenuController');
Route::resource('cities', 'Backend\CityController');
