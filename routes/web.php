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
Route::get('e-magazine', function () {
	return view('pages.e-magazine');
})->name('e-magazine');


Route::get('wakeup', function () {
	return view('pages.wakeup');
})->name('wakeup');


Route::get('chuyengiadaotao', function () {
	return view('pages.chuyengiadaotao');
})->name('chuyengiadaotao');


Route::get('banhang', function () {
	return view('pages.banhang');
})->name('banhang');


Route::get('kinhdoanh', function () {
	return view('pages.kinhdoanh');
})->name('kinhdoanh');


Route::get('video', function () {
	return view('pages.video');
})->name('video');