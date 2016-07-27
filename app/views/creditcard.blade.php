@extends('layouts.master')

@section('content')
	
	<h1>Buy For $10</h1>

	{{ Form::open(['id' => 'billing-form'])  }}
 
		


  <input type="submit" class="submit" value="Submit Payment">

  	<div class="payment-errors"></div>




	{{ Form::close()  }}




@stop

@section('footer')


@stop