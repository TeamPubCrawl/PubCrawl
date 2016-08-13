<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('home');
	}

	public function showConfirm(){
		return View::make('confirm');
	}

	public function showCreditCardForm(){

		return View::make('creditcard');
	}


	public function processPayment(){

		$stripe = Stripe::make();

		$charge = $stripe->charges()->create([
		    'customer' => 'cus_8tRDyEdPSC0jUO',
		    'currency' => 'USD',
		    'amount'   => 50.49,
		]);

		// return $charge;
		return Redirect::to('/confirm');

	}

}
