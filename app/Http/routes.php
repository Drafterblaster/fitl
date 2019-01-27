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

Route::get('/', 'FillorderController@index');

Route::get('home', function () {
    return redirect('/');
});

//Route::get('welcome', function () {
//    return view('welcome');
//});

Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

// { } means that it needs to pass in an id via the url like fillorder/1
//Route::get('fillorders/{fillorder}', 'Fillorder@show');

Route::delete('fillorders/{fillorder}', 'FillorderController@destroy');
Route::get('fillorders/{fillorder}/edit', 'FillorderController@edit');
Route::put('fillorders/{fillorder}', 'FillorderController@update');
Route::post('fillorders/store', 'FillorderController@store');
Route::get('fillorders/create', 'FillorderController@create');
Route::get('fillorders/search', 'FillorderController@search');
Route::get('fillorders/{fillorder}', 'FillorderController@show');
Route::get('fillorders', 'FillorderController@index');

				// Route::resource automatically provides you with
				// all of the routes for the controller 
Route::resource('fillorders.parts', 'FillorderPartController',
				['only' => ['store', 'update', 'destroy']]);
				// 'only' if you don't need all of the routes

Route::resource('types', 'TypeController');

// user routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// User Profile.
Route::get('profile', 'ProfileController@profile');