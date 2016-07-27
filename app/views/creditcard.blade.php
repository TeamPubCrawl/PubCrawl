@extends('layouts.master')

@section('content')
	
	<h1>Buy For $10</h1>

	{{ Form::open(['id' => 'billing-form'])  }}
 
		


  		<div class="form-row">
   			 <label>
      			<span>Card Number</span>
      			<input type="text" size="20" data-stripe="number">
    		</label>
 		 </div>

  		<div class="form-row">
    		<label>
      			<span>Expiration (MM/YY)</span>
      				<input type="text" size="2" data-stripe="exp_month">
   			 </label>
   		 <span> / </span>
    		<input type="text" size="2" data-stripe="exp_year">
  		</div>

  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-stripe="cvc">
    </label>
  </div>

 

<div class="form-row">
    <label>
      <span>Email Address:</span>
      <input type="email" id="email" name="email">
    </label>
  </div>

  <input type="submit" class="submit" value="Submit Payment">

  	<div class="payment-errors"></div>




	{{ Form::close()  }}




@stop

@section('footer')


@stop