<?php

class DoctorListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

    	return View::make('doctors.list')
      		->with('users', $users);
	}
}