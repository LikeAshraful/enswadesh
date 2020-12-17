<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('dashboard','App\Http\Controllers\Backend\DashboardController@index')->name('dashboard');
Route::resource('roles','App\Http\Controllers\Backend\RoleController');
Route::resource('users','App\Http\Controllers\Backend\UserController');
