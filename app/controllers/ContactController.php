<?php

class ContactController extends BaseController {
	
	public function showContactForm()
	{
		return View::make('contactUs');
	}

}
