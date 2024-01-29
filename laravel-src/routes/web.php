<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// org
// Route::get('/', function () {
//     return view('welcome');
// });

// デザインお試し
Route::get('/', fn() => view('dashboard'))->name('dashboard');
// top デザインパターン
Route::group(['prefix' => '/top', 'as' => 'top.'], function() {
    // top画面
    Route::get('/2', fn() => view('top.p2'))->name('p2');
});


// shop
Route::group(['prefix' => '/shop', 'as' => 'shop.'], function() {
    // top画面
    Route::get('/', fn() => view('shop.show'))->name('show');
});
