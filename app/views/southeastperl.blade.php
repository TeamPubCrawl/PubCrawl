@extends('layouts.master')

@section('style')
	<link rel="stylesheet" type="text/css" href="/css/cyborg.css">
	<link rel="stylesheet" type="text/css" href="/css/route.css">
@stop

<div class="text-center">
	<h1> SOUTHEAST PEARL ROUTE </h1>
</div>
@section('content')

<div class="container text-center">	

	<div class="column-left">
		<div class="text-center">
			<div class="southeast">
				<p>
					<h3>SOUTH-EAST PERL ROUTE</h3>
					<br>
					LOOKING FOR A PEDAL ADVENTURE? THIS IS THE ROUTE FOR YOU!  A LONGER TRECK OF PEDALING OVER TO A NEW BEER GARDEN AND A PUB.  THIS IS THE CLASSIC BOOZE CRUISE!

					<br><br>
					<img src="https://static.wixstatic.com/media/4a5e47_09ba5e9199084b959f489209ff89cf75~mv2.jpg/v1/fill/w_308,h_317,al_c,q_80,usm_0.66_1.00_0.01/4a5e47_09ba5e9199084b959f489209ff89cf75~mv2.jpg" alt="Southeast Perl Route" style="height:400px;" >
					<br><br>
		
					<a class="btn btn-primary" href="{{action('ToursController@showBooking')}}" role="button">Book</a>
					<br><br>

				</p>
			</div>
		</div>
	</div>

@stop

</div>
@section('footer')


@stop