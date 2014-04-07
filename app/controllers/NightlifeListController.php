<?php

class NightlifeListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

    	return View::make('nightlifes.list')
      		->with('users', $users);
	}
}