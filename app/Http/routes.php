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

// Route::resource('season', 'SeasonsController');
// Route::resource('animu', 'AnimusController');

// Route::get('season/{slug}/add', 'AnimusController@create');
// Route::get('season/{slug}/storeAnimu', 'SeasonsController@storeAnimu');

// Route::get('animu/{slug}/edit', 'AnimusController@edit');
// Route::patch('animu/{slug}', 'AnimusController@update');

Route::get('/seasons', 'SeasonsController@index');
Route::get('/season/create', 'SeasonsController@create');
Route::post('/season', 'SeasonsController@store');
Route::get('/season/{id}/edit', 'SeasonsController@edit');
Route::patch('/season/{id}', 'SeasonsController@update');
Route::get('/season/{id}/destroy', 'SeasonsController@destroy');

Route::get('/season/{id}/create', 'AnimusController@create');
Route::post('/animu', 'AnimusController@store');
Route::get('/animu/{id}/edit', 'AnimusController@edit');
Route::patch('/animu/{id}', 'AnimusController@update');
Route::get('/animu/{id}/destroy', 'AnimusController@destroy');

Route::get('/linkedSite/create', 'LinkedSiteController@create');
Route::get('/linkedSites', 'LinkedSiteController@index');
Route::post('/linkedSite', 'LinkedSiteController@store');
