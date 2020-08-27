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

    Route::post('/upload', 'UserController@uploadAvatar');
    Route::group(['prefix' => 'asset-sys'], function () {
        Route::get('index', function () {
            return view('page-view/AssetSys');
        });
        Route::resource('asset', 'AssetResourceController');
        Route::resource('movein', 'MoveInController');
        Route::resource('withdraw', 'WithdrawResourceController');
        Route::resource('borrow', 'BorrowResourceController');
        Route::resource('borrow-out', 'BorrowOutResourceController');
        Route::resource('return', 'ReturnResourceController');
        Route::resource('returnback', 'ReturnBackResourceController');
        Route::resource('withdraw-check', 'WithdrawCheckResourceController');
        Route::get('withdraw-status', 'WithdrawStatusController@index');
    });
    Route::group(['prefix' => 'books'], function () {
        Route::get('index', function () {
            return view('book/index');
        });
      Route::resource('asset', 'BookAssetResourceController');       
    });
});

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
