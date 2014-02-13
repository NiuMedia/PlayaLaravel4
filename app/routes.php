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
*/

Route::get('/', function()
{
	return View::make('users.login');
});

Route::controller('users', 'UserController');

Route::group(array('prefix' => 'app'), function(){
	Route::resource('users', 'UserController',
	 			array('only'=> array('index', 'show', 'create', 'store', 'edit', 'update', 'destroy')));
	Route::resource('types', 'TypeController',
	 			array('only'=> array('index', 'show', 'create', 'store', 'edit', 'update', 'destroy')));
	Route::resource('services', 'ServiceController',
	 			array('only'=> array('index', 'show', 'create', 'store', 'edit', 'update', 'destroy')));
	Route::resource('locations', 'LocationController',
	 			array('only'=> array('index', 'show', 'create', 'store', 'edit', 'update', 'destroy')));
	Route::resource('beaches', 'BeachController');
	Route::resource('hotels', 'HotelController');
	Route::resource('restaurants', 'RestaurantController');
// 	Route::controller('users', 'UserController');
});


//JSON API
Route::group(array('prefix' => 'api'), function() {
	Route::resource('users', 'UsersController', 
		array('only' => array('index')));
	Route::resource('locations', 'LocationsController', 
		array('only' => array('index')));
	Route::resource('services', 'ServicesController', 
		array('only' => array('index')));
	Route::resource('beaches', 'BeachesController', 
		array('only' => array('index')));
	Route::resource('hotels', 'HotelsController', 
		array('only' => array('index')));
	Route::resource('restaurants', 'RestaurantsController', 
		array('only' => array('index')));
});


