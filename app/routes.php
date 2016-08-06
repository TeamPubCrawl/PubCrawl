<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


//Billing
Route::get('/buy', 'HomeController@showCreditCardForm');
Route::post('/buy', 'HomeController@processPayment');


//Booking
Route::get('/book', 'BookingController@showBooking');
Route::get('/buy','BookingController@BookCheckout');


//Tour Routes
Route::get('/routes', 'ToursController@showRoutes');
Route::get('/the-perl','ToursController@PerlRoute');
Route::get('/the-luxury','ToursController@LuxuryRoute');
Route::get('/southeast-perl','ToursController@SoutheastRoute');
Route::get('/book', 'ToursController@showBooking');
