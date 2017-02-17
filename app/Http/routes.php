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

#registration

Route::get('/register', function () {
    return view('register');
});

#LOGIN
Route::post('/signin',[
	'uses' => 'UserController@SignIn',
	'as' => 'signin'
	]);

Route::post('/signup',[
	'uses' => 'UserController@Signup',
	'as' => 'signup'
	]);

Route::get('/dashboard',[
	'uses' => 'UserController@getDashboard',
	'as' => 'dashboard'
	]);


Route::get('/billing', function () {
    return view('billing');
});

Route::get('/print','PrintController@printPreview');


