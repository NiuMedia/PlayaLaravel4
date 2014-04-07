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
	Route::resource('admin', 'AdminController');
	Route::resource('adminlist', 'AdminListController');
	Route::resource('users', 'UserController');
	Route::resource('types', 'TypeController',
	 			array('only'=> array('index', 'show', 'create', 'store', 'edit', 'update', 'destroy')));
	Route::resource('services', 'ServiceController',
	 			array('only'=> array('index', 'show', 'create', 'store', 'edit', 'update', 'destroy')));
	Route::resource('locations', 'LocationController',
	 			array('only'=> array('index', 'show', 'create', 'store', 'edit', 'update', 'destroy')));
	Route::resource('beachs', 'BeachController');
	Route::resource('beachlist', 'BeachListController');
	Route::resource('doctors', 'DoctorController');
	Route::resource('doctorlist', 'DoctorListController');
	Route::resource('hotels', 'HotelController');
	Route::resource('hotellist', 'HotelListController');
	Route::resource('restaurants', 'RestaurantController');
	Route::resource('restaurantlist', 'RestaurantListController');
	Route::resource('nightlifes', 'NightlifeController');
	Route::resource('nightlifelist', 'NightlifeListController');
	Route::resource('shoppings', 'ShoppingController');
	Route::resource('shoppinglist', 'ShoppingListController');
	Route::resource('tours', 'TourController');
	Route::resource('tourlist', 'TourListController');
	Route::resource('events', 'EventController');
	Route::resource('eventlist', 'EventListController');
	Route::resource('transports', 'TransportController');
	Route::resource('transportlist', 'TransportListController');
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
	Route::resource('nightlifes', 'NightlifesController', 
		array('only' => array('index')));
	Route::resource('shoppings', 'ShoppingsController', 
		array('only' => array('index')));
	Route::resource('tours', 'ToursController', 
		array('only' => array('index')));
	Route::resource('events', 'EventsController', 
		array('only' => array('index')));
	Route::resource('transports', 'TransportsController', 
		array('only' => array('index')));
});



