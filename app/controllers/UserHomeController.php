<?php

class UserHomeController extends BaseController {


	public function getHome()
	{
		return View::make('editors.home');
	}

}