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

Route::get('/admin', 'AdminController@show');

Route::get('/season/{id}/addAnimu', 'SeasonsController@addAnimu');
Route::get('/season/{id}/editAnimu', 'SeasonsController@editAnimu');
Route::post('/season/{slug}', 'SeasonsController@storeAnimu');
Route::patch('/season/{slug}', 'SeasonsController@updateAnimu');