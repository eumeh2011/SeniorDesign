<?php

namespace Controller;

class Home extends Base{

	public function login(){
		echo"home-login() called";
		//sign a returning user in
		//authenticate post data against user model, if exists return to user console
		//if not return to login page, flash "invlaid user"
	}
	public function signUp(){
		echo"home-sign up() called";
		//starting point for creating new user
		//create new User model, and then use the post data to create and save a new user
		// then grab that user info and display it on the user console

	}

	public function display(){
		//render home/ landing page
		//if not session active, render login.html
		$this->app->render('Login.html');
		//else render user console.html
	}

	public function test(){
		echo"<br>called test function from home<br>";
	}
}


?>