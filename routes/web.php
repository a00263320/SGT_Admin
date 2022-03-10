<?php

use App\Http\Controllers\ActivityArticalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsArticalController;
use App\Http\Controllers\ProductArticalController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VideosArticalController;
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

// 後台首頁
Route::resource('/', AdminController::class);

//News 文章管理
Route::resource('/news', NewsArticalController::class);

//周邊 文章管理
Route::resource('/product', ProductArticalController::class);

//活動 文章管理
Route::resource('/activity', ActivityArticalController::class);

//影片 文章管理
Route::resource('/videos', VideosArticalController::class);


Route::get('12313213', [TestController::class, 'test'])->name('dfdsfsdfsdf');