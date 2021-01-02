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

Auth::routes();

//
Route::view('/', 'pure.index');
// 未知路由導回首頁
// Route::view('/{all}', 'pure.index')->where(['all' => '.*']);


Route::get('messages', 'MessageController@viewDidLoad');
Route::get('messages/{id}', 'MessageController@show');

Route::post('messages', 'MessageController@onPost');
