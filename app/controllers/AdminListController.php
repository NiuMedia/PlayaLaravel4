<?php

class AdminListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

    	return View::make('admin.list')
      		->with('users', $users);
	}
}