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
    return view('pages.trang-chu');
});
Route::get('/gioi-thieu', function () {
    return view('pages.gioi-thieu');
});

Route::get('trang-chu', [
	'as' =>'pages.trang-chu',
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


Route::prefix('lienHe')->group(function () {

    Route::get('/', function () {
        return view('pages.lienHe');
    })->name('lien-he');

});

Route::prefix('quaTang')->group(function () {

    Route::get('/', function () {
        return view('pages.quaTang');
    })->name('qua-tang');

});

Route::prefix('baiViet')->group(function () {

    Route::get('/', function () {
        return view('pages.baiViet');
    })->name('bai-viet');

});