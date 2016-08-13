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

//Confirm
Route::get('/confirm', 'HomeController@showConfirm');

//Home Controller
Route::get('/', 'HomeController@showHome');
Route::get('/home', 'HomeController@showHome');

//Authentication Controller
Route::get('/login', 'AuthenticationController@showLoginView');
Route::post('/login', 'AuthenticationController@loginUser');
Route::get('/logout', 'AuthenticationController@logout');

//Registration Controller
Route::get('/signup', 'RegistrationController@showSignUpView');
Route::post('/signup', 'RegistrationController@signUp');

//Billings
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

//Contact Us
Route::get('/contactUs', 'ContactController@showContactForm');
Route::post('/contactUs', 'EmailController@sendEmail');

//Special Events
Route::get('/events', 'EventsController@showForm');
Route::post('/events', 'EventsController@sendEmail');
