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

Route::get('/',function(){
    return view('pages.trangchu');
});
Route::prefix('/')->group(function () {

    Route::get('blog',function(){
        return view('pages.blog');
    });
    Route::get('bai_hoc_cuoc_song',function(){
        return view('pages.bai_hoc_cuoc_song');
    });
    Route::get('chia_se_cuoi_tuan',function(){
        return view('pages.chia_se_cuoi_tuan');
    });
    Route::get('guong_thanh_cong',function(){
        return view('pages.guong_thanh_cong');
    });
    Route::get('kien_thuc_kinh_doanh',function(){
        return view('pages.kien_thuc_kinh_doanh');
    });
    Route::get('phat_trien_ca_nhan',function(){
        return view('pages.phat_trien_ca_nhan');
    });
    Route::get('phong_cach_song',function(){
        return view('pages.phong_cach_song');
    });
  
});
   

