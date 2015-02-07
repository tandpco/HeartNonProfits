<?php

class ContactController extends BaseController {

	//Server Contact view::
	public function getContact(){
	        return View::make('pages.contact.contact');
	    }

        //Contact Form
        public function getContactUsForm(){

            //Get all the data and store it inside Store Variable
            $data = Input::all();

            //Validation rules
            $rules = array (
                'first_name' => 'required|alpha',
                'last_name' => 'required|alpha',
                'company' => 'required',
                'phone_number'=>'numeric|min:8',
                'email' => 'email',
            );

            //Validate data
            $validator  = Validator::make ($data, $rules);

            //If everything is correct than run passes.
            if ($validator -> passes()){

                //Send email using Laravel send function
                Mail::send('emails.hello', $data, function($message) use ($data)
                {
					//email 'From' field: Get users email add and name
                    $message->from($data['email'] , $data['first_name']);
					//email 'To' field: cahnge this to emails that you want to be notified.
					$message->to('josh@geostrategies.com', 'Josh')->cc('daniel@theoryandpractice.co', 'Dan')->subject('New Contact Request');

                });

                // Create File
                $fp = fopen(public_path().'/csv/contact-completions-'.date('m-y').'.csv', 'w');
                $formData = array(
                    $data['first_name'],
                    $data['last_name'],
                    $data['company'],
                    $data['phone_number'],
                    $data['email']
                );
                fputcsv($fp, $formData);

                fclose($fp);

                return View::make('pages.contact.contact-posted');
            }else{
				//return contact form with errors
                return Redirect::to('/contact')->withErrors($validator);
            }
        }
}
