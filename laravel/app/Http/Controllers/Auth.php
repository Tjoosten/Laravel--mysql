<?php

	namespace App\Http\Controllers;

	use App\User;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;

	use Illuminate\Http\Request;

	class Auth extends Controller {

		/**
		 * Try to login the user.
		 *
		 * @access public
		 * @link   POST /verifyLogin
		 * @return Response
		 */
		public function postLogin() {
			if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) {
				return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
			} else {
				return Redirect::to('users/login')
					->with('message', 'Your username/password combination was incorrect')
					->withInput();
			}
		}

		/**
		 * Input the register values to the database.
		 *
		 * @access public
		 * @link   POST /register
		 * @return response
		 */
		public function postRegister() {

		}
	}
