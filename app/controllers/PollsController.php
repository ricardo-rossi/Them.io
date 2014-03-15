<?php

class PollsController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function apiShow($uuid)
	{		
		//Clockwork::startEvent('event_name', 'Event description.');
		//Clockwork::info('Message text.');
		//Clockwork::info($poll);
		//Clockwork::endEvent('event_name');

		$poll = Poll::whereUuid($uuid)->first()->json; 
		return $poll;
	}

	public function show($uuid)
	{		
		$poll = Poll::whereUuid($uuid)->first(); 

		return View::make('poll')
    		->with('poll', $poll);
	}


	public function post($uuid)
	{
		$poll = Poll::whereUuid($uuid)->first(); 

		return View::make('poll_results')
    		->with('poll', $poll);

	}

}