<?php
 
	class UsersController extends BaseController {

		public function __construct() {
   			$this->beforeFilter('csrf', array('on'=>'post'));
   			$this->beforeFilter('auth', array('only'=>array('getAdmin', 'getDashboard', 'getRegister')));
		}

 		protected $layout = "main";

 		public function getRegister() {
   			$this->layout->content = View::make('users.register');
		}

		public function postCreate(){
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
 
   				return Redirect::to('users/admin')->with('message', 'Thanks for registering!');
   			} 
   			else {
      			return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();  
   			}
		}

		public function getLogin() {
   			$this->layout->content = View::make('users.login');
		}

		public function postSignin() {
      if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password'), 'rol'=>'admin'))) {
   				return Redirect::to('users/admin')->with('message', 'You are now logged in!');
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

		public function getAdmin() {
        $users = User::all();
    		$this->layout->content = View::make('users.index', array('users' => $users));
		}

		public function getDashboard() {
    		$this->layout->content = View::make('users.dashboard');
		}

		public function getLogout() {
   			Auth::logout();
   			return Redirect::to('users/login')->with('message', 'Your are now logged out!');
		}

    public function destroy($id){
      $user = User::find($id);
      $user->delete();

      Session::flash('message','Successfully deleted the user!');
      return Redirect::to('users/admin');
    }

    public function getEdit($id){
      $user = User::find($id);
      $this->layout->content = View::make('users.edit', array('user'=>$user));
    }

    public function edit(){
      return View::make('users/edit');
    }

    public function getView($id){
      $user = User::find($id);
      $this->layout->content = View::make('users.view', array('user'=>$user));
    }

    public function view(){

      return View::make('users/view');
    }

	}
?>