<?php
require 'vendor/autoload.php';

use GuzzleHttp\Post\PostFile;             
use Mailgun\Mailgun;
use Mail;
use User;
use Illuminate\Http\Request;
use \Swift_RfcComplianceException;

class EmailController extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmail()
    {	       
		
		$validation = Validator::make(Input::all(),[
			'senderName' =>' required', 
			'senderAddress' => 'required',
			'subject' => 'required',
			'message' => 'required'
		]);
		
		
		if($validation->fails()){
            $messages = $validation->messages();
            Session::flash('validation_messages', $messages);
            return Redirect::back()->withInput();
        }else{
			$mailMsg = new stdClass();
			$mailMsg->name	= Input::get('senderName');
			$mailMsg->senderAddress	= Input::get('senderAddress');
			$mailMsg->senderAddress = trim($mailMsg->senderAddress);
	//		$mailMsg->recipientName	= Input::get('recipientName');
	//		$mailMsg->recipientEmail	= Input::get('recipientEmail');
	//		$mailMsg->recipientEmail = trim($mailMsg->recipientEmail);
			$mailMsg->subject	= Input::get('subject');
			$mailMsg->message	= Input::get('message');

			//Your private API and domain credentials, respectively
			$mg = new Mailgun(getenv('MAILGUN_SECRET'));
			$domain = getenv('MAILGUN_DOMAIN');
			
			//format sender's name/email:  'Their Name <theirEmail@mail.com>'
			$fromName = $mailMsg->name . ' <' . $mailMsg->senderAddress . '>';

			//Customize the email - self explanatory
			$mg->sendMessage($domain, array(
				'from'=> $fromName,
				'to'=> 'asperry712@gmail.com',		//replace with business email
				'subject' => $mailMsg->subject,
				'text' => $mailMsg->message
				)
			);
							
				
			Session::flash('message', 'Message Successfully Sent!'); 
			return Redirect::to('/home');   
 
		}
	}
	
}
