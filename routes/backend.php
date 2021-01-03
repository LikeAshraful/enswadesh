<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SettingController;
use Illuminate\Support\Facades\Route;


//Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Role
Route::resource('roles', RoleController::class);

//User
Route::resource('users', UserController::class);

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


// Loacation and Shop Related
    Route::resource('menus', AppMenuController::class);
    Route::resource('cities', CityController::class);
    Route::resource('areas', 'Backend\AreaController');
    Route::resource('thanas', 'Backend\ThanaController');
    Route::resource('marketplaces', 'Backend\MarketPlaceController');
    Route::resource('floors', 'Backend\FloorController');
    Route::resource('shops', 'Backend\ShopController');

    Route::resource('menus', 'Backend\AppMenuController');
    Route::resource('cities', 'Backend\CityController');
    Route::resource('areas', 'Backend\AreaController');
    Route::resource('thanas', 'Backend\ThanaController');
    Route::resource('marketplaces', 'Backend\MarketPlaceController');
    Route::resource('floors', 'Backend\FloorController');
    Route::resource('shops', 'Backend\ShopController');
