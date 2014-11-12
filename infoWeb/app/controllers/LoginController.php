<?php

use Illuminate\Routing\Controller;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /login
	 *
	 * @return Response
	 */
	public function index()
	{
        if(!Auth::check()) {
            return View::make('login');
        } else {
            return Redirect::route('admin');
        }
	}

	public function login() {
        $login = Input::get('username');
        $password = Input::get('password');

        if(Auth::attempt(['username' => $login, 'password' => $password])) {
            return Redirect::intended('admin');
        } else {
            return Redirect::route('login');
        }
    }

    public function logout() {
        if(Auth::check()) {
            Auth::logout();
        }

        return Redirect::route('login');
    }
}