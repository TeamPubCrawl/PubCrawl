<?php
require 'vendor/autoload.php';

use GuzzleHttp\Post\PostFile;             
use Mailgun\Mailgun;
use Mail;
use User;
use Illuminate\Http\Request;
use \Swift_RfcComplianceException;

class EventsController extends Controller{

	public function showForm()
	{
		return View::make('events');
	}

    /**
     * Send an e-mail reminder to the user.
     */
    public function sendEmail()
    {	       
		//enter required form info from POST
		$validation = Validator::make(Input::all(),[
			'senderName' =>' required', 
			'senderAddress' => 'required',
			'message' => 'required'
		]);
		
		
		if($validation->fails()){
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }else{
			
			//create a generic Object to instantiate with form info
			$mailMsg = new stdClass();
			$mailMsg->name	= Input::get('senderName');  //name of User sending the email
			$mailMsg->senderAddress	= Input::get('senderAddress'); //user's email, then trim
			$mailMsg->senderAddress = trim($mailMsg->senderAddress);
			$mailMsg->message	= Input::get('message'); //Text from the textarea input

			//Create Mailgun message with
			//Your private mailgun API and domain credentials, respectively
			$mg = new Mailgun(getenv('MAILGUN_SECRET'));
			$domain = getenv('MAILGUN_DOMAIN');
			
			//formats the sender's name/email from above info:  'Their Name <theirEmail@mail.com>'
			$fromName = $mailMsg->name . ' <' . $mailMsg->senderAddress . '>';

			//Customize the email - self explanatory
			$mg->sendMessage($domain, array(
				'from'=> $fromName,  				//formatted as above
				'to'=> 'asperry712@gmail.com',		//replace with business email once domain works
				'text' => $mailMsg->message
				)
			);
							
			//Throws a success message,accessed using the code below
			Session::flash('message', 'Message Successfully Sent!'); 
			return Redirect::to('/home');   
 
		}
	}
	
}
