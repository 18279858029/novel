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
//后台注册
Route::get('adminregister','Admin\register\AdminRegisterController@create')->name('adminregister');
//后台登录
Route::get('/adminlogin','Admin\login\AdminLoginController@create')->name('adminlogin');
//添加管理员
Route::get('/admincreate','AdminUsersController@create')->name('admincreate');
//管理员列表
Route::get('/adminuser','AdminUsersController@index')->name('adminuser');