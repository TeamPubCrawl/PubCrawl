@extends('layouts.master')



@section('content')
<div class="text-center">
	<h1> Book Your Tour </h1>

	<div id="bookingjs"></div> <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" defer></script> <script src="//cdn.timekit.io/booking-js/v1/booking.min.js" defer></script> <script>window.timekitBookingConfig = { widgetId: '424a97d6-5473-4d52-9541-733b114bd647' }</script>

	<br><br>
	<a class="btn btn-primary" href="{{action('BookingController@BookCheckout')}}" role="button">Proceed To Check-out</a>
</div>
@stop


@footer


@stop