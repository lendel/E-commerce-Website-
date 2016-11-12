<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','user_panel_control@index');

Route::get('/Company_inforamtion','Admin_panel_control@Company_inforamtion');
Route::get('/Admin','Admin_panel_control@System_vaild');
Route::get('/Payment_method','Admin_panel_control@Payment_method');
Route::get('/category_setup','Admin_panel_control@category_setup');
Route::get('/Brand_setup','Admin_panel_control@Brand_setup');

Auth::routes();
Route::get('/home', 'HomeController@index');
