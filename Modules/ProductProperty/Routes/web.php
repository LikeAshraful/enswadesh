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

Route::resource('main_category', 'Backend\MainCategoryController');
Route::resource('sub_category', 'Backend\SubCategoryController');

Route::resource('category', 'Backend\CategoryController');
