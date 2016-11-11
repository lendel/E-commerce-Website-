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


Auth::routes();
Route::get('/home', 'HomeController@index');
