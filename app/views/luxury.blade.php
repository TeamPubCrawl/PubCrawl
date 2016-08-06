@extends('layouts.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/tourroutes.css">
@stop

<div class="text-center">
	<h1> Luxury Route </h1>
</div>
@section('content')

<div class="container text-center">	

<div class="column-left">
	<div class="text-center">
	<p>
		<h3>The Luxury Route</h3>
		<br>
		The Luxury tour is an excellent choice if you want to soak up the sights of the Pearl, then venture over the San Antonio River Walk past the Grotto to a relaxing outdoor pet-friendly bar that overlooks the San Antonio River Walk.
		<br><br>
		<img src="https://static.wixstatic.com/media/4a5e47_d4664f3213734a719d9b594b67acecae~mv2.jpg/v1/fill/w_568,h_373,al_c,q_80,usm_0.66_1.00_0.01/4a5e47_d4664f3213734a719d9b594b67acecae~mv2.jpg" alt="Luxury Route" style="width:600px;height:230px;">
		<br><br>
		
		<a class="btn btn-primary" href="{{action('ToursController@showBooking')}}" role="button">Book</a>
		
	</p>
	</div>
</div>

@stop

</div>
@section('footer')


@stop