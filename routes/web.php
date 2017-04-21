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
//Middleware group for admin 
Route::group(['middleware' => ['admin']], function () {
    //
});

//Middleware group Auth User
Route::group(['middleware' => ['authUser']], function () {
    Route::get('/makeListing', 'PageController@makeListing');
    Route::post('saveListing', 'PageController@saveListing');
    Route::post('fileUpload','PageController@fileUpload');
    Route::get('userListing','PageController@userListing');

});

Route::get('/','PageController@home');
Route::get('/getlastListings','PageController@getlastListings');
Route::get('/home','PageController@home');
Route::get('/nekretnine','ListingViewsController@nekretnine');
Route::get('singleListing/{id}','ListingViewsController@singleListing');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/registracija', 'PageController@registracija');
Route::get('/logout', 'PageController@logout');



//midleware




//Route::post('/makeListing1', 'PageController@makeListing1');


