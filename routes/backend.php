<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Shop\ShopController;
use App\Http\Controllers\Backend\Order\OrdersController;
use App\Http\Controllers\Backend\Location\AreaController;
use App\Http\Controllers\Backend\Location\CityController;
use App\Http\Controllers\Backend\Shop\ShopTypeController;
use App\Http\Controllers\Backend\Location\FloorController;
use App\Http\Controllers\Backend\Location\ThanaController;
use App\Http\Controllers\Backend\Location\MarketController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Interaction\TopicController;
use App\Http\Controllers\Backend\Product\Base\SizeController;
use App\Http\Controllers\Backend\Product\Base\ColorController;
use App\Http\Controllers\Backend\General\Brand\BrandController;
use App\Http\Controllers\Backend\Interaction\CommentController;
use App\Http\Controllers\Backend\Product\Base\WeightController;
use App\Http\Controllers\Backend\General\Menu\AppMenuController;
use App\Http\Controllers\Backend\UserManagement\AdminController;
use App\Http\Controllers\Backend\UserManagement\VendorController;
use App\Http\Controllers\Backend\UserManagement\ProfileController;
use App\Http\Controllers\Backend\Interaction\InteractionController;
use App\Http\Controllers\Backend\General\Category\CategoryController;
use App\Http\Controllers\Backend\UserManagement\SuperAdminController;

//Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('super-admin', SuperAdminController::class);
    Route::get('vendor-list', [SuperAdminController::class,'vendorList'])->name('users.vendor');
    Route::post('users/{ownerID}/status', [SuperAdminController::class, 'toggleShopOwner'])->name('owner.status');
    Route::post('users/{userID}/publish', [SuperAdminController::class, 'togglePublish'])->name('users.publish');
    Route::post('users/{userID}/block', [SuperAdminController::class, 'toggleBlock'])->name('users.blocked');
    Route::resource('admin', AdminController::class);
    Route::resource('vendor', VendorController::class);
    Route::post('vendor/{vendorID}/block', [VendorController::class, 'toggleBlock'])->name('vendor.block');
    Route::get('profile/', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile/', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('profile/security', [ProfileController::class, 'changePassword'])->name('profile.password.change');
    Route::post('profile/security', [ProfileController::class, 'updatePassword'])->name('profile.password.update');

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
    Route::resource('menus', AppMenuController::class);
    Route::resource('cities', CityController::class);
    Route::get('getCities/{id}', [CityController::class, 'getCities']);
    Route::resource('areas', AreaController::class);
    Route::resource('thanas', ThanaController::class);
    Route::resource('markets', MarketController::class);
    Route::resource('floors', FloorController::class);
    Route::resource('shoptypes', ShopTypeController::class);
    Route::resource('shops', ShopController::class);
    Route::post('shops/status-update/{id}', [ShopController::class, 'statusUpdate'])->name('shop.status-update');
    Route::get('media-image/{id}', [ShopController::class, 'removeShopMedia'])->name('shopMedia.remove');

    Route::resource('category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('colors', ColorController::class);
    Route::resource('size', SizeController::class);
    Route::resource('weights', WeightController::class);

    Route::resource('products', ProductController::class);

    Route::resource('orders', OrdersController::class);

    //customer interactions
    Route::resource('topics', TopicController::class);
    Route::get('videos/', [InteractionController::class, 'videos'])->name('videos.index');
    Route::get('videos/{id}', [InteractionController::class, 'showVideo'])->name('videos.show');
    Route::get('templates/', [InteractionController::class, 'templates'])->name('templates.index');
    Route::post('interactions/{id}', [InteractionController::class, 'statusUpdate'])->name('interactions.update');
    Route::resource('comments', CommentController::class);
    Route::post('comments/update-status', [CommentController::class, 'changeStatus'])->name('comments.statusUpdate');
