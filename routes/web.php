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

Route::get('/','PageController@home');

Route::get('/home','PageController@home');
Route::get('/nekretnine','PageController@nekretnine');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/registracija', 'HomeController@registracija');
Route::get('/logout', 'HomeController@logout');
