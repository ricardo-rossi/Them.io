<?php

class UsersController extends BaseController {
	
	// public function __construct() {
	// 	parent::__construct();
	// 	$this->beforeFilter('csrf', array('on'=>'post'));
	// }

	public function getSignup() 
	{
		if(Auth::guest()) 
		{
			return View::make('signup');
		}
		else 
		{
			return Redirect::to('/');			
		}
	}

	// public function postCreate() 
	// {
	// 	$validator = Validator::make(Input::all(), User::$rules_create);

	// 	if ($validator->passes()) {
	// 		$user = new User;
	// 		$user->firstname = Input::get('firstname');
	// 		$user->lastname = Input::get('lastname');
	// 		$user->telephone = Input::get('telephone');
	// 		$user->email = Input::get('email');
	// 		$user->password = Hash::make(Input::get('password'));
	// 		$user->city = Input::get('city');
	// 		$user->country = Input::get('country');
	// 		$user->state = Input::get('state');
	// 		$user->company = Input::get('company');
	// 		$user->org_type = Input::get('org_type');
	// 		$user->source = Input::get('source');
	// 		$user->used = Input::get('used', false);
	// 		$user->save(Input::all());

	// 		Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')));

 //      if(Auth::check())
 //      {
 //        $data = array(
 //            'firstname' => Auth::user()->firstname,
 //            'name' => Msg::get('name'),
 //            'email_support' => Msg::get('email_support'),
 //            'support_team' => Msg::get('support_team'),
 //            'domain' => Msg::get('domain'),
 //        );

 //        Mail::send('emails.signup', $data, function($message) {
 //           $message
 //            ->from(Msg::get('email_info'), Msg::get('name'))
 //            ->to(Auth::user()->email, Auth::user()->firstname . ' ' . Auth::user()->lastname)
 //            ->subject('Thank you for signing up with ' . Msg::get('name') . '!');
 //        });

 //    		return Redirect::route('account')
	// 				->with('message', 'Thank you for signing up ' . Input::get('firstname') );
	// 		}

	// 		return Redirect::route('login')
	// 			->with('status', 'Thank you for signing up. Please use your email and password below to sign in.');
	// 	}

	// 	return Redirect::route('signup')
	// 		->with('message', 'Something went wrong')
	// 		->withErrors($validator)
	// 		->withInput();
	// }

	public function getLogin() 
	{
		return View::make('login');
		//->with('backto', Input::get('r'));
	}

	public function postLogin() 
	{
		// redirect the user back to the intended page or defaultpage if there isn't one
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) 
		{
			$backto = '/';
			if(Input::has('backto')) 
			{
				$backto = Input::get('backto');
			}

			return Redirect::intended($backto)->with('message', 'Thanks for signing in');
		}

		return Redirect::route('login')->with('message', 'Your email/password combo was incorrect');
	}

	public function getLogout() 
	{
		Session::flush();
	
		Auth::logout();
	
		return Redirect::to('/');
	}
}