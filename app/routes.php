<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|


Route::get('/', function()
{
	return View::make('hello');
});

*/

Route::get('index/{name}', function($name)
{
	return $name.'text.....';
});

Route::get('/', function()
{
	return View::make('templates/home');
});


Route::resource('pages', 'PagesController');

Route::resource('settings', 'SettingsController');

