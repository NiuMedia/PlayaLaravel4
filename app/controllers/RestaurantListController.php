<?php

class RestaurantListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

    	return View::make('restaurants.list')
      		->with('users', $users);
	}
}