<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Shop\ShopController;
use App\Http\Controllers\Backend\Order\OrdersController;
use App\Http\Controllers\Backend\General\VideoController;
use App\Http\Controllers\Backend\Location\AreaController;
use App\Http\Controllers\Backend\Location\CityController;
use App\Http\Controllers\Backend\Shop\ShopTypeController;
use App\Http\Controllers\Backend\Location\FloorController;
use App\Http\Controllers\Backend\Location\ThanaController;
use App\Http\Controllers\Backend\Location\MarketController;
use App\Http\Controllers\Backend\General\Brand\BrandController;
use App\Http\Controllers\Backend\General\Menu\AppMenuController;
use App\Http\Controllers\Backend\UserManagement\AdminController;
use App\Http\Controllers\Backend\General\Category\CategoryController;
use App\Http\Controllers\Backend\UserManagement\SuperAdminController;

//Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Role
    Route::resource('roles', RoleController::class);
    //User Management

    Route::resource('super_admin', SuperAdminController::class);
    Route::post('users/publish/{publish}', [SuperAdminController::class, 'togglePublish'])->name('users.publish');
    Route::post('users/blocked/{blocked}', [SuperAdminController::class, 'toggleBlocked'])->name('users.blocked');

    Route::resource('admin', AdminController::class);

    //Profile
    Route::get('profile/', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile/', [ProfileController::class, 'update'])->name('profile.update');
    // Security
    Route::get('profile/security', [ProfileController::class, 'changePassword'])->name('profile.password.change');
    Route::post('profile/security', [ProfileController::class, 'updatePassword'])->name('profile.password.update');
    // Settings
    Route::group(['as' => 'settings.', 'prefix' => 'settings'], function () {
        Route::get('general', [SettingController::class, 'index'])->name('index');
        Route::patch('general', [SettingController::class, 'update'])->name('update');

        Route::get('appearance', [SettingController::class, 'appearance'])->name('appearance.index');
        Route::patch('appearance', [SettingController::class, 'updateAppearance'])->name('appearance.update');

        Route::get('mail', [SettingController::class, 'mail'])->name('mail.index');
        Route::patch('mail', [SettingController::class, 'updateMailSettings'])->name('mail.update');

        Route::get('socialite', [SettingController::class, 'socialite'])->name('socialite.index');
        Route::patch('socialite', [SettingController::class, 'updateSocialiteSettings'])->name('socialite.update');

    });

    // Loacation Related
    Route::resource('menus', AppMenuController::class);
    Route::resource('cities', CityController::class);
    Route::resource('areas', AreaController::class);
    Route::resource('thanas', ThanaController::class);
    Route::resource('markets', MarketController::class);
    Route::resource('floors', FloorController::class);
    // Shop Related
    Route::resource('shoptypes', ShopTypeController::class);
    Route::resource('shops', ShopController::class);
    //Category
    Route::resource('category', CategoryController::class);
    //Brand
    Route::resource('brand', BrandController::class);
    //Order
    Route::resource('orders', OrdersController::class);
    Route::resource('videos', VideoController::class);
