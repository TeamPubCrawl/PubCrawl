<?php

class ToursController extends \BaseController {




public function showRoutes(){

		return View::make('tourroutes');
	}





public function PerlRoute(){

	return View::make('perl');

}


public function LuxuryRoute(){

	return View::make('luxury');

}

public function SoutheastRoute(){

	return View::make('southeastperl');

}


}