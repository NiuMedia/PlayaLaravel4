<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() {
      	$this->beforeFilter('csrf', array('on'=>'post'));
      	$this->beforeFilter('auth', array('only'=>array('index', 'create', 'show', 'edit', 'destroy')));
  	}
  	
	public function index()
	{
		$users = User::all();

    	return View::make('admin.index')
      		->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the user
		$user = User::find($id);

		// show the view and pass the nerd to it
		return View::make('admin.account')
			->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the user
		$user = User::find($id);
		$location_options = DB::table('locations')->orderBy('name', 'asc')->lists('name','id');
		// show the edit form and pass the type
		return View::make('admin.accountedit', array('user' => $user));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}