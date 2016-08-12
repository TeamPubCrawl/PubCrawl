@extends('layouts.master')
 <link rel='icon' type='image/png' href='https://static.wixstatic.com/media/4a5e47_8100cd1eee394c42a484f8093452b8c2~mv2_d_1800_1800_s_2.png/v1/fill/w_189,h_189,al_c,usm_0.66_1.00_0.01/4a5e47_8100cd1eee394c42a484f8093452b8c2~mv2_d_1800_1800_s_2.png' />

@section('title')
	<title>Local Crawler</title>
@stop

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/login.css">
	<link rel="stylesheet" type="text/css" href="/css/navbar.css">
@stop

<div class="text-center">

	<img src="https://static.wixstatic.com/media/4a5e47_8100cd1eee394c42a484f8093452b8c2~mv2_d_1800_1800_s_2.png/v1/fill/w_189,h_189,al_c,usm_0.66_1.00_0.01/4a5e47_8100cd1eee394c42a484f8093452b8c2~mv2_d_1800_1800_s_2.png
" alt="Logo" style="width:150px;height:150px;">


	<h1> Sign Up Now! </h1>
</div>

@section('navbar')
	@include('navbar')
@stop
<br>

@section('content')

	<div class="container">	
		<!--col 1 -->
		<div class="col-md-3">
		</div>

		<!--col 2 -->
		<div class="col-md-6 myform">

			@if(Session::has('error_message'))
				<div class="alert alert-danger" role="alert">	
				  {{Session::get('error_message')}}
				</div>
			@endif
			@if(Session::has('validation_messages'))
				<div class="alert alert-danger" role="alert">
					<h4>Oops! Something is wrong!</h4>
				  	@foreach(Session::get('validation_messages')->all() as $error)
				  		{{$error}}<br>
				  	@endforeach
				</div>
			@endif


			{{Form::open(['action'=> 'RegistrationController@signUp', 'method' => 'POST', 'class' => 'form-horizontal'])}}
			<div class="form-group">
			<br>
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					{{Form::text('name', null, [ 'placeholder' => 'Name', 'required', 'class' => 'form-control'])}}
				</div>	
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					{{ Form::email('email', null, [ 'placeholder' => 'Email', 'class' => 'form-control', 'required']) }}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					{{ Form::password("password" , [ 'placeholder' => 'Password', 'class' => 'form-control', 'required'])}}
				</div>	
			</div>	
			<div class="form-group">
				<label class="col-sm-2 control-label">Re-type Password</label>
				<div class="col-sm-10">
					{{ Form::password("repassword" , [ 'placeholder' => 'Re-type Password', 'class' => 'form-control', 'required'])}}
				</div>	
			</div>	
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				{{ Form:: submit('Sign Up', [ 'class' => 'btn btn-primary btn-block']) }}
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10 text-center">
				<p class="text-center">Already an account? <a href="/login" class="btn btn-link">Login</a></p>	
				
				</div>
			</div>

			{{Form::close()}}
		</div>

		<!--col 3 -->
		<div class="col-md-3">
		</div>	
	</div>
@stop
