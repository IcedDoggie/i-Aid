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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::resource("/organizations","OrganizationController"); // Add this line in routes.php
Route::resource('/update_profile', 'ProfileController@update');

Route::resource('/donates','DonateController');



Route::resource('/donations','DonationController@create');

Route::post('/organiztions/{post}/donates',['as' => 'donates.new','uses' =>'DonatesController@new']);



