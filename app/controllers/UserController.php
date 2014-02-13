<?php

class UserController extends \BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct() {
      	$this->beforeFilter('csrf', array('on'=>'post'));
      	$this->beforeFilter('auth', array('only'=>array('index', 'create', 'show', 'edit', 'destroy', 'beach')));
  	}

  	protected $layout = "layouts.masterlog";

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
        elseif (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password'), 'rol'=>'beach'))) {
          	return Redirect::to('app/beaches')->with('message', 'You are now logged in!');
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

  	public function getBeach() {
     	$this->layout->content = View::make('beaches.index');
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
		$location_options = DB::table('locations')->orderBy('name', 'asc')->lists('name','id');
		return View::make('users.create', array('location_options' => $location_options));
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
      // 		$user = new User;
   			// $user->firstname = Input::get('firstname');
   			// $user->lastname = Input::get('lastname');
   			// $user->email = Input::get('email');
      //     	$user->username = Input::get('username');
   			// $user->password = Hash::make(Input::get('password'));
   			// $user->rol = Input::get('rol');
      //     	$user->status = Input::get('status');
   			// $user->save();
   			$id = DB::table('users')->insertGetId(array('firstname' => Input::get('firstname'), 'lastname' => Input::get('lastname'),
														'email' => Input::get('email'), 'username' => Input::get('username'),
														'password' => Hash::make(Input::get('password')), 'rol' => Input::get('rol'),
														'status' => Input::get('status'),'idlocation' => Input::get('idlocation')));
   			DB::table('beaches')->insert(array('id_user'=> $id));
 
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
		$location_options = DB::table('locations')->orderBy('name', 'asc')->lists('name','id');
		// show the edit form and pass the type
		return View::make('users.edit', array('user' => $user, 'location_options' => $location_options));
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
          	$user->status = Input::get('status');
          	$user->idlocation = Input::get('idlocation');
          	$user->phone = Input::get('phone');
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
		DB::table('beaches')->where('id_user', '=', $id)->delete();
		// redirect
		Session::flash('message', 'Successfully deleted the user!');
		return Redirect::to('app/users');
	}

}