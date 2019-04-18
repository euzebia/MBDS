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

Route::get('/','homeController@index');
Route::get('/home', 'homeController@index')->name('home');
Route::get('/add_speciality','specialityController@create')->name('add_speciality');
Route::post('/store','specialityController@store');
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
