<?php

class UserController extends \BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() {
      	$this->beforeFilter('csrf', array('on'=>'post'));
      	$this->beforeFilter('auth', array('only'=>array('index', 'create', 'show', 'edit', 'destroy')));
  	}

  	protected $layout = "main";

  	public function getLogin() {
      	$this->layout->content = View::make('users.login');
  	}

  	public function postSignin() {
      	if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password'), 'rol'=>'admin'))) {
        	return Redirect::to('app/users')->with('message', 'You are now logged in!');
    	}
      	elseif (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password'), 'rol'=>'restaurant'))) {
          	return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
        }
    	else {
        	return Redirect::to('users/login')
            	->with('message', 'Your username/password combination was incorrect')
            	->withInput();
    	}
 	}

  	public function getDashboard() {
     	$this->layout->content = View::make('users.dashboard');
  	}

  	public function getLogout() {
      	Auth::logout();
      	return Redirect::to('users/login')->with('message', 'Your are now logged out!');
  	}

	public function index()
  	{
    	$users = User::all();

    	return View::make('users.index')
      		->with('users', $users);
  	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);
 
   		if ($validator->passes()) {
      		$user = new User;
   			$user->firstname = Input::get('firstname');
   			$user->lastname = Input::get('lastname');
   			$user->email = Input::get('email');
          	$user->username = Input::get('username');
   			$user->password = Hash::make(Input::get('password'));
   			$user->rol = Input::get('rol');
          	$user->status = Input::get('status');
   			$user->save();
 
   			return Redirect::to('app/users')->with('message', 'Successfully added');
   		} 
   		else {
      		return Redirect::to('app/users/create')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
   		}
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
		return View::make('users.show')
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

		// show the edit form and pass the type
		return View::make('users.edit')
			->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), User::$rulesupdated);

		if ($validator->passes()) {
      		$user = User::find($id);
   			$user->firstname = Input::get('firstname');
   			$user->lastname = Input::get('lastname');
   			$user->email = Input::get('email');
          	$user->username = Input::get('username');
   			$user->rol = Input::get('rol');
          	$user->status = Input::get('status');
   			$user->save();
 
   			return Redirect::to('app/users')->with('message', 'Successfully updated!');
   		} 
   		else {
      		return Redirect::to('app/users/'. $id . '/edit')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
   		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the user!');
		return Redirect::to('app/users');
	}

}