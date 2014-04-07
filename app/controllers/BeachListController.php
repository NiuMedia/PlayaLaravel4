<?php

class BeachListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

    	return View::make('beaches.list')
      		->with('users', $users);
	}
}