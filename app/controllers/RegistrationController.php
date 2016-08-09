<?php

class RegistrationController extends \BaseController{

	/*
	 * ShowSignUpView:
	 * This function renders the sign up view which consists of
	 * a sign form.
	 */
	public function showSignUpView(){

		if(Auth::check()){
			return Redirect::to('/home');
		}

		return View::make('signup');

	}	

	/* 
	 * signUp(): Sign up form on the sign up view POSTS
	 * to this function. 
	 * This function creates a new user and redirects them to login. 
	 */
	public function signUp(){

		$validation = Validator::make(Input::all(),[
			'name'	=> 'required',
			'email' =>' required|unique:users', 
			'password' => 'required',
			'repassword' => 'required',
			
		]);

		if($validation->fails()){
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }

		$name = Input::get('name');
		$email = Input::get('email');
		$password = Input::get('password');
		$repassword = Input::get('repassword');


		try{

			User::create([
				'name' => $name,
				'email'	=> $email,
				'password'	=> Hash::make($password),
			]);

		}catch(Exception $e){

			//Errors Log 
			 Session::flash('error_message', 'Oops! Something is wrong!');
			return Redirect::back()->withInput();
		}


		Session::flash('success_message', 'Success! Thanks for Signing up!');
		return Redirect::to('/home');

	}

	/* Unused code
	

		// Code to send verification code
        Mail::send('emails.verify', $view_data, function ($message) use ($email_data) {
            $message->to($email_data['recipient'])
                ->subject($email_data['subject']);
        });

    */     
}
