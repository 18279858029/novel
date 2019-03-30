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
//根目录
Route::get('/','AdminIndexController@home')->name('home');
//后台登录
Route::get('/adminlogin','Admin\login\AdminLoginController@create')->name('adminlogin');
//管理员列表
Route::get('/adminuser','Admin\AdminusersController@index')->name('adminuser');
//添加管理员
Route::get('/admincreate','Admin\AdminusersController@create')->name('admincreate');
Route::resource('admin','Admin\AdminusersController');

