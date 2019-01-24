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

Route::get('welcome', function () {
    return view('welcome');
});

 
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

// { } means that it needs to pass in an id via the url like fillorder/1
//Route::get('fillorders/{fillorder}', 'Fillorder@show');

Route::delete('fillorders/{fillorder}', 'FillorderController@destroy');
Route::get('fillorders/{fillorder}/edit', 'FillorderController@edit');
Route::put('fillorders/{fillorder}', 'FillorderController@update');
Route::post('fillorders/store', 'FillorderController@store');
Route::get('fillorders/create', 'FillorderController@create');
Route::get('fillorders/{fillorder}', 'FillorderController@show');
Route::get('fillorders', 'FillorderController@index');

				// Route::resource automatically provides you with
				// all of the routes for the controller 
Route::resource('fillorders.parts', 'FillorderPartController',
				['only' => ['store', 'update', 'destroy']]);
				// 'only' if you don't need all of the routes

Route::resource('types', 'TypeController');