<<<<<<< HEAD
<?php
=======
<?php
>>>>>>> 75e0af8f21a62ecfe90a610a0e7e50e16a8c7093

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
<<<<<<< HEAD

Route::get('/donate','DonationController@index');

=======
>>>>>>> 75e0af8f21a62ecfe90a610a0e7e50e16a8c7093
