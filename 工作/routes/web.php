<?php

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
Route::middleware('auth')->group(function () {

    Route::get('/asset-sys', function () {
        return view('page-view/AssetSys');
    });
    Route::post('/upload', 'UserController@uploadAvatar');
    Route::resource('/asset-sys/asset', 'AssetResourceController');
    Route::resource('/asset-sys/movein', 'MoveInController');
    Route::resource('/asset-sys/withdraw', 'WithdrawResourceController');
    Route::resource('/asset-sys/borrow', 'BorrowResourceController');
    Route::resource('/asset-sys/borrow-out', 'BorrowOutResourceController');
    Route::resource('/asset-sys/return', 'ReturnResourceController');
    Route::resource('/asset-sys/returnback', 'ReturnBackResourceController');
    Route::resource('/asset-sys/withdraw-check', 'WithdrawCheckResourceController');
    Route::get('/asset-sys/withdraw-status', 'WithdrawStatusController@index');
  });

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
