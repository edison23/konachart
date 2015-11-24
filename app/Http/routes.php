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

// Route::get('/', 'SeasonsController@index');
// Route::get('/season/create', 'SeasonsController@create');
// Route::get('/season/{slug}', 'SeasonsController@show');

Route::resource('season', 'SeasonsController');
Route::resource('animu', 'AnimusController');

Route::get('season/{slug}/add', 'AnimusController@create');
// Route::get('season/{slug}/storeAnimu', 'SeasonsController@storeAnimu');

// Route::get('animu/{slug}/edit', 'AnimusController@edit');
// Route::patch('animu/{slug}', 'AnimusController@update');

Route::get('/admin', 'AdminController@show');
