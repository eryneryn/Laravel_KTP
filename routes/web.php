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

// Route::get('/', 'PageController@home');

Route::get('/', 'KTPController@index');

Route::post('/', 'KTPController@store');

Route::get('/create', 'KTPController@create');

Route::delete('/{kTP}', 'KTPController@destroy'); 

Route::get('/{kTP}/edit', 'KTPController@edit');

Route::put('/{kTP}', 'KTPController@update');