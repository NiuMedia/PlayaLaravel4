<?php

class TourListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

    	return View::make('tours.list')
      		->with('users', $users);
	}
}