<?php

class HotelListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

    	return View::make('hotels.list')
      		->with('users', $users);
	}
}