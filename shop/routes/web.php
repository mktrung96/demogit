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

Route::get('index',[
	'as'=>'trang-chu', // đặt tên cho route
	'uses'=>'PageController@getIndex' // @getIndex là gọi method getIndex có trong PageController
]);

Route::get('loai-san-pham',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSP'
]);

Route::get('chi-tiet-san-pham',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);