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

Route::get('/', function () {
    return view('welcome');
});

Route::get('trang-chu', [
	'as' =>'trang-chu',
	'uses' => 'Controller_1@get_trangchu'
]);

Route::get('tintuc', [
	'as' =>'tintuc',
	'uses' => 'Controller_1@get_tintuc'
]);

Route::get('chitiettintuc', [
	'as' =>'chitiettintuc',
	'uses' => 'Controller_1@get_chitiettintuc'
]);

Route::get('gioithieu', [
	'as' =>'gioithieu',
	'uses' => 'Controller_1@get_gioithieu'
]);