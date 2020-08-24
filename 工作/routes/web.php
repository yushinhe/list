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
    Route::post('/asset-sys/movein', 'MoveInController@update');
    Route::post('/asset-sys/withdraw', 'WithdrawController@update');
    Route::post('/asset-sys/borrow', 'BorrowController@update');
    Route::get('/asset-sys/borrow', 'BorrowController@index1');
    Route::get('/asset-sys/borrow-out', 'BorrowController@index');
    Route::get('/asset-sys/borrow-out-2/{id}', 'BorrowOutController@index');
    Route::get('/asset-sys/return', 'ReturnController@index');
    Route::post('/asset-sys/return-1/{id}', 'ReturnController@edit');
    Route::get('/asset-sys/return-1/{id}', 'ReturnController@index1');
    Route::get('/asset-sys/returnback', 'ReturnbackController@index');
    Route::post('/asset-sys/returnback-2/{id}', 'ReturnbackController@edit');
    Route::get('/asset-sys/returnback-2/{id}', 'ReturnbackController@index1');
    Route::post('/asset-sys/borrow-out-2/{id}', 'BorrowOutController@edit');
    Route::get('/asset-sys/withdraw', 'WithdrawController@index');
    Route::get('/asset-sys/withdraw-check', 'WithdrawController@index1');
    Route::get('/asset-sys/withdraw-status', 'WithdrawController@index3');
    Route::get('/asset-sys/withdraw-check-1/{id}', 'WithdrawController@index2');
    Route::post('/asset-sys/withdraw-check-1/{id}', 'WithdrawController@edit');
    Route::get('/asset-sys/movein', 'MoveInController@index');
    Route::get('/asset-sys/asset', 'AssetController@index');
    Route::get('/asset-sys/asset/{id}/detail', 'AssetDetailController@index');
    Route::delete('/asset/sys-asset/{id}/delete', 'AssetController@destroy')->name('asset.destroy');
    Route::get('/asset-sy/asset/{id}/edit', 'AssetEditController@index');
    Route::post('/asset-sys/asset/{id}/edit', 'AssetEditController@edit');
});

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
