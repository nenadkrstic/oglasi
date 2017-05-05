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
    Route::get('deleteAuthListing/{id}','ListingViewsController@deleteAuthListing');
    Route::get('updateAuthListing/{id}','ListingViewsController@updateAuthListing');

});

        

Route::get('/','PageController@home');
//Get last listing with ajax
Route::get('/getlastListings','PageController@getlastListings');
Route::get('/home','PageController@home');
/*
*Listings routes
*
*/
Route::get('/nekretnine','ListingViewsController@listingAll');
Route::get('/posao','ListingViewsController@listingAll');
Route::get('/polovniAutomobili','ListingViewsController@listingAll');
Route::get('/racunari','ListingViewsController@listingAll');
Route::get('/mobilniTelefoni','ListingViewsController@listingAll');
Route::get('/tvIaudio','ListingViewsController@listingAll');
Route::get('/masineIalati','ListingViewsController@listingAll');
Route::get('/elAparati','ListingViewsController@listingAll');
Route::get('/namestaj','ListingViewsController@listingAll');
Route::get('/igracke','ListingViewsController@listingAll');
Route::get('/odeca','ListingViewsController@listingAll');
Route::get('/kucniljubumci','ListingViewsController@listingAll');
Route::get('/muzika','ListingViewsController@listingAll');
Route::get('/sport','ListingViewsController@listingAll');
Route::get('/zaDecu','ListingViewsController@listingAll');
Route::get('/negaLica','ListingViewsController@listingAll');

Route::get('singleListing/{id}','ListingViewsController@singleListing');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/registracija', 'PageController@registracija');
Route::get('/logout', 'PageController@logout');






