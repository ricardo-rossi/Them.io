<?php

//Auth::loginUsingId(1);

//$tld = substr(Request::root(), strrpos(Request::root(), ".")+1);

// ***********************
// PRIVATE ROUTES
// ***********************

Route::group(array('before' => array('auth')), function() 
{
	Route::get('/', array('as' => 'userhome', 'uses' => 'UserHomeController@getHome'));
});


// ***********************
// * PUBLIC ROUTES
// ***********************

if(Auth::guest())
{
	Route::get('/', function()
	{	
		return View::make('home');	
	});	
}


Route::get('/features', function() { return View::make('features');	});

Route::get('/faq', function() { return View::make('faq'); });

Route::get('/docs', function() { return View::make('docs');	});

Route::get('/blog', function() { return View::make('blog');	});


// ***********************
// AUTHENTICATION ROUTES
// ***********************

Route::get('/signup', 
	array('as' => 'signup', 'uses' => 'UsersController@getSignup'));

// Route::post('/signup', 
// 	array('as' => 'create', 'uses' => 'UsersController@postCreate'));

Route::get('/login', 
	array('as' => 'login', 'uses' => 'UsersController@getLogin'));

Route::post('/login', 'UsersController@postLogin');

Route::get('/logout', 
	array('as' => 'logout', 'uses' => 'UsersController@getLogout'));


// ***********************
// * API ROUTES
// ***********************


Route::get('polls/{uuid}', 'PollsController@apiShow');

Route::get('embed/{uuid}', 'PollsController@show');

Route::post('embed/{uuid}', 'PollsController@post');

Route::get('api/polls/{uuid}', function($uuid) {

	$poll = Poll::where('_id', $uuid)
		->select(['id','_id','title','subtitle'])->first();

	if($poll)
	{
		$poll->options = $poll->options()->select(['_id','label'])->get();
		unset($poll->id);
	}

	return $poll;
});