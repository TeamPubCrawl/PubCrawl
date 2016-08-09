<?php

class BookingController extends \BaseController {




public function showBooking(){

	return View::make('/book');
}

public function BookCheckout(){

		return View::make('creditcard');
	}

}