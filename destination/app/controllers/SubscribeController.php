<?php

class SubscribeController extends BaseController {

	//Server Contact view::
	public function getSubscribe(){
	        return View::make('pages.contact.subscribe');
	    }

        //Contact Form
        public function getSubscribeForm(){

            //Get all the data and store it inside Store Variable
            $data = Input::all();

            //Validation rules
            $rules = array (
                'first_name' => 'required|alpha',
                'email' => 'required|email',
            );

            //Validate data
            $validator  = Validator::make ($data, $rules);

            //If everything is correct than run passes.
            if ($validator -> passes()){

                //Send email using Laravel send function
                Mail::send('emails.subscription', $data, function($message) use ($data)
                {
					//email 'From' field: Get users email add and name
                    $message->from($data['email'] , $data['first_name']);
					//email 'To' field: cahnge this to emails that you want to be notified.
					// $message->to('josh@geostrategies.com', 'Josh')->cc('')->subject('New Subscription');
                    $message->to('josh@geostrategies.com', 'Josh')->cc('daniel@theoryandpractice.co', 'Dan')->subject('New Subscription');

                });

                // Create File
                $fp = fopen(public_path().'/csv/form-completions-'.date('m-y').'.csv', 'w');
                $formData = array(
                    $data['first_name'],
                    $data['email']
                );
                fputcsv($fp, $formData);

                fclose($fp);
                

                return Redirect::back();
            }else{
				//return contact form with errors
                return Redirect::to('/subscribe')->withErrors($validator);
            }
        }
}
