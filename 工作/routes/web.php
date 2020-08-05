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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/asset-sys-borrow-out', function () {
    return view('page-view/AssetSysBorrowOut');
});
Route::get('/asset-sys-borrow', function () {
    return view('page-view/AssetSysBorrow');
});
Route::get('/asset-sys-borrow-out-2', function () {
    return view('page-view/AssetSysBorrowOut-2');
});
Route::get('/asset-sys-movein', function () {
    return view('page-view/AssetSysMoveIn');
});
Route::get('/asset-sys-withdraw', function () {
    return view('page-view/AssetSysWithdraw');
});
Route::get('/asset-sys-returnback', function () {
    return view('page-view/AssetSysReturnBack');
});
Route::get('/asset-sys-returnback', function () {
    return view('page-view/AssetSysReturnBack');
});
Route::get('/asset-sys-returnback-2', function () {
    return view('page-view/AssetSysReturnBack-2');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/asset-sys-movein', 'MoveInController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
