<?php
 
	class UsersController extends BaseController {

		public function __construct() {
      $this->beforeFilter('csrf', array('on'=>'post'));
      $this->beforeFilter('auth', array('only'=>array('index', 'getDashboard')));
  }

  protected $layout = "main";


  public function index()
  {
    $users = User::all();

    return View::make('users.index')
      ->with('users', $users);
  }

  public function getLogin() {
      $this->layout->content = View::make('users.login');
  }

  public function postSignin() {
      if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password'), 'rol'=>'admin'))) {
        return Redirect::to('users')->with('message', 'You are now logged in!');
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

	}
?>