<?php

class UserController extends BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	//se construyen las vistas y se crean reestricciones de las funciones para que solo sean vistas despues de la autentificacion.

	public function __construct() {
      	$this->beforeFilter('csrf', array('on'=>'post'));
      	$this->beforeFilter('auth', array('only'=>array('index', 'show', 'create', 'edit', 'destroy'))); //filtro para proteger las vistas que no deben ser mostradas sin inicio de sesion
  	}

  	protected $layout = "layouts.masterlog"; //se define el layout principal

  	//vista para obtener el login
	public function getLogin() {
      	$this->layout->content = View::make('users.login');
  	}

  	//funciones para redireccionar segun los permisos de cada usuario
  	public function postSignin() {
  		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'super'))) {
        	return Redirect::to('app/admin')->with('message', 'You are now logged in!');
    	}
      	elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'admin'))) {
        	return Redirect::to('app/users')->with('message', 'You are now logged in!');
    	}
      	elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'hotel'))) {
          	return Redirect::to('app/hotels')->with('message', 'You are now logged in!');
        }
        elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'restaurant'))) {
          	return Redirect::to('app/restaurants')->with('message', 'You are now logged in!');
        }
        elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'nightlife'))) {
          	return Redirect::to('app/nightlifes')->with('message', 'You are now logged in!');
        }
        elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'beach'))) {
          	return Redirect::to('app/beachs')->with('message', 'You are now logged in!');
        }
        elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'tour'))) {
          	return Redirect::to('app/tours')->with('message', 'You are now logged in!');
        }
        elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'event'))) {
          	return Redirect::to('app/events')->with('message', 'You are now logged in!');
        }
        elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'shopping'))) {
          	return Redirect::to('app/shoppings')->with('message', 'You are now logged in!');
        }
        elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'transportation'))) {
          	return Redirect::to('app/transports')->with('message', 'You are now logged in!');
        }
        elseif (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password'), 'rol'=>'doctor'))) {
          	return Redirect::to('app/doctors')->with('message', 'You are now logged in!');
        }
    	else {
        	return Redirect::to('users/login')
            	->with('message', 'Your email/password combination was incorrect')
            	->withInput();
    	}
 	}

  	//funcion para salir de la cuenta del sistema
  	public function getLogout() {
      	Auth::logout();
      	return Redirect::to('users/login')->with('message', 'Your are now logged out!');
  	}

  	//se construye la pagina principal con todos los usuarios que han sido registrados
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
	//se crean los usuarios
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
	//despues de crear los usuarios se guardan en la base de datos
	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);//se comprueban que los campos que han sido completados, cumplan con las reglas que se encuentran en el modelo usuario para el llenado de los campos
 
   		if ($validator->passes()) {
   			$id = DB::table('users')->insertGetId(array('firstname' => Input::get('firstname'), 'lastname' => Input::get('lastname'),
														'email' => Input::get('email'), 'password' => Hash::make(Input::get('password')), 'rol' => Input::get('rol'),
														'status' => Input::get('status'),'idlocation' => Input::get('idlocation'), 'phone' => Input::get('phone')));
   			if(Input::get('rol') == 'hotel'){
   				DB::table('hotels')->insert(array('iduser'=> $id));
   			}
   			elseif(Input::get('rol') == 'restaurant'){   			
   				DB::table('restaurants')->insert(array('iduser'=> $id));
   			}
   			elseif(Input::get('rol') == 'nightlife'){   			
   				DB::table('nightlifes')->insert(array('iduser'=> $id));
   			}
   			elseif(Input::get('rol') == 'shopping'){
				DB::table('shoppings')->insert(array('iduser'=> $id));
			}
			elseif(Input::get('rol') == 'tour'){
				DB::table('tours')->insert(array('iduser'=> $id));
			}
			elseif(Input::get('rol') == 'beach'){
				DB::table('beaches')->insert(array('iduser'=> $id));
			}
			elseif(Input::get('rol') == 'event'){
				DB::table('events')->insert(array('iduser'=> $id));
			}		
			elseif(Input::get('rol') == 'transportation'){
				DB::table('transportations')->insert(array('iduser'=> $id));
			}
			elseif(Input::get('rol') == 'doctor'){
				DB::table('doctors')->insert(array('iduser'=> $id));
			}
			Mail::send('users.mails.welcome', array('firstname'=>Input::get('firstname')), function($message){
   		      $message->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))->subject('Welcome to the Laravel 4 Auth App!');
    });
 
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
      		if($user->rol == 'hotel'){
				DB::table('hotels')->where('iduser', '=', $id)->delete();
			}
			elseif($user->rol == 'restaurant'){
				DB::table('restaurants')->where('iduser', '=', $id)->delete();
			}
			elseif($user->rol == 'nightlife'){
				DB::table('nightlifes')->where('iduser', '=', $id)->delete();
			}
			elseif($user->rol == 'shopping'){
				DB::table('shoppings')->where('iduser', '=', $id)->delete();
			}
			elseif($user->rol == 'tour'){
				DB::table('tours')->where('iduser', '=', $id)->delete();
			}
			elseif($user->rol == 'beach'){
				DB::table('beaches')->where('iduser', '=', $id)->delete();
			}
			elseif($user->rol == 'event'){
				DB::table('events')->where('iduser', '=', $id)->delete();
			}
			elseif($user->rol == 'transportation'){
				DB::table('transportations')->where('iduser', '=', $id)->delete();
			}
			elseif($user->rol == 'doctor'){
				DB::table('doctors')->where('iduser', '=', $id)->delete();
			}
   			$user->firstname = Input::get('firstname');
   			$user->lastname = Input::get('lastname');
   			$user->email = Input::get('email');
          	$user->status = Input::get('status');
          	$user->idlocation = Input::get('idlocation');
          	$user->password = Hash::make(Input::get('password'));
          	$user->phone = Input::get('phone');
          	if(Input::get('rol') == 'hotel'){
   				DB::table('hotels')->insert(array('iduser'=> $id));
   			}
   			elseif(Input::get('rol') == 'restaurant'){   			
   				DB::table('restaurants')->insert(array('iduser'=> $id));
   			}
   			elseif(Input::get('rol') == 'nightlife'){   			
   				DB::table('nightlifes')->insert(array('iduser'=> $id));
   			}
   			elseif($user->rol == 'shopping'){
				DB::table('shoppings')->insert(array('iduser'=> $id));
			}
			elseif($user->rol == 'tour'){
				DB::table('tours')->insert(array('iduser'=> $id));
			}
			elseif($user->rol == 'beach'){
				DB::table('beaches')->insert(array('iduser'=> $id));
			}
			elseif($user->rol == 'event'){
				DB::table('events')->insert(array('iduser'=> $id));
			}		
			elseif($user->rol == 'transportation'){
				DB::table('transportation')->insert(array('iduser'=> $id));
			}
			elseif($user->rol == 'doctor'){
				DB::table('doctors')->insert(array('iduser'=> $id));
			}
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
		if($user->rol == 'hotel'){
			DB::table('hotels')->where('iduser', '=', $id)->delete();
		}
		elseif($user->rol == 'restaurant'){
			DB::table('restaurants')->where('iduser', '=', $id)->delete();
		}
		elseif($user->rol == 'nightlife'){
			DB::table('nightlifes')->where('iduser', '=', $id)->delete();
		}
		elseif($user->rol == 'shopping'){
			DB::table('shoppings')->where('iduser', '=', $id)->delete();
		}
		elseif($user->rol == 'tour'){
			DB::table('tours')->where('iduser', '=', $id)->delete();
		}
		elseif($user->rol == 'beach'){
			DB::table('beaches')->where('iduser', '=', $id)->delete();
		}
		elseif($user->rol == 'event'){
			DB::table('events')->where('iduser', '=', $id)->delete();
		}
		elseif($user->rol == 'transportation'){
			DB::table('transportations')->where('iduser', '=', $id)->delete();
		}
		elseif($user->rol == 'doctor'){
			DB::table('doctors')->where('iduser', '=', $id)->delete();
		}

		$user->delete();
		// redirect
		Session::flash('message', 'Successfully deleted the user!');
		return Redirect::to('app/users');
	}

}