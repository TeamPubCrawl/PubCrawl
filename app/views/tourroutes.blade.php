@extends('layouts.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/tourroutes.css">
@stop

<div class="text-center">
	<h1> Tour Routes </h1>
</div>
@section('content')

<div class="container text-center">	

<div class="column-left">
	<div class="text-center col-md-4">
	<p>
		<h3>THE PEARL TOUR</h3>
		<br>
		The Pearl tour takes you in and around the Pearl Brewery area. great for the modern industrial sight seeing, tantalizing food stops, coffee shops, retail stores, and SA's favorite LOCAL bars.
		<br><br>
		<a class="btn btn-primary" href="{{action('ToursController@PerlRoute')}}" role="button">Route</a>
	</p>
</div>

<div class="column-center">
	<div class="text-center col-md-4">
		<p>
			<h3>THE LUXURY TOUR</h3>
			<br>
			Not only can you enjoy the beautiful Pearl area, we venture a bit south, past the Grotto, the riverwalk and art museum to Luxury.  A relaxing, laidback, unique outdoor food and brew spot. 
			<br><br>
			<a class="btn btn-primary" href="{{action('ToursController@LuxuryRoute')}}" role="button">Route</a>

		</p>
	</div>
</div>

<div class="column-right">
	<div class="text-center col-md-4">
		<p>
			<h3>SOUTHEAST PEARL TOUR</h3>
			<br>
			If you're looking for a tour emphasizing on a longer pedal adventure, this is the route for you! Enjoy the sights as we pedal the metal to a fun new beer garden and a hoppy pub.
			<br><br>
			<a class="btn btn-primary" href="{{action('ToursController@SoutheastRoute')}}" role="button">Route</a>
		</p>
	</div>
</div>

@stop

</div>
@section('footer')


@stop