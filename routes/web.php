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

Route::get('/','GeneralController@index');

Route::get('menu','GeneralController@menu');

Route::post('suscribe','GeneralController@suscribe');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
