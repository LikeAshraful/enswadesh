<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "All cache is cleared";
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('text-link?', function () {
    return ('gksdhvkjgshg');
})->name('text-link');

Auth::routes(['verify' => true]);
Route::get('/home', [HomeController::class, 'index'])->name('home');