<?php

class ShoppingListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

    	return View::make('shoppings.list')
      		->with('users', $users);
	}
}