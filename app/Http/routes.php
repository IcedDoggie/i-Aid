<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::model('organization','Organization');
Route::model('donate','Donate');

Route::get('/', function () {
    return view('auth/login');
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function () {
    Route::post('/callback', 'OrganizationController@callback');
});



Route::resource("/organizations","OrganizationController"); // Add this line in routes.php
Route::resource('/update_profile', 'ProfileController@update');

Route::resource('/donates','DonateController');



Route::resource('/donations','DonationController@create');

Route::resource('/organizations.donates', 'DonateController');

//Route::post('/organizations/{$id}donates/', 'DonateController');




