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


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('menu','HomeController@menu');
    Route::get('modificarMenu/{id}','HomeController@modificarMenu');
    Route::post('postmodificarMenu','HomeController@postagregarMenu');
    Route::get('eliminarMenu/{id}','HomeController@eliminarMenu');
    Route::get('agregarMenu','HomeController@agregarMenu');
    Route::post('postagregarMenu','HomeController@postagregarMenu');

    Route::get('categorias','HomeController@categorias');
    Route::get('agregarCategoria','HomeController@agregarCategoria');
    Route::post('postagregarCategoria','HomeController@postagregarCategoria');
    Route::get('modificarCategoria/{id}','HomeController@modificarCategoria');
    Route::post('postmodificarCategoria','HomeController@postagregarCategoria');
    Route::get('eliminarCategoria/{id}','HomeController@eliminarcategoria');

    Route::get('eventos','HomeController@eventos');
    Route::get('agregarEvento','HomeController@agregarEvento');
    Route::post('postagregarEvento','HomeController@postagregarEvento');
    Route::get('modificarEvento/{id}','HomeController@modificarEvento');
    Route::post('postmodificarEvento','HomeController@postagregarEvento');
    Route::get('eliminarEvento/{id}','HomeController@eliminarEvento');
});


Route::get('menu','GeneralController@menu');
Route::get('contacto','GeneralController@contacto');
Route::post('sendMailContact','GeneralController@sendMailContact');



Route::post('suscribe','GeneralController@suscribe');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
