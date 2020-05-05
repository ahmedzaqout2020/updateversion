<?php

use Illuminate\Support\Facades\Route;

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

 
Route::get('/contact','ContactController@index');

Route::get('/create','ContactController@create');

Route::post('/store','ContactController@store');

Route::get('/{contact}/edit','ContactController@edit');
Route::post('/update/{contact}','ContactController@update');
Route::delete('/delete/{contact}','ContactController@destroy');

