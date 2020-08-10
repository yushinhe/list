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
Route::get('/asset-sys', function () {
    return view('page-view/AssetSys');
});
Route::get('/asset-sys-borrow-out', function () {
    return view('page-view/AssetSysBorrowOut');
});
Route::get('/asset-sys-borrow', function () {
    return view('page-view/AssetSysBorrow');
});
Route::get('/asset-sys-borrow-out-2/{id}', function () {
    return view('page-view/AssetSysBorrowOut-2');
});
// Route::get('/asset-sys-borrow-out-2', function () {
//     return view('page-view/AssetSysBorrowOut-2');
// });
Route::get('/asset-sys-movein', function () {
    return view('page-view/AssetSysMoveIn');
});
Route::get('/asset-sys-withdraw', function () {
    return view('page-view/AssetSysWithdraw');
});
Route::get('/asset-sys-returnback', function () {
    return view('page-view/AssetSysReturnBack');
});
Route::get('/asset-sys-returnback-2', function () {
    return view('page-view/AssetSysReturnBack-2');
});
Route::get('/asset-sys-return', function () {
    return view('page-view/AssetSysReturn');
});
Route::get('/asset-sys-return-1', function () {
    return view('page-view/AssetSysReturn-1');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/asset-sys-movein', 'MoveInController@update');
Route::post('/asset-sys-withdraw', 'WithdrawController@update');
Route::post('/asset-sys-borrow', 'BorrowController@update');
Route::get('/asset-sys-borrow', 'BorrowController@index1');
Route::get('/asset-sys-borrow-out', 'BorrowController@index');
Route::get('/asset-sys-borrow-out-2/{id}', 'BorrowOutController@index');
Route::get('/asset-sys-return', 'ReturnController@index');
Route::post('/asset-sys-return-1/{id}', 'ReturnController@edit');
Route::get('/asset-sys-return-1/{id}', 'ReturnController@index1');
Route::get('/asset-sys-returnback', 'ReturnbackController@index');
Route::post('/asset-sys-returnback-2/{id}', 'ReturnbackController@edit');
Route::get('/asset-sys-returnback-2/{id}', 'ReturnbackController@index1');
Route::post('/asset-sys-borrow-out-2/{id}', 'BorrowOutController@edit');

Route::get('/asset-sys-withdraw', 'WithdrawController@index');
Route::get('/asset-sys-movein', 'MoveInController@index');
// Route::get('/asset-sys-withdraw', 'WithdrawController@select');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
