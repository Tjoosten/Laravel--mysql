<?php

	namespace App\Http\Controllers;

	class WelcomeController extends Controller {


		/**
		 * Show the application welcome screen to the user.
		 *
		 * @access public
		 * @link   / GET
		 * @return Response
		 */
		public function index() {
			return view('FrontPage');
		}

	}
