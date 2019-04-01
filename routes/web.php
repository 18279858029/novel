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
//后台登录页面
Route::get('/adminlogin','Admin\login\AdminLoginController@create')->name('adminlogin');
//后台登录
Route::post('/adminlogin','Admin\login\AdminLoginController@login')->name('adminls');
//中间件
Route::group(['middleware' => ['token']],function(){
//根目录
Route::get('/','AdminIndexController@home')->name('home');
//退出登录        
Route::delete('logout', 'Admin\login\AdminLoginController@logout')->name('logout');
// 管理
Route::resource('admin','Admin\AdminusersController');
});


