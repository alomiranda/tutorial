<?php

class AuthController extends BaseController {

	public function getLogin(){
		return View::make('auth.login'); 
	}

	public function postLogin(){

		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('password'),
		);

		if(Auth::attempt($credentials)){
			return "El usuario ha sido identificado correctamente";
		}
		else{
			return Redirect::back()->withInput();
		}
	}

	public function getLogout(){
		Auth::logout();

		return Redirect::to('/');
	}
}